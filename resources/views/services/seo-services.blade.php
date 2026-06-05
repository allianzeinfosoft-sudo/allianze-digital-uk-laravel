@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/SEO-Service-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Increase Your Search Visibility with the Best SEO Service Agency in UK
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Partner with the trusted SEO agency to help your business get found. Contact us today!
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
          <img src="{{ asset('assets/SEO.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Being online is not enough; your audience needs to find you easily. At Allianze Digital, we help you climb the search rankings with honest, effective SEO. We are not about flashy promises or shortcuts. Instead, we focus on strategies that work. From checking what is holding your site back to helping you rank for the right keywords, we cover everything.
            As a trusted SEO company in the UK, we serve clients across Europe who want better visibility and more leads. Our methods are tried, tested, and tailored to fit your business, not copied from someone else's playbook.
            We are proud to be seen as the best SEO service agency in UK and Europe, and we're ready to help you grow your reach the right way.
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
      Our Comprehensive SEO Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/SEO Audit Service.jpg') }}" alt="SEO Audit Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">SEO Audit Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            An SEO audit gives you a clear picture of what's working on your site and what's not. We look at technical errors, broken links, page speed, structure, and more. At Allianze Digital, we run detailed checks and give you a practical list of what needs fixing. Our report is easy to understand, no jargon, no confusion. Leveraging our expert SEO audit service helps you identify missed opportunities and avoid issues that drag your site down. We conduct regular audits to enable your website to remain competitive and healthy in search results.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Competitor Analysis.jpg') }}" alt="Competitor Analysis" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Competitor Analysis</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Competitor analysis helps you see where you stand in your market. We study your top rivals, what keywords they target, where they get backlinks, and how their content performs. At Allianze Digital, the expert SEO company we use this insight to fine-tune your SEO strategy. You will know what gaps to close and where you can get ahead. With us, you will have a strategic plan that is built on real data. This helps you win traffic more easily and stand out in the competitive space.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Keyword Research.jpg') }}" alt="Keyword Research" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Keyword Research</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Finding the right keywords is the foundation of good SEO. We look beyond obvious search terms and focus on what your customers are actually typing into Google. Our team at Allianze Digital finds keywords that bring real value, not just traffic, but the right kind. We categorize them with intent, align them to your content, and monitor their performance over time. This assists in captivating the attention of the target audience who are ready to buy, book, or get in touch.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/On-Page SEO.jpg') }}" alt="On-Page SEO" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">On-Page SEO</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the process of making your website pages easy for both users and search engines to understand. At Allianze Digital, the experienced SEO company, our SEO experts manage things such as title tags, meta descriptions, headers, internal linking, and keyword placement. Leveraging our service helps you get clearer, cleaner, and more useful content. We make small changes to get you greater results, and it contributes to better rankings, longer visits, and more clicks. Our experienced and professional SEO team makes sure you gain more traffic by ensuring every page on your site is working.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Off-Page SEO.jpg') }}" alt="Off-Page SEO" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Off-Page SEO</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Leveraging Off-page SEO develops the trust and authority of your website outside of your own pages. We focus on quality backlinks, content sharing, and mentions from reliable sources. At Allianze Digital, we do not buy links or chase spammy tactics. Rather than that, we assist you in getting links the right way. This enables you to increase your reputation in the eyes of search engines, making it effortless for your site to rank. Eventually, this gives you more organic traffic and domain strength.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="assets/Local SEO.jpg" alt="Local SEO" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Local SEO</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service focuses on finding your business when people search in that area. Local visibility makes all the difference, whether you are a small shop owner or a regional service provider. We enhance your Google Business Profile, handle local listings, and target local search terms. At Allianze Digital, we help you appear in "near me" searches, maps, and local packs. This drives more phone calls, visits, and local leads, exactly where you need them most.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Features Grid Section: Dark background with 6 numbered items -->
<section id="features" class="py-16 bg-secondary text-white bg-slate-900" >
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-6 py-3 rounded-full shadow-md">
        Why Us
      </span>
      <h2 class="text-3xl md:text-4xl mt-4 font-bold text-white">
        Why Choose Allianze Digital?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Honest SEO That Delivers</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            At Allianze Digital, our experts strive to keep things simple and honest. You will always get updates on what we are doing, why we are doing it, and what the expected outcome is. Our approach is direct and measurable. We focus on meaningful growth and honest reporting, so your investment brings real returns, not just traffic with no results.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Fully UK-Based Team</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            As we are the best SEO service agency in UK, we house an expert SEO team that understands local audiences, market trends, and search behaviour. This ensures that we tailor your content and keywords for relevance and accuracy. Working with a local team helps avoid cultural gaps and ensures your SEO fits your UK business perfectly.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Personalised SEO Plans</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We take the time to learn your requirements, goals, and budget, as we know that every single business has its own specific requirements and strategies, and a one-size-fits-all SEO cannot do justice to them. Then, we develop a plan that enhances your visibility, rectifies issues, and ranks as a topper for niche keywords.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Real-Time Reporting</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We like to keep things clear and straightforward. You will get regular updates with reports that actually make sense, and there will be no confusing dashboards or empty stats. We will show you what's working, what we are planning next, and how your site's doing overall. It's all about giving you insight you can trust and use.
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
      Let's Put Your Business Where People Can Find It
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      You do not need to be an expert in search engines to get results; you just need the right team on your side. At Allianze Digital, we keep SEO simple and effective. We stick to what actually works and skip what doesn't. Every keyword, every page update, and every backlink we build has a clear purpose, which is to help your business grow. As the trusted SEO agency in UK, we are here to help you with increased traffic, more leads, and better visibility.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets//9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Connect with us now to enjoy the benefits of working with the best SEO service agency in UK.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection