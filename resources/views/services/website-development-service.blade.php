@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/Website-Development-Service-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Website Development Service that Grows With Your Business
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let's build an efficient website that helps your business achieve online success. Contact us
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
          <img src="{{ asset('assets/web-development.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Your website is not just a link you share; it is where people decide if they trust your business. At Allianze Digital, we do not build websites that just look good; we build platforms that work hard for you. Whether you are a growing startup or an established brand, we design every part of your site to reflect what you do, how you do it, and why people should care. Every detail, from layout to functionality, is tailored to make sense for your goals. As the best company for web development, we combine smart thinking with clean code to deliver results. We are not here to sell pre-made templates; we offer the best custom web development service in UK, crafted to match your pace and personality. This results in a website that not only appears online but also supports your growth, connects with your audience, and remains reliable as your business evolves. Let's build something that fits you, not everyone else.
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
      Our Wide Range of Website Development Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Content Management Service.jpg') }}" alt="Content Management Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Content Management Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The backbone of a well-established website is content management. Without depending on the technical teams, businesses can update, manage, and publish content digitally with a content management service. Our experts at Allianze Digital, develop user-friendly and scalable CMS platforms that offer complete control over the content of your website. Being the best custom web development service in UK, we make sure that your CMS aligns with the business structure.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Corporate Website Development Service.jpg') }}" alt="Corporate Website Development Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Corporate Website Development Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The corporate website development service involves creating a robust digital presence that aligns with the tone and professionalism of your brand. It is the process of developing and designing a professional website customised specifically for a business or organization to showcase its value, brand, and goals online. The expert developers we employ develop websites with clean architecture, scalable frameworks, and responsive design that facilitate long-term performance. We focus on writing efficient code, consolidating custom modules, and making sure that the backend supports effortless content management and secure performance.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="assets/Dynamic Website Development Service.jpg" alt="Dynamic Website Development Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Dynamic Website Development Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Creating websites that interact with users in real-time and display different content. Different from static sites, dynamic websites retrieve data from databases, enabling features such as login systems, dashboards, and product listings. The dynamic websites we craft respond to your users' actions, data inputs, and preferences. We design with function and flexibility in mind, whether it is a customer portal, interactive dashboard, or product filter. Partnering with the best company for web development, like Allianze Digital Co. UK, means attaining visuals as well as performance. We deliver digital experiences both meaningful and manageable through our best custom web development service in UK.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="assets/E-commerce Website Development Service.jpg" alt="E-commerce Website Development Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">E-commerce Website Development Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Building digital stores where businesses can sell products or services directly to customers is ecommerce website development. The process involves designing the storefront, establishing secure payment gateways, handling product listings, and enabling features including shopping carts, order tracking, and customer accounts. We create ecommerce websites that are secure and scalable digital stores customized to your product range and buyer behavior. Our experts manage the technical aspects, including checkout flows and real-time inventory sync, so that you can focus on fulfillment. Being recognised as the best company for web development, Allianze Digital makes sure that each element of your ecommerce site is developed for conversion.
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
        Why we are the Best Company for Web Development?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Business-First Design</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our service focuses on designing websites that align with your processes, audience, and goals. We make sure that every page serves an actual function by concentrating on usability and structure. This is one of the primary reasons why we are considered the best company for web development.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Features that Fit You</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            At Allianze Digital, we include features that are actually useful for your business. Our expert developers do not include fancy features, whether it is a booking firm, a contact tool, or a search filter. You can maximize a website that functions seamlessly without any unnecessary extras that slow you down by leveraging the best custom web development service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Performance that Delivers</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Having a slow website takes away your clicks, customers, and credibility. We give prime importance to speed, security, and stability from the beginning. With our service, we make sure that you get a fast and efficient website.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Smart Integrations, Less Hassle</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Your website should function well with the other tools you employ. This may include payment systems, email marketing, or customer databases. Our team ensures that everything connects properly and delivers smooth and easy website setups.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Clear and Simple Website</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We never overload your website with complicated layouts or jargon. Our team focuses on clean, user-friendly design that enables your customers to find what they require. We help businesses to develop trust and increase engagement by improving on clarity and ease of use.
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
      Allianze Digital - Best Custom Web Development Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      A well-developed website should not be an online placeholder; it should support your business like a reliable team member. At Allianze Digital, we understand that your needs are not the same as everyone else's. That's why we focus on function, clarity, and user experience, building websites that serve a purpose. Whether it's lead generation, better engagement, or a simple way to manage content, we build with intention. As the best company for web development, our job does not end with a launch; it continues with support, updates, and fine-tuning. And because every project we take on is different, we are proud to offer the best custom web development service in UK, with solutions that actually fit. No bloated features, no confusing layouts, just clean, effective web development that helps your business move forward.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          If you are looking for more than just a website, something that grows with you, Allianze Digital CO. UK is ready to build it right. Connect with us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection