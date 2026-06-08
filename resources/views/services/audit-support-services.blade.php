@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Audit-Support-Services-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Experience Stress-Free Auditing With the Best Audit Outsourcing Service in UK
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for the best audit outsourcing service in UK? You are in the right place. Contact us now!
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
          <img src="{{ asset('assets/Audit Support Services.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Preparing for an audit is always a troublesome process. But not anymore. The audit support service provided by Allianze Digital aims to unload the burden and assist businesses in approaching audits with ease. Our team delivers a steady hand through every phase of the process, even if it is for categorising documents, validating compliance, or addressing auditor queries. We know the nuances of audit expectations over industries and bring clarity to what often feels overwhelming. Being the best audit outsourcing company in UK, we help you save time, prevent expensive missteps, and guarantee your records are always inspection-ready. Our experts bring accountability, structure, and accuracy to your audit cycle, without stress.
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
      Our Audit Outsourcing Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Internal Audit Preparation.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Internal Audit Preparation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the basic process that guarantees a firm's in-house controls, financial records, and procedures are ready for examination. The experts at Allianze Digital associate closely with the clients to detect control gaps, analyse internal processes, and align documentation in a way that demonstrates both accountability and transparency. This organised strategy enables businesses to depict operations clearly during audits, prevents compliance risks, and eliminates last-minute confusion. Companies can save their time and make sure no vital step is ignored by outsourcing their internal audit preparation to professionals in Allianze Digital. We offer consistent and reliable audit support as the best audit outsourcing services in UK. This makes it effortless for businesses to fulfil regulatory requirements without internal disruption.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Document Management for Audit Trails.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Management for Audit Trails</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Audit trails rely on clear, securely stored, and traceable documentation. Our audit support service provides expert document management for audit trails that guarantee every transaction record, file, and communication log is structured for effortless retrieval. Employing cutting-edge systems and seasoned professionals, we classify the documents in line with audit protocols, enabling businesses to respond quickly to enquiries. Our service minimises audit delays, data loss risks, and the stress of last-minute document hunts. As the best audit outsourcing services in UK, we offer customized audit support that maintains your documents accessible, clean, and audit-ready at all times.
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
        Why We are the Best Audit Outsourcing Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Mitigates Internal Burden</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            In-house management of audit makes your team stretch to the limit. The reliable audit support service we provide enables your staff to concentrate on daily responsibilities. Our seasoned experts can manage the coordination, documentation, and preparation that make the process seamless. As the best audit outsourcing service in UK, we enable businesses to have fewer disruptions and a stronger focus on business functions without compromising audit quality.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Simplified Compliance Readiness</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Adapting to the varying compliance frameworks is complicated. At Allianze Digital, we streamline it with organised audit support that matches your internal processes with regulatory standards. Our experts make sure that every essential check and balance is in place. With us, businesses benefit from fewer compliance gaps and more confident audits.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Structured Documentation and Audit Trails</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our professional team ensures your records are logically filed, traceable, and readily available. We assist you in structuring vital financial and operational data into easy-to-navigate formats. Our best audit outsourcing service in UK provides clarity and structure that mitigates stress and aids in maintaining long-term integrity.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Enhanced Accuracy and Error Reduction</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We meticulously examine your data for calculation errors, inconsistencies, or missing elements. Because a slight oversight can result in huge mistakes during an audit. The team's keen attention to detail reduces audit risks and drives your credibility. Our commitment to accuracy has given us recognition as the best audit outsourcing service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost-Effective Audit Preparation</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            It is expensive and time-consuming to hire an in-house audit specialist. But hiring Allianze Digital offers world-class audit support at a fraction of the cost. We have a flexible pricing structure that does not compromise on quality. We enable you to remain audit-ready without losing your money.
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
      Allianze Digital - The Best Audit Outsourcing Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Audits do not have to throw your team into a frenzy or pull focus away from daily operations. At Allianze Digital, we provide dependable audit support that helps you stay ahead of deadlines and documentation. Our dedicated team maintains everything in order, such as the initial checklist and everything in between the final handover. This enables you to be on hand to respond to auditor requests without any rush. In addition to passing audits, we assist your business in maintaining audit-ready practices throughout the year. We have a steady approach and attention to detail, which makes us a trusted destination for companies across different industries. We are always ready to streamline your processes and lighten the load as the best audit outsourcing service in UK.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let us help make your next audit stress-free. Connect with us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection