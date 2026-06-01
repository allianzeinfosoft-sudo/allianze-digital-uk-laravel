@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Content-Writing-Services-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Best Content Writing Services in UK for Your Business Needs
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Leverage professional content writing tailored to your brand. Contact us now!
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
          <img src="{{ asset('assets/Content Writing.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            The demand for content writing is on the rise. Various businesses and firms are availing the best content writing services in UK to increase the visibility of their services in search engines, earn the trust of the customers, and inform the audience. Allianze Digital offers professional content writing services that focus on relevance, clarity, and purpose. We know that apart from being just words, efficient content should reflect your values, support your objectives, and communicate to your audience. We maintain the appropriate balance between personality and professionalism, regardless of your requirements, such as blog posts, case studies, or web copies. Allianze Digital houses seasoned and qualified professionals to deliver premium services that meet the requirements of your industry, audience, and tone. Our experts craft every piece with utmost care, thorough research, and frequent revisions until it fulfils the standards your business deserves.
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
      Our Diverse Content Writing Service Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Website Content Writing.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Website Content Writing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of creating clear, accurate, and engaging text that resonates with your brand's tone and purpose across your web pages is known as website content writing. Each word written has a significant role in website content writing; it can guide the visitors, inform them, or prompt action. Allianze Digital offers affordable and premium content writing that assists in developing trust with potential clients and enhances user experience by making navigation more intuitive. Our expert writers focus on ensuring consistency throughout the site by tailoring the content to the goals of your business. We keep the language simple and direct and thereby enable your pages to speak confidently to your audience.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Blog Content Writing.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Blog Writing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the art of turning data into valuable, readable insights that connect with your audience. A high-quality blog post educates as well as compels the readers to initiate a conversation, encouraging the readers to think, react, and return. As the best content writing services in UK, our seasoned content writers craft blogs through meticulous research and structure that deliver true value, like tips, opinions, or how-to guides.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Case Study Writing.jpg') }}" alt="Case Study Writing" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Case Study Writing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            This service helps in converting real client experiences into captivating narratives that exhibit the potential of your business in rectifying problems. Case study writing involves describing the challenge, describing the approach taken, and showcasing the outcome with clear, measurable results. We create case studies that are both factual and engaging. Our writers emphasize your strength while focusing on clarity and keeping the language straightforward. The purpose of case studies is to help potential customers know how your service can assist them and approach you if any similar challenges happen to them. A well-organised case study can develop trust by exhibiting your expertise with proven results.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Product Description Writing.jpg') }}" alt="Product Description Writing" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Product Description Writing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It involves writing short and clear texts that describe a product, its use, and why it should be purchased. This helps customers to make informed decisions. The product description writing service we offer aims to deliver precise and appealing descriptions customised to your audience. Our service highlights the uses, benefits, and differentiators in a tone that aligns with your brand. A clear and persuasive description helps customers make confident decisions and reduces returns. With SEO optimised product description writing, we bring more traffic to your product pages. We make sure that the descriptions we write communicate directly to their readers.
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
        Our Content Writing Edge Over the Rest
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Enhanced Brand Identity</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Leveraging our professional content writing helps your brand gain a consistent voice that develops trust and makes you stand out. We provide the best content writing services in UK for a lasting brand impact.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Higher Search Visibility</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The premium content writing we offer is optimized for search engines to enable your website to rank better. We make sure that your business gets to the potential customers.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Engaging Audience Experience</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Allianze Digital Co.UK specialises in creating explicit, relevant and valuable content that engages your audience. You get meaningful connections through our professional content writing that boost loyalty and interest.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Stronger Conversions</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our premium content writing service directly aligns with the requirements of your audience, encouraging action. This is one of the significant reasons why we are considered the best content writing services in UK that drive results.
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
      Allianze Digital - The Best Content Writing Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Choosing a content writing partner is not just about outsourcing work; it's about finding someone who understands your message and can express it the way you would. At Allianze Digital, we approach every project with genuine attention to detail, regardless of how big or small it is. We do not just write, we listen first, then craft content that fits your goals and speaks clearly to your audience. Our premium content writing gives you more than polished words. Rather than just writing, we offer more, such as thoughtful planning, reliable structure, and a team that delivers on time. That is what makes us one of the best content writing services in UK, a trusted partner for businesses that want quality without compromise.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Enhance the visibility of your business with the best content writing services in UK. Let us help you!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection