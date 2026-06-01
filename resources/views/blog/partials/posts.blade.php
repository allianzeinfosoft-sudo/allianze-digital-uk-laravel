@foreach($posts as $post)
<div class="blog-card bg-white rounded-2xl shadow-md">
     <!-- Image -->
     <div class="h-44 overflow-hidden">
     <img src="{{ $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? '' }}"
          class="w-full h-full object-cover">
     </div>

     <!-- Content -->
     <div class="p-5">
     <p class="text-xs text-gray-500">
          {{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}
     </p>

     <h3 class="font-bold text-base mt-2">
          {!! $post['title']['rendered'] !!}
     </h3>

     <p class="text-sm mt-2">
          {!! Str::limit(strip_tags($post['excerpt']['rendered']), 100) !!}
     </p>

     <a href="{{ route('blog.show', $post['slug']) }}" class="text-red-600 mt-3 inline-block">
          Read More →
     </a>
     </div>
</div>
@endforeach
