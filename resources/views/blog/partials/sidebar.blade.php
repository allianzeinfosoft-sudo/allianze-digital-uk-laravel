<!-- ── RIGHT: Sidebar ── -->
<aside class="lg:w-72 flex-shrink-0 space-y-6">

  <!-- Search -->
  <div class="bg-white rounded-2xl p-5 shadow-sm">
    <h4 class="font-bold text-custom-text-primary text-sm mb-3">Search Articles</h4>
    <form action="{{ route('blog') }}" method="GET" class="flex items-center gap-2 border border-gray-200 rounded-xl px-3 py-2.5 bg-gray-50 focus-within:ring-2 focus-within:ring-[#d80000] focus-within:border-transparent transition-all">
      <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" d="M21 21l-4.35-4.35"/></svg>
      <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search posts…" class="bg-transparent text-sm text-gray-600 placeholder-gray-400 w-full border-none focus:ring-0 p-0"/>
      @if(isset($search) && $search)
          <a href="{{ route('blog') }}" class="text-gray-400 hover:text-red-600">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          </a>
      @endif
    </form>
  </div>

  <!-- Categories -->
  <div class="bg-white rounded-2xl p-5 shadow-sm">
    <h4 class="font-bold text-custom-text-primary text-sm mb-4">Categories</h4>
    <ul class="space-y-2">
      @foreach($categories as $cat)
      @if($cat['count'] > 0)
      <li class="flex items-center justify-between py-2 border-b border-gray-50 last:border-0">
        <a href="{{ route('blog', ['category' => $cat['id']]) }}" class="text-sm {{ (isset($currentCategory) && $currentCategory == $cat['id']) ? 'text-[#d80000] font-bold' : 'text-custom-text-secondary' }} hover:text-[#d80000] cursor-pointer transition-colors capitalize">
          {{ $cat['name'] }}
        </a>
        <span class="bg-custom-blue-light text-custom-blue-navy text-[10px] font-bold px-2 py-0.5 rounded-full">{{ $cat['count'] }}</span>
      </li>
      @endif
      @endforeach
    </ul>
  </div>

  <!-- Recent Posts -->
  <div class="bg-white rounded-2xl p-5 shadow-sm">
    <h4 class="font-bold text-custom-text-primary text-sm mb-4">Recent Posts</h4>
    <div class="space-y-4">
      @foreach($recent as $post)
      <a href="{{ route('blog.show', $post['slug']) }}" class="flex gap-3 group">
        <div class="w-14 h-14 rounded-lg shrink-0 overflow-hidden bg-gray-100">
          <img src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? asset('assets/blog-placeholder.jpg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
        </div>
        <div>
          <p class="text-xs font-semibold text-custom-text-primary group-hover:text-[#d80000] transition-colors leading-snug line-clamp-2">
              {!! $post['title']['rendered'] !!}
          </p>
          <p class="text-[11px] text-custom-text-secondary mt-1">{{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}</p>
        </div>
      </a>
      @endforeach
    </div>
  </div>


  <!-- Tags cloud -->
  <div class="bg-white rounded-2xl p-5 shadow-sm">
    <h4 class="font-bold text-custom-text-primary text-sm mb-4">Popular Tags</h4>
    <div class="flex flex-wrap gap-2">
      @foreach($tags as $tag)
      @if($tag['count'] > 0)
      <a href="{{ route('blog', ['tag' => $tag['id']]) }}" class="cat-pill text-[11px] font-semibold px-3 py-1.5 rounded-full border {{ (isset($currentTag) && $currentTag == $tag['id']) ? 'bg-[#d80000] text-white border-[#d80000]' : 'border-gray-200 bg-gray-50 text-custom-text-secondary' }} hover:bg-[#d80000] hover:text-white hover:border-[#d80000] transition-colors">
          #{{ $tag['name'] }}
      </a>
      @endif
      @endforeach
    </div>
  </div>

</aside>
