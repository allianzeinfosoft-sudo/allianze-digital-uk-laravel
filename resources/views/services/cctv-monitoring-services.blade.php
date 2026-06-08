@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/cctv-bg1.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Reliable CCTV Monitoring Services That Keep Your Premises in Control
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Safeguard your premises with our smart CCTV monitoring services.
          </p>          
          <a href="{{ route('contact-us') }}" class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Intro Section: Image left, Text right (Calculator image) -->
<section id="intro" class="py-16 md:py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center ">
      <!-- Image Side -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden shadow-xl">
          <img src="{{ asset('assets/cctv-bg.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            In a time when security risks are increasing, having someone constantly watching over your property gives real peace of mind. At Allianze Digital, we offer dependable 24/7 monitoring services that do not miss a moment. Whether it's a retail outlet, a healthcare facility, or a business centre, we ensure you stay informed and protected, all day, every day.
            Our live surveillance solutions are designed to give you real-time updates and accurate alerts. But we do not just watch, we analyse, track, and report with clear documentation. With our Best Remote CCTV Monitoring BPO Services in UK, you get more than just footage; you get insights, prevention, and accountability.
            You do not need expensive hardware upgrades. Our team works with your existing setup and handles everything remotely. It is cost-effective, smart, and simple. Let us be your eyes, so you can focus on what matters.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section: Two large cards side-by-side -->
<section id="services" class="py-16 bg-white">  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">
      Services
    </span>
    <h2 class="font-display text-4xl md:text-5xl font-bold text-custom-blue-deep mt-6">
      Our Comprehensive Suite of CCTV Monitoring Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/monitoring1.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Video Surveillance and Monitoring</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Video Surveillance and Monitoring is the process of observing live footage from CCTV to identify any fraudulent activities, guarantee safety, and provide real-time alerts. At Allianze Digital, our experts actively monitor the cameras every time. We monitor from every angle to detect unusual activities at the moment they happen. In addition to these, we assist in preventing further problems by enabling you to take prompt actions with real-time alerts as the incident happens. Our video surveillance and monitoring service is accurate and completely reliable.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/monitoring.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Monitoring and Documentation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the seamless monitoring of footage and documenting what happens, including the time and other details. These written records help you with audits, reports, or investigations, guaranteeing transparency and accountability in every monitored area. The operators we provide generate comprehensive, timestamped records of every monitored event. The records track entries, exists, and incidents with full details. Keeping these accurate records assists in internal audits or supports legal matters if required. We provide regular reports that are understandable and well-organised.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/review.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Footage Review and Analysis</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process involves thoroughly reviewing the recorded footage to detect key incidents, verify claims, and facilitate investigations. Our trained analysts review the recorded video to catch anything that is missed while monitoring or for further requirements. This process is particularly beneficial in security investigations, HR-related concerns, accident reviews, or resolving conflicts promptly and clearly. Additionally, we provide comprehensive reports that emphasize the findings, making follow-up actions effortless and more informed.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/track.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Object Tracking</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Object tracking is the process of tracking the movement of individuals or items across diverse camera views. Our accurate object tracking service assists in identifying suspicious behaviour, avoiding unauthorized access, and detecting safety risks before they become serious issues. The expert team we have keeps extensive records of every shift or change, even whether it is monitoring a package, tracking an intruder, or identifying movements in restricted areas. All tracked data is meticulously documented and all set to support further investigation when required. Object tracking service gives you a clear outlook and control over everything that moves within your surroundings.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Grid Section: Dark background with 6 numbered items -->
<section id="features" class="py-20 bg-secondary text-white bg-slate-900" >
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">
        Why Us
      </span>
      <h2 class="text-3xl md:text-4xl mt-4 font-bold text-white">
        Why Allianze Digital is the Best Remote CCTV Monitoring BPO Services in UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">UK-Based with Global Reach</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As one of the best remote CCTV monitoring BPO services in UK, our team possesses a deep understanding of local regulations, privacy requirements, and industry standards. Allianze Digital manages both international and UK-based clients with equal dedication. Additionally, we offer high-quality, compliant services tailored to your specific business requirements.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Round-the-Clock Monitoring</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            At Allianze Digital, we offer seamless 24/7 monitoring services, making sure that every camera is actively monitored at all times. Our team never depends on automation alone; our real-time human surveillance instantly identifies issues. This enables you to focus on your key strategies while we take care of your premises 24/7.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Skilled and Responsive Team</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We employ highly trained monitoring specialists who respond quickly. They have the expertise to manage real-time threats, document incidents, and communicate updates clearly. Partnering with the best remote CCTV monitoring BPO services in UK, like us, you get access to professionals on standby, ready to take immediate action and provide support whenever you need it most.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost-Effective Security Support</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            It is expensive and time-consuming to establish and manage an in-house monitoring team. We offer smart, reliable, professional support at a fraction of the cost. You can avail of the complete benefits of adept surveillance without incurring overheads, helping you stay protected and save resources.
          </p>
        </div>
      </div>      
    </div>
  </div>
</section>

<!-- SEO Content Section: Centered text block -->
<section id="seo-content" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 text-center">   
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
      We Watch Closely, So You Don't Have To
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Your business can't afford to look the other way when it comes to safety. At Allianze Digital, we help you stay secure with smart, practical CCTV monitoring. From spotting early signs of trouble to supporting you with reliable documentation, our team makes sure your premises are always protected. We work closely with you to set up alerts, reporting formats, and custom monitoring rules. There are no hidden costs, no long contracts, just a strong service you can count on.
    </p>
  </div>
</section>



<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let us handle the watching, so you can run your business without worry. Experience the benefits of partnering with the best remote CCTV monitoring BPO services in UK. 
        </h2>
        <a href="/contact-us" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection