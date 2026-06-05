@extends('layouts/app')

@include('layouts.navbar')

@section('content')
    <!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url(assets/legal-data-entry.jpg);">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            The Best Legal Data Processing<br> Services in UK You Can Count On
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Simplify your legal data efficiently with the best legal data processing services in UK.
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
          <img src="{{ asset('assets/legal-data.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Are you tired of spending long hours on repetitive data processing tasks? Well! We can help you. At Allianze Digital, we offer the best legal data processing services in UK, trusted for accuracy, confidentiality, and compliance. Our specialist team manages Legal Data Collection, Proofreading, Monitoring, and Document Drafting with precision rooted in UK legal standards. With our legal data entry service, we ensure every detail is carefully captured, protected under legal data protection protocols, and ready for use. 
            You will find clarity and consistency in every dataset, freeing your team to focus on case strategy and client outcomes. Partnership with us means partnering with a provider who understands that legal data demands both accuracy and absolute discretion. Read on to discover how each of our services supports your legal workflow.
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
      Our Complete Suite of Legal Data Processing Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/datacollection.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Legal Data Collection</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Legal Data collection is the process of gathering, extracting and structuring significant data gained from legal documents. These documents may include contracts, case files, compliance records and court filings. At Allianze Digital, we have a professional team specialising in legal data collection from a diverse range of legal documents. We offer services that completely agree with UK data protection standards, prioritising client confidentiality and accuracy at each stage. Our team makes use of customised templates and checklists to minimise manual input errors as well as to maintain consistency in data formats. Also, we verify entries against source materials to ensure consistency. Our legal data entry service empowers lawyers and legal professionals with immediately applicable, organised datasets you can rely on.     
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Proofreading.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Legal Proofreading</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The legal proofreading service provided by Allianze Digital, consists of the meticulous analysis of legal documents to identify any errors, such as spelling, grammar, punctuation, and formatting, and to rectify them accordingly. The experts we house carefully proofread contracts, regulatory filings, internal documentation, and legal drafts to ensure every detail is accurate and aligns with legal conventions. We offer an expert team professionally trained in legal style guides and jurisdiction-specific norms. Our service maintains version control and provides tracked changes for client review. The legal proofreading service aids in retaining clarity, professionalism, and compliance before court submissions, external audits, or client delivery. This ensures your legal documents are refined and authentic. 
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Monitoring.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Legal Data Monitoring</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of regularly tracking and examining legal data, including court updates, regulatory changes, case status, or compliance deadlines, to make sure no significant factors are missed. At Allianze Digital, we provide excellent Legal data monitoring services that are developed to keep your firm current on legal developments in real-time. Our experts monitor changes to court filings, compliance requirements, regulatory updates, and case progress across allocated platforms and jurisdictions. Legal monitoring service enables organisations to remain updated, meet deadlines, and react to risks in a timely manner. Our structured tracking process benefits legal professionals in gaining visibility and control without being bothered about constant manual checking or missed notifications.  
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Drafting.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Legal Document Drafting</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Legal document drafting refers to the preparation of clear, accurate, and legally sound documents, including contracts, agreements, NDAs, affidavits, letters, or statements. We create high-quality documents on the basis of your preferred templates, jurisdiction, and tone. Our team makes sure that clauses are properly organised, legal terms are accurate, and each section agrees with legal requirements and intended outcomes. We consolidate the data your team provides while validating citations, definitions, and formatting throughout. We edit and quality check each document, making it ready for client review or filing. 
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
        Why We are the  Ideal Choice of Legal and Business Leaders
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Specialist UK Legal Expertise</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As a team grounded in the UK legal practice, we make sure that your legal data protection and entry complies with UK GDPR and the Data Protection Act 2018. Our expert team is completely aware of the stakes of privacy, evidential quality, and solicitor-client privilege. With this expertise, we can assure you of efficient services that are built for the UK legal ecosystem. 
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Unmatched Accuracy and Quality</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We give top priority to accuracy and quality. Our team makes sure that every data set, drafted files, or proofread document goes through multiple phases of quality checks, using both automated evaluation and manual reviews. Leveraging cutting-edge and secure platforms established within the country’s digital infrastructure, we reduce errors and uphold consistent formatting. 
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Secure and Compliant Processes</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital gives prime importance to data security and compliance. Therefore, to ensure maximum security, our company follows the guidelines of industry standards, including GDPR, Data Protection ACT 2018, and ISO in our data processes. We keep your confidential legal data safe as we have robust encryption, audit trails, secure access, and confidentiality agreements for each assignment.   
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Fast Turnarounds Without Compromising on Quality</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We know that legal timelines can be strict, particularly when dealing with regulatory deadlines, court submissions, or client demands. Therefore, we have optimised our workflows to attain speed without compromising on accuracy. We consistently deliver within the agreed timelines, maximising process automation, pre-approved templates, and a skilled review team.   
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
      We Keep You a Step Ahead!
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Partnering with Allianze Digital for your legal data processing and legal data entry service provides excellent value. It means you can experience the benefits of working with a partner built on trust, accuracy, and legal insight. Our professionals working on legal data processing deliver clean, compliant data and documents that are ready to use. Our legal data processing service is precise and secure for preparing litigation, managing large-scale document review, or providing continuous monitoring of legal updates. We manage your data tasks as well as reduce risk, increase efficiency, and free your legal team to focus on strategy. 
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-2xl md:text-3xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">Get accurate and reliable, and best legal data processing services in UK with Allianze Digital.</h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection