@extends('layouts.app')


@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/virtual-assistant-services-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Manage Your Business Smoothly with Expert Virtual Support
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Looking for the best virtual assistance BPO services in UK, Europe?
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
          <img src="{{ asset('assets/virtual-assistant.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            Running a business means juggling a lot at once. Calls, emails, customer questions, admin work, it all adds up. At Allianze Digital, our remote assistant service offers smart, reliable help without the need for full-time staff. We provide trained virtual assistants who handle day-to-day work with care and consistency. Whether you're a growing startup or a busy enterprise, our support helps you save time and stay organised.
            We offer one of the best virtual assistance BPO services in UK, Europe, and our team is ready to take on the tasks you don't have time for. You'll get more done with less stress. And yes, our support runs smoothly in the background, keeping your business moving without interruptions.
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
      Our Virtual Assistant Services
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Customer Support Services.jpg') }}" alt="Internal Audit Preparation" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Customer Support Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service involves helping customers with their enquiries, complaints, or concerns associated with products or services. The customer support service has a significant influence on building trust and loyalty. The expert virtual assistants at Allianze Digital efficiently handle customer interactions with patience, empathy, and professionalism. Our team responds quickly and offers accurate solutions. Additionally, we make sure that we respond to every customer's queries, even if it is assisting with returns, resolving concerns, or tracking orders. We enable you to save more time and effort in growth without losing touch with the customers.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Email Support Service.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Email Support Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The process of managing customer and internal emails in a quick and efficient way is referred to as Email Support Service. It is significant for maintaining communication in a seamless and organised manner. We manage your inboxes with care and attention. We have an expert team that sorts priority messages, replies to customer queries, filters spam, and follows up on leads. This enables us to confirm we have not overlooked anything that is significant. By maintaining the email communication clean and professional, we assist you in keeping robust customer relationships while minimising administrative burden. Your business remains responsive without being flooded with the continuous flow of emails.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Chat Support Services.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Chat Support Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is real-time communication through the website or app, enabling customers to get immediate help. It is a vital tool for boosting engagement and mitigating wait times. The chat support assistants we provide are well-equipped to handle customer enquiries efficiently and clearly. We direct users through purchases, troubleshoot issues, and answer queries as they come. We have a friendly and accurate approach, ensuring customers always feel supported. Leveraging our assistance benefits businesses as they can offer 24/7 availability, minimise bounce rates, and enhance online conversions. This provides you with a strong digital presence without having to handle it all internally.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Call Centre Support Service.jpg') }}" alt="Document Management" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Call Centre Support Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The service manages incoming and outgoing phone calls for customer service, sales, or technical support. It needs clear and seamless communication, listening skills, and consistency. The expert virtual assistants we house professionally handle calls, following your scripts or specific instructions. With a human touch, we book appointments, answer questions, follow up on leads, and provide information. We enable you to maintain strong voice-based communication without hiring a complete internal team. With us, you can stay connected with your customers, save time, and solve issues to focus on more strategic aspects of your business.
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
        Why Allianze Digital is Your Best Choice?
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">UK-Based Skilled Virtual Assistants</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            The virtual assistants we employ are well-versed in UK business standards and customer expectations. They clearly communicate, promptly respond, and manage tasks with care. This assists in maintaining a positive customer experience and smooth internal workflow. Partnering with us benefits you with professionals who understand your market, making support seamless and effective from the beginning.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Flexible Services That Suit Your Business</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our virtual assistance service adjusts to fit your requirements, whether you require part-time help or full-time support. We provide flexible plans without long-term commitments, so you can remain in control. It's ideal for growing businesses or teams with changing demands. Pay only for what you use, no waste, no pressure.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Strong Communication and Updates</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            You will never be left guessing. Our assistants provide regular updates, task summaries, and clear communication throughout. We make sure you always know what's been done, what's pending, and what needs your attention. This keeps your business running smoothly and builds trust through complete transparency at every step.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Secure and Confidential Workflows</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We treat your data with strict confidentiality. All our processes follow GDPR and UK data protection laws to keep your business and customer information secure. Whether handling emails, calls, or sensitive documents, we ensure full privacy and safety. You can trust us to protect your business at all times.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Affordable and Scalable Support</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our remote assistant service balances cost and quality. You get professional support without the overheads of hiring in-house. As your needs grow, we scale our services smoothly, without delays or disruptions. It's a smart way to stay efficient, cut costs, and meet demand without overextending your budget.
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
      Work Smarter with a Virtual Assistant You Can Rely On
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Getting the right support shouldn't be difficult. At Allianze Digital, we make it simple to hire virtual assistant professionals who deliver real results. Our seasoned virtual assistant team manages the whole process from answering emails to managing customer calls that keep your business successful. Without hiring additional resources, we help you save time, mitigate workload, and remain on top. We focus on quality, support, and consistency that accurately incorporates into your everyday operations. Partnering with us makes your business management much easier.
    </p>
  </div>
</section>


<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Hire virtual assistant experts now from the best virtual assistance BPO services in UK, Europe.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>

@endsection