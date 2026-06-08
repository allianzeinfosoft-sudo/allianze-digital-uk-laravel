@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/scanning-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">        
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Scanning and Indexing Services That Keep Your Files Organised and Accessible
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Simplify your workflow with our bulk document scanning and indexing services in UK.
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
          <img src="{{ asset('assets/scanning.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Managing piles of paper can be time-consuming and risky. At Allianze Digital, we help businesses turn paper chaos into digital order. Our bulk document scanning and indexing services in UK are designed to make file retrieval easy and efficient. We are equipped with cutting-edge tools and expertise to carry out scanning and indexing quickly and securely, even when managing thousands of physical records or when requiring assistance in setting up a searchable archive. We associate closely with businesses in UK to transform physical files into accessible digital formats that are easy to manage, share, and store.
            By partnering with us for bulk document scanning and indexing, we help you save your time with fast turnarounds, reliable processes, and high-quality output, thereby enabling you to focus on what really matters. Our services can be scaled to fulfil your requirements without the hassle, whether you are a small office or a large enterprise.
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
      Our Bulk Document Scanning and Indexing Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/electronic.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Electronic Document Management Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service involves assisting businesses in storing, organising, and accessing their documents digitally. This digital strategy substitutes paper files with searchable digital versions, making handling files quicker, safer, and more efficient. At Allianze Digital, our experts provide continuous support for establishing a simplified electronic document system. We scan, index, and organise your documents to make access effortless whenever they are required. With these, you can search with keywords, dates, or file types. Also, we make sure there is proper file naming and folder structure for long-term use. Availing our service helps you avoid wasting time on digging through boxes or cabinets.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/digitisation.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Digitisation Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the process of converting paper documents into digital files by using scanners. This service benefits businesses by saving space, protecting records, and accessing data easily on digital systems or cloud systems anytime, anywhere. The document digitization service we provide is perfect for businesses seeking to mitigate paper storage. Our experts perform bulk document scanning with accuracy and convert them into clear, digital files such as PDF, TIFF, or any format you prefer. Each file is then indexed and sorted for easy access. We manage every kind of document, including HR records and legal files, with care. Moreover, our bulk document scanning service guarantees consistency and speed, even when the volume is large.
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
        Why Allianze Digital is Your Ideal Choice?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Accurate and Reliable Scanning</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As the best bulk document scanning and indexing services in UK, our specialists double-check every scan to confirm accuracy and clarity. Partnering with us means you get access to clean, legible files with no missing pages or poor image quality.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Indexing that Makes Sense</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We organize your files with proper names. Our experts follow an indexing process with logical naming and folder rules so that it helps your staff to find what they require without delay or confusion.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Data Security You Can Trust</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our bulk document scanning and indexing experts know the necessity of protecting the security of your data. Therefore, we have taken appropriate security measures and protocols to make your files secure, private, and compliant with UK regulations.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Tailored Services for Every Business</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Every business is different in its own right. As a result, we have designed our bulk document scanning and indexing services in UK to be customised to match your operations, timelines, and file formats.
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
      Leave Paper Behind, Go Digital with Allianze Digital
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Don’t let piles of paper slow you down. Whether it's years of records or ongoing documents you need scanned, Allianze Digital has the team, technology, and approach to get it done right. Our scanning and indexing services are made to give you control over your data, save time, and help your team work better every day. 
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Ready to make the switch? Contact us today and let’s get started on your scanning and indexing project with the best bulk document scanning and indexing services in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection