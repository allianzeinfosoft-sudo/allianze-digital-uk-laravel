@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Document\ and\ Records\ Management\ bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4"> 
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                     Save Your Office Space and Time With Efficient Document and Records Management
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Experience stress-free document management with us. Get started now!
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
          <img src="{{ asset('assets/document management why .jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Paper trails can easily turn into roadblocks if they are not handled properly. At Allianze Digital, we help businesses get their documents and records in order without the hassle.
            The document management and records management services help in streamlining information management and keep it secure and organised. Moreover, our service guarantees that each of your documents is stored safely and can be retrieved easily. Partnering with us liberates you from the concerns of lost paperwork, cluttered desks, and missed deadlines. As we make it effortless to manage documents, remain compliant, and stay focused on managing the business, firms from multiple verticals are relying on us for document and records management service support.
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
      Our Document and Records Management Service Suite
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Document Digitization and Scanning.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Digitization and Scanning</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of transforming paper-based files into digital formats that are easy to store, share, and access is data digitization and scanning. With this service, Allianze Digital assists businesses in changing from bulky file cabinets and manual retrieval. Moreover, businesses can access the documents they need at any time without searching through bulk volumes of files. This enables companies to save crucial data from damage or loss. Our expert document management service makes sure every file is labeled, secured, and on hand for immediate use. As one of the best document and records management services in UK, partnering with us gives many advantages to businesses such as fast access to data, enhanced team efficiency, and mitigated storage expenses. Our team helps you stay protected, organised, and readily available when it counts.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Document Classification and Indexing.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Classification and Indexing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of structuring your files in a way that makes sense is called document classification and indexing service. In addition to scanning and storing, our team sorts, labels, and structures them to make it effortless to find and use. We establish a system that operates for your firm's daily requirements, whether it is by department, client name, category, or date. With our document classification and indexing service, we help in effective records management, particularly when companies manage bulk volumes of paperwork. When you have clear indexing, you don't have to waste time digging through mislabeled files or random folders.
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
        Why We are The Best Documents and Records Management Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Easy Access to Important Files</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Finding the required file at the right time is important, and it saves you time. The document management service provided by Allianze Digital makes retrieval quick and straightforward. Partnering with our document and records management services in UK helps businesses to experience better control over their data without time wastage.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Saves Office Space</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Having paper-based records and documents takes over your spaces with overflowing cabinets. The records management service we provide aids in digitizing physical files. This helps in freeing up your workspace and makes everything effortless to handle. The majority of the firms depend on our documents and records management services in UK as it benefits in minimising clutter, making a more structured, professional environment, and reducing storage expenses.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Mitigate the Risk of Data Loss</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Having physical documents is challenging as it is susceptible to misplacement, damage, and loss. The document management service provided by Allianze Digital consists of secure digital backups. This keeps your records safe and accessible. Partnering with an efficient document and records management service in UK, like us, you can sit back and relax knowing that your data is backed up and recoverable when required.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Increase Compliance and Audit Readiness</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The records management service provided by Allianze Digital assists in meeting compliance standards by keeping documents in an accessible and structured format. With our service, we prepare your documents even if it is for third-party audits or internal checks.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Simplify Team Collaboration</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Your team coordination shakes when documents are poorly labeled or scattered. Therefore, the document management service we provide enables multiple staff members to access and share documents promptly without any delays or confusion. With this service, we keep everything structured, simple to update, and easy to search.
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
      Allianze Digital - The Best Document and Records Management Services in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Staying organized should not feel like a full-time job. At Allianze Digital, we believe your documents should support your business, not get in the way. We keep things secure, stress-free, and simple with our document management and records management services. Our team enables you to stay in control of sorting and indexing without adding more to your to-do list. Allianze Digital is here to streamline your processes, whether you are onboarding a new team, preparing for an audit, or are tired of wasting time digging through files. With our trusted Document and Records Management services in UK, you gain a system that works quietly in the background, keeping everything where it should be and ready when you need it. We do not believe in overcomplicating things. We just help you do things right, so you can move forward with clarity and confidence.
    </p>
  </div>
</section>




<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let’s take the mess off your hands and get things sorted with the best document and records management services in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection