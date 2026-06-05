<header class="{{ request()->routeIs('home') ? 'absolute' : '' }} top-0 left-0 right-0 z-20 p-4">
     <div
          class="max-w-7xl mx-auto bg-white/60 backdrop-blur-sm rounded-lg flex justify-between items-center p-3 relative">
          <!-- LOGO -->
          <div class="flex items-center gap-1">
               <a href="{{ route('home') }}" class="flex items-center gap-1">
                    <img src="{{ asset('assets/logo-black.png') }}" alt="Logo icon" class="w-12 h-12">
                    <h3 class="text-lg text-black font-bold">{{ config('app.name') }}</h3>
               </a>
          </div>

          <!-- DESKTOP NAV -->
          <nav class="hidden md:flex items-center space-x-8">
               <a href="{{ route('who-we-are') }}"
                    class="text-custom-blue-navy font-semibold hover:text-custom-red-brand transition-colors">Who We
                    Are</a>

               <!-- SERVICES TRIGGER -->
               <div class="relative" id="servicesDropdown">
                    <button id="servicesTrigger" onclick="Menu.toggleServices()"
                         class="flex items-center gap-1.5 text-custom-blue-navy font-semibold hover:text-custom-red-brand transition-colors focus:outline-none">
                         Services
                         <svg class="w-4 h-4 transition-transform duration-250" id="servicesChevron" viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd" />
                         </svg>
                    </button>

                    <!-- ===== MEGA PANEL ===== -->
                    <div id="megaPanel"
                         class="mega-wrap absolute top-[calc(100%+14px)] left-[30%] -translate-x-1/2 w-[920px] bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 overflow-hidden">

                         <!-- Panel header -->
                         <div
                              class="flex items-center justify-between px-6 py-4 border-b border-gray-100 bg-gray-50/70">
                              <div>
                                   <p class="font-bold text-custom-blue-navy text-sm">Our Services</p>
                              </div>
                         </div>

                         <!-- Panel body: 4 columns -->
                         <div class="grid grid-cols-5 divide-x divide-gray-100 px-0 py-2">

                              <!-- Col 1: Data Processing -->
                              <div class="px-3 py-3">
                                   <p
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3 flex items-center gap-1.5">
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2">
                                             <ellipse cx="12" cy="5" rx="9" ry="3" />
                                             <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                                             <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                                        </svg>
                                        Data Processing
                                   </p>
                                   <a href="{{ route('legal-data-processing') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Legal
                                        Data Processing</a>
                                   <a href="{{ route('insurance-data-processing') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Insurance
                                        Data Processing</a>
                                   <a href="{{ route('logistics-data-processing') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Logistics
                                        Data Processing</a>
                                   <a href="{{ route('healthcare-data-processing') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Health
                                        Data Processing</a>
                                   <a href="{{ route('scanning-and-indexing') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Scanning
                                        &amp; Indexing Service</a>
                                   <a href="{{ route('cctv-monitoring-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>CCTV
                                        Monitoring Services</a>
                                   <a href="{{ route('data-analytics-and-business-intelligence') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Data
                                        Analytics &amp; BI</a>
                                   <a href="{{ route('data-collection') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Data
                                        Collection Service</a>
                              </div>

                              <!-- Col 2: Business Services -->
                              <div class="px-3 py-3">
                                   <p
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3 flex items-center gap-1.5">
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2">
                                             <rect x="2" y="7" width="20" height="14" rx="2" />
                                             <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                                        </svg>
                                        Business Services
                                   </p>
                                   <a href="{{ route('process-optimization') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Process
                                        Optimization Service</a>
                                   <a href="{{ route('digital-transformation-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Digital
                                        Transformation</a>
                                   <a href="{{ route('document-and-records-management') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Document
                                        &amp; Records Mgmt</a>
                                   <a href="{{ route('performance-management') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Performance
                                        Management</a>
                                   <a href="{{ route('virtual-assistant') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Virtual
                                        Assistant Service</a>
                                   <a href="{{ route('virtual-accounting') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Virtual
                                        Accounting Service</a>
                                   <a href="{{ route('bookkeeping-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Bookkeeping
                                        Service</a>
                                   <a href="{{ route('tax-management-preparation') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Tax
                                        Management Prep</a>
                                   <a href="{{ route('audit-support-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Audit
                                        Support Services</a>
                              </div>

                              <!-- Col 3: Engineering -->
                              <div class="px-3 py-3">
                                   <p
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3 flex items-center gap-1.5">
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2">
                                             <circle cx="12" cy="12" r="3" />
                                             <path
                                                  d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83" />
                                        </svg>
                                        Engineering
                                   </p>
                                   <a href="{{ route('remote-engineering-support') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Remote
                                        Engineering Support</a>
                                   <a href="{{ route('circuit-design-pcb-layout') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Circuit
                                        Design &amp; PCB Layout</a>
                                   <a href="{{ route('cad-and-simulation-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>CAD
                                        and Simulation Services</a>
                                   <a href="{{ route('testing-and-quality-assurance') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Testing
                                        and Quality Assurance</a>
                                   <a href="{{ route('software-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Software
                                        Development</a>
                                   <a href="{{ route('website-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Website
                                        Development</a>
                                   <a href="{{ route('web-app-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Web
                                        App Development</a>
                              </div>

                              <!-- Col 4: IT Services -->
                              <div class="px-3 py-3">
                                   <p
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3 flex items-center gap-1.5">
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2">
                                             <circle cx="12" cy="12" r="3" />
                                             <path
                                                  d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83" />
                                        </svg>
                                        IT Services
                                   </p>
                                   <a href="{{ route('software-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Software
                                        Development</a>
                                   <a href="{{ route('website-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Website
                                        Development</a>
                                   <a href="{{ route('web-app-development-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Web
                                        App Development</a>
                              </div>

                              <!-- Col 5: Digital & Creative -->
                              <div class="px-3 py-3">
                                   <p
                                        class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-3 flex items-center gap-1.5">
                                        <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                             stroke-width="2">
                                             <path d="M12 20h9" />
                                             <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                                        </svg>
                                        Digital &amp; Creative
                                   </p>
                                   <a href="{{ route('seo-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>SEO
                                        Services</a>
                                   <a href="{{ route('smm-services') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>SMM
                                        Services</a>
                                   <a href="{{ route('content-writing-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Content
                                        Writing Service</a>
                                   <a href="{{ route('image-editing-service') }}"
                                        class="flex items-center gap-2 text-[0.78rem] text-gray-600 hover:text-custom-red-brand hover:bg-red-50 px-2 py-1.5 rounded-md transition-all"><span
                                             class="w-1.5 h-1.5 rounded-full bg-custom-red-brand/40 shrink-0"></span>Image
                                        Editing Service</a>

                                   <!-- CTA Card -->

                              </div>

                         </div>
                    </div>
                    <!-- /mega panel -->
               </div>


               <a href="{{ route('blog') }}"
                    class="text-custom-blue-navy font-semibold hover:text-custom-red-brand transition-colors">Blog</a>
               <a href="{{ route('contact-us') }}"
                    class="text-custom-blue-navy font-semibold hover:text-custom-red-brand transition-colors">Contact</a>
          </nav>

          <!-- CTA Button -->
          <a href="{{ route('contact-us') }}"
               class="hidden md:inline-block bg-custom-blue-navy text-white px-5 py-2 rounded-lg font-semibold hover:bg-custom-blue-deep transition-colors text-sm">Get
               Started</a>

          <!-- HAMBURGER -->
          <button onclick="Menu.toggleMobile()" id="hamburgerBtn"
               class="md:hidden text-custom-blue-navy focus:outline-none">
               <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
               </svg>
               <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
               </svg>
          </button>
     </div>

     <!-- ===== MOBILE MENU ===== -->
     <div id="mobileMenu"
          class="hidden md:hidden max-w-7xl mx-auto mt-2 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden">

          <!-- Top links -->
          <div class="flex flex-col divide-y divide-gray-100">
               <a href="{{ route('who-we-are') }}"
                    class="px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:text-custom-red-brand hover:bg-gray-50 transition-all">Who
                    We Are</a>

               <!-- Services accordion -->
               <div>
                    <button onclick="Menu.toggleMobAcc('acc-data')"
                         class="mob-acc-btn w-full flex items-center justify-between px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:bg-gray-50 transition-all">
                         <span class="flex items-center gap-2">
                              <svg class="w-3.5 h-3.5 text-custom-red-brand" viewBox="0 0 24 24" fill="none"
                                   stroke="currentColor" stroke-width="2">
                                   <ellipse cx="12" cy="5" rx="9" ry="3" />
                                   <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                                   <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                              </svg>
                              Data Processing
                         </span>
                         <svg class="arrow w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd" />
                         </svg>
                    </button>
                    <div id="acc-data" class="mob-acc-content bg-gray-50">
                         <div class="grid px-4 py-2">
                              <a href="{{ route('legal-data-processing') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Legal
                                   Data Processing</a>
                              <a href="{{ route('insurance-data-processing') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Insurance
                                   Data Processing</a>
                              <a href="{{ route('logistics-data-processing') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Logistics
                                   Data Processing</a>
                              <a href="{{ route('healthcare-data-processing') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Health
                                   Data Processing</a>
                              <a href="{{ route('scanning-and-indexing') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Scanning
                                   &amp; Indexing</a>
                              <a href="{{ route('cctv-monitoring-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">CCTV
                                   Monitoring Services</a>
                              <a href="{{ route('data-analytics-and-business-intelligence') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Data
                                   Analytics &amp; BI</a>
                              <a href="{{ route('data-collection') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Data
                                   Collection Service</a>
                         </div>
                    </div>
               </div>

               <div>
                    <button onclick="Menu.toggleMobAcc('acc-biz')"
                         class="mob-acc-btn w-full flex items-center justify-between px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:bg-gray-50 transition-all">
                         <span class="flex items-center gap-2">
                              <svg class="w-3.5 h-3.5 text-custom-red-brand" viewBox="0 0 24 24" fill="none"
                                   stroke="currentColor" stroke-width="2">
                                   <rect x="2" y="7" width="20" height="14" rx="2" />
                                   <path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2" />
                              </svg>
                              Business Services
                         </span>
                         <svg class="arrow w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd" />
                         </svg>
                    </button>
                    <div id="acc-biz" class="mob-acc-content bg-gray-50">
                         <div class="grid  px-4 py-2">
                              <a href="{{ route('process-optimization') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Process
                                   Optimization</a>
                              <a href="{{ route('digital-transformation-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Digital
                                   Transformation</a>
                              <a href="{{ route('document-and-records-management') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Document
                                   &amp; Records Mgmt</a>
                              <a href="{{ route('performance-management') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Performance
                                   Management</a>
                              <a href="{{ route('virtual-assistant') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Virtual
                                   Assistant Service</a>
                              <a href="{{ route('virtual-accounting') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Virtual
                                   Accounting Service</a>
                              <a href="{{ route('bookkeeping-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Bookkeeping
                                   Service</a>
                              <a href="{{ route('tax-management-preparation') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Tax
                                   Management Prep</a>
                              <a href="{{ route('audit-support-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Audit
                                   Support Services</a>
                         </div>
                    </div>
               </div>

               <div>
                    <button onclick="Menu.toggleMobAcc('acc-eng')"
                         class="mob-acc-btn w-full flex items-center justify-between px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:bg-gray-50 transition-all">
                         <span class="flex items-center gap-2">
                              <svg class="w-3.5 h-3.5 text-custom-red-brand" viewBox="0 0 24 24" fill="none"
                                   stroke="currentColor" stroke-width="2">
                                   <circle cx="12" cy="12" r="3" />
                                   <path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4" />
                              </svg>
                              Engineering &amp; Dev
                         </span>
                         <svg class="arrow w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd" />
                         </svg>
                    </button>
                    <div id="acc-eng" class="mob-acc-content bg-gray-50">
                         <div class="grid  px-4 py-2">
                              <a href="{{ route('remote-engineering-support') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Remote
                                   Engineering Support</a>
                              <a href="{{ route('circuit-design-pcb-layout') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Circuit
                                   Design &amp; PCB</a>
                              <a href="{{ route('cad-and-simulation-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">CAD
                                   and Simulation</a>
                              <a href="{{ route('testing-and-quality-assurance') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Testing
                                   and QA</a>
                              <a href="{{ route('software-development-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Software
                                   Development</a>
                              <a href="{{ route('website-development-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Website
                                   Development</a>
                              <a href="{{ route('web-app-development-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Web
                                   App Development</a>
                         </div>
                    </div>
               </div>

               <div>
                    <button onclick="Menu.toggleMobAcc('acc-dig')"
                         class="mob-acc-btn w-full flex items-center justify-between px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:bg-gray-50 transition-all">
                         <span class="flex items-center gap-2">
                              <svg class="w-3.5 h-3.5 text-custom-red-brand" viewBox="0 0 24 24" fill="none"
                                   stroke="currentColor" stroke-width="2">
                                   <path d="M12 20h9" />
                                   <path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z" />
                              </svg>
                              Digital &amp; Creative
                         </span>
                         <svg class="arrow w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                   d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                   clip-rule="evenodd" />
                         </svg>
                    </button>
                    <div id="acc-dig" class="mob-acc-content bg-gray-50">
                         <div class="grid px-4 py-2">
                              <a href="{{ route('seo-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">SEO
                                   Services</a>
                              <a href="{{ route('smm-services') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">SMM
                                   Services</a>
                              <a href="{{ route('content-writing-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Content
                                   Writing Service</a>
                              <a href="{{ route('image-editing-service') }}"
                                   class="text-xs text-gray-600 hover:text-custom-red-brand px-2 py-2 rounded-md hover:bg-red-50 transition-all">Image
                                   Editing Service</a>
                         </div>
                    </div>
               </div>


               <a href="{{ route('blog') }}"
                    class="px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:text-custom-red-brand hover:bg-gray-50 transition-all">Blog</a>
               <a href="{{ route('contact-us') }}"
                    class="px-5 py-3 text-sm font-semibold text-custom-blue-navy hover:text-custom-red-brand hover:bg-gray-50 transition-all">Contact</a>
          </div>

          <!-- Mobile CTA -->
          <div class="p-4 border-t border-gray-100">
               <a href="{{ route('contact-us') }}"
                    class="block text-center bg-custom-blue-navy text-white py-2.5 rounded-lg font-semibold text-sm hover:bg-custom-blue-deep transition-colors">Get
                    Started</a>
          </div>
     </div>
</header>