@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/digital-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4"> 
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] 
                      [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
                      Simplify Your Business Workflows with the Best Digital Transformation Services 
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let’s make your operations simple. Talk to our experts today! 
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
          <img src="{{ asset('assets/data-entry.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Establishing a business and running it is not just about delivering products or services. This is the way things operate behind the scenes. Systems stop communicating with each other when small tasks accumulate. This makes everything take longer than it should. Now, it's time to sit back and reconsider the setup. That's where Allianze Digital comes in. The digital transformation consulting service we provide makes your everyday operations effortless. Our team delivers solutions that precisely suit the way your business operates. We aim to make your system support you efficiently, even if it is automating routine work or connecting disconnected tools. Businesses across different sectors trust us for the best Digital Transformation Services in UK, not because we offer one-size-fits-all solutions, but because we focus on what works for you.
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
      Our Digital Transformation Service Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Document Forms and Automation.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Forms and Automation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of substituting repetitive manual paperwork with intelligent systems that manage data entry, routing, validation, and storage with less human effort is Document Forms and Automation. We focus on assisting businesses to mitigate the time invested in paperwork by developing custom automation tools. These tools can collect, process, and categorise data seamlessly. We create fast, easy-to-manage, and accurate workflows, whether it is for onboarding forms, applications, compliance documents, or invoices. Partnering with the best digital transformation service in UK, like Allianze Digital, enables businesses to prevent bottlenecks, free up in-house staff to focus on strategic work, and cut down on processing errors. The services we provide adapt to your processes, which makes automation practical.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Business Process Automation.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Business Process Automation</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It involves streamlining and organising daily operations to manage repetitive tasks that do not need continuous supervision by using technology. Our expert service helps firms to reduce delays, enhance task accuracy, and prevent manual interventions. We make your processes function seamlessly during processes such as employee onboarding, inventory updates, approvals, and task assignments. Allianze Digital associates closely with clients to understand their current workflows and design automation that supports their teams. This will contribute to better utilization of resources, greater consistency, and a system that scales with your business.
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
        Why We are the Best Digital Transformation Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Time Saving on Routine Tasks</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            It is easy to lose hours each week doing the same small tasks over and over. With help from Allianze Digital, those everyday jobs can be automated, giving your team more breathing room. Our digital transformation consulting helps shift the focus to tasks that actually need human attention. It's one of the reasons we are trusted for the best Digital Transformation Services in UK, we make your workday easier to manage.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Less Costly Mistakes</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Manual work opens the door to typos, skipped steps, and wrong data. We build systems that handle the routine stuff with care and consistency. With our digital transformation consulting, businesses stop worrying about small mistakes adding up. Clients who use the best Digital Transformation Services in UK enjoy smoother workflows, cleaner records, and peace of mind that the basics are being handled right.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Teams Work Better Together</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            When teams rely on too many different tools or emails, things get lost, delayed, or misunderstood. At Allianze Digital, we bring everything into one clear system. The digital transformation consulting service we provide makes it effortless for people to monitor progress, share updates, and get approvals without the usual back-and-forth. With the best Digital Transformation Services in UK, your team spends less time chasing details and more time getting things done.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Save Costs Without Cutting Corners</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Businesses think they have to spend more to improve their operations. However, with Allianze Digital, businesses can do more by spending less. The digital transformation consulting service we provide focuses on making your prevailing system work smarter. We help you mitigate expenses without compromising quality or service.
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
      Allianze Digital - The Best Digital Transformation Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      You do not need to tear everything apart to make your business better. Sometimes, the right changes in the right places can bring real improvements. At Allianze Digital, we help businesses work smarter through thoughtful, down-to-earth solutions. Our digital transformation consulting is about making your existing systems more useful, not replacing everything you know. Whether it's cutting out repetitive tasks, speeding up approval processes, or just helping your team stay better connected, we work quietly behind the scenes so you can focus on what matters most. We are proud to be known for delivering the best Digital Transformation Services in UK because we keep things practical and easy to follow. No confusing jargon, no unnecessary tech, just clear steps forward.
    </p>
  </div>
</section>



<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Turn your challenges into simplified solutions with the best digital transformation service in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection