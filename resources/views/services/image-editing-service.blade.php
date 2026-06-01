@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <!-- Hero Section -->
<section class="py-2 bg-white pb-10">
  <div class="max-w-7xl mx-auto ">    
    <!-- Hero Wrapper -->
    <div class=" h-[400px] z-0 sm:h-[450px] md:h-[500px] w-full  bg-cover bg-center bg-no-repeat overflow-hidden rounded-xl" style="background-image: url('{{ asset('assets/Image-Editing-and-Retouching-Service-bg.jpg') }}');">
      <div class=" h-full flex items-center justify-center px-4">
        <div class="max-w-4xl text-center">          
          <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-[28px] [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Make a Lasting Impression With the Best Image Editing and Retouching Service in UK
          </h1>
          <p class="text-white text-base sm:text-lg md:text-xl mb-6 md:mb-8 [text-shadow:1px_5px_5px_rgba(0,0,0,0.7)]">
            Let your images showcase your identity with the best professional image editing and retouching service in UK. Speak to us now!
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
          <img src="{{ asset('assets/image-edit.jpg') }}" alt="Audit Calculation" class="w-full h-auto object-cover">
        </div>
        <!-- Decorative blue shape inferred from design style -->
        <div class="absolute -z-10 top-4 -left-4 w-full h-full bg-blue-50 rounded-3xl"></div>
      </div>

      <!-- Text Side -->
      <div>
        <div class="prose prose-lg text-gray-600 text-justify">
          <p class="">
            A good photo might capture the moment, but a great one tells the complete story. At Allianze Digital, we take your raw images and give them the finishing touch they truly deserve. Our image editing service goes beyond basic adjustments. From careful photo retouching to complete background changes and colour corrections, every detail is handled with precision. Whether you're showcasing products, marketing property, or refreshing a portfolio, we help your visuals work harder for you. As a trusted name for the best professional image editing and retouching service in UK, we focus on clean, consistent results that feel effortlessly natural.
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
      Explore Our Image Editing Service Range
    </h2>
    <div class="grid md:grid-cols-2 gap-8 mt-16">
      <!-- Card 1 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Image Retouching.jpg') }}" alt="Image Retouching" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Image Retouching</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The Photo retouching service at Allianze Digital aims to refine images by removing imperfections, including spots, blemishes, unwanted marks, and wrinkles. We have expert image editors who keep up the natural look of the images and adjust finer details, correct lighting, and enhance skin tone. Even if it is fashion, portraits, or commercial photography, our editors make sure the final outcome appears authentic and polished. As one of the best professional image editing and retouching services in UK, we give prime importance to subtlety, maintaining texture and realism while enhancing visual appeal.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Colour Correction Services.png') }}" alt="Colour Correction Services" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Colour Correction Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The colour correction service provided by us involves modifying tones, saturation, brightness, and contrast to bring harmony to every photo. We make sure that each image has consistent colouring and natural warmth, particularly in bulk edits for catalogues or albums. We manage every process starting from minor tonal challenges to complete colour balancing.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/background removal.png') }}" alt="Image Background Removal Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Image Background Removal Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Our image background removal service accurately separates your subject from any backdrop. We know that a clean background makes a big difference, whether it is for marketing materials, online stores, or professional profiles. Our experienced image editors can efficiently manage complex edges, transparent objects, and fine details such as hair with utmost care.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/E-commerce Product Editing.jpg') }}" alt="E-commerce Product Editing" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">E-commerce Product Editing</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is significant that the images we post on online stores must be consistent, clear, and appealing to captivate buyers. The ecommerce product editing service we provide covers processes such as background removal, shadow creation, alignment, cropping, and photo retouching to showcase every product at its best.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Clipping Path Services.jpg') }}" alt="Clipping Path Services" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Clipping Path Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Our clipping path service helps you with captivating catalogue design, product photos, and layout consistency. The technique is employed to create clean, sharp edges around an object, allowing it to be separated or placed against a different background. We make use of manual pen tool precision for accurate and top-notch cuts while maintaining the detail.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="assets/masking.jpg" alt="Masking" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Masking</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            It is ideal for editing photos with fine edges like hair, fur, or transparent elements such as veils or glass. We leverage cutting-edge masking techniques to isolate objects with soft or uneven boundaries while maintaining their structure. This gives it a clean and natural look when changing backgrounds or applying edits. Moreover, when masking is combined with photo retouching, it gives an accurate and realistic result.
          </p>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Image Enhancement Services.jpg') }}" alt="Image Enhancement Services" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Image Enhancement Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            We increase the total clarity and presentation of an image through our image enhancement service. We did this by adjusting various elements such as contrast, tone, sharpness, and noise. Whether your actual image is slightly blurred, dull in appearance, or underexposed, we optimize it for a vibrant and clean finish. We always maintain a natural look while refining significant details.
          </p>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Photo Manipulation Services.jpg') }}" alt="Photo Manipulation Services" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Photo Manipulation Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Our photo manipulation service enables you to alter or combine images to form something new. This is applicable for artistic purposes, storytelling, or advertising. The service involves background swapping, composition creation, and object addition or removal. We manage every change with accuracy and realism so that the outlook seems natural and convincing.
          </p>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Image Restoration Service.jpg') }}" alt="Image Restoration Service" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Image Restoration Service</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            Our image restoration service restores tears, scratches, stains, and colour fading from prints or scanned photos. The expert Allianze Digital restores missing details with meticulous attention, maintaining the photo's actual essence while enhancing clarity. Most of the historians, collectors, and families in the UK depend on us to preserve their cherished moments.
          </p>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Real Estate Image Enhancement.jpg') }}" alt="Real Estate Image Enhancement" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Real Estate Image Enhancement</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            First impressions always matter when it comes to selling property. Therefore, our real estate image enhancement service aims to make every photo seem clean, bright, and inviting. We adjust lighting, correct angles, and fine-tune colours so each space appears well-presented and true to life. From softening harsh shadows to improving the look of outdoor skies or greenery, we handle the small details that make a big difference.
          </p>
        </div>
      </div>

      <!-- Card 11 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Virtual Staging.jpg') }}" alt="Virtual Staging" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Virtual Staging</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The virtual staging service assists buyers by visualizing how a space could look, furnished, styled, and ready to live in. We make use of cutting-edge digital techniques and include furniture, decor, and finishing touches to empty property images. This makes them seem warm, visually appealing, and practical.
          </p>
        </div>
      </div>

      <!-- Card 12 -->
      <div class="bg-blue-50/50 rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 border border-black-300">
        <div class="h-64 overflow-hidden">
          <img src="{{ asset('assets/Portrait Services.jpg') }}" alt="Portrait Services" class="w-full h-full object-cover">
        </div>
        <div class="md:p-8 p-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Portrait Services</h3>
          <p class="text-gray-600 leading-relaxed text-justify">
            The portrait editing service provided by Allianze Digital Co. UK aims to enhance features, such as improving lighting and refining the overall look, while maintaining authenticity and accuracy for the individual. Our experts correct small flaws with a meticulous touch, smooth skin, and adjust tones, constantly aiming for a natural and flattering finish.
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
        Factors that make us the Best Professional Image Editing and Retouching Service in UK
      </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-x-12 gap-y-16">
      <!-- Feature 01 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">01</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Enhanced Visual Appeal</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Our image editing service makes the image more engaging and appropriate for web, advertising, or print. Moreover, we enhance the colour balance, clarity, and overall appearance of the image with our photo retouching service.
          </p>
        </div>
      </div>

      <!-- Feature 02 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">02</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Brand Consistency Across All Platforms</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            We have experts who make sure that each image we edit reflects the tone and style of your brand. As the best professional image editing and retouching service in UK, we maintain a cohesive identity, strengthening your presence through our accurate photo retouching service.
          </p>
        </div>
      </div>

      <!-- Feature 03 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">03</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Time and Cost Efficiency</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Leveraging our service helps you save time and resources. We deliver our project faster without compromising on the quality. This makes us a dependable and affordable solution provider.
          </p>
        </div>
      </div>

      <!-- Feature 04 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">04</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Better Customer Engagement</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            Having top-notch visuals helps you catch the attention of the audience faster. Also, this helps them keep engaged. Our adept image editing service makes your images seem more professional, encouraging longer website visits and higher interaction.
          </p>
        </div>
      </div>

      <!-- Feature 05 -->
      <div class="gap-4 p-8 bg-slate-800 rounded-2xl">
        <span class="text-5xl font-bold text-red-600 mb-2 leading-none">05</span>
        <div>
          <h3 class="text-xl font-bold mb-3 mt-3 text-white">Improved Product Presentation</h3>
          <p class="text-gray-300 text-sm leading-relaxed text-justify">
            With our product image editing service, your product appears sharper, cleaner, and more market-ready online. Our team makes sure that the customers see your products at their best, and this is one of the significant reasons why we are considered the best professional image editing and retouching service in UK.
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
      Allianze Digital - The Best Professional Image Editing and Retouching Service in UK
    </h2>
    <p class="text-gray-600 leading-relaxed text-justify ">
      Every image carries potential; it just needs the right eyes and tools to bring it forward. At Allianze Digital, we don't rush edits or apply one-size-fits-all solutions. We pay attention, refine carefully, and deliver images that meet your expectations without losing their original charm. Our photo retouching team works closely with each brief, ensuring clarity, balance, and style. Whether you're a business, photographer, or agency, we offer reliable support and sharp results. That's why clients across industries trust us as the best professional image editing and retouching service in UK, because we keep it simple, skilled, and always on point.
    </p>
  </div>
</section>

<!-- Final CTA Section: Large banner with text and a circular button -->
<section id="section-cta-final" class="py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="bg-custom-blue-light md:rounded-full rounded-2xl p-4 md:p-8 bg-blend-lighten bg-cover bg-center" style="background-image: url('{{ asset('assets/9efd5264bd0bfb5085bf24e8b6997c95fe61a020.png') }}'); background-color: rgba(217, 228, 255, 0.8);">
      <div class="flex flex-col md:flex-row justify-between items-center gap-6">
        <h2 class="text-xl md:text-2xl font-bold text-custom-blue-dark max-w-4xl text-center md:text-left">
          Discover how the best professional image editing and retouching service in UK helps in enhancing your images.
        </h2>
        <a href="{{ route('contact-us') }}" class="flex-shrink-0 w-40 h-40 bg-custom-red-dark rounded-full flex items-center justify-center text-white font-bold text-center text-lg leading-tight shadow-2xl hover:bg-red-700 transition-transform transform hover:scale-105">Get Started</a>
      </div>
    </div>
  </div>
</section>
@endsection