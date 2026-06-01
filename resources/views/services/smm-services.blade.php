@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Social-Media-Marketing-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Grow Your Business with the Best Social Media Marketing Agency in UK
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Ready to build a stronger online presence? Contact us now
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
          <img src="{{ asset('assets/Social-Media.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Social media has become more than just a way to connect; it's now a key part of how businesses reach, engage, and retain their audience. At Allianze Digital, we offer reliable and results-focused social media marketing services tailored to your brand's goals. From detailed audits to smart advertising and performance tracking, we help you make the most of every platform you use. As the best social media marketing agency in UK, we understand that every business is different. Therefore, our experts develop strategies that align with your voice and communicate directly to your customers. We assist your brand to grow digitally with the accurate combination of planning, insight, and creativity.
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
      Our Diverse SMM Service Portfolio
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Social Media Account Audit.jpg') }}" alt="Social Media Account Audit" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Media Account Audit</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The detailed analysis of the current social media presence of your business is referred to as a social media account audit. Allianze Digital Co.UK transcends surface-level checks. Our experts carefully observe your branding, posting habits, content quality, follower engagements, account settings, and bio details to find out what is working and the obstacles you face. As the best social media marketing agency in UK, we maximise these insights into a clear action plan. Our audit assists businesses in preventing guesswork and building robust foundation for future campaigns. We make sure your channels are consistent, clean, and all set to perform, even if you are managing multiple accounts or just beginning. Having better support from a reliable marketing agency helps you make a real impact on your business.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Social Media Strategy.jpg') }}" alt="Social Media Strategy" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Media Strategy</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is the strategy for maximising the most of each platform. The strategy outlines the things to post, and the date to be posted, who you are speaking to, and what you want to attain. At Allianze Digital Co.UK, the best social media marketing agency in UK, we make customized strategies to align with your brand's voice and your business goals. Our SMM experts develop authentic relationships with their followers and build constant communities. Associate with the best social media marketing agency in UK to stay significant, results-driven, and consistent.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Social Media Advertising.jpg') }}" alt="Social Media Advertising" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Media Advertising</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Social Media Marketing service enables businesses to reach the target audience at the right time. Different from organic posts, paid campaigns aim at specific audiences on the basis of age, location, interests, and online behavior. Allianze Digital CO.UK plans and runs ads that get noticed and converted. As a seasoned and professional marketing agency, we know how to maintain performance and creativity at the right balance. We create ads that meet your goals, including raising brand awareness, driving sales, and promoting a product. Our team seamlessly tracks results and modifies them for better impact.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Social Media Analytics and Reporting.jpg') }}" alt="Social Media Analytics and Reporting" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Social Media Analytics and Reporting</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Social media analytics and reporting are all about understanding how your content performs. It helps track key metrics, spot trends, learn what your audience loves, and improve future strategies. Being the best social media marketing agency in UK, we offer you clear, and convenient reports that enable you to understand what is really working and what things require change. As your trusted social media marketing partner, we keep things simple and clear. No confusing graphs or meaningless stats, just the insights that actually matter. We track your audience growth, content performance, the best times to post, and your return on investment. Every report we deliver comes with easy-to-understand explanations and practical tips you can act on right away.
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
        Why Allianze Digital Co.UK is the Preferred Choice for SMM Services in the UK?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Builds Brand Awareness</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We help your business get noticed through our expert SMM services. Our SMM experts craft consistent, engaging content that resonates with your brand and connects with your audience. We help more people recognise and memorise your business by keeping your brand name visible across platforms. This makes it easier to build trust and stand out in a busy market.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Drives Targeted Traffic</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our seasoned SMM team customises posts and paid ads to attract potential audience to your website. They are users who are already interested in your offerings, which implies a higher chance of clicks that may turn into sales or valuable enquiries for your business.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Encourages Customer Engagement</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            A strong social media is not always a one-way message, but it is a conversation. We help your brand to stay active and responsive online, engage with your followers, share updates, and reply to questions. This develops a loyal community and improves customer experience, which can result in repeated business and word-of-mouth referrals.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Supports Sales and Conversions</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We support your sales goals through our campaigns. Our experts assist you in guiding customers from awareness to action through various strategies, including promotional posts, targeted ads, or limited-time offers. We make your social media platforms as powerful tools to generate leads through compelling calls to action and smart timing.
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
      Your Growth Starts with the Right Strategy
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      At Allianze Digital, we do not believe in guessing or following the crowd. Our aim is to help the digital growth of your business by genuine engagement, meaningful results, and clear strategy. Our team is always here to support you at every step, whether you are getting started or need to enhance your current presence. Being the best social media marketing agency in UK, we will be a team that listens, plans, and delivers. From building awareness to increasing sales, our social media marketing services give you the tools to connect with the right people and keep them coming back.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Let's build something that works, together. Connect with us now!
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection