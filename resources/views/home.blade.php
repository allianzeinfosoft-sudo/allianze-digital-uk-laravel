@extends('layouts/app')

@section('content')
<!-- Hero Section: Full-width background image with overlaid header and main CTA -->
<section id="section-hero" class="relative bg-cover bg-center text-white" style="background-image: url('{{ asset('assets/13eb3cb4eda05f25595b11eca2194127b70aafde.png') }}');">
     <div class="absolute inset-0 bg-black/10"></div>
     <!-- Header -->
     @include('layouts.navbar')
</section>
<!-- ========== HERO SLIDER ========== -->
<section class="relative w-full overflow-hidden" style="min-height:920px;">

  <!-- ── SLIDE 1 ── -->
  <div class="slide active" id="slide-0">
    <!-- BG image -->
    <img src="{{ asset('assets/slider-1.webp') }}" alt="allianze uk" class="absolute inset-0 w-full h-full image-fit"/>
    <!-- Gradient overlay -->
    <div class="absolute inset-0" style="background: linear-gradient(100deg, #0a122859 0%, #00000066 55%, rgb(0 0 0 / 15%) 100%)"></div>

    <!-- Content --> 
    <div class="relative z-10 max-w-7xl mx-auto px-6 flex items-center min-h-[920px]">
      <div class="max-w-xl slide-content">
        <!-- Badge -->
        <span class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-white/70 bg-white/10 border border-white/15 rounded-full px-4 py-1.5 mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-red-400 animate-pulse"></span>
          Trusted by 500+ businesses
        </span>
        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.05] drop-shadow-lg">
          Build Better,<br/>
          <span class="text-[#e63329]">Brand Smarter,</span><br/>
          and Operate Smoother
        </h2>
        <p class="mt-6 text-lg md:text-xl text-white/70 leading-relaxed max-w-md">
          Count on us to deliver more value — from data processing to digital transformation.
        </p>
        <div class="mt-9 flex flex-wrap gap-3">
          <a href="#" class="inline-block bg-[#e63329] text-white px-9 py-4 rounded-2xl text-base font-bold hover:bg-red-700 transition-colors shadow-lg shadow-red-900/30">Join Us</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ── SLIDE 2 ── -->
  <div class="slide" id="slide-1">
    <!-- BG image -->
    <img src="{{ asset('assets/slider-2.jpg') }}" alt="allianze digital office" class="absolute inset-0 w-full h-full object-cover"/>
    <!-- Gradient overlay (slightly different angle for variety) -->
    <div class="absolute inset-0" style="background: linear-gradient(100deg, #0a122859 0%, #00000066 55%, rgb(0 0 0 / 15%) 100%)"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 flex flex-col justify-center min-h-[920px]">
      <div class="max-w-xl slide-content">
        <!-- Badge -->
        <span class="inline-flex items-center gap-2 text-xs font-semibold tracking-widest uppercase text-white/70 bg-white/10 border border-white/15 rounded-full px-4 py-1.5 mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-red-400 animate-pulse"></span>
          End-to-end BPO solutions
        </span>
        <h2 class="text-5xl md:text-6xl lg:text-7xl font-black text-white leading-[1.05] drop-shadow-lg">
          Scale Fast<br/>
          <span class="text-[#e63329]">with Smart</span><br/>
          BPO Solutions
        </h2>
        <p class="mt-6 text-lg md:text-xl text-white/70 leading-relaxed max-w-md">
          From virtual accounting to remote engineering — your operations, expertly handled.
        </p>
        <div class="mt-9 flex flex-wrap gap-3">
          <a href="#" class="inline-block bg-[#e63329] text-white px-9 py-4 rounded-2xl text-base font-bold hover:bg-red-700 transition-colors shadow-lg shadow-red-900/30">Get Started</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ── CONTROLS ── -->
  <!-- Prev / Next arrows -->
  <button onclick="HeroSlider.changeSlide(-1)" class="absolute left-5 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center text-white transition-all ">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
  </button>
  <button onclick="HeroSlider.changeSlide(1)" class="absolute right-5 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-full bg-white/10 hover:bg-white/20 border border-white/20 flex items-center justify-center text-white transition-all ">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
  </button>

  <!-- Dots + slide counter -->
  <div class="absolute bottom-8 left-0 right-0 z-20 flex flex-col items-center gap-3">
    <div class="flex items-center gap-2" id="dots">
      <div class="dot active" onclick="HeroSlider.goToSlide(0)"></div>
      <div class="dot" onclick="HeroSlider.goToSlide(1)"></div>
    </div>
    <span class="text-white/40 text-xs font-medium tracking-widest" id="counter">01 / 02</span>
  </div>

  <!-- Progress bar -->
  <div class="absolute bottom-0 left-0 right-0 z-20 h-0.5 bg-white/10">
    <div class="progress-bar" id="progressBar" style="width:0%"></div>
  </div>

</section>

<!-- Why Us Section: Two-column layout with text and image -->
<section id="section-why-us" class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-16 items-center text-justify">
    <!-- Text Content -->
    <div>
      <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-4 py-2 rounded-full">Why Us</span>
      <h2 class="text-5xl font-bold text-custom-blue-deep mt-5">Your trusted experts</h2>
      <p class="text-custom-text-content mt-5 text-base leading-relaxed">
        At Allianze Digital, we take a grounded, results-driven approach to helping businesses run smarter, present better, and grow stronger. From streamlining operations with reliable business process services, to creating content that connects, editing visuals that sell, and building IT solutions that simply work, our services are designed to support your goals, not complicate them.
      </p>
      <p class="text-custom-text-content mt-5 text-base leading-relaxed">
       We are a trusted name among businesses looking for the best BPO agency in UK with our consistency and accuracy. We deliver efficient support each step of the way, even if you are looking to outsource routine processes or build a lasting brand online. Being a complete service provider, we are proud to be the best BPO outsourcing company in UK.
      </p>
      <p class="text-custom-text-content mt-5 text-base leading-relaxed"></p>
       We believe in custom solutions, clear communication, and delivering results you can measure. If you are looking for a long-term partner instead of a quick fix, we are the right fit for you.
      </p>
    </div>
    <!-- Image Content -->
    <div class="relative">
      <img src="{{ asset('assets/why-allianze.png') }}" alt="London Big Ben at sunset" class="rounded-3xl w-full h-auto">     
    </div>
  </div>
</section>

<!-- Services Section: Two-column grid for service cards -->
<section id="section-services" class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-end mb-12 gap-6">
      <div class="max-w-xl">
        <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-4 py-2 rounded-full">Services</span>
        <h2 class="text-4xl md:text-5xl font-bold text-custom-blue-deep mt-5 leading-tight">Your Goals, Enhanced<br class="hidden md:block"/> With Our Expertise</h2>
      </div>

      <!-- Controls -->
      <div class="flex items-center gap-4">
        <!-- Dots -->
        <div class="flex items-center gap-2" id="dots"></div>
        <!-- Prev -->
        <button id="prevBtn" onclick="ServiceSlider.slide(-1)" class="nav-btn w-11 h-11 rounded-full border-2 border-gray-300 flex items-center justify-center"
          disabled>
          <svg class="w-5 h-5 text-custom-blue-navy" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        <!-- Next -->
        <button id="nextBtn" onclick="ServiceSlider.slide(1)"
          class="nav-btn w-11 h-11 rounded-full border-2 border-gray-300 flex items-center justify-center">
          <svg class="w-5 h-5 text-custom-blue-navy" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Slider viewport -->
    <div class="overflow-hidden" id="viewport">
      <div class="cards-track" id="track">
        <!-- Card 1 -->
        <div class="service-card bg-custom-blue-dark text-white p-7 rounded-2xl shadow-xl">
          <div class="w-full h-64 rounded-2xl border-2 border-white/20 mb-8 overflow-hidden">
            <img src="{{ asset('assets/business-process.jpg') }}" alt="Business Process Services" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"/>
          </div>          
          <h3 class="text-2xl font-bold">Business Process Services</h3>
          <p class="mt-4 text-sm leading-relaxed text-white/65 text-justify">We believe that cutting expenses is not only the 
            core objective of outsourcing. It is also about adding value where it matters. Allianze Digital, 
            being the best BPO agency in UK, efficiently handles your time-consuming, back-office tasks with 
            accuracy. With our business process service, companies can focus on strategic growth while our 
            experts manage the rest. We guarantee accuracy, confidentiality, and accountability backed by 
            trained professionals and secure workflows. Our company is trusted not just for our work, but also 
            for the way we do it, and that is why we are recognised as the best BPO outsourcing company in UK.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="service-card bg-custom-blue-dark text-white p-7 rounded-2xl shadow-xl">
          <div class="w-full h-64 rounded-2xl border-2 border-white/20 mb-8 overflow-hidden">
            <img src="{{ asset('assets/digital-marketing.jpg') }}" alt="Digital Marketing" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"/>
          </div>          
          <h3 class="text-2xl font-bold">Digital Marketing</h3>
          <p class="mt-4 text-sm leading-relaxed text-white/65 text-justify">Allianze Digital offers unique and thoughtful 
            strategies instead of cookie-cutter campaigns. The digital marketing team we have operates with 
            fundamental business objectives in mind. Our experts tailor plans that connect with your audience 
            and deliver visible returns. The potential we have to balance creativity with data-backed executions 
            makes us the best bpo agency in UK. Our performance, insight, and a constant flow of qualified leads 
            that align with long-term objectives make businesses rely on Allianze Digital as the best bpo 
            outsourcing company in UK.
          </p>  
        </div>

        <!-- Card 3 -->
        <div class="service-card bg-custom-blue-dark text-white p-7 rounded-2xl shadow-xl">
          <div class="w-full h-64 rounded-2xl border-2 border-white/20 mb-8 overflow-hidden">
            <img src="assets/image-edit.jpg" alt="Engineering Services" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"/>
          </div>
          
          <h3 class="text-2xl font-bold">Image Editing</h3>
          <p class="mt-4 text-sm leading-relaxed text-white/65 text-justify">A professionally edited image can communicate 
            confidently and clearly. The image editing service we offer is personalised for businesses that 
            require visual consistency over print and digital platforms. Our expert image editors manage large 
            volumes of images for processes such as background removal, retouching, and colour correction 
            without compromising detail.  Our company has become the best BPO agency in UK for image 
            post-production. When brands require polished visuals without a lengthy turnaround, they choose 
            Allianze Digital.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="service-card bg-custom-blue-dark text-white p-7 rounded-2xl shadow-xl">
          <div class="w-full h-64 rounded-2xl border-2 border-white/20 mb-8 overflow-hidden">
            <img src="{{ asset('assets/it development.jpg') }}" alt="Virtual Accounting" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"/>
          </div>          
          <h3 class="text-2xl font-bold">IT Development Service</h3>
          <p class="mt-4 text-sm leading-relaxed text-white/65">The digital infrastructure of a company should 
            support its vision without slowing it down. We focus on building solutions that are scalable, 
            functional, and tailored to your business flow. Our expert developers associate closely with 
            clients for clarity at every stage. Being the best BPO agency in UK, we provide an accurate blend 
            of coding expertise and user-centric design for businesses looking for systems that bring a 
            powerful impact on daily operations. 
          </p>
        </div>
      </div><!-- /track -->
    </div><!-- /viewport -->

  </div>
</section>

<!-- Connect Section: Full-width banner with centered CTA -->
<section id="section-connect" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="relative bg-cover bg-center rounded-3xl py-24 text-center text-white" style="background-image: url('{{ asset('assets/71be37ed7d6abbe916aaf19e951baa48756f0be3.png') }}');">
      <div class="absolute inset-0 bg-black/40 rounded-3xl"></div>
      <div class="relative z-10 flex flex-col items-center p-4">
        <h2 class="text-5xl font-bold">Connect With US</h2>
        <p class="mt-5 max-w-3xl text-lg text-gray-200">Looking for the best BPO agency in UK to handle your processes? Our solutions can simplify your operations.</p>
        <a href="contact-us.html" class="mt-12 inline-block bg-custom-red-brand text-white px-8 py-3 rounded-2xl font-bold hover:bg-red-700">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<!-- Industries Section: Centered title with a grid of category tags -->
<section id="section-industries" class="bg-white py-16">
  <div class="max-w-5xl mx-auto">
    <!-- Section label (optional) -->
    <div class="mb-8 text-center">    
      <h2 class="text-4xl md:text-5xl font-bold text-custom-blue-deep mt-5 leading-tight">Industries We Serve</h2>
    </div>

    <!-- Pills grid -->
    <div class="flex flex-wrap justify-center gap-3">
      <!-- Technology (default active) -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="13" rx="2"/>
          <path d="M8 21h8M12 17v4"/>
        </svg>
        Technology
      </span>

      <!-- Travel -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Airplane icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17.8 19.2L16 11l3.5-3.5C21 6 21 4 19 2s-4 0-5.5 1.5L10 7 2 5.2l-1 1 6 4-2 2-4-1-1 1 3 2 2 3 1-1-1-4 2-2 4 6z"/>
        </svg>
        Travel
      </span>

      <!-- Real Estate -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Building icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 21V7l9-4 9 4v14"/><path d="M9 21V12h6v9"/><path d="M9 8h.01M15 8h.01M9 12h.01M15 12h.01"/>
        </svg>
        Real Estate
      </span>

      <!-- E-commerce -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Shopping cart icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/>
        </svg>
        E-commerce
      </span>

      <!-- Education -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Graduation cap icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c0 1.657 2.686 3 6 3s6-1.343 6-3v-5"/>
        </svg>
        Education
      </span>

      <!-- Financial -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Chart / Finance icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
        </svg>
        Financial
      </span>

      <!-- Manufacturing -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Factory / gear icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 20V10l6-5v5l6-5v5l6-5v10z"/><line x1="2" y1="20" x2="22" y2="20"/>
        </svg>
        Manufacturing
      </span>

      <!-- Retail -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Store / tag icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>
        </svg>
        Retail
      </span>

      <!-- Logistics -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Truck icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>
        </svg>
        Logistics
      </span>

      <!-- Insurance -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Shield icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          <path d="M9 12l2 2 4-4"/>
        </svg>
        Insurance
      </span>

      <!-- Healthcare -->
      <span class="industry-pill group flex items-center gap-2.5 px-5 py-3 rounded-full border-2 border-gray-200 bg-white text-brand-orange font-semibold text-sm transition-all duration-200 hover:bg-brand-red hover:border-brand-red hover:text-white hover:shadow-md">
        <!-- Cross / health icon -->
        <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
        </svg>
        Healthcare
      </span>

    </div>
  </div>
</section>

<!-- Case Study Section: Two-column layout with image and accordion -->
<section id="section-case-study" class="bg-white py-16">
  <div class="max-w-7xl mx-auto px-4">
    <!-- Heading (LEFT aligned, ABOVE grid) -->
    <div class="mb-12 max-w-2xl">
      <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-4 py-2 rounded-full">
        Case Study
      </span>

      <h2 class="text-4xl md:text-5xl font-bold text-custom-blue-deep mt-5 leading-tight">
        Your Goals, Enhanced With Our Expertise
      </h2>
    </div>
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-12 items-start">
      <!-- Image -->
      <img src="{{ asset('assets/10b4850e81ace3328e83810fc1c20407658c1d8d.png') }}" alt="Man working on documents" class="rounded-3xl w-full h-full object-cover">
      <!-- Accordion -->
      <div>
        <div class="space-y-4">
          <!-- Item 1 -->
          <div class="accordion-item bg-custom-blue-dark text-white rounded-lg p-6">
            <div class="accordion-header flex justify-between items-center cursor-pointer">
              <h3 class="text-xl font-bold">Simplifying Data Management for a UK Retail Chain</h3>
              <svg class="accordion-icon w-6 h-6 transition-all duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line class="vertical-line" x1="12" y1="5" x2="12" y2="19"></line>
              </svg>
            </div>
            <div class="accordion-content mt-6 space-y-6 text-base text-justify">
              <div>
                <h4 class="font-bold text-lg">Client Portfolio</h4>
                <p class="mt-2">A well-known retail chain handling thousands of daily transactions over 
                  online and offline platforms. They have more than 15 branches across the UK.
                </p>               
              </div>
              <div>
                <h4 class="font-bold text-lg">Requirement</h4>
                <p class="mt-2">The client was struggling with repeated errors, data duplication, and
                delays in inventory forecasting. Therefore, they are in need of a reliable solution 
                to manage large volumes of customer purchase data received from online platforms, 
                paper receipts, and point-of-sale systems.
                </p> 
              </div> 
              <div> 
                <h4 class="font-bold text-lg">Our Solution</h4> 
                <p class="mt-2">When they approached Allianze Digital, our experts developed a custom 
                  data processing workflow integrating:
                </p> 
                <ul class="mt-4 space-y-2 pl-5 list-disc marker:text-brand-red text-gray-200"> 
                  <li>Organised data entry and classification systems</li> 
                  <li>Automated detection rules for irregularities</li> 
                  <li>Batch validation to mitigate human error</li> 
                  <li>Structured digital storage for easy retrieval</li> 
                </ul> 
                <p class="mt-4">Also, we established quality checks for each stage to guarantee data 
                  consistency and accuracy.
                </p> 
              </div> 
              <div> 
                <h4 class="font-bold text-lg">Result</h4> 
                <p class="mt-2">With us, the client experienced:</p> 
                <ul class="mt-4 space-y-2 pl-5 list-disc marker:text-brand-red text-gray-200"> 
                  <li>40% reduction in processing errors</li> 
                  <li>18% enhancement in operational efficiency </li>
                  <li>Improved inventory management, leadietter restocking timelines</li> 
                  <li>Enhanced customer satisfaction eamless backend operations</li>
                </ul> 
              </div> 
            </div> 
          </div>

          <!-- Item 2 -->
          <div class="accordion-item bg-custom-blue-dark text-white rounded-lg p-6">
            <div class="accordion-header flex justify-between items-center cursor-pointer">
              <h3 class="text-xl font-bold">Boosting Online Presence for a Boutique Fashion Brand</h3> 
              <svg class="accordion-icon w-6 h-6 transition-all duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line class="vertical-line" x1="12" y1="5" x2="12" y2="19"></line>
              </svg>            
            </div>
            <div class="accordion-content hidden mt-6 space-y-6 text-base text-justify">
              <div> 
                <h4 class="font-bold text-lg">Client Portfolio</h4>
                <p class="mt-2">A popular fashion label in London, delivering unique, handmade clothing and 
                  accessories with a reliable customer base but limited digital presence.</p>
              </div>
              <div> 
                <h4 class="font-bold text-lg">Requirement</h4> 
                <p class="mt-2">The fashion label is required to extend its presence beyond the local market 
                  by enhancing its digital visibility and improving online sales through a robust marketing 
                  strategy.
                </p> 
              </div> 
              <div> 
                <h4 class="font-bold text-lg">Our Solution</h4> 
                <p class="mt-2">Allianze Digital crafted a comprehensive digital marketing campaign that 
                  included:
                </p> 
                <ul class="mt-4 space-y-2 pl-5 list-disc marker:text-brand-red text-gray-200"> 
                  <li>Website redesign for mobile optimization</li> 
                  <li>Targeted SEO strategy with location-based keywords</li> 
                  <li>Instagram and Facebook content planning with influencer tie-ups</li> 
                  <li>Email marketing and paid social ads for specific seasonal collections</li> 
                </ul> 
                <p class="mt-4">Also, we established quality checks for each stage to guarantee data 
                  consistency and accuracy.
                </p> 
              </div> 
              <div> 
                <h4 class="font-bold text-lg">Result</h4> 
                <p class="mt-2">With us, the client experienced:</p> 
                <ul class="mt-4 space-y-2 pl-5 list-disc marker:text-brand-red text-gray-200"> 
                  <li>150% surge in website traffic within 6 months</li>
                  <li>35% increase in sales conversions</li>
                  <li>Instagram follower count rose from 1,200 to over 9,000</li>
                  <li>Strong engagement with improved brand recall</li>
                </ul> 
              </div> 
            </div> 
          </div> 
        </div> 
      </div> 
    </div> 
  </div>      
</section>

<!-- Testimonials Section: Two-column grid of testimonial cards -->
<section id="section-testimonials" class="bg-gray-50 py-16 px-4 font-body overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-12 gap-8 items-start">

      <!-- Left: 4 cols -->
      <div class="col-span-12 md:col-span-4 md:sticky md:top-8">
        <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold text-sm px-4 py-2 rounded-full mb-5 tracking-wide">Testimonials</span>
        <h2 class="font-display text-4xl lg:text-5xl font-bold text-custom-blue-deep leading-tight mb-6">Hear it from<br>Our Clients!</h2>
        <p class="text-custom-text-secondary text-sm leading-relaxed mb-10">Stories from our clients who've experienced the difference firsthand.</p>

        <div class="flex gap-3">
          <button id="testiPrevBtn" aria-label="Previous testimonial" class="testi-nav-btn">&#8592;</button>
          <button id="testiNextBtn" aria-label="Next testimonial" class="testi-nav-btn">&#8594;</button>
        </div>

        <div id="testiDots" class="flex gap-2 mt-8"></div>
      </div>

      <!-- Right: 8 cols -->
      <div class="col-span-12 md:col-span-8">
        <div id="testiViewport" class="overflow-hidden cursor-grab active:cursor-grabbing select-none">
          <div id="testiTrack" class="flex gap-6 transition-transform duration-500 ease-in-out will-change-transform"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact Form Section: Form on a background image -->
<section id="section-contact-form" class="py-16 bg-contain bg-center" style="background-image: url('{{ asset('assets/ct-bg1.png') }}');">
  <div class="max-w-3xl mx-auto px-4 text-center">
    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-5 py-3 rounded-full">Get in touch!</span>
    <h2 class="text-5xl font-bold text-white mt-6">Want to be our next happy client?</h2>
    <form class="mt-12 space-y-5">
      <div class="grid sm:grid-cols-2 gap-5">
        <input type="text" placeholder="Your Name" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
        <input type="email" placeholder="Email" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
      </div>
      <input type="text" placeholder="Business Topic" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
      <textarea placeholder="Type Your Message" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary h-36"></textarea>
      <button type="submit" class="w-full bg-custom-red-dark text-white p-4 rounded-lg font-bold text-lg hover:bg-red-700">Submit Message</button>
    </form>
  </div>
</section>

<!-- Strategies Section: Two-column grid of info cards -->
<section id="section-strategies" class="bg-gray-50 py-16 font-body">
  <div class="max-w-7xl mx-auto px-4 text-center">

    <!-- Header -->
    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">Our Strategies</span>
    <h2 class="font-display text-4xl md:text-5xl font-bold text-custom-blue-deep mt-6 leading-tight">
      We Fine-Tune Your Success<br class="hidden md:block"> with Proven Strategies
    </h2>

    <!-- Carousel viewport -->
    <div id="stratViewport" class="mt-16 overflow-hidden cursor-grab active:cursor-grabbing select-none pb-5">
      <div id="stratTrack" class="flex gap-8 text-left transition-transform duration-500 ease-in-out will-change-transform"></div>
    </div>

    <!-- Bottom controls: dots + buttons -->
    <div class="mt-10 flex items-center justify-center gap-6">
      <button id="stratPrevBtn" class="strat-nav-btn" aria-label="Previous strategy">&#8592;</button>
      <div id="stratDots" class="flex items-center gap-2"></div>
      <button id="stratNextBtn" class="strat-nav-btn" aria-label="Next strategy">&#8594;</button>
    </div>

  </div>
</section>

<!-- FAQ Section: Two-column grid of accordion-style questions -->
<section id="faqx-section" class="bg-white py-16">
  <!-- Header -->
  <div class="max-w-7xl mx-auto ">
    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">FAQ</span>
    <h2 class="font-display text-4xl md:text-5xl font-bold text-custom-blue-deep mt-6 leading-tight">
      Frequently asked question
    </h2>
    <div class="md:flex gap-6 mt-16">    
      <!-- LEFT COLUMN -->
      <div class="flex flex-col gap-6 w-full">
        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">01. Do your services scale as the business grows?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, being the best BPO outsourcing company in UK, we offer scalable services that grow with your business. We scale our team and services while maintaining the quality. 
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">02. How do you ensure data security in your BPO services?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              At Allianze Digital, being the best BPO agency in UK, we make use of secure servers and follow stringent security protocols and industry regulations.           
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">03. Is it possible to outsource just a part of our operations to Allianze Digital?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Of course, we can take care of specific tasks, even if it is just document processing or full-cycle back-office support.          
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">04. Can you manage bulk volumes of data processing?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, as the best BPO outsourcing company in UK, we have an expert team that efficiently handles a high volume of data processing tasks with accuracy and quick delivery.          
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">05. What kinds of digital marketing strategies do you offer?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Our wide range of digital marketing services includes Search Engine Optimization (SEO), content marketing, and Social Media Management (SMM) that align with your goals.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">06 Is it possible to tailor your marketing strategy to any industry?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, we personalise each campaign of ours to align with your audience, goals, and industry trends.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">07. How can I monitor the progress of my campaigns?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Our team will keep you updated on the progress through detailed monthly reports with metrics including leads, traffic, conversion rates, and ad performance.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">08. What industries do you cater to in digital marketing?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              We have assisted clients from multiple verticals, including real estate, healthcare, ecommerce, education, and B2B sectors.
            </p>
          </div>
        </div>
      </div>    

      <!-- RIGHT COLUMN -->
      <div class="flex flex-col gap-6 w-full"> 
        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">09. Do you provide bulk image editing services?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, we can handle bulk images efficiently with consistent quality.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">10. Are your editing services ideal for online stores?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Absolutely, we have assisted numerous ecommerce brands in enhancing their product images for better sales and presentation.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">11. Do you offer custom editing styles?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, we will tailor the work as per your brand guidelines or editing preferences.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">12. Can you build custom websites from scratch?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, we develop responsive, SEO-friendly websites customised to your objectives and branding.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">13. How can I track the progress of development?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              We provide regular updates, prototypes, and review stages to guarantee the product matches your vision.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">14. Can you develop custom software for my firm?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              Yes, we provide end-to-end custom software development for desktop, mobile platforms, and web.
            </p>
          </div>
        </div>

        <div class="faqx-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqx-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">15. How can I contact Allianze Digital for assistance?</p>
            <span class="faqx-icon text-xl font-bold">+</span>
          </button>
          <div class="faqx-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">
              You can contact us through our website or email.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light rounded-2xl md:rounded-full p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-2xl md:text-3xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">Take the First step towards more innovative solutions with the best BPO agency in UK.</h2>
        <a href="#" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Contact us now</a>
      </div>
    </div>
  </div>
</section>

@endsection