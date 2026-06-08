@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Bookkeeping-Services-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Accurate and Reliable Bookkeeping Services for Seamless Financial Tracking
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let us help you simplify your finances with expert bookkeeping services in UK. Contact us now!
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
          <img src="{{ asset('assets/Bookkeeping-Services.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Running a business comes with its fair share of responsibilities, and keeping your books in order should not slow you down. At Allianze Digital, we provide dedicated bookkeeping support tailored to your business structure and rhythm. Whether you are a small company managing routine expenses or a growing enterprise juggling multiple revenue streams, our team ensures your financial records stay accurate and up to date. We go beyond simple data entry; we help you stay compliant with your tax obligations, including detailed VAT service support. Each transaction is carefully documented and reviewed, giving you confidence in the numbers behind your decisions. With years of experience and a commitment to consistency, we have earned our place as the best bookkeeping outsourcing service in UK. From clear reports to responsive service, our goal is to make financial tracking simple, reliable, and stress-free.
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
      Our Wide Range of Bookkeeping Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Transaction-Recording.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Daily/Weekly/Monthly Transaction Recording</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Transaction Recording is the basis of precise bookkeeping. The Bookkeeping service we deliver at Allianze Digital offers organised transaction logging based on the volume and requirements of your business on a daily, weekly, or monthly basis. The accounting service experts we house meticulously input and categorise each payment, invoice, receipt, and expense. Our consistent record-keeping makes sure your business gets access to immediate financial snapshots, enabling them to make better decisions and stay compliant. The customised approach we follow makes everything transparent and structured, even if you are handling VAT service responsibilities or monitoring operational cash flow. As the best bookkeeping outsourcing service in UK, we combine accuracy with consistency, liberating in-house employees from the time-consuming and laborious task of data entry.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Ledger-Maintenance.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">General Ledger Maintenance</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            A trustworthy financial report requires a clean and balanced general ledger. The process involves continuously managing and updating a company's financial records. At Allianze Digital, we make sure every account, including assets, revenues, liabilities, and expenses, is precise and updated through our expert general ledger maintenance. This organised approach facilitates regulatory compliance, especially when handling VAT service documentation and reporting. We have experienced and skilled accounting professionals who constantly reconcile ledger entries, rectify discrepancies, and give comprehensive reports that explain your financial position. Most of the businesses in UK rely on our expertise to craft trustworthy financial reports and stay prepared for audits, internal reviews, and tax filing without any stress.
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
        Why we are the Best Bookkeeping Outsourcing Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Clear Financial Visibility</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            With us managing your bookkeeping, we ensure every transaction is accounted for and every number has a place. This enables business executives to identify trends, handle budgets, and make intelligent decisions. We provide accurate financial records that support better financial planning and support.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Stress-Free VAT Compliance</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The bookkeeping service we provide guarantees every entry associated with VAT is maintained precisely and systematically. We make compliance seamless and efficient, even if it's quarterly returns or audit readiness. Being a reliable VAT service and reporting support, we mitigate the risks and prevent penalties.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Cost-Effective Financial Management</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We offer bookkeeping services at an affordable cost without compromising quality. Outsourcing to our seasoned accounting service team helps businesses to save on overheads and prevents recruitment hassles. By partnering with us, you get access to experienced professionals managing your accounting services at a fraction of the cost.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Reliable Audit Preparation</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The bookkeeping service at Allianze Digital makes sure every ledger and report is structured and on hand for review. Our accounting service experts sync bookkeeping processes with audit standards, such as those required for VAT service documentation. Partnering with the best bookkeeping outsourcing service in UK, like us, you can present clean and verifiable records.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">More Time to Focus on Business</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Associating with Allianze Digital, businesses regain hours each week to focus on growth and strategy. The accounting service manages the everyday tasks such as invoices and reconciliation. This enables companies to focus on their clients.
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
      Allianze Digital - The Best Bookkeeping Outsourcing Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      At Allianze Digital, bookkeeping is not just about numbers; it is about giving businesses space to breathe, plan, and grow without financial uncertainty holding them back. Our structured approach helps keep your general ledger clean, your transaction history complete, and your VAT service filings ready when needed. We bring order to the chaos of receipts, invoices, and reconciliations, delivering an accounting service that is both dependable and easy to work with. It is not about how many clients we serve; it is about how well we serve yours. That focus on detail and reliability is what positions us as the best bookkeeping outsourcing service in UK.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let Allianze Digital handle your bookkeeping, so you can focus on building the future.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection