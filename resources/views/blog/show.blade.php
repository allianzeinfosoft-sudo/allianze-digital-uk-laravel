@extends('layouts/app')

@include('layouts/navbar')

@section('content')
  <!-- Hero Section -->
  <section class="py-2 bg-white pb-10 mt-[-7rem]">
    <div class="w-full mx-auto">
      <!-- Hero Wrapper -->
      <div class=" h-[300px] z-0 sm:h-[350px] md:h-[400px] w-full bg-cover bg-top bg-no-repeat overflow-hidden"
        style="background-image: url({{ asset('assets/blog-bg.jpg') }});">
        <!-- CONTENT -->
        <div class=" z-10 h-full flex items-center justify-center px-4">
          <div class="max-w-4xl text-center">

            <h1 class="text-4xl sm:text-4xl md:text-5xl font-bold text-white mb-4 md:mb-6 leading-[28px]
          [text-shadow:0px_7px_6px_rgb(0,0,0)] [-webkit-text-stroke:0.1px_rgba(0,0,0,0.13)]">
              Blog
            </h1>

            <a href="{{ route('contact-us') }}"
              class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
              Contact Us
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog Section -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex flex-col lg:flex-row gap-10">

        <!-- ── LEFT: Blog Grid ── -->
        <div class="flex-1">
          <!-- Regular grid: 2 cols -->
          <div class="grid sm:grid-cols-1 gap-6">
            <div class="blog-card bg-white rounded-2xl shadow-md overflow-hidden">

              <!-- Image -->
              @php
                $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
               @endphp

              @if($image)
                <div class="h-[500px] overflow-hidden">
                  <img src="{{ $image }}" class="w-full h-full object-cover">
                </div>
              @endif

              <!-- Content -->
              <div class="p-6">

                <!-- Date -->
                <p class="text-xs text-gray-500 mb-2">
                  {{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}
                </p>

                <!-- Title -->
                <h1 class="text-2xl font-bold mb-4">
                  {!! $post['title']['rendered'] !!}
                </h1>

                <!-- Content (IMPORTANT FIX) -->
                <div class="prose max-w-none text-gray-700 leading-relaxed">
                  {!! $post['content']['rendered'] !!}
                </div>

              </div>
            </div>

          </div>

        </div>

        @include('blog.partials.sidebar')
      </div>
    </div>
  </section>
@endsection