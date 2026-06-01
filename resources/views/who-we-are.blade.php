@extends('layouts/app')

@include('layouts/navbar')

@section('content')
    <section class="py-2 bg-white pb-10 mt-0 md:mt-[-7rem]">
  <div class="w-full mx-auto">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full bg-cover bg-center bg-no-repeat overflow-hidden"
         style="background-image: url({{ asset('assets/about-bg.png') }});">      

    <!-- CONTENT -->
<div class=" z-10 h-full flex items-center justify-center px-4">
  <div class="max-w-4xl text-center">          
    
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:0px_7px_6px_rgb(0,0,0)] [-webkit-text-stroke:0.1px_rgba(0,0,0,0.13)]">
      About Us
    </h1>

    <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 
    [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
    Flexible, Client-Centric Solutions Designed to Elevate Your Business Performance
    </p>          

    <a href="contact-us.html" class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
      Contact Us
    </a>
    
  </div>
</div>
    </div>
  </div>
</section>
  <!-- About Section -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left Column: Image -->
      <div class="relative rounded-[30px] overflow-hidden shadow-xl">
        <img src="{{ asset('assets/about-allianze.png') }}" alt="Working on laptop" class="w-full h-auto object-cover">
      </div>

      <!-- Right Column: Text Content -->
      <div class="space-y-6 text-justify">
        <div class="text-[#1d242d] text-base leading-relaxed space-y-4">
          <p>
            More than being a service provider, we are a global business processing outsourcing company invested in your growth. We offer simplified business process solutions, precision-driven image editing, impactful digital marketing, and IT development services personalised to suit businesses across industries. Being the top BPO agency in UK, we serve businesses by assisting them in boosting online visibility, running leaner operations, and staying on top of the curve with technology-driven strategies. 
            We house experts who can handle the tasks with expertise, accountability, and a comprehensive understanding of your business objectives. Our potential lies in being flexible and client-focused. 
          </p>
          <p>
            The services we provide are designed in a way that they adapt to your requirements, whether it is to outsource a single process or the whole functions. As a global business processing outsourcing company in UK, we hold ourselves to the highest standards of delivering significant outcomes, clarity, and value at each stage of partnership.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Connect With Us Section -->
<section class="relative py-24 w-full overflow-hidden">
  <!-- Background -->
  <div class="absolute inset-0 w-full h-full">
    <img src="{{ asset('assets/abt-cta.jpg') }}" alt="Connect Background" class="w-full h-full object-cover object-bottom">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
    <h2 class="text-3xl md:text-4xl font-bold mb-4">Connect With US</h2>
    <p class="text-[#e6e6f2] text-lg mb-8 max-w-2xl mx-auto">
      Looking for the best BPO agency in UK to handle your processes? Our solutions can simplify your operations.
    </p>
    <a href="contact-us.html" class="inline-block bg-[#e90101] text-white px-8 py-3 rounded-2xl font-medium hover:bg-red-700 transition-colors">
      Contact Us
    </a>
  </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">      
      <!-- Mission Card -->
      <div class="bg-white rounded-[20px] shadow-lg overflow-hidden flex flex-col sm:flex-row h-full">
        <div class="sm:w-1/2 h-64 sm:h-auto relative">
          <img src="{{ asset('assets/694c5cb5e4001d90e8ccb4b36f466a9cf94b59ce.png') }}" alt="Mission" class="w-full h-full object-cover object-right">
        </div>
        <div class="sm:w-1/2 p-8 flex flex-col justify-center">
          <h3 class="text-[#0a3161] text-2xl font-bold mb-4">Mission</h3>
          <p class="text-black text-sm leading-relaxed">
            To provide custom-made outsourcing services that mitigate operational complexities and boost sustainable development through trust, technological excellence, and trust.
          </p>
        </div>
      </div>

      <!-- Vision Card -->
      <div class="bg-white rounded-[20px] shadow-lg overflow-hidden flex flex-col sm:flex-row h-full">
        <div class="sm:w-1/2 h-64 sm:h-auto relative">
          <img src="{{ asset('assets/9f804d3eee6919f1e97cc342dfc30e5b7f19b751.png') }}" alt="Vision" class="w-full h-full object-cover">
        </div>
        <div class="sm:w-1/2 p-8 flex flex-col justify-center">
          <h3 class="text-[#0a3161] text-2xl font-bold mb-4">Vision</h3>
          <p class="text-black text-sm leading-relaxed">
            To lead as the top BPO agency in UK, driving digital transformation and operational excellence for businesses of all sizes.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ Section: Two-column grid of accordion-style questions -->
<section id="faqy-section" class="bg-white py-16">
  <div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">

    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">
      FAQ
    </span>

    <h2 class="font-display text-4xl md:text-5xl font-bold text-custom-blue-deep mt-6">
      Frequently asked question
    </h2>

    <div class="md:flex gap-6 mt-16">

      <!-- LEFT -->
      <div class="flex flex-col gap-6 w-full">

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">01. Does Allianze Digital operate with international clients?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">Yes, as a global business processing outsourcing company, we work with clients across the world.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">02. How experienced is your team?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">We have an expert team of highly skilled professionals with extensive domain experience in BPO, development, marketing, and creative services.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">03. Are your services beneficial for startups or small businesses?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">Yes, being a top BPO agency in UK, we assist startups, enterprises, and SMEs with our scalable solutions.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">04. How does Allianze Digital guarantee quality in the services provided?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">We guarantee 100% quality in our services. Our experts follow a multi-layered quality control process and client feedback loops that help in maintaining consistent performance and excellence.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">05. What are the different kinds of technologies you employ?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">At Allianze Digital, we maximise cutting-edge tools and technologies across design, development, automation, AI, and analytics.</p>
          </div>
        </div>

      </div>

      <!-- RIGHT -->
      <div class="flex flex-col gap-6 w-full">

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">06. How quickly can you begin a project?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">We can start the project once we understand your goals. We have a fast and efficient onboarding process as a global business processing outsourcing company. </p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">07. Do you provide cost-effective services?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">Yes, being the top BPO agency in UK, we provide competitive pricing models designed to provide maximum ROI without compromising on quality.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">08. Can I speak with someone before starting?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">Of course. Our consultants are constantly available for free consultation to discuss your goals and how we can help. </p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">09. How do you maintain consistency across international client projects?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">As a top BPO agency in UK, we make use of simplified workflows, performance tracking tools, and ongoing training to guarantee high-quality outcomes across every project regardless of location.</p>
          </div>
        </div>

        <div class="faqy-item bg-gray-100 border rounded-lg overflow-hidden">
          <button class="faqy-question w-full p-6 flex justify-between items-center text-left">
            <p class="font-semibold">10. How can I get started with Allianze Digital?</p>
            <span class="faqy-icon text-xl font-bold">+</span>
          </button>
          <div class="faqy-answer max-h-0 overflow-hidden transition-all duration-300 px-6">
            <p class="py-4 text-gray-600">You can contact us through our website contact form or email. We have dedicated experts who will guide you through the onboarding process.</p>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Contact Form Section: Form on a background image -->
<section id="section-contact-form" class="py-16 bg-contain bg-center" style="background-image: url('{{ asset('assets/ct-bg1.png') }}');">
  <div class="max-w-3xl mx-auto px-4 text-center">
    <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-5 py-3 rounded-full">Get in touch!</span>
    <h2 class="text-5xl font-bold text-white mt-6">Want to be our next happy client?</h2>
    <form class="mt-12 space-y-5">
      <div class="grid sm:grid-cols-2 gap-5">
        <input type="text" placeholder="Your Name" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
        <input type="email" placeholder="Email" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
      </div>
      <input type="text" placeholder="Business Topic" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary">
      <textarea placeholder="Type Your Message" class="w-full p-4 rounded-lg border border-gray-300 bg-white text-gray-700 placeholder:text-custom-text-secondary h-36"></textarea>
      <button type="submit" class="w-full bg-custom-red-dark text-white p-4 rounded-lg font-bold text-lg hover:bg-red-700">Submit Message</button>
    </form>
  </div>
</section>
@endsection