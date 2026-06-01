// Hide/remove the page loader once the full window has loaded
window.addEventListener('load', () => {
  const loader = document.getElementById('page-loader');
  if (!loader) return;
  loader.classList.add('opacity-0');
  setTimeout(() => loader.remove(), 600);
});

document.addEventListener('DOMContentLoaded', () => {

  /* =========================
     🔷 HERO SLIDER
  ========================= */
  const HeroSlider = (() => {
    const total = 2;
    let current = 0;
    let timer = null;

    function goToSlide(n) {
      document.getElementById('slide-' + current)?.classList.remove('active');
      document.querySelectorAll('.dot')[current]?.classList.remove('active');

      current = (n + total) % total;

      document.getElementById('slide-' + current)?.classList.add('active');
      document.querySelectorAll('.dot')[current]?.classList.add('active');

      document.getElementById('counter').textContent =
        String(current + 1).padStart(2,'0') + ' / ' + String(total).padStart(2,'0');

      const slideNum = document.getElementById('slideNum');
        if (slideNum) {
          slideNum.innerHTML =
            String(current + 1).padStart(2,'0') +
            ' <span class="text-white/25">/ ' + String(total).padStart(2,'0') + '</span>';
        }

      resetProgress();
    }

    function changeSlide(dir) {
      goToSlide(current + dir);
    }

    function resetProgress() {
      const bar = document.getElementById('progressBar');
      if (!bar) return;

      bar.classList.remove('running');
      bar.style.width = '0%';

      void bar.offsetWidth;

      bar.classList.add('running');
      bar.style.width = '100%';

      clearInterval(timer);
      timer = setInterval(() => goToSlide(current + 1), 5000);
    }

    function init() {
      document.addEventListener('keydown', e => {
        if (e.key === 'ArrowLeft') changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
      });

      resetProgress();
    }

    return { init, changeSlide, goToSlide };
  })();


  /* =========================
     🔷 SERVICE SLIDER
  ========================= */
  const ServiceSlider = (() => {
  const TOTAL_CARDS = 4;
  let current = 0;
  let timer = null;

  const dotsEl = document.getElementById('dots');
  const track = document.getElementById('track');
  const viewport = document.getElementById('viewport');

  const VISIBLE = () => window.innerWidth < 768 ? 1 : 2;
  const totalSteps = () => TOTAL_CARDS - VISIBLE();

  function buildDots() {
    if (!dotsEl) return;

    dotsEl.innerHTML = '';
    const n = totalSteps() + 1;

    for (let i = 0; i < n; i++) {
      const d = document.createElement('div');
      d.className = 'prog-dot' + (i === current ? ' active' : '');
      d.onclick = () => goTo(i);
      dotsEl.appendChild(d);
    }
  }

  function updateDots() {
    dotsEl?.querySelectorAll('.prog-dot').forEach((d, i) => {
      d.classList.toggle('active', i === current);
    });
  }

  function getCardWidth() {
    if (!track) return 0;
    const card = track.querySelector('.service-card');
    if (!card) return 0;
    return card.offsetWidth + 32;
  }

  function updateTrack() {
    if (!track) return;
    track.style.transform = `translateX(-${current * getCardWidth()}px)`;
  }

  function updateButtons() {
    const prev = document.getElementById('prevBtn');
    const next = document.getElementById('nextBtn');

    if (prev) prev.disabled = current === 0;
    if (next) next.disabled = current >= totalSteps();
  }

  function goTo(n) {
    current = Math.max(0, Math.min(n, totalSteps()));
    updateTrack();
    updateButtons();
    updateDots();
    restartAuto(); // 🔥 restart timer on manual action
  }

  function slide(dir) {
    goTo(current + dir);
  }

  /* 🔁 AUTO SLIDE */
  function startAuto() {
    stopAuto();
    timer = setInterval(() => {
      if (current >= totalSteps()) {
        goTo(0); // loop back
      } else {
        goTo(current + 1);
      }
    }, 2000); // ⏱️ change speed here
  }

  function stopAuto() {
    clearInterval(timer);
  }

  function restartAuto() {
    stopAuto();
    startAuto();
  }

  function init() {
    buildDots();
    updateButtons();
    startAuto();

    window.addEventListener('resize', () => {
      buildDots();
      goTo(Math.min(current, totalSteps()));
    });

    // 👉 Pause on hover (important UX)
    if (viewport) {
      viewport.addEventListener('mouseenter', stopAuto);
      viewport.addEventListener('mouseleave', startAuto);
    }

    // 👉 Swipe support
    if (viewport) {
      let touchStartX = 0;

      viewport.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
        stopAuto();
      }, { passive: true });

      viewport.addEventListener('touchend', e => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) slide(diff > 0 ? 1 : -1);
        startAuto();
      });
    }
  }

  return { init, slide };
})();


  /* =========================
     🔷 MENU SYSTEM
  ========================= */
  const Menu = (() => {

    function toggleServices() {
      const panel = document.getElementById('megaPanel');
      const chevron = document.getElementById('servicesChevron');
      const trigger = document.getElementById('servicesTrigger');

      if (!panel) return;

      const isOpen = panel.classList.contains('open');

      panel.classList.toggle('open');
      if (chevron) chevron.style.transform = isOpen ? '' : 'rotate(180deg)';
      if (trigger) trigger.classList.toggle('active', !isOpen);
    }

    function toggleMobile() {
      document.getElementById('mobileMenu')?.classList.toggle('hidden');
      document.getElementById('hamburgerIcon')?.classList.toggle('hidden');
      document.getElementById('closeIcon')?.classList.toggle('hidden');
    }

    function toggleMobAcc(id) {
      const content = document.getElementById(id);
      if (!content) return;

      const btn = content.previousElementSibling;
      const isOpen = content.classList.contains('open');

      document.querySelectorAll('.mob-acc-content.open').forEach(el => {
        el.classList.remove('open');
        el.previousElementSibling?.classList.remove('open');
      });

      if (!isOpen) {
        content.classList.add('open');
        btn?.classList.add('open');
      }
    }

   function init() {
  document.addEventListener('click', e => {
    try {
      if (!e.target.closest('#servicesDropdown')) {
        document.getElementById('megaPanel')?.classList.remove('open');
        const chev = document.getElementById('servicesChevron');
        if (chev) chev.style.transform = '';
        document.getElementById('servicesTrigger')?.classList.remove('active');
      }
    } catch (err) {
      console.warn('Menu click error:', err);
    }
  });
}

    return { init, toggleServices, toggleMobile, toggleMobAcc };
  })();


  /* =========================
     🚀 INITIALIZE ALL
  ========================= */
  HeroSlider.init();
  ServiceSlider.init();
  Menu.init();


  /* =========================
     🌐 GLOBAL ACCESS (for HTML onclick)
  ========================= */
  window.HeroSlider = HeroSlider;
  window.ServiceSlider = ServiceSlider;
  window.Menu = Menu;

});


//accordion
(function () {
  const accItems = document.querySelectorAll('.accordion-item');
  if (!accItems.length) return;

  accItems.forEach((item, index) => {
    const header = item.querySelector('.accordion-header');
    const content = item.querySelector('.accordion-content');

    if (index === 0) {
      item.classList.add('open');
      content.classList.remove('hidden');
    } else {
      content.classList.add('hidden');
    }

    header.addEventListener('click', () => {
      if (item.classList.contains('open')) return;

      accItems.forEach(i => {
        i.classList.remove('open');
        i.querySelector('.accordion-content').classList.add('hidden');
      });

      item.classList.add('open');
      content.classList.remove('hidden');
    });
  });
})();

  //Testimonial
   const testimonials = [
    {
      text: "Our team contacted Allianze Digital during a crucial transition in our operations. Their expert BPO team exceeded our expectations. They have a seamless way of communication from the beginning, and the data accuracy was impressive. Thanks to Allianze Digital, the best bpo agency in UK, we now experience a quick turnaround time and mitigated overhead costs.",
      stars: 5,
      name: "David Smith",
      role: "Director",
      avatarBg: "bg-custom-blue-deep"
    },
    {
      text: "We were struggling to strengthen our digital footprint until Allianze Digital stepped in. Their team revamped our entire digital marketing strategy, including SEO, PPC, and social media. Within three months, we had a 40% increase in qualified leads. The digital marketing team at Allianze Digital is truly efficient. Highly recommended.",
      stars: 5,
      name: "Sarah Johnson",
      role: "CEO",
      avatarBg: "bg-teal-700"
    },
    {
      text: "Visual presentation is everything to us, as a fashion retailer. Hiring Allianze Digital for our image editing is the best decision we have ever made. Now, our product images have a whole new level of polish. Their focus on colour, clarity, and lighting made our catalog look world-class.",
      stars: 5,
      name: "Michael Chen",
      role: "VP of Operations",
      avatarBg: "bg-violet-700"
    },
    {
      text: "We have partnered with Allianze Digital to build a custom inventory management platform for our logistics company. Within the agreed timeline, we received a well-structured, scalable system that seamlessly integrates with our current systems. The development team at Allianze Digital was technically sharp and always available for tweaks and updates.",
      stars: 5,
      name: "Priya Nair",
      role: "Founder",
      avatarBg: "bg-amber-700"
    },
   
  ];

  const track    = document.getElementById('testiTrack');
  const viewport = document.getElementById('testiViewport');
  const dotsWrap = document.getElementById('testiDots');
  const prevBtn  = document.getElementById('testiPrevBtn');
  const nextBtn  = document.getElementById('testiNextBtn');

  let current = 0;
  let autoplayTimer;

  // ── Touch / Mouse swipe state ──────────────────────────────────────
  let dragStartX = 0;
  let dragCurrentX = 0;
  let isDragging = false;

  function getVisible() { return window.innerWidth < 768 ? 1 : 2; }

  function renderCards() {
    track.innerHTML = '';
    testimonials.forEach(t => {
      const initials = t.name.split(' ').map(w => w[0]).join('');
      const card = document.createElement('div');
      const vis = getVisible();
      card.className = [
        'flex-none bg-white rounded-2xl border border-gray-200 shadow-sm p-7',
        'flex flex-col hover:shadow-lg transition-shadow duration-300 pointer-events-none',
        vis === 1 ? 'w-full' : 'w-[calc(50%-12px)]'
      ].join(' ');
      card.innerHTML = `
        <p class="text-5xl leading-none text-custom-blue-light font-serif mb-2 select-none">"</p>
        <p class="text-custom-text-content text-sm leading-relaxed flex-1 mb-6">${t.text}</p>
        <div class="text-custom-orange text-base tracking-widest mb-4">${'★'.repeat(t.stars)}${'☆'.repeat(5-t.stars)}</div>
        <div class="h-px bg-gray-100 mb-4"></div>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full ${t.avatarBg} text-white font-bold text-sm flex items-center justify-center flex-shrink-0">${initials}</div>
          <div>
            <p class="font-bold text-custom-text-primary text-sm">${t.name}</p>
            <p class="text-custom-text-secondary text-xs mt-0.5">${t.role}</p>
          </div>
        </div>`;
      track.appendChild(card);
    });
  }

  function renderDots() {
    dotsWrap.innerHTML = '';
    const total = testimonials.length - getVisible() + 1;
    for (let i = 0; i < total; i++) {
      const dot = document.createElement('button');
      dot.className = 'testi-dot' + (i === current ? ' active' : '');
      dot.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(dot);
    }
  }

  function updateDots() {
    dotsWrap.querySelectorAll('.testi-dot').forEach((d, i) => {
      d.classList.toggle('active', i === current);
    });
  }

  function slideWidth() {
    const card = track.querySelector('div');
    return card ? card.offsetWidth + 24 : 0;
  }

  function goTo(index, animate = true) {
    const max = testimonials.length - getVisible();
    current = Math.max(0, Math.min(index, max));
    if (!animate) track.style.transition = 'none';
    track.style.transform = `translateX(-${current * slideWidth()}px)`;
    if (!animate) requestAnimationFrame(() => track.style.transition = '');
    updateDots();
  }

  function next() { goTo(current >= testimonials.length - getVisible() ? 0 : current + 1); }
  function prev() { goTo(current <= 0 ? testimonials.length - getVisible() : current - 1); }

  function startAutoplay() {
    clearInterval(autoplayTimer);
    autoplayTimer = setInterval(next, 4000);
  }

  // ── Button handlers ────────────────────────────────────────────────
  nextBtn.addEventListener('click', () => { next(); startAutoplay(); });
  prevBtn.addEventListener('click', () => { prev(); startAutoplay(); });

  // ── Touch swipe ────────────────────────────────────────────────────
  viewport.addEventListener('touchstart', e => {
    dragStartX = e.touches[0].clientX;
    isDragging = true;
    clearInterval(autoplayTimer);
    track.style.transition = 'none';
  }, { passive: true });

  viewport.addEventListener('touchmove', e => {
    if (!isDragging) return;
    dragCurrentX = e.touches[0].clientX;
    const diff = dragCurrentX - dragStartX;
    track.style.transform = `translateX(${-current * slideWidth() + diff}px)`;
  }, { passive: true });

  viewport.addEventListener('touchend', () => {
    if (!isDragging) return;
    isDragging = false;
    track.style.transition = '';
    const diff = dragCurrentX - dragStartX;
    if (diff < -50) next();
    else if (diff > 50) prev();
    else goTo(current);
    startAutoplay();
  });

  // ── Mouse drag swipe ───────────────────────────────────────────────
  viewport.addEventListener('mousedown', e => {
    dragStartX = e.clientX;
    dragCurrentX = e.clientX;
    isDragging = true;
    clearInterval(autoplayTimer);
    track.style.transition = 'none';
    e.preventDefault();
  });

  window.addEventListener('mousemove', e => {
    if (!isDragging) return;
    dragCurrentX = e.clientX;
    const diff = dragCurrentX - dragStartX;
    track.style.transform = `translateX(${-current * slideWidth() + diff}px)`;
  });

  window.addEventListener('mouseup', () => {
    if (!isDragging) return;
    isDragging = false;
    track.style.transition = '';
    const diff = dragCurrentX - dragStartX;
    if (diff < -50) next();
    else if (diff > 50) prev();
    else goTo(current);
    startAutoplay();
  });

  // ── Resize ─────────────────────────────────────────────────────────
  window.addEventListener('resize', () => {
    current = 0;
    renderCards();
    renderDots();
    goTo(0, false);
  });

  renderCards();
  renderDots();
  goTo(0, false);
  startAutoplay();


  (function () {
  // ── Data ────────────────────────────────────────────────────────────
  const STRAT_DATA = [
    {
      icon: `<svg class="w-14 h-14 text-custom-blue-deep" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11 4a7 7 0 100 14A7 7 0 0011 4zm10 10l-3-3"/><circle cx="11" cy="11" r="4" stroke="currentColor" stroke-width="1.5" fill="none"/></svg>`,
      title: "Practical Know-How",
      text: "When you outsource to Allianze Digital, you are not just getting another vendor; you are teaming up with people who understand how to get work done right. From data handling to customer support, we bring clarity, consistency, and results to the table. That is exactly why we are considered the best BPO agency in UK. Companies trust us because we take ownership, stay sharp, and focus on what actually matters."
    },
    {
      icon: `<svg class="w-14 h-14 text-custom-blue-deep" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 1.343-4 3s1.79 3 4 3 4 1.343 4 3-1.79 3-4 3m0-18v2m0 16v2"/></svg>`,
      title: "Real Savings, Real Value",
      text: "Outsourcing should not feel like a compromise, and with us, it never does. We help businesses cut down on operational costs while keeping the work quality top-tier. Partnering with the best BPO outsourcing company in UK means you can scale back expenses without losing control or performance. It is not just about saving money, it’s about using it wisely, and we help you do just that."
    },
    {
      icon: `<svg class="w-14 h-14 text-custom-blue-deep" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>`,
      title: "Support That Fits Around You",
      text: "Some providers make you adjust to their way of working, but we do the opposite. At Allianze Digital, we listen first and build our support around your systems, your time zones, and your communication style. That is one of the many reasons we have become the best BPO agency in UK for businesses that value flexibility and quick response without chasing follow-ups or sitting in long queues."
    },
    {
      icon: `<svg class="w-14 h-14 text-custom-blue-deep" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8z"/></svg>`,
      title: "Built to Grow With You",
      text: "Whether you are just starting out or expanding fast, we can adjust to your pace. Our services scale with your needs, helping you add resources without adding headaches. You won’t need to worry about hiring or training; we have got that covered. As the best BPO outsourcing company in UK, we keep things flexible, so your business can grow without tripping over its own systems."
    },
    {
      icon: `<svg class="w-14 h-14 text-custom-blue-deep" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>`,
      title: "A Standard of Work You Can Count On",
      text: "With Allianze Digital, you get more than just tasks checked off. We put care and consistency into every detail, and our clients notice. This reputation for getting things right is what places us among the best BPO agencies in UK. We do not aim to impress; we aim to deliver. That is why businesses stay with us long-term. We earn trust one job at a time."
    },
  ];

  // ── DOM refs ────────────────────────────────────────────────────────
  const stratTrack    = document.getElementById('stratTrack');
  const stratViewport = document.getElementById('stratViewport');
  const stratDots     = document.getElementById('stratDots');
  const stratPrev     = document.getElementById('stratPrevBtn');
  const stratNext     = document.getElementById('stratNextBtn');

  let stratCurrent = 0;
  let stratTimer;
  let stratDragStartX = 0;
  let stratDragCurrentX = 0;
  let stratDragging = false;

  // ── Helpers ─────────────────────────────────────────────────────────
  function stratGetVisible() { return window.innerWidth < 768 ? 1 : 2; }

  function stratSlideWidth() {
    const card = stratTrack.querySelector('.strat-card');
    return card ? card.offsetWidth + 32 : 0; // 32 = gap-8
  }

  function stratRenderCards() {
    stratTrack.innerHTML = '';
    const vis = stratGetVisible();
    STRAT_DATA.forEach(s => {
      const card = document.createElement('div');
      card.className = [
        'strat-card flex-none bg-white rounded-2xl shadow-lg p-8',
        'flex flex-col transition-shadow duration-300 hover:shadow-xl',
        vis === 1 ? 'w-full' : 'w-[calc(50%-16px)]'
      ].join(' ');
      card.innerHTML = `
        <div class="w-16 h-16 bg-custom-blue-light rounded-2xl flex items-center justify-center mb-6">${s.icon}</div>
        <h3 class="text-2xl font-bold text-custom-blue-navy mb-4">${s.title}</h3>
        <p class="text-custom-text-content text-sm leading-relaxed">${s.text}</p>
      `;
      stratTrack.appendChild(card);
    });
  }

  function stratRenderDots() {
    stratDots.innerHTML = '';
    const total = STRAT_DATA.length - stratGetVisible() + 1;
    for (let i = 0; i < total; i++) {
      const dot = document.createElement('button');
      dot.className = 'strat-dot' + (i === stratCurrent ? ' strat-dot--active' : '');
      dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
      dot.addEventListener('click', () => stratGoTo(i));
      stratDots.appendChild(dot);
    }
  }

  function stratUpdateDots() {
    stratDots.querySelectorAll('.strat-dot').forEach((d, i) => {
      d.classList.toggle('strat-dot--active', i === stratCurrent);
    });
  }

  function stratGoTo(index, animate = true) {
    const max = STRAT_DATA.length - stratGetVisible();
    stratCurrent = Math.max(0, Math.min(index, max));
    if (!animate) stratTrack.style.transition = 'none';
    stratTrack.style.transform = `translateX(-${stratCurrent * stratSlideWidth()}px)`;
    if (!animate) requestAnimationFrame(() => { stratTrack.style.transition = ''; });
    stratUpdateDots();
  }

  function stratGoNext() { stratGoTo(stratCurrent >= STRAT_DATA.length - stratGetVisible() ? 0 : stratCurrent + 1); }
  function stratGoPrev() { stratGoTo(stratCurrent <= 0 ? STRAT_DATA.length - stratGetVisible() : stratCurrent - 1); }

  function stratStartAutoplay() {
    clearInterval(stratTimer);
    stratTimer = setInterval(stratGoNext, 4000);
  }

  // ── Button events ───────────────────────────────────────────────────
  stratNext.addEventListener('click', () => { stratGoNext(); stratStartAutoplay(); });
  stratPrev.addEventListener('click', () => { stratGoPrev(); stratStartAutoplay(); });

  // ── Touch swipe ─────────────────────────────────────────────────────
  stratViewport.addEventListener('touchstart', e => {
    stratDragStartX = e.touches[0].clientX;
    stratDragging = true;
    clearInterval(stratTimer);
    stratTrack.style.transition = 'none';
  }, { passive: true });

  stratViewport.addEventListener('touchmove', e => {
    if (!stratDragging) return;
    stratDragCurrentX = e.touches[0].clientX;
    const diff = stratDragCurrentX - stratDragStartX;
    stratTrack.style.transform = `translateX(${-stratCurrent * stratSlideWidth() + diff}px)`;
  }, { passive: true });

  stratViewport.addEventListener('touchend', () => {
    if (!stratDragging) return;
    stratDragging = false;
    stratTrack.style.transition = '';
    const diff = stratDragCurrentX - stratDragStartX;
    if (diff < -50) stratGoNext();
    else if (diff > 50) stratGoPrev();
    else stratGoTo(stratCurrent);
    stratStartAutoplay();
  });

  // ── Mouse drag swipe ────────────────────────────────────────────────
  stratViewport.addEventListener('mousedown', e => {
    stratDragStartX = e.clientX;
    stratDragCurrentX = e.clientX;
    stratDragging = true;
    clearInterval(stratTimer);
    stratTrack.style.transition = 'none';
    e.preventDefault();
  });

  window.addEventListener('mousemove', e => {
    if (!stratDragging) return;
    stratDragCurrentX = e.clientX;
    const diff = stratDragCurrentX - stratDragStartX;
    stratTrack.style.transform = `translateX(${-stratCurrent * stratSlideWidth() + diff}px)`;
  });

  window.addEventListener('mouseup', () => {
    if (!stratDragging) return;
    stratDragging = false;
    stratTrack.style.transition = '';
    const diff = stratDragCurrentX - stratDragStartX;
    if (diff < -50) stratGoNext();
    else if (diff > 50) stratGoPrev();
    else stratGoTo(stratCurrent);
    stratStartAutoplay();
  });

  // ── Resize ───────────────────────────────────────────────────────────
  window.addEventListener('resize', () => {
    stratCurrent = 0;
    stratRenderCards();
    stratRenderDots();
    stratGoTo(0, false);
  });

  // ── Init ─────────────────────────────────────────────────────────────
  stratRenderCards();
  stratRenderDots();
  stratGoTo(0, false);
  stratStartAutoplay();
})();


//faq
document.addEventListener('DOMContentLoaded', () => {
(function () {
  const faqWrapper = document.querySelector("#faqx-section");
  if (!faqWrapper) return;

  const faqItems = faqWrapper.querySelectorAll(".faqx-item");

  faqItems.forEach((item) => {
    const btn = item.querySelector(".faqx-question");
    const answer = item.querySelector(".faqx-answer");
    const icon = item.querySelector(".faqx-icon");

    btn.addEventListener("click", () => {
      const isOpen = answer.style.maxHeight;

      faqItems.forEach((i) => {
        i.querySelector(".faqx-answer").style.maxHeight = null;
        i.querySelector(".faqx-icon").textContent = "+";
      });

      if (!isOpen) {
        answer.style.maxHeight = answer.scrollHeight + "px";
        icon.textContent = "−";
      }
    });
  });

  // open first
  const first = faqItems[0];
  if (first) {
    const ans = first.querySelector(".faqx-answer");
    const icon = first.querySelector(".faqx-icon");
    ans.style.maxHeight = ans.scrollHeight + "px";
    icon.textContent = "−";
  }
})();
});

