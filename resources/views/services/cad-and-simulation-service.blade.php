@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/cad-simulation-service.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Maximise CAD and Simulation Service that Fits Right In
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Start your project with the best CAD outsourcing services in UK. Contact us now!
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
          <img src="{{ asset('assets/cad.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Design is only as strong as the foundation it rests on. At Allianze Digital, our CAD and Simulation services are built to support professionals who cannot afford to second-guess their technical drawings or models. Whether it is an architect shaping a new build or an engineer fine-tuning mechanical parts, we are here to bring those plans to life, accurately, and without complications. At Allianze Digital, we take the pressure off your team by handling the heavy lifting in CAD drafting and simulation. Need someone to take over repetitive design work? Or a reliable partner for complete drafting and analysis support? We will fit into your process without disrupting it. No generic templates, no rushed outputs, just careful, detailed work shaped around what you need. As one of the best CAD outsourcing services in UK, we do not just meet expectations, we keep your timelines steady, your quality intact, and your team focused on what matters most. If clarity and confidence in your designs matter, then you are in the right place.
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
      Our CAD and Simulation Services Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/CAD Drafting and Modeling.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">CAD Drafting and Modeling</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The foundation of modern engineering and architectural design is CAD Drafting and Modelling. This service offered by Allianze Digital delivers more than just basic schematics; we provide comprehensive 3D models and accurate 2D drafts customised to client specifications. We employ state-of-the-art tools to convert your design idea into professional, production-ready drawings. Our team ensures clarity, accuracy, and compatibility with your workflow, regardless of whether you are an architect requiring structural plans or a manufacturer needing mechanical parts. Leveraging the best CAD outsourcing services in UK, businesses can mitigate project expenses, save time, and maintain consistency across design stages.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Revit BIM Support.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Revit/BIM Support</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The Revit/BIM support service involves developing intelligent building designs with data-rich insight. The BIM support service using Revit at Allianze Digital enables businesses to coordinate, visualise, and manage construction data during the whole project lifecycle. We build visually detailed models that can carry significant data for implementation and facilities management, from clash detection to construction sequencing. Our approach benefits businesses with mitigated rework, improves team collaboration, and enhances decision-making across stakeholders. Being one of the best CAD outsourcing services in UK, the Revit/BIM team offers scalable and accurate solutions personalised for each project's objectives. This ensures your business stays ahead of the deadline and budgets without compromising quality or compliance.
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
        Why We Are the Best CAD Outsourcing Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Accuracy</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Accuracy is an essential factor in every successful project. At Allianze Digital, the CAD and simulation service guarantees complete clarity from beginning to end. Each drawing or model we provide is associated perfectly with the client's specifications. This is the primary reason why engineers and architects are relying on us for the best CAD outsourcing services in UK.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Simplified Project Timelines</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Outsourcing to Allianze Digital helps businesses get fast, reliable, and consistent CAD and simulation support. We have an expert team that enables you to maintain project momentum without compromising on detail. Partnering with us helps you experience the best CAD outsourcing services in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost-Effective</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            It is expensive to hire and train an internal design team. Maximising the CAD and simulation outsourcing service at Allianze Digital enables you to attain high-quality service at a low cost. Our seasoned experts follow strict quality control measures while keeping it affordable.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Flexible</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our expert team quickly adapts to your workflow, whether you require a full-scale modeling or just a few detailed drafts. The CAD and simulation service we offer is designed to facilitate projects of changing complexity, providing the clients with confidence that their requirements will be met. This makes us one of the best CAD outsourcing services in UK.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Improved Collaboration and Consolidation</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We make sure that the outputs of our CAD and simulation service smoothly align with your internal teams and third-party collaborators. The communication-first approach we follow facilitates seamless project execution. Businesses looking for the best CAD outsourcing services in UK are considering us as a reliable technical partner.
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
      Allianze Digital - The Best CAD Outsourcing Services in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Rushed designs and vague drafts do not belong in serious projects. That is why professionals turn to Allianze Digital when they need CAD and Simulation services that make sense from the first line to the final layer. We do not just deliver files, we provide structure to your ideas, accuracy to your measurements, and value to your time. Whether it is 2D drawings, 3D models, or simulation-backed decision-making, our work stands behind yours with quiet confidence. And if you are measuring the true cost of in-house resources versus expert support, we offer a clear answer: dependable results without the overhead. Partnering with one of the best CAD outsourcing services in UK is a smart move. When quality and collaboration matter, we are here to support your vision with work that speaks for itself.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let your designs take form with a partner that knows precision is vital. Contact us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection