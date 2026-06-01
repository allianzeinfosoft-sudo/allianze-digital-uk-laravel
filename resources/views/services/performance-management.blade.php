@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Performance\\ Management\\ Service\\ bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Keep Your Business on Track with Expert Performance Management Service
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Ready to simplify your workflows with expertise? Let us help you!
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
          <img src="{{ asset('assets/performance-research-concept.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Our experts at Allianze Digital enable businesses to have a trusted solution for tracking progress, making enhancements, and setting objectives. We help you bring clarity and structure to your processes when you are dealing with missed deadlines, inconsistent team output, or vague responsibilities. Our service facilitates both leadership and staff to remain focused, accountable and aligned through tailored strategies and practical tools. Having Allianze Digital on your back helps you attain seamless support, flexibility, and scalability, and is built across your actual requirements. That's why businesses across sectors trust us for the best Performance Management Services in UK, because we make progress something you can see, measure, and manage with confidence.
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
      Our Performance Management Services Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Performance Monitoring and Reporting.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Performance Monitoring and Reporting</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of tracking how the processes from daily operations to long-term goals in a business are running is performance monitoring and reporting. The experts at Allianze Digital enable businesses to monitor accurate numbers and understand what those numbers signify. More than just gathering data, it enables businesses to figure out what is working, what is delaying, and what has to be fixed. Our aim is to provide businesses with meaningful and clear insights through well-structured reports that are easy to interpret. We make sure that you have the facts that you require to make intelligent decisions, whether it is for productivity, service quality, team output, or timelines.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Workflow Optimisation.jpg') }}" alt="Document Management" class="object-top w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Workflow Optimisation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of streamlining the way things get done is workflow optimisation. Our experts at Allianze Digital analyse the tasks to identify how they are transported from start to finish and the point where they get duplicated, stuck, or delayed. We focus on enabling businesses to carry out their tasks better with minimal effort and more clarity. We help them in enhancing handoffs between teams, tightening up approvals, and avoiding unnecessary steps that delay everyone. This leads to less back-and-forth, invests more time in tasks that matter, and fewer mistakes. Firms seeking the best performance management services in UK found us most ideal as our approach is practical and grounded.
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
        Why We are the Best Performance Management Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Clear View of Team Progress</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital offers the best performance management services in UK with precise insights into goals, progress, and individual contributions. This enables businesses to identify strong performers, direct teams more effectively, and offer timely feedback. You can receive the tools to handle the problems that affect your operations much earlier, rather than waiting for them to make an impact.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Intelligent Decision-Making</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You can make smarter decisions by getting access to actual data. The performance management service offered by Allianze Digital provides structure to performance data, enabling you to identify gaps, patterns, and opportunities clearly. With the best performance management service in UK, managers can no longer depend on hunches.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Better Use of Time and Resources</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital delivers the best Performance Management Services in UK by helping you realign tasks, trim inefficiencies, and redirect focus toward what truly supports your business goals. Less trial and error, more clarity.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Keeps Teams Accountable</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            When expectations are unclear, performance suffers. Our service sets defined goals and tracks results in a way that's easy for teams to understand. That means everyone knows what's expected and how they're doing. Businesses that choose our best Performance Management Services in UK see improved accountability, better communication, and fewer surprises at review time.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Supports Long-Term Growth</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The structured approach offers businesses a constant rhythm for tracking, planning, and refining goals. We focus on building systems that support your future milestones. With Allianze Digital delivering the best Performance Management Services in UK, your business is better equipped to grow steadily and sustainably.
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
      Allianze Digital - The Best Performance Management Services in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      A well-run business does not leave performance to chance. At Allianze Digital, we believe effective performance management starts with having the right tools and a clear plan. We enable you to have clear insights into the matters that are falling short, need improvements, and the things that are going well. Our service focuses on actual results such as stronger partnerships, enhanced timelines, or better maximisation of resources. Our report and recommendations are built by considering your aims and working style. We do not offer a one-size-fits-all solution. Allianze Digital assists you in building a workplace where there is natural accountability rather than forced. That's what sets us apart and why our clients rely on us for the best Performance Management Services in UK.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          If you are ready for practical support that fits your team, we are ready to help you get there. Talk to our experts!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection