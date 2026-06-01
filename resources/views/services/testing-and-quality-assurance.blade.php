@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/quality-assurance.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Reliable Testing and Quality Assurance Service For Top-Notch Products
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Make your products bug-free with the trusted testing and quality assurance service in UK. Contact us today!
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
          <img src="{{ asset('assets/Testing and Quality Assurance bg.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Software may look great on the surface, but it is what happens behind the scenes that determines how well it truly performs. At Allianze Digital, our Testing and Quality Assurance service in UK focuses on uncovering the faults before your users do. From small glitches to major system flaws, we detect and resolve issues before they become costly problems. Our process is not based on checklists alone; we test with an objective, customised to your audience, platform, and industry. Our team ensures your product is dependable from start to finish by blending manual precision with the efficiency of our automation testing service, whether you are building a new application or updating an existing one. This results in fewer complaints post-release, and software you can stand behind. Our testing team ensures it delivers exactly what it promises when your product's performance is on the line.
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
      Our Testing and Quality Assurance Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Functional & Automation Testing.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Functional & Automation Testing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service ensures that the software functions exactly as intended. Allianze Digital offers functional & automation testing with a straightforward approach. This involves understanding the system's purpose, testing each corner of its functionality, and applying automation where it makes sense. This assists in minimising manual errors, enhances speed, and cuts testing expenses without skipping significant steps. The automation testing service provided by Allianze Digital is ideal for large-scale applications and recurring test cases. This offers businesses reliable and consistent test results. Being a reliable testing and quality assurance service in UK, we help you focus on the growth and development of your business.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Testing and Quality Assurance.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Compliance & Certification Testing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of compliance and certification testing is about guaranteeing that a product meets industry regulations and on hand for the market. Our experts at Allianze Digital enable businesses to identify the necessary standards, such as GDPR, ISO, HIPAA, or accessibility norms for their software and then verify them via structured testing. We make sure that nothing important is missed by focusing on both technical as well as procedural aspects of compliance. Our compliance and certification testing service minimises the risk of regulatory penalties and market rejections and thereby safeguards businesses. The approach we follow is customised to meet your specific needs, as each industry and region has a distinct set of rules. Our expert testers make sure that your product is functional and cleared for deployment.
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
        Why We Are the Best Testing and Quality Assurance Service in UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Enhanced Software Reliability</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Errors in software can hinder your business operations. Therefore, our testing and quality assurance service in UK guarantees that every function, feature, and flow runs perfectly as planned through structured testing protocols. Our seasoned testers do not just detect bugs; they resolve them quickly. This leads to seamless user interactions, fewer disruptions, and systems that keep running the way they are intended.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Faster Time to Market</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The automation testing service we offer assists in accelerating testing cycles by managing repetitive tasks with consistency and accuracy. As we manage the testing, your development team can focus on primary enhancements. By leveraging our service, you can minimise bottlenecks, simplify QA processes, and provide stable releases on tighter timelines.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Mitigated Business Risk</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            If the software issues remain unresolved, it may result in security breaches, compliance penalties, and customer churn. As the trusted testing and quality assurance service in UK, we reduce these risks through end-to-end and targeted testing. With our adept service, we focus on detecting weak spots in functionality, security, and usability before they cause actual damage.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost Savings Over Time</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Resolving a bug post-launch can be more expensive than dealing with it during development. The automation testing service offered by Allianze Digital identifies issues early, mitigates manual effort, and automates recurring test cases. We aid businesses in reducing QA expenses gradually.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Compliance with Industry Standards</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            At Allianze Digital, we ensure that your software follows the industry rules and standards. Our service involves specialised testing for regulatory and industry compliance. We evaluate your system's alignment and guide required enhancements, whether it is GDPR, ISO, HIPAA, or accessibility standards.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEO Content Section: Centered text block -->
<section id="seo-content" class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 text-center">   
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
      Allianze Digital - The Best Testing and Quality Assurance Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Quality should never be treated as a final step; it is something built into every phase of development. At Allianze Digital, we take that responsibility seriously. Our Testing and Quality Assurance service in UK is structured to work alongside your development team, not after them. We make sure each release stands up to real-world conditions, from initial-stage functional testing to final compliance checks. Our automation testing service assists in minimising manual workload and boosts delivery without cutting corners. We make sure your products function well, not just verifying things work, hold up under pressure, and meet your standards as well as those set by your industry.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Partner with us and make quality assurance a strength. Contact us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection