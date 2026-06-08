@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Software-Development-Service-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Turn Your Business Challenges into Custom-Built Solutions With Us
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let's simplify your business processes with efficient software solutions. Call us now!
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
          <img src="assets/software-dev.jpg" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class=""> When your business is ready to move beyond off-the-shelf solutions, Allianze Digital is where innovation meets practicality. As a trusted leading software development company in UK, we bring your ideas to life with precision-built applications tailored to your specific workflows and goals. Our strength lies in crafting custom software development solutions that address real-world business challenges, with no bloated features, no unnecessary complexity. Just software that works the way you need it to.
            We do not follow trends; we follow your business logic. More than just choosing a software development agency, partnering with Allianze Digital means you get a dependable partner invested in your long-term success. Let's build something that works for you, not just something that looks good on paper.
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
      End-to-End Software Development Solutions For your Business
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/UI UX Design Service.jpg') }}" alt="UI/UX Design Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">UI/UX Design Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The UI/UX Design service involves the process of designing and functioning of a website. The User Interface or UI focuses on colours, buttons, and layouts of the website. Meanwhile, User Experience or UX refers to how a person feels and enjoys a website, app, or any digital product. At Allianze Digital CO. UK we not only make interfaces that seem nice, but also design experiences that work. Our UI/UX experts focus on clarity and user comfort, whether you are developing a mobile app, internal dashboard or website. This leads to more engagement, fewer drop-offs, and a system your users actually enjoy using.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Custom Software Solutions.jpg') }}" alt="Custom Software Solutions" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Custom Software Solutions</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of building a personalised software by considering the unique requirements of your business is referred to as custom software development service. The software is developed by tailoring your operations, goals, and workflows. Our experts at Allianze Digital took the time to understand what our customers really require. We develop software that suits your processes, whether it is an internal tracking system or a customer-facing platform. The software scales as your business develops. Also, you gain better control, long-term efficiency, and tighter integration. Firms that require tech to actually work for them make our custom software development service a smart investment.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Enterprise Software Development Service.jpg')}}" alt="Enterprise Software Development Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Software Development Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            These are the kinds of software developed to meet the requirements of large-scale business operations. The enterprise software can manage large volumes, complexity, and long-term performance. Our expert developers design and build enterprise systems that simplify departments, mitigate operational clutter, and enhance decision-making. Whether it's finance, logistics, customer management or HR, we make sure that the software fits your structure. The enterprise software solutions we provide bring order to quickly changing environments with data security, seamless integrations, and clear reporting. This service guarantees the growing enterprises that their software will advance with them.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Software Development Outsourcing.jpg') }}" alt="Software Development Outsourcing" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Software Development Outsourcing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of hiring an external service provider to develop and handle your software is known as software development outsourcing. We provide seasoned developers, testers, and project managers who manage everything from planning to delivery. You can be free from hiring an internal team or handling technical tasks outside of your expertise. Without long-term staffing expenses, the outsourcing service gives you access to experienced professionals, flexibility, and reliable results. As the most trusted leading software development company in UK, the outsourcing service at Allianze Digital delivers solid support, clear communication, and top-notch code, whether you are a firm looking for cost-effective expansion or a startup that requires a quick launch.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Software Support and Maintenance.jpg') }}" alt="Software Support and Maintenance" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Software Support and Maintenance</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            When a software goes live, it requires continuous care, fixes updates, enhancements and performance checks; this is software support and maintenance service. Our experts at Allianze Digital remain onboard to ensure your system remains secure, healthy, and updated. We are on hand when you require us, even if it's adapting to the latest technologies, updating features, or fixing bugs. Maintaining the software regularly helps in avoiding disruptions and safeguards your investment. Also, it helps you get peace of mind as expert help is within reach.
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
        Why we are the Most Trusted Leading Software Development Company in UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Customized Solutions for Better Performance</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We enable businesses to make use of solutions that fulfill their distinct needs with our custom software development service. This leads to better long-term performance, fewer workarounds and seamless operations.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Reliable Long-Term Support</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As your software development agency, Allianze Digital, offers updates, continuous support, and enhancements to keep your system operating seamlessly. Our service helps in avoiding disruptions and makes sure your tools stay aligned with business growth. This makes us the most trusted leading software development company in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost Efficiency and Value Over Time</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            By investing in the custom software development service at Allianze Digital, you can save licensing fees, avoid unnecessary features, and third-party limitations. Our software development agency assists you in mitigating maintenance costs and preventing system replacements by focusing on developing efficient and long-lasting solutions.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Stronger Data Security</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The software solutions we provide are designed with top-notch security. As the trusted leading software development company in UK, our experts implement strategic measures to safeguard your data from breaches or loss. This guarantees that your operations stay safe and compliant.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Flexible Integration with Existing Systems</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our software integrates effortlessly with your current tools. There will not be any disruption, no need to start from scratch. The custom software development provided by us keeps your functions seamless and efficient. We assist businesses to adapt without unnecessary complications or extra stress, as the trusted leading software development company in UK.
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
      Allianze Digital - The Trusted Leading Software Development Company in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Off-the-shelf software might get you started, but it rarely takes you where you want to go. That is where Allianze Digital steps in, with custom software development that adapts to your business, not the other way around. Our strategy is developed around understanding your operations, your future goals, and your pain points. As a trusted leading software development company in UK, we deliver more than just code. Our solutions are scalable and backed by an expert team that handles your project with expertise.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
<div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Get software that really fits your business with the most trusted leading software development company in UK. Connect with us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection