@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Web-Application-Development-Service-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Expert Web Application Development Service to Streamline Your Operations
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for an experienced web application development agency in UK? Let's Connect!
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
          <img src="{{ asset('assets/Web Application.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            A web application should do more than just exist on a server; it should solve problems, reduce work, and make your business more responsive. At Allianze Digital, we don't hand out pre-made templates or generic solutions. When we start a project, we listen to your concerns, requirements, and pain areas to develop custom web applications that truly reflect the way you operate. Our team always builds software that fits, whether it is to manage internal workflows, simplify communication between departments, or support clients online.
            Our web development approach is based on collaboration, common sense, and clarity. From user access to performance tracking, every feature is thought through and tested. As a trusted web application development agency in UK, we work closely with businesses that want tools they can count on, not software that needs constant workarounds. If you're ready for a web application that feels like it was made just for your team, it's because it will be.
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
      Our Portfolio of Web Application Development Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Custom Web App Development.jpg') }}" alt="Custom Web App Development" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Custom Web App Development</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of developing a browser-based software customised to a company's particular workflows or customer requirements is known as Custom web app development. The experts at Allianze Digital create tools that streamline business operations, offer real-time control over business processes, and minimise manual work. Our apps are developed to match your team's work, whether it is handling sales, customer data, or inventory. Being a reliable web application development agency in UK, our team prioritises functionality, long-term usability, and reliability. The web application development service we provide enables businesses to remain organised, efficient, and ready to scale without changing systems often.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Enterprise Web App.jpg') }}" alt="Enterprise Web App" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Web App</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            These are robust platforms that are developed to handle complicated business operations such as HR systems and internal dashboards. Our developers at Allianze Digital build web applications that manage large tasks without breaking under pressure. These apps enable large businesses to stay aligned, minimise expensive mistakes, and automate routine jobs. We aim to make your in-house processes seamless and more efficient. Our enterprise web application service is strong on structure, secure by design, and effortless for your team to adopt and grow with.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Progressive Web App.jpg') }}" alt="Progressive Web App" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Progressive Web App</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            We provide the experience of a mobile app while working on a regular browser. Progressive web apps are quick, work offline, and are responsive. We develop apps that adapt to any device, keep users engaged without requiring an app store download, and load quickly. Also, they are perfect for businesses that seek a mobile-like experience without the high cost of native app development. The progressive web application development service we offer makes sure your users get seamless functionality and actual accessibility. Being the best web application development agency in UK, Allianze Digital develops Progressive web apps that function smart, so that your business can connect better.
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
        Factors that Make Us the Best Web Application Development Agency in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Tailored Solutions</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The expert developers at Allianze Digital design and develop tools that reflect your everyday operations. Even if it is managing orders, team communication, or scheduling, we develop each feature around your exact process. As a trusted web application development agency in UK, we focus on functionality that makes sense for your business.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Scalability Without Complexity</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our team builds web applications that adapt as the business expands. The systems we build scale effortlessly without losing performance or simplicity, even as the number of users increases. Leveraging our web application development service, updates and latest features are easily integrated. This is the primary reason why most businesses in the UK rely on Allianze Digital as their go-to web application development agency in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Better Collaboration</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We develop centralised custom apps that link your departments that are in different time zones or in the same office. Your in-house team can do more with less hassle with shared access, automated reports, and real-time updates. We bridge internal gaps smoothly with our web application development service.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Streamlined User Experience for Customers</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Today, users never wait for slow or complicated interfaces. Therefore, we design and develop clean, responsive applications that function well on any device. Our apps give you a smooth and intuitive experience when browsing on a phone or managing accounts from a desktop.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Stronger Data Control and Security</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Sensitive information needs to be protected, not patched later. From the start, we build with security in mind, protecting customer data, restricting access, and making compliance easier. Our web application development service provides you with full control over how your data is stored and utilized. That is why Allianze Digital is considered a trusted web application development agency in UK.
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
      Allianze Digital - The Best Web Application Development Agency in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Building software shouldn't feel like you're being handed someone else's idea of a solution. At Allianze Digital, we approach each project with the mindset that your business is unlike any other. Our job is to understand how it works and to create an application that supports, not complicates, your goals. We don't disappear after delivery either. You get ongoing support, thoughtful updates, and a partner who knows the system inside out.
      That's what sets our web application development service apart. We're not here to flood you with features you don't need or systems you'll never use. As a dependable web application development agency in UK, we stay focused on what matters: a clear, secure, and stable app that serves your team, your clients, and your growth.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets//9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Looking for an expert web app development service provider that can maintain processes smart, effective and simple? Then, we are your ideal choice.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection