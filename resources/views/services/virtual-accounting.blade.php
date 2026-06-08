@extends('layouts.app')


@section('content')
    <!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Virtual-Accounting-Service-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Accounting Made Simple With the Best Virtual Accounting Services
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for the best virtual, online accounting service in UK to simplify your financial operations? We can help you!
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
          <img src="{{ asset('assets/Virtual-Accounting-Service.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Handling your business accounts should not feel like a constant game of catch-up. At Allianze Digital, our online accounting service is designed to keep your books accurate, current, and easy to understand, without adding to your workload. We do not just offer software; we provide real human support behind the numbers. Whether you are managing expenses, reconciling bank statements, or preparing for tax season, our online bookkeeping service ensures everything is in place when you need it. As one of the best virtual service providers, we tailor every solution to meet your business goals, not force you into a one-size-fits-all system. With our online accounting service in UK, you will always know where your money stands, without the need for an in-house finance team. We focus on clarity, consistency, and control, so you can spend more time growing your business and less time stressing over spreadsheets.
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
      Our Virtual Accounting Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Accounts-Payable-Services.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Accounts Payable (AP) Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of handling supplier invoices, vendor bills, and other business expenses accurately and on time is the Accounts payable service. Our online accounting team at Allianze Digital handles the complete processes, such as invoice verification, payment scheduling, and approval. Our experts avoid late fees, maintain a clear view of your cash flow, and keep your vendor relationships seamless. Our online bookkeeping service benefits businesses with timely payments, more organised accounting processes, and fewer errors. Our experts make it effortless to remain in control without the burden of everyday tasks by customising the methods we follow to align with your in-house systems and approval flows.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Accounts-Receivable- Services.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Accounts Receivable (AR) Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service involves monitoring and collecting payments owed to your business. Our professional online accounting team handles every process, such as invoice generation, follow-ups, and reconciliations. When the processes in AR are done accurately, customer communications remain professional and cash comes in seamlessly. The online bookkeeping service we provide assists in mitigating delays, reducing missed payments, and maintaining your financial records precisely and updated. We make sure that the reminders and communication align with your tone and schedule by adapting to your invoicing style and client base. You will gain better cash flow visibility and prevent unexpected gaps in income by maintaining your receivables on track. Being the best virtual, online accounting service in UK, many organizations rely on us as their go-to partner.
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
        Why We are the Best Virtual, Online Accounting Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost-Effective Financial Management</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As the best online accounting service in UK, Allianze Digital offers expert service tailored to your business requirements. Leveraging our virtual accounting service benefits you with expert support without overheads, such as no office space, no salaries, or no software purchases.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Round-the-Clock Access to Financial Records</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The online bookkeeping service we provide makes sure your numbers are accessible wherever you are. You will get clarity on your business finances with our best virtual tools in place. We store your data securely in the cloud. This will give you peace of mind and access through our reliable online accounting service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Real-Time Financial Updates</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital offers expert online accounting services that help you update your books regularly, in certain cases, daily. This immediate visibility enables you to make decisions on the move, facilitated by accurate numbers. The virtual bookkeeping service operates in adherence with your business rhythm, making financial management less about stress and more about control, everything through the best virtual accounting service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Expertise Without the Recruitment Hassle</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The virtual accounting service we provide connects you immediately with experienced professionals who are well-versed in UK tax codes, compliance norms, and reporting standards. We are proud of ourselves for delivering the best virtual finance support through our completely managed online accounting service in UK.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Scalable Services that Grow with You</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our online bookkeeping service gives you the flexibility without fuss. You can include payroll, financial forecasting, or VAT support as your business grows. We adapt to your peace, providing the best support structure without confining you to strict contracts.
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
      Allianze Digital - The Best Virtual, Online Accounting Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Numbers do need efficient management. At Allianze Digital, our goal is to simplify that process with a virtual accounting service that feels personal, not robotic. You are not just hiring an online bookkeeping service; you are gaining a partner who keeps a close eye on the financial health of your business. Whether you need basic bookkeeping or more advanced support, our services are structured to grow with you. We are proud to be known for delivering the best virtual solutions that fit the real-world needs of business owners. Our online accounting service in UK benefits you with accurate records, expert insights, and reliable reports, all without altering paperworks or tracking your accountant.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Seeking a reliable online accounting service in UK? Let’s work together. 
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection