<footer id="section-footer" class="bg-custom-footer-bg text-white pt-24 pb-8">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Column 1: Logo and Socials -->
      <div>
        <div class="flex items-center gap-3">
          <img src="{{ asset('assets/logo-white.png') }}" alt="Logo icon" class="w-20 h-20">
        </div>
        <p class="text-gray-400 mt-6 text-sm leading-relaxed">Felis consquat magnis fames sagittis ultrices plasodales porttitor quisque ultrice tempor turpis.</p>
        <div class="flex space-x-3 mt-6">
          <a href="#" class="bg-custom-footer-icon p-2.5 rounded-md hover:bg-gray-600"><img src="{{ asset('assets/59_57.svg') }}" alt="Social Icon 1" class="w-4 h-4"></a>
          <a href="#" class="bg-custom-footer-icon p-2.5 rounded-md hover:bg-gray-600"><img src="{{ asset('assets/59_60.svg') }}" alt="Social Icon 2" class="w-4 h-4"></a>
          <a href="#" class="bg-custom-footer-icon p-2.5 rounded-md hover:bg-gray-600"><img src="{{ asset('assets/59_63.svg') }}" alt="Social Icon 3" class="w-4 h-4"></a>
          <a href="#" class="bg-custom-footer-icon p-2.5 rounded-md hover:bg-gray-600"><img src="{{ asset('assets/59_66.svg') }}" alt="Social Icon 4" class="w-4 h-4"></a>
        </div>
      </div>
      <!-- Column 2: Services -->
      <div>
        <h3 class="text-xl font-bold">Services</h3>
        <div class="w-10 h-0.5 bg-white mt-2 mb-4"></div>
        <ul class="space-y-3">
          <li><a href="{{ route('seo-services') }}" class="text-gray-400 hover:text-white">SEO Services</a></li>
          <li><a href="{{ route('software-development-service') }}" class="text-gray-400 hover:text-white">Software Development</a></li>
          <li><a href="{{ route('process-optimization') }}" class="text-gray-400 hover:text-white">Process Optimisation</a></li>
          <li><a href="{{ route('scanning-and-indexing') }}" class="text-gray-400 hover:text-white">Scanning and Indexing</a></li>
        </ul>
      </div>
      <!-- Column 3: Quick Links -->
      <div>
        <h3 class="text-xl font-bold">Quick Links</h3>
        <div class="w-10 h-0.5 bg-white mt-2 mb-4"></div>
        <ul class="space-y-3">
          <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white">Home</a></li>
          <li><a href="{{ route('who-we-are') }}" class="text-gray-400 hover:text-white">Who we are</a></li>
          <li><a href="{{ route('blog') }}" class="text-gray-400 hover:text-white">Blog</a></li>
          <li><a href="{{ route('contact-us') }}" class="text-gray-400 hover:text-white">Contact us</a></li>
        </ul>
      </div>
      <!-- Column 4: Contact Us -->
      <div>
        <h3 class="text-xl font-bold">Contact Us</h3>
        <div class="w-10 h-0.5 bg-white mt-2 mb-4"></div>
        <ul class="space-y-5">
          <li class="flex items-start gap-4">
            <div class="bg-custom-footer-icon p-2 rounded-md mt-1"><img src="{{ asset('assets/59_109.svg') }}" alt="Phone Icon" class="w-4 h-4"></div>
            <div>
              <p class="font-semibold">Call Us 24/7</p>
              <p class="text-gray-400">(+256) 2145.2156</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <div class="bg-custom-footer-icon p-2 rounded-md mt-1"><img src="{{ asset('assets/59_116.svg') }}" alt="Email Icon" class="w-4 h-4"></div>
            <div>
              <p class="font-semibold">info@company.com</p>
              <p class="text-gray-400">(+256) 2145.2156</p>
            </div>
          </li>
          <li class="flex items-start gap-4">
            <div class="bg-custom-footer-icon p-2 rounded-md mt-1"><img src="{{ asset('assets/59_123.svg') }}" alt="Location Icon" class="w-4 h-4"></div>
            <div>
              <p class="font-semibold">Our Location</p>
              <p class="text-gray-400">XYZ Hilton Street, 125 Town<br>United State</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="border-t border-slate-700 mt-20 pt-6 text-center text-white">
      <p>&copy; Allianze Digital - Copyright All rights reserved.</p>
    </div>
  </div>
</footer>