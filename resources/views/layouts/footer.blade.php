<footer class="bg-white shadow-md py-8 px-4 md:px-8 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div class="flex flex-col items-start">
            <img src="{{ asset('images/auth.title.png') }}" alt="Logo" class="h-12 mb-4">
            <p class="text-gray-600">Your company tagline or a brief description here.</p>
        </div>

        <div class="flex flex-col items-start">
            <h3 class="text-gray-800 font-semibold mb-4">Useful Links</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Privacy & Policy</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Terms & Condition</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Services</a></li>
            </ul>
        </div>

        <div class="flex flex-col items-start">
            <h3 class="text-gray-800 font-semibold mb-4">Contact Us</h3>
            <p class="text-gray-600">Jalan Gebang Wetan 5B</p>
            <p class="text-gray-600">Phone: +62 831 9292 5747</p>
            <p class="text-gray-600">Email: cs@dataekspor.com</p>
        </div>
    </div>

    <div class="border-t border-gray-200 pt-4 text-center">
        <p class="text-gray-500">&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
    </div>
</footer>
