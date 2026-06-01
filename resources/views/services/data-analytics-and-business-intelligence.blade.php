@extends('layouts.app')
@include('layouts.navbar')
@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url(' {{ asset('assets/data-bi.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Smarter Strategies with Expert Data Analytics and Business Intelligence Services
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for the best Data Analytics and Business Intelligence service in UK, we are here to help you.
          </p>          
          <a href="{{ route('contact-us') }} class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
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
          <img src="{{ asset('assets/data-why.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Understanding what is working and what is not can be the turning point for your business. At Allianze Digital, we help bring that clarity to light. We empower your businesses with confident actions, wiser strategies, and more intelligent decisions by transforming your raw numbers into impactful insights, which makes us a reliable data analytics provider. We customise our services to meet your business goals. Our data analytics experts help you in simplifying operations, discovering new market opportunities, and getting deeper insight into customer behavior.
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
      End-to-End Data Analytics and Business Intelligence Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Customer-Analysis.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Customer Analysis</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of evaluating data associated with customer behavior, buying patterns, and preferences to better understand your customers and their requirements is customer analysis. As a trusted data analytics company, Allianze Digital, thoroughly analyses the customer base and categorises them by demographics, engagement levels, and behaviors. Our team enables businesses to discover opportunities for customisation, enhanced customer experience, and intelligent decision-making by converting raw data into clear insights. With us, you attain the power to predict demand, strengthen customer retention strategies, and tailor marketing efforts. Being the best data analytics and business intelligence service in UK, we make sure your business connects with the right audience, which will result in long-term loyalty and boosting performance.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/market.jpg')}}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Market Analysis</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service involves learning industry trends, the performance of the competitors, and the demands of the market to analyse business potential and growth opportunities. We offer extensive market analysis services as part of the customized data analytics services, enabling businesses to find out their position and their next step. Our team offers focused reports that guide better strategy, positioning, and product development by evaluating significant data such as emerging competitors, consumer trends, and pricing patterns. As the best data analytics company, we deliver with actual, measurable insights instead of assumptions. By partnering with us, you get the best data analytics and business intelligence service in UK to make well-informed and confident decisions.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/data-standard.jpg')}}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Standardisation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Data standardization is the process of bringing data from various sources into a consistent format, enabling easier comparison, analysis, and integration. Allianze Digital specializes in transforming scattered, unstructured data into clean, uniform datasets ready for powerful insights. Organisations managing data from different departments, external sources, or software systems may find data standardisation service vital. Being an experienced data analytics company, we mitigate redundancy and enhance data quality by guaranteeing accuracy and compatibility across your data streams. Our structured approach allows for faster, more reliable analysis and reporting. When businesses choose our best Data Analytics and Business Intelligence service in UK, they're not just organizing data, they're setting the stage for smarter analytics and more strategic outcomes powered by trustworthy information.
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
        Why We Are the Best Data Analytics and Business Intelligence Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Smarter Decision Making</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital helps businesses cut through guesswork by delivering data-backed insights that drive decisions. With focused data and analytics services, your team gets clear, actionable intelligence instead of scattered numbers. As a seasoned data analytics company, we ensure that your strategies are based on real trends and performance. That is why we are trusted to provide the best Data Analytics and Business Intelligence service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Improved Operational Efficiency</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            When businesses partner with Allianze Digital, they streamline operations by identifying bottlenecks and redundancies through precise data and analytics. We highlight what works and what slows you down. As a reliable data analytics company, we do not just track performance; we reveal how to improve it. Clients choosing the best Data Analytics and Business Intelligence service in UK often see noticeable gains in productivity and workflow clarity.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Targeted Marketing Strategies</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Generic marketing drains resources. Our data and analytics services at Allianze Digital help businesses pinpoint what their customers want, when, and how. Our team customizes insights to your audience, goals, and brand. We accelerate engagement and ROI by bringing depth to your campaigns as a dedicated data analytics company. It is a key reason why we are recognized for offering the best Data Analytics and Business Intelligence service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Better Customer Understanding</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital gives businesses a clear window into their customer base, what they prefer, what they avoid, and what keeps them loyal. Through refined data and analytics, we help companies serve customers with more relevance and impact. As a trusted data analytics company, we transform complex patterns into meaningful profiles.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Competitive Market Advantage</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            In order to maintain a competitive edge, you should get to know more than your competitors. We offer comprehensive marketing insights via targeted data and analytics, enabling businesses to identify trends and opportunities early. With a strong track record, our data analytics company offers intelligence that drives strategy.
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
      Allianze Digital - The Best Data Analytics and Business Intelligence Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Data does not work for you until it's understood. At Allianze Digital, we go beyond dashboards and reports; we deliver meaning. Being an outcome-focused data analytics company, we are on hand to assist companies in maximising their data strategically. The data analytics solutions provided by Allianze Digital offer more than just metrics; they guide the way to smarter strategies and sustainable success.
    </p>
  </div>
</section>


<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Boost your business performance with accurate data insights. Our data collection service can help you.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection