@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/bpo-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4"> 
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Redefine Your Business Efficiency With the Best Business Process Optimization Service in UK 
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let’s Make Insurance Data Work Smarter! Talk to Our Experts Today
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
          <img src="{{ asset('assets/business-process.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            At Allianze Digital, our process optimization service is built to bring clarity and order to the way your operations run. We look closely at how your teams work, where tasks overlap, and where resources could be better used. With the support of our AI process service, we help you find better ways to manage your workflow, not by overhauling everything, but by making each part function smarter. From improving turnaround time to enhancing accountability, our tailored solutions focus on real, measurable progress. As one of the best business process optimisation services in UK, we do not deal in guesswork; we rely on accurate process mapping, data-backed decisions, and hands-on collaboration.
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
      Our Process Optimisation Service
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/processmap.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover object-top">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Process Mapping and Modeling</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of visually mapping the steps, decisions, and tasks involved in a business process to understand how work flows through teams and systems. At Allianze Digital, our AI process service uses clear, data-backed modeling to identify inefficiencies, overlaps, and delays in your operations. We do not offer generic charts; we deliver tailored insights into how your business truly runs, from start to finish. This enables business organisations to restructure workflows for enhanced collaboration, fewer errors, and better performance. By leveraging our service, businesses can attain visibility as well as a base for making thoughtful enhancements.
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
        Why We are the Best Business Process Optimisation Services in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Removes Operational Bottlenecks</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            By identifying where tasks slow down or overlap, our AI process service helps streamline workflow and cut unnecessary delays. Allianze Digital pinpoints inefficiencies that often go unnoticed in routine operations. As part of the best business process optimisation services in UK, we redesign your workflow to keep everything moving steadily, saving both time and effort without disrupting your core operations.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Reduces Costs Without Cutting Corners</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our AI process service not just improves how things are done; it highlights where resources are being wasted. Whether it's time, staff effort, or unnecessary steps, we help businesses trim down without compromising quality. As a provider of the best business process optimisation services in UK, Allianze Digital focuses on efficiency that makes sense, where every action adds value and every resource is wisely used.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Improves Accountability and Clarity</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Process optimization with Allianze Digital introduces structure. By mapping roles and responsibilities clearly, our AI process service enhances communication and reduces confusion. Our teams know what is expected, and executives know where to look when issues arise. With the best business process optimisation services in UK, businesses gain stronger internal control, helping ensure that no task or deadline falls through the cracks.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Supports Consistent Quality Output</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You can minimize the errors and get more reliable outcomes by standardising the way the tasks are executed. We assist you in making repeatable, well-documented procedures that facilitate long-term consistency with our AI process. Businesses that work with Allianze Digital, recognized for the best business process optimisation services in UK, can expect fewer surprises and more predictable results, regardless of staff changes or project complexity.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Builds a Foundation for Growth</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You can't scale chaos. Our team enables businesses to create solid, efficient workflows that are effortless to duplicate and expand with our AI process. The simplified operations we follow make scaling seamless, even if you are recruiting new teams or getting into new markets. That is why organizations turn to Allianze Digital for the best business process optimisation services in UK, because growth is simpler when your foundation is built right.
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
      Allianze Digital - The Best Business Process Optimization Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Efficiency does not come from working harder; it comes from working better. That is where Allianze Digital steps in. With our AI process service, we help businesses turn scattered routines into smooth, structured operations. Our approach is not about applying generic templates. The experts we house analyse the processes and categorise the processes that really work, and revise the processes that are not working. Also, we enable your team to focus on their priority tasks as our process prevents delays, streamlines workflows, and clarifies responsibilities. Partnering with the best business process optimisation service in UK, enables businesses to understand that long-term performance begins with internal strength. Allianze Digital believes in building systems that serve your goals, not the other way around. Let's fine-tune your processes into something more dependable, more productive, and far easier to manage.
    </p>
  </div>
</section>



<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Seeking the best business process optimization service in UK? Well, we got you! Connect with us now!
        </h2>
        <a href="{{ route('contact-us')}}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection