@extends('layouts/app')

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

          <a href="{{ route('contact-us') }}" class="inline-block bg-[#d80000] text-white px-6 sm:px-8 md:px-10 py-2.5 md:py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg">
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
        <div id="posts-container" class="grid sm:grid-cols-2 gap-6"> 
          @include('blog.partials.posts')
        </div>
 
        @if($totalPages > $currentPage)
        <div class="flex items-center justify-center mt-12">
          <button id="load-more" 
                  data-page="{{ $currentPage + 1 }}" 
                  data-total="{{ $totalPages }}"
                  class="bg-[#d80000] text-white px-8 py-3 rounded-lg font-medium hover:bg-red-700 transition shadow-lg flex items-center gap-2">
            <span>Load More</span>
            <div id="loader" class="hidden w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
          </button>
        </div>
        @endif
 
      </div>
 
        @include('blog.partials.sidebar')
    </div>
  </div>
</section>
@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('load-more');
    const postsContainer = document.getElementById('posts-container');
    const loader = document.getElementById('loader');

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', function() {
            const search = "{{ $search }}";
            const category = "{{ $currentCategory }}";
            const tag = "{{ $currentTag }}";
            const page = loadMoreBtn.getAttribute('data-page');
            const totalPages = loadMoreBtn.getAttribute('data-total');
            
            // Show loader
            loader.classList.remove('hidden');
            loadMoreBtn.disabled = true;

            let url = `{{ route('blog') }}?page=${page}`;
            if (search) url += `&search=${search}`;
            if (category) url += `&category=${category}`;
            if (tag) url += `&tag=${tag}`;

            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                if (html.trim() !== '') {
                    postsContainer.insertAdjacentHTML('beforeend', html);
                    
                    const nextPage = parseInt(page) + 1;
                    loadMoreBtn.setAttribute('data-page', nextPage);
                    
                    if (nextPage > parseInt(totalPages)) {
                        loadMoreBtn.parentElement.remove();
                    }
                } else {
                    loadMoreBtn.parentElement.remove();
                }
            })
            .catch(error => {
                console.error('Error loading more posts:', error);
            })
            .finally(() => {
                loader.classList.add('hidden');
                loadMoreBtn.disabled = false;
            });
        });
    }
});
</script>
@endpush
@endsection