@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/insurance-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Reliable Insurance Claim Data Processing for Smarter Operations
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let’s Make Insurance Data Work Smarter! Talk to Our Experts Today
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
          <img src="{{ asset('assets/insurence.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Managing insurance data can quickly become overwhelming. Claims, client records, risk profiles, and policy details all demand timely handling and total accuracy. At Allianze Digital, we provide structured, secure, and clear-cut insurance claim processing and support services tailored to meet the daily needs of insurers, brokers, and agencies. From claim handling to risk analysis, we make sure every record is up-to-date and easy to access. With the best insurance claim data processing service in UK, you gain the benefit of streamlined operations and faster decision-making. Our team works closely with yours to take care of the details, so you can focus on your customers.
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
      Our Core Insurance Data Processing Service Areas
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Proofreading.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Insurance Claim Processing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Insurance claim processing involves the management of each step in a claim, such as data collection, verification, data entry, tracking & updates, and error reduction. The service guarantees accurate payouts and appropriate documentation for insurers and clients. At Allianze Digital Co.UK, the best insurance claim data processing service in UK, we have professionals who can ensure that all the necessary data is correct, complete, and properly completed. We adjust our workflow to align with your internal processes, and we are equipped to manage diverse kinds of claims, such as motor, life, health, and property. Our insurance claim processing service examines discrepancies, follows up on missing data, and updates progress immediately and thereby helping in mitigating claim cycle time and ensuring quick resolutions.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/data-entry.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Entry and Management</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            In the insurance data processing, the data entry and management service consists of the process of accurately entering, structuring and updating policyholder, claim, and underwriting data to keep clean records, facilitate operations and enable timely, error-free processing. We offer end-to-end data entry and management support, covering applications, client records, past claims, forms, and correspondence. We have the potential to manage both digital and paper-based inputs. Also, our experts make sure that each piece of information is verified, properly indexed and stored securely.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/risk-assessment.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Risk Assessment and Underwriting Support</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of analysing client data, verifying documents and preparing risk profiles to assist insurers in informed decision making is termed as risk assessment and underwriting support. Our service helps insurers to compile, review and format every documentation required for meticulous risk evaluations. We create and organise files for efficient review, whether it is for personal and financial records, claims history or property data. Our experienced professionals help in flagging gaps or inconsistencies in the applications, standardising formats for underwriting review, and preparing detailed summaries to accelerate decision-making.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/policy.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Policy Administration</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of managing the complete lifecycle of an insurance policy is known as policy administration. At Allianze Digital Co.UK, we ensure accurate data entry, prompt notifications, and maintain structured records to guarantee seamless operations, regulatory compliance, and consistent service for both insurers and policyholders. Allianze Digital Co.UK securely stores policy files, maintains version control, and makes them accessible whenever they are required. We offer seamless back-office support that helps you in enhancing customer satisfaction, minimising manual tasks, and avoiding service delays by offering seamless back-office support.
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
        How We Bring Value to Your Workflow
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Accuracy You Can Rely On</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital Co.UK, as the best insurance claim data processing service in UK, give prime importance to accuracy. We follow meticulous checks at each stage, such as inputting client details, updating policy records, or managing sensitive risk files. We minimise the chance of errors and reworks by blending double-verification methods with trained experts.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Responsive and UK-Based Support</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Partnering with the local service providers benefits you in many ways. As we are based in the UK, we can ensure prompt responses and a clear understanding of the industry requirements. Moreover, there will not be any timezone gaps or outsourced delays, but practical, responsive services whenever the client requires.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Built to Scale With Your Business</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The insurance data processing service at Allianze Digital Co.UK is built to support businesses of every size. Even if you are handling a small number of claims per week or processing thousands each month, we can assist you efficiently. Moreover, our service scales with your business. Without compromising on quality, we modify our team capacity, turnaround times and tools to fulfil the rising demand.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Compliant and Confidential</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We know that dealing with insurance data signifies managing personal and sensitive information. As a result, we follow stringent UK data protection regulations and internal security practices. Our stringent security measures ensure every record is encrypted, with restricted access, and we review our processes regularly for compliance. We guarantee that client confidentiality is constantly maintained as we handle each document with care.
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
      Let's Simplify Your Workflow Together
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      In insurance, timing and precision make all the difference. At Allianze Digital, we help you stay organised and responsive by handling the data side of things. Whether it's claim entries, policy updates, or underwriting support, we follow your guidelines and meet your timelines. With the best insurance claim data processing service in UK, your business stays agile and efficient, without sacrificing quality or security. Let us manage the administrative work so you can do what you do best, that is, to serve your clients.
    </p>
  </div>
</section>


<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-2xl md:text-3xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Ready to streamline your insurance data processing? Connect with Allianze Digital Co.UK today! 
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection