@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Business Data bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Organise Your Business Data with Reliable Data Collection Service
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for an expert data collection service in UK?
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
          <img src="{{ asset('assets/Business Data.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Collecting data is not just about gathering numbers; it is about knowing where to look, how to extract what matters, and turning raw details into something your business can actually work with. At Allianze Digital, our data collection service is built around that principle.
            Our data collection service experts enable you to attain well-organised and meaningful data from reliable sources, personalised for your operational and strategic objectives. We collect what data you require, whether it is for monitoring market patterns, mapping customer behavior, and tracking competitor trends. We follow a simple and secure method that is adaptable across verticals, enabling you to move from uncertainty to clarity. Businesses across sectors rely on us because we do not deal in volume alone; we focus on relevance. That is why we are trusted by companies seeking the best data collection services in UK, not for empty promises, but for work that speaks for itself.
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
      Our Data Collection Services Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Data Digitisation.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Digitisation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of transforming physical records or outdated formats into organised digital files is Data Digitisation. Allianze Digital offers data digitization service that guarantees your business collects invoices, forms, and reports that are precisely converted into structured digital formats. Being one of the best data collection services in UK, we scan as well as structure your data. Moreover, we focus on consistency checks and attention to detail at every step, enabling clients to retrieve and use their data without hassle. Leveraging our data collection service helps you prevent the burden of paper storage, facilitate informed decision-making, and mitigate retrieval time.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Data Cleansing and Validation.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Cleansing and Validation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service involves detecting and rectifying inaccuracies, redundant entries, or inconsistencies within a dataset. The data cleansing and validation service at Allianze Digital is made to increase the reliability of your data before it reaches your analytics and reporting tools. We employ rule-based algorithms, manual verification, and intelligent checks as part of our data collection service to make sure your datasets are both complete and accurate. The strategy we follow mitigates expensive mistakes in decision-making and improves operational efficiency. Businesses looking for the best data collection services in UK choose us to prevent duplicate contacts, formatting issues, and outdated entries from customer databases, financial records, inventory lists, and more.
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
        Why We are the Best Data Collection Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Accurate Insights that Drive Smart Decisions</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            A minute error in data can derail the best strategies. The data collection service offered by Allianze Digital guarantees accuracy from the source, even if it is online, offline or blended. The experienced professionals we house thoroughly analyse the noise and inconsistencies to provide reliable data that you can really use.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Tailored Collection for Niche Requirements</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The data collection service we deliver does not offer a multifaceted approach. Our experts design the data workflow to align with your goals. With our data collection service, rather than just collecting data, you are developing insights. This is a primary reason why Allianze Digital is being considered as the best data collection service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Time Saved, Energy Reclaimed</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            It is a known fact that entering data manually is a time-consuming and cumbersome task that wastes your team's energy and talent. By partnering with Allianze Digital, the best data collection service in UK, you can enable your in-house teams to prioritise their key tasks, while our expert team handles data collection swiftly and securely.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cross-Platform Compatibility</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Data can be sourced from multiple resources such as surveys, apps, social media, and third-party platforms. The data collection service offered by Allianze Digital handles this data efficiently. Our seasoned experts gather it, clean it, and format it for seamless integration into your tools and systems.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Confidential and Compliant Handling</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The regulations governing data are increasing; therefore, it is vital to handle data responsibly. The data collection service offered by Allianze Digital functions by following the guidelines of stringent data protection standards. Our commitment to confidentiality and compliance makes us the best data collection services in UK.
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
      Allianze Digital - The Best Data Collection Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Data is only useful when it is accurate, organized, and collected with a purpose. That is what we deliver at Allianze Digital. Our data collection service is not a tool; it is a thoughtful process designed to empower smarter decisions. We do not just scrape, sort, or store. We align our data collection service with your business goals by learning your business context. Our experts handle each step with accuracy, confidentiality, and care. You choose clarity over clutter and insight over speculation when you associate with us. Whether you are running a startup or managing enterprise-level operations, our tailored solutions are shaped to serve your real needs. It is not about how much data you gather; it is about collecting the right data the right way. That is the foundation behind our reputation as one of the best data collection services in UK.
    </p>
  </div>
</section>


<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('./{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Make intelligent decisions with the best data analytics and business intelligence service in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection