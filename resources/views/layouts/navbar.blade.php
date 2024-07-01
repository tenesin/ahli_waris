<nav class="bg-white shadow-md py-4 px-2 md:px-4 lg:px-8">
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ asset('images/auth.title.png') }}" alt="Logo" class="h-10">
        </div>
        <div class="flex items-center space-x-8">
            <a href="#" class="text-gray-700 hover:text-gray-900">Tentang Platform</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Fitur Unggulan</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">Artikel</a>
            <a href="#" class="text-gray-700 hover:text-gray-900">FAQ</a>
        </div>
        <div class="flex items-center space-x-2">
            @php
                use Filament\Facades\Filament;
            @endphp
            @if (Filament::auth()->check())
                <a href="{{ route('filament.dashboard.pages.dashboard') }}"
                    class="bg-gold-500 text-white py-2 px-8 rounded hover:bg-gold-600">Dashboard</a>
                <form action="{{ route('filament.dashboard.auth.logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-gold-200 text-gold-500 py-2 px-8 rounded hover:bg-gold-300">Keluar</button>
                </form>
            @else
                <a class="bg-gold-500 text-white py-2 px-8 rounded hover:bg-gold-600"
                    href="{{ route('filament.dashboard.auth.login') }}">Masuk</a>
                <a class="bg-gold-200 text-gold-500 py-2 px-8 rounded hover:bg-gold-300"
                    href="{{ route('filament.dashboard.auth.register') }}">Daftar</a>
            @endif
        </div>
    </div>
</nav>
