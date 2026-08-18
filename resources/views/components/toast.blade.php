@if (session('success'))
    <div id="toast"
        class="fixed top-5 left-5 z-50 bg-green-600 text-white px-5 py-3 rounded-xl shadow-lg transition-all duration-500">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div id="toast"
        class="fixed top-5 left-5 z-50 bg-red-600 text-white px-5 py-3 rounded-xl shadow-lg transition-all duration-500">
        {{ session('error') }}
    </div>
@endif
