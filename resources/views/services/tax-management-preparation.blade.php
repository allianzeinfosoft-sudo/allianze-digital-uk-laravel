@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Tax-Management-Preparation-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Accurate Tax Management From the Best Tax Preparation Outsourcing Service in UK
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Need assistance with EMEA tax preparation? We can help you. Contact us now!
          </p>          
          <a href="{{ route('contact-us'); }}" class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
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
          <img src="{{ asset("assets/tax.jpg") }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Managing taxes can be a quiet but constant source of pressure for any business. From sorting records to understanding shifting tax codes, even a small oversight can turn into a costly issue. At Allianze Digital, we offer a clear and practical approach to tax return preparation. Whether you operate locally or have broader responsibilities across regions, our team is equipped to handle complex filings with precision. We bring deep experience in EMEA tax preparation, helping clients navigate regulations confidently and without confusion. Our role goes beyond filling out forms; we help businesses stay organized, meet deadlines, and reduce risk. With accuracy at the heart of what we do, we are proud to be trusted as the best tax preparation outsourcing service in UK. Every figure we check, and every return we submit, reflects our commitment to getting it right, quietly and consistently, year after year.
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
      The Tax Management Preparation Service We Offer
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/tax-return-financial-form-concept.jpg') }}" alt="Internal Audit Preparation" class="object-top w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Tax Return Preparation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Tax return preparation is about entering numbers into boxes as well as guaranteeing accuracy, compliance, and peace of mind. Allianze Digital offers tax return preparation service that enables you to take the weight off your shoulders. Our experts guarantee fast submissions in line with HMRC requirements. We have expertise in EMEA tax preparation that brings clarity to processes that are overwhelming for many. Even if you are a sole trader or handling multiple entities across regions, our service caters to businesses of every size. Our potential to simplify complicated obligations and assist in preventing costly errors or delays makes us the best tax preparation outsourcing service in UK. With dedicated support, transparent reporting, and a focus on compliance, we have earned a strong reputation. By trusting us with your returns, you get more than just a filled-out form; you get a partner committed to keeping your business financially secure and penalty-free.
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
        Why we are the Best Tax Preparation Outsourcing Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Timely and Accurate Filing</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            At Allianze Digital, our experts make sure that every information is verified and submitted on time. Our professionals, having deeper knowledge of local and EMEA tax preparation standards, manage deadlines, documentation, and accuracy with care. This makes us the best tax preparation outsourcing service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Mitigated Compliance Risks</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We enable businesses to remain compliant with the present tax codes, guaranteeing every return meets legal and financial expectations. Our team provides thorough EMEA tax preparation services tailored to the regulations of that particular region. This enables clients not to worry about missing key compliance requirements.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Expert Handling of Complex Returns</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital offers expert analysis and handling for even the most complicated use cases. We bring an extensive understanding of EMEA tax preparation, guaranteeing no details are missed. Businesses looking for accuracy and control choose our tax management preparation service for reliable and professional support.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">More Time for Core Business</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Outsourcing to Allianze Digital enables businesses to redirect their time and resources to real business goals. Our experts efficiently manage the calculations, submissions, and paperwork. This lets you be free to focus on growth.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Tailored Tax Strategies</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We take enough time to listen and understand each client's financial outlook to build tailored and smart strategies. Our experts align credits, deductions, and allowances with your business objectives. This approach aids in increasing returns legally and effectively. This tailored approach makes us the best tax preparation outsourcing service in UK.
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
      Allianze Digital - The Best Tax Preparation Outsourcing Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      A well-prepared tax return does not just keep the taxman satisfied; it helps a business breathe easier. Allianze Digital delivers more than just numbers; we offer peace of mind. With a structured approach and a focus on compliance, our tax management services are built around your business's real needs. We bring clarity to your complicated paperworks, even if it is handling year-end filings or simplifying the intricacies of EMEA tax preparation. Our experts personalise the processes to align with your workflow, guaranteeing nothing gets missed and each return is prepared to meet the highest standards. What sets us apart as the best tax preparation outsourcing service in UK is not just our skill, it is the reliability we bring to every engagement. From small firms to larger operations, we take care of the details so you can focus on what you do best, without second-guessing your tax position.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Partner with the best tax preparation outsourcing service in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection