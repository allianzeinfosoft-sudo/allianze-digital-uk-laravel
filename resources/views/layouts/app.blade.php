<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    <div id="page-loader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
        <div class="flex flex-col items-center">
            <div class="w-16 h-16 border-4 border-gray-200 border-t-blue-600 rounded-full animate-spin"></div>
            <p class="mt-4 text-sm text-gray-700">Loading...</p>
        </div>
    </div>

@yield('content')


<!-- Footer Section: Multi-column layout with contact info and links -->
@include('layouts.footer')

<script src="{{ asset('script.js') }}"></script>
        @stack('scripts')
</body>
</html>