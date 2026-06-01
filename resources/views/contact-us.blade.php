@extends('layouts/app')

@include('layouts/navbar')

@section('content')
<!-- Hero Section -->
<section class="py-2 bg-white pb-10 mt-0 md:mt-[-7rem]">
  <div class="w-full mx-auto">    
    <!-- Hero Wrapper -->
    <div class=" h-[300px] z-0 sm:h-[350px] md:h-[400px] w-full bg-cover bg-top bg-no-repeat overflow-hidden"
         style="background-image: url('{{ asset('assets/contact-bg.png') }}');">      

    </div>
  </div>
</section>


<!-- Contact Form Section: Form on a background image -->
 
<section id="section-contact-form" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
 
    <!-- Section heading -->
    <div class="text-left mb-14">
      <span class="inline-block bg-custom-blue-light text-custom-text-primary font-semibold px-5 py-3 rounded-full text-sm">Get in touch!</span>
      <h2 class="text-4xl md:text-5xl font-bold mt-6 text-custom-text-primary">Connect With Us</h2>
    </div>
 
    <!-- Two-card layout -->
    <div class="flex flex-col lg:flex-row gap-6 items-stretch">
 
      <!-- ── LEFT: Form card ── -->
      <div class="anim-card flex-1 bg-[#ebebeb] rounded-2xl p-8 shadow-md">
        <form action="{{ route('contact-us.submit') }}" method="post">
          @csrf
          @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-sm text-green-700">
              {{ session('success') }}
            </div>
          @endif

          <div class="grid sm:grid-cols-2 gap-6">
            <div>
              <input name="first_name" type="text" placeholder="Yours First name" value="{{ old('first_name') }}" class="cf-input w-full bg-white border {{ $errors->has('first_name') ? 'border-red-400' : 'border-transparent' }} rounded-xl px-4 py-5 text-sm text-gray-600 placeholder-gray-400 transition-all duration-200"/>
              @error('first_name')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <input name="last_name" type="text" placeholder="Yours Last name" value="{{ old('last_name') }}" class="cf-input w-full bg-white border {{ $errors->has('last_name') ? 'border-red-400' : 'border-transparent' }} rounded-xl px-4 py-5 text-sm text-gray-600 placeholder-gray-400 transition-all duration-200"/>
              @error('last_name')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <input name="phone" type="tel" placeholder="Phone number" value="{{ old('phone') }}" class="cf-input w-full bg-white border {{ $errors->has('phone') ? 'border-red-400' : 'border-transparent' }} rounded-xl px-4 py-5 text-sm text-gray-600 placeholder-gray-400 transition-all duration-200"/>
              @error('phone')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div>
              <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" class="cf-input w-full bg-white border {{ $errors->has('email') ? 'border-red-400' : 'border-transparent' }} rounded-xl px-4 py-5 text-sm text-gray-600 placeholder-gray-400 transition-all duration-200"/>
              @error('email')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>

            <div class="sm:col-span-2">
              <textarea name="message" placeholder="Your Message" rows="5" class="cf-input w-full bg-white border {{ $errors->has('message') ? 'border-red-400' : 'border-transparent' }} rounded-xl px-4 py-5 text-sm text-gray-600 placeholder-gray-400 resize-none transition-all duration-200">{{ old('message') }}</textarea>
              @error('message')
                <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <button type="submit"
            class="cf-submit mt-5 bg-custom-red-dark text-white font-bold uppercase tracking-widest text-xs px-8 py-3 rounded-lg"
            style="letter-spacing:.15em;">
            Submit Now
          </button>
        </form>
      </div>
 
      <!-- ── RIGHT: Info card ── -->
      <div class="anim-card delay-1 rounded-2xl bg-contain p-8 lg:w-64 flex flex-col justify-center gap-8 shadow-md" style="background-image: url('{{ asset('assets/ct-bg.jpg') }}');">
 
        <!-- Call -->
        <div class="info-item flex items-start gap-2">
          <div class="icon-wrap flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center shadow-sm">
            <svg class="w-7 h-7 text-custom-red-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5.5C3 14.06 9.94 21 18.5 21c.386 0 .77-.014 1.148-.042.435-.033.653-.049.854-.155a1.5 1.5 0 00.548-.524C21 20.04 21 19.756 21 19.188v-2.9c0-.493 0-.74-.088-.937a1.5 1.5 0 00-.38-.523c-.17-.153-.4-.24-.858-.414l-2.8-1.05c-.516-.193-.774-.29-1.02-.268a1.5 1.5 0 00-.797.336c-.197.163-.33.418-.598.928l-.6 1.15a13.03 13.03 0 01-5.87-5.87l1.15-.6c.51-.268.765-.4.928-.598a1.5 1.5 0 00.336-.797c.022-.246-.075-.504-.268-1.02L9.083 4.326c-.174-.458-.261-.687-.414-.857a1.5 1.5 0 00-.523-.381C7.948 3 7.7 3 7.207 3H4.312c-.568 0-.852 0-1.09.05a1.5 1.5 0 00-.524.548c-.106.201-.122.419-.155.854A16.45 16.45 0 003 5.5z"/>
            </svg>
          </div>
          <div>
            <p class="font-bold text-gray-800 text-base">Call</p>
            <p class="text-gray-500 text-xs mt-0.5">(+256) 2145.2156</p>
          </div>
        </div>
 
        <div class="border-t border-gray-300 opacity-40"></div>
 
        <!-- Email -->
        <div class="info-item flex items-start gap-2">
          <div class="icon-wrap flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center shadow-sm">
            <svg class="w-7 h-7 text-custom-red-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
            </svg>
          </div>
          <div>
            <p class="font-bold text-gray-800 text-base">Email</p>
            <p class="text-gray-500 text-xs mt-0.5">info@company.com</p>
          </div>
        </div>
 
        <div class="border-t border-gray-300 opacity-40"></div>
 
        <!-- Location -->
        <div class="info-item flex items-start gap-2">
          <div class="icon-wrap flex-shrink-0 w-11 h-11 rounded-full flex items-center justify-center shadow-sm">
            <svg class="w-7 h-7 text-custom-red-dark" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
          </div>
          <div>
            <p class="font-bold text-gray-800 text-base">Location</p>
            <p class="text-gray-500 text-xs mt-0.5">XYZ Hilton Street, 125 Town<br>United State</p>
          </div>
        </div>
 
      </div>
    </div>
  </div>
</section>

@endsection