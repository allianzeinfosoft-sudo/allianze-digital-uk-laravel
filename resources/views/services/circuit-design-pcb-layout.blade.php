@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url({{ asset('assets/PCb-design-layout-service-bg.jpg') }});">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Build Smarter With the Best PCB Design and Layout Service
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Simplify your PCB Design and Layout outsourcing service in UK with experts. Get Started now!
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
          <img src="{{ asset('assets/pcb.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Designing a reliable printed circuit board requires more than just software skills. It demands hands-on expertise, precision thinking, and a clear understanding of how each layer works in harmony. At Allianze Digital, we take the burden off your in-house team by offering detailed and practical PCB design and layout outsourcing services that align with your project goals. Our seasoned engineers manage each phase from schematic entry to component placement and routing with accuracy and care. We provide customised solutions that focus on manufacturability, functionality, and long-term reliability. As one of the best PCB Design and Layout outsourcing services in UK, our approach is rooted in practical circuit design principles and efficient electrical design techniques. Partnering with us means getting high-quality results without the need for guesswork or delay.
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
      Our PCB Design and Layout Outsourcing Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Analog & Digital Circuit Design.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Analog & Digital Circuit Design</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Analog and digital circuit design is the backbone of functional electronics. Analog circuits handle continuous signals like audio and sensor outputs, while digital circuits manage discrete data essential for processing and control. At Allianze Digital, both are developed with a careful eye on performance, power efficiency, and compatibility. The team does not just design for functionality; they aim for smooth integration into the client's end product. Whether you are developing a consumer device or a custom industrial solution, their circuit design support adapts to the scale and specifications of your requirements. By combining deep electrical design knowledge with practical experience, Allianze delivers clean, dependable schematics that reduce testing cycles and prevent downstream issues. As one of the best PCB Design and Layout outsourcing services in UK, Allianze ensures every circuit design is ready for manufacturing, compliant with industry standards, and optimized for long-term use in real-world conditions.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Single & Multi-Layer PCB Design.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Single, Double & Multi-Layer PCB Design</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The PCB design involves placing components as well as structuring layers to facilitate electrical performance, signal integrity, and thermal stability. Our tailored PCB layout service covers single, double, and multi-layer configurations. For basic and low-density designs, a single-layer board is perfect. Meanwhile, a double-layer board can manage moderate complexity with improved routing options. Multi-layer PCBs are meticulously organised for high-performance applications to support dense circuitry and quicker signal flow. Our experts design each board with close attention to trace layout, grounding strategy, and material selection, some critical aspects of professional electric design. Our service is well recognised for providing production-ready layouts with less rework, even for medical devices, industrial systems, or consumer tech.
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
        Why We are the Best PCB Design and Layout Outsourcing Service in UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Expertise That Makes a Real Difference</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            When you outsource PCB layout and design to Allianze Digital, you tap into years of experience in circuit design. Our team knows exactly how to bring a schematic to life with precision and practicality. We make sure your board functions as expected by meticulously placing each element and carefully testing.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Lower Costs, Better Value</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Maintaining an in-house team for PCB layout and design is not cheap; there is the cost of hiring, training, tools, and rework. With Allianze Digital, you pay only for what you need, when you need it. This gives you access to the best PCB Design and Layout outsourcing service in UK without the long-term expenses. It is an efficient way to manage both your project timeline and your budget.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Quicker Project Turnaround</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Time is often tight in product development. Delays in design can stall everything. Allianze Digital has refined its process to deliver quality circuit design work without unnecessary hold-ups. With a reliable team and clear communication, you get faster results and fewer rounds of revision. It is a practical way to keep your project moving forward without cutting corners in electrical design quality.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Reliable Quality</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You would not find guesswork in our process. Every board design is checked for performance, layout accuracy, and manufacturing readiness. This means fewer errors, smoother production, and less waste. Our attention to detail in electrical design makes sure nothing slips through the cracks. This commitment to quality is a major reason why many consider us the best PCB design and layout outsourcing service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Room to Grow Without the Headaches</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Whether you need help with a single project or ongoing support for a growing product line, Allianze Digital adapts to your needs. We can handle small custom layouts or large, multilayer boards with equal care. Having this kind of flexibility means you would not be scrambling for extra resources. Instead, your circuit design requirements are met quickly and smoothly, no matter how complex they get.
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
      Allianze Digital - The Best PCB Design and Layout Outsourcing Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      At Allianze Digital, we do not believe in one-size-fits-all solutions. The PCB layout and design service we offer is developed around your distinct technical and production requirements. We make sure that the final result is ready for seamless integration into your manufacturing line. Outsourcing the PCB requirements to a trusted partner helps companies seeking to scale without stretching internal resources. And when it comes to consistency, quality, and reliability, we stand out as the best PCB Design and Layout outsourcing service in UK. Trust us to handle the complexity while you stay focused on innovation.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let's build something that works with the best PCB Design and Layout Outsourcing Service in UK. Contact us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection