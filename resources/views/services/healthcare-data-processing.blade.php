@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/health-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Healthcare Data Processing Services You Can Trust
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let Us Handle Your Healthcare Data, So You Can Focus on Patient Care
          </p>          
          <a href="contact-us.html" class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
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
          <img src="assets/health.jpg" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Healthcare providers across the UK manage a vast amount of patient data daily. From digital records to insurance claims, keeping everything accurate and organised is not just time-consuming, it is essential. At Allianze Digital, we provide some of the best healthcare data processing services in UK, built to support medical professionals, clinics, and hospitals. Our goal is to help you stay focused on patient care while we handle your data with precision, security, and speed. The skilled professionals we employ ensure each task meets industry standards. Regardless of the process, we operate quietly in the background so you can move ahead confidently. With clear communication and reliable delivery, we make sure your data works for you.
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
      Our Healthcare Data Processing Services Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/data-entry-medical.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover object-top">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">EMR /EHR Data Entry</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of entering and updating patient data into computer systems used by doctors, hospitals, and clinics is known as EMR/EHR data entry. Healthcare providers require accurate and prompt Electronic Medical Record (EMR) and Electronic Health Record (EHR) data entry. The EMR/EHR data entry service at Allianze Digital assists clinics and hospitals in the UK in handling this process with care and consistency. Our experienced professionals enter and update the history, medication, lab results, and treatment plans of the patients into the digital systems in a timely and accurate manner. Also, we manage a healthcare data scanning service that converts paper records into usable digital files without losing detail.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
       <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/coding.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Medical Coding and Billing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It entails allocating standard codes to diagnoses and treatments, then employing those codes to create and submit insurance claims. This makes sure that healthcare providers attain precise and timely payments. An error in the billing and coding can result in payment delays and compliance issues. Our coding and billing experts at Allianze Digital Co. UK are trained to handle this task with accuracy. We make sure that every service, treatment, and diagnosis is coded accurately with the latest coding systems. We can tailor our approach to fit your setup, even if you run a busy private clinic or a community healthcare unit.
          </p>
        </div>
      </div>
      

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/analytics.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Health Data Analytics and Insights</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process that helps in enhancing patient care and decision-making by collecting, examining, and understanding healthcare data to identify functional patterns, trends, and information is health data analytics and insights. The healthcare data analytics service at Allianze Digital assists clinics, GPS, and hospitals in attaining clarity from the numbers they have already collected. Our experts categorize, evaluate patient data, operational metrics, and clinical outcomes to provide insights that really matter. We develop custom reports that are clear and easy to understand by analyzing patient behavior trends and treatment success rates, as well as capacity planning and performance tracking.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
       <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/claim.jpg') }}" alt="Document Management" class="w-full h-full object-cover object-top">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Medical Claims Processing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The step-by-step management of healthcare bills sent to insurance companies guarantees accurate coding, submission, and follow-up for prompt reimbursements, and mitigating claim rejections is the Medical Claims Processing service. The experienced and highly-skilled team at Allianze Digital manages the steps, including claim verification and form completion, to submission and follow-up. Our experts make sure that data fulfils current compliance requirements and that every code and document is meticulously evaluated. This contributes to faster turnaround times, mitigated rejections, and seamless reimbursements for your practice.
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
        Why Choose Allianze Digital Co. UK for Healthcare Data Processing?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">UK-Based, UK-Focused</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As the best healthcare data processing services in UK, we understand the healthcare system here. We have tailored our services to meet UK regulations, NHS standards, and the requirements of private healthcare. You get access to a team with effective communication and expertise.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Real People, Real Support</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You won't be handed over to bots. Our expert team is available when you need answers, updates, or advice. The professional we house listens to your requirements and keeps you updated about the progress.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Strict Data Privacy</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Healthcare data is sensitive, and we treat it that way. We follow GDPR rules strictly and use secure channels for all communications and file transfers. Your patient data stays safe, always.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Scalable to Your Needs</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Whether you are a single-practice GP or a large hospital network, we scale our services to fit your needs. You get exactly what is needed, no more, no less, without long-term contracts or hidden charges.
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
      Allianze Digital Co. UK - Best Healthcare Data Processing Services in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Managing healthcare data does not have to drain your time or stretch your team thin. With Allianze Digital by your side, you gain a trusted partner who gets the job done right the first time. From accurate EMR entries to clear analytics, our services are designed to support your daily operations while meeting all UK healthcare standards. Whether you are looking for healthcare data analytics services or a reliable healthcare data scanning service, we are here to help. With our commitment to quality, security, and local expertise, Allianze Digital is the name healthcare providers across the UK rely on. Let us take care of the data, so you can take care of the people.
    </p>
  </div>
</section>



<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-2xl md:text-3xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Ready to Simplify Your Healthcare Data with the best healthcare data processing services in UK? Get in touch with our Allianze Digital.
        </h2>
        <a href="contact-us.html" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection