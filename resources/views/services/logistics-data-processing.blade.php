@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/logisitc-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Simplify Your Logistics Operations with the Best Logistics Data Processing Service
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for an efficient and reliable logistics data processing service? Talk to us today!
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
          <img src="{{ asset('assets/logistic.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Logistics runs on details. Missed entries, misplaced documents, or slow updates can cause delays that ripple across your entire operation. At Allianze Digital, we offer dependable and structured logistics data processing services that help keep your supply chain moving. Whether you are managing freight invoices, purchase orders, or bills of lading, we handle the administration so your team can focus on coordination, delivery, and results. With the best logistics, supply chain data processing services in UK, you get more than back-office support; you get clarity, accuracy, and better decision-making. Our team works closely with you to simplify the flow of data from paperwork to platforms, giving you the confidence to operate at full speed.
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
      Wide Range of Logistics Data Processing Services We Offer
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/invoice.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Invoice Data Processing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of accurately capturing, validating and structuring freight and shipping invoice details to ensure accurate billing, prompt payments and seamless financial coordination between carriers and clients. At Allianze Digital, our experts handle your freight and transport invoices with accuracy. Our invoice data processing involves data entry, detailed verification, and document classification. We ensure there are no duplications or errors and align invoices with the purchase order to ensure accurate payment.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/purchase.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Purchase Order Processing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Purchase order processing consists of managing every task associated with purchase orders, such as data entry, verification, approval tracking and status updates. This in logistics ensures the accurate recording of orders, matching them with deliveries, and authorising payments. This benefits in maintaining supply chain accuracy, eliminating errors, and simplifying procurement operations effectively. The key to preventing supply chain disruption is accurate purchase order processing. At Allianze Digital, we manage inputting purchase order (PO) details into your system, checking supplier names, pricing, item descriptions and expected delivery dates. Our experts monitor each purchase order status and highlight inconsistencies like quantity mismatches or missing approvals.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/bill.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Bill of Lading Processing Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of extracting, verifying and categorising shipment data from transport documents is referred to as Bill of Lading (BOL) processing. These details may consist of cargo descriptions, consignee data, and delivery terms. Through accurate BOL Allianze Digital facilitates seamless customer clearance, prevents delays and supports legal compliance. Our professionals confirm the completeness of each entry and make sure that terms match across every carrier documentation. Additionally, we categorise these records for custom checks and audit requirements. By doing so, the clients can reduce clearance delays and prevent disputes at delivering points and facilitate faster goods movements.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/data-anal.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Analytics for Supply Chain</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Data Analytics for the supply chain evaluates logistics details to discover trends, enhance delivery performance, mitigate expenses, and facilitate smarter planning decisions across procurement, transport, and inventory operations. Currently, logistics operations require more visibility than paperwork. The data analytics service at Allianze Co.UK takes your operational data and transforms it into clear, decision-ready insights. We have an expert team to assist you in identifying delivery delays, measuring carrier performance, evaluating inventory turnover, and monitoring freight costs. This helps clients to act accordingly.
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
        Why we are the Best Logistics, Supply Chain Data Processing Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Detail-Oriented and Deadline-Focused</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We ensure that every number and record is accurate from the initial phase. The experts we house follow step-by-step checks to guarantee data accuracy and prompt delivery. There will not be any issues of rework or delays. Your logistics operation stays efficient and ahead as our team keeps your documentation clean and consistent.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">UK-Based Support, No Timezone Delays</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As we are based in the UK, we can handle your queries promptly and clearly. Moreover, we are well-versed in local logistics processes and industry expectations. Therefore, you can seamlessly communicate your requirements and updates without waiting across different time zones.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Scalable Service, No Matter Your Volume</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The logistics industry undergoes quick changes. The logistics data processing service at Allianze Digital has the potential to scale according to your workload, even if your volumes are steady or seasonal. While maintaining accuracy and timelines, we ramp up or down with our flexible support model.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Secure and Compliant Handling</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital gives utmost importance to data security and compliance. Therefore, we handle our clients' data with meticulous attention to privacy and compliance. We manage every file, document, and record under UK data protection standards. Our supply chain data management service makes sure that your business and your client's data stay secure and safe with our access controls to file encryption, and regular audits.
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
      Allianze Digital - Where Accuracy Meets Practical Help
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Logistics operations rely on authentic, accurate, and accessible data. Our experts at Allianze Digital know that clearly. We help you stay on top of admin tasks and focus on your logistics goals, even if you are arranging shipments, updating records, or reviewing delivery performance. By hiring the best logistics, supply chain data processing services in UK, you don't have to waste time looking for errors or missing updates. With Allianze Digital, your logistics business works faster and stays compliant.
    </p>
  </div>
</section>



<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-2xl md:text-3xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let us handle your logistics data processing, so you can focus on your core strategies. Connect with us now!
        </h2>
        <a href="/contact-us" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>    
@endsection