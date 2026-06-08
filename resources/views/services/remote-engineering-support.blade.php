@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Remote-Engineering-Support-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Leverage Flexible Engineering Support From Trusted Service Providers
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Get remote support tailored to your engineering needs. Contact us now!
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
          <img src="{{ asset('assets/engineering.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Engineering projects often demand more than just technical knowledge; they call for agility, timely execution, and a support team that knows how to adapt quickly to shifting requirements. That is where Allianze Digital steps in. Our remote engineering support service is built for companies that value consistency and technical excellence without the overhead of in-house expansion. We help fill critical technical gaps without disrupting your workflow. Clients trust us not just for skill but for the reliability that comes with years of specialized support. With a flexible engagement model and a team of seasoned professionals, Allianze Digital has quietly become one of the best remote engineering outsourcing services in UK, offering companies across industries a practical way to meet engineering demands, on schedule, on budget, and without compromise.
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
      Our Remote Engineering Support Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Engineering Documentation.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Engineering Documentation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Documentation is the basis of any technical project. The process involves everything, such as comprehensive drawings, compliance records, CAD files, maintenance manuals, and specifications. Our service is managed with accuracy and a strong focus on industry standards. Our team associates closely with engineers and design professionals to prepare, format, and structure every significant document in a consistent and accessible way. We make sure that nothing is missed in translation, whether you are handling upgrades, latest installations, or legacy systems. This benefits you in enhancing project coordination, facilitating seamless handovers, and minimising errors. Having vast experience in diverse sectors, Allianze Digital is the primary choice businesses make as the best remote engineering outsourcing services in UK.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/BIM and MEP Support.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">BIM and MEP Support</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Building Information Modeling (BIM) and Mechanical, Electrical, and Plumbing (MEP) coordination are significant for delivering precise and conflict-free building plans. We offer expert BIM and MEP support services that enable engineering and construction teams to picturise each element of a project in an integrated model. Our remote team helps with model updates and clash detection, guaranteeing precision in design and seamless on-site execution. We operate as an extension of your internal team to mitigate rework, enhance build quality, and prevent coordination delays. We manage each file and model with technical accuracy and clear version control. As the best remote engineering outsourcing services in UK, we bring clarity and order to complicated engineering tasks, without the overhead of internal staffing.
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
        Why We are the Best Remote Engineering Outsourcing Services in UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Reduced Overhead without Compromising Quality</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Outsourcing to the best remote engineering outsourcing service in UK, like Allianze Digital, enables businesses to considerably reduce their in-house expenses, including salaries, infrastructure, and training. Our expert remote engineering team manages every task with accuracy, guaranteeing high standards without the high price.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Access to Specialised Expertise</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Hiring in-house engineering professionals can be both time-consuming and expensive. We provide direct access to seasoned professionals across various specialisations. Clients can scale their teams fast with experts who are already trained and field-tested. Thanks to this flexibility, Allianze Digital is considered the best remote engineering outsourcing service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">24/7 Support Across Global Time Zones</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We have a round-the-clock service model that helps global clients to maximise seamless engineering assistance. Our commitment to quality, quick delivery, and constant availability makes us recognised as the best remote engineering outsourcing services in UK.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Seamless Integration With In-House Teams</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our team operates as an extension of yours rather than working as an external vendor. The remote engineers at Allianze Digital adapt to your tools, communication preferences, and workflows. We guarantee seamless project execution and better collaboration for businesses that value team cohesion and continuity.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Scalable Solutions for Projects of Any Size</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital has the potential to scale resources to fulfill the project demands, even if it is short-term assignments or a large-scale infrastructure plan. Our flexibility enables startups and enterprises to handle fluctuations in workload. This ability has given us the reputation as one of the best remote engineering outsourcing services in UK.
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
      Allianze Digital - The Best Remote Engineering Outsourcing Services in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Outsourcing engineering support should not feel like giving up control; it should feel like gaining a capable partner who works with the same level of precision and dedication as your internal team. At Allianze Digital, we do not just deliver technical outputs; we support your engineering goals as if they were our own. Our clients appreciate the smooth collaboration, timely updates, and the fact that we make remote work feel anything but distant. From minor adjustments to major project milestones, our engineers are just a message away, ready to assist, adapt, and deliver. It's this balance of professionalism, accessibility, and high-quality results that puts us among the best remote engineering outsourcing services in UK. If your engineering team could use a boost in bandwidth or expertise, we are ready to support you without the learning curve or lag.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Looking for the best remote engineering outsourcing services in UK? Contact us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection