@include('partials.meta')

<body>

    @include('partials.sidebar')

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Navbar -->
        @include('partials.navbar')

        <!-- Content -->
        @yield('content')

        <footer class="text-center py-3 mt-auto text-muted small">
            &copy; {{ now()->year }} @zeroone - Semua hak cipta dilindungi
        </footer>
    </div>

    @include('partials.footer')