@section('title', 'Ahli Waris')


<main>
    <header>
        <img src="{{ asset('images/hero.png') }}" alt="Hero Image" class="w-full h-auto rounded-lg mb-8">
    </header>
    <section class="px-4 md:px-8 lg:px-16">
    <section class="flex flex-col md:flex-row gap-8 mt-8 items-stretch">
        <!-- Left Column - About Content -->
        <div class="flex-1 p-6 bg-gray-100 rounded-lg flex flex-col">
            <div class="flex flex-row  mb-4 space-x-4">
                <h2 class="text-2xl font-semibold">Tentang</h2>
                <img src="{{ asset('images/auth.title.png') }}" alt="Logo" class="h-8 w-auto">
            </div>
            <p class="text-gray-700">
                Ahli Waris adalah platform manajemen aset dan edukasi hukum waris berbasis website yang berpedoman pada Hukum Islam dan KUHP. Platform ini menawarkan solusi efisien untuk pembagian aset warisan, hibah, dan wasiat dengan transparansi dan akuntabilitas, sehingga dapat mengurangi risiko konflik dan tindakan kriminalitas di antara ahli waris.
            </p>
        </div>

        <!-- Right Column - About Image -->
        <div class="flex-1 flex items-stretch">
            <img src="{{ asset('images/about.png') }}" alt="About Image" class="w-full h-full object-cover rounded-lg">
        </div>
    </section>

    <section class="mt-16">
        <h1 class="text-3xl font-bold text-center mb-8">Fitur Unggulan Ahli Waris</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="flex flex-col  p-6 bg-gray-100 rounded-lg shadow-md">
                <img src="{{ asset('images/icon1.png') }}" alt="Icon 1" class="h-12 w-12 mb-4">
                <h2 class="text-xl font-semibold mb-2">Pusat Edukasi</h2>
                <p class="text-gray-700 ">Akses pusat pembelajaran hukum warisan yang terpadu dan tersusun sistematis. Materi edukasi mencakup hibah, wasiat, dan waris dalam Islam, membantu pengguna memahami proses pembagian warisan dengan lebih baik.</p>
            </div>
    
            <!-- Card 2 -->
            <div class="flex flex-col  p-6 bg-gray-100 rounded-lg shadow-md">
                <img src="{{ asset('images/icon2.png') }}" alt="Icon 2" class="h-12 w-12 mb-4">
                <h2 class="text-xl font-semibold mb-2">Managemen Aset</h2>
                <p class="text-gray-700 ">Kelola dan catat semua aset kekayaan dengan fitur yang memungkinkan evaluasi nilai aset dan tujuan penggunaannya. Fitur ini memastikan semua aset tercatat dengan baik dan siap untuk proses pembagian warisan yang sesuai dengan prinsip syariat Islam.</p>
            </div>
    
            <!-- Card 3 -->
            <div class="flex flex-col  p-6 bg-gray-100 rounded-lg shadow-md">
                <img src="{{ asset('images/icon3.png') }}" alt="Icon 3" class="h-12 w-12 mb-4">
                <h2 class="text-xl font-semibold mb-2">Rencana Warisan</h2>
                <p class="text-gray-700 ">Kelola dan catat semua aset kekayaan dengan fitur yang memungkinkan evaluasi nilai aset dan tujuan penggunaannya. Fitur ini memastikan semua aset tercatat dengan baik dan siap untuk proses pembagian warisan yang sesuai dengan prinsip syariat Islam.</p>
            </div>
    
            <!-- Card 4 -->
            <div class="flex flex-col  p-6 bg-gray-100 rounded-lg shadow-md">
                <img src="{{ asset('images/icon3.png') }}" alt="Icon 3" class="h-12 w-12 mb-4">
                <h2 class="text-xl font-semibold mb-2">Konsultasi Waris</h2>
                <p class="text-gray-700 ">Fasilitasi komunikasi dengan ustad atau advokat hukum warisan melalui chatbot interaktif yang menggunakan machine learning. Dapatkan bantuan dan nasihat yang dibutuhkan dalam proses pembagian warisan Anda dengan mudah dan cepat.</p>
            </div>
    
           <!-- Card 5 -->
           <div class="flex flex-col  p-6 bg-gray-100 rounded-lg shadow-md">
            <img src="{{ asset('images/icon3.png') }}" alt="Icon 3" class="h-12 w-12 mb-4">
            <h2 class="text-xl font-semibold mb-2">Aduan Waris</h2>
            <p class="text-gray-700 ">Ajukan masalah atau pertanyaan terkait waris melalui formulir pengaduan. Admin atau staf yang bertanggung jawab akan memberikan solusi yang cepat dan tepat, memastikan setiap masalah ditangani dengan baik.</p>
        </div>
        </div>
    </section>

    <section class="mt-16">
        <h1 class="text-3xl font-bold text-center mb-8">Artikel Edukasi Warisan Pilihan</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/article1.jpg') }}" alt="Article 1" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Definisi Hukum Waris</h3>
                    <p class="text-gray-700">Deskripsi singkat untuk artikel edukasi pertama yang menjelaskan topik warisan.</p>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/article2.jpg') }}" alt="Article 2" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Definisi Wasiat</h3>
                    <p class="text-gray-700">Deskripsi singkat untuk artikel edukasi kedua yang menjelaskan topik warisan.</p>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/article3.jpg') }}" alt="Article 3" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Definisi Hibah</h3>
                    <p class="text-gray-700">Deskripsi singkat untuk artikel edukasi ketiga yang menjelaskan topik warisan.</p>
                </div>
            </div>
    
            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('images/article4.jpg') }}" alt="Article 4" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Definisi</h3>
                    <p class="text-gray-700">Deskripsi singkat untuk artikel edukasi keempat yang menjelaskan topik warisan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-16 px-4 md:px-8 lg:px-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Left Column - Title and Card -->
            <div class="md:col-span-1">
                <h1 class="text-3xl font-bold mb-4">Frequently Asked Questions</h1>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold mb-4">Got Questions?</h3>
                    <p class="text-gray-700 mb-4">Find answers to some of the most commonly asked questions about Ahli Waris. If you don’t find your answer here, feel free to reach out to us!</p>
                    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Contact Support
                    </button>
                </div>
            </div>
    
            <!-- Right Column - FAQ List -->
            <div class="md:col-span-2 grid gap-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Bagaimana cara daftar di Ahli Waris?</h3>
                        <button onclick="toggleAnswer(1)" class="text-blue-500 focus:outline-none">
                            <span id="icon1">+</span>
                        </button>
                    </div>
                    <p id="answer1" class="text-gray-700 mt-2 hidden">Untuk mendaftar, kunjungi halaman registrasi kami, isi data diri Anda, dan ikuti langkah-langkah yang disediakan.</p>
                </div>
    
                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Apakah layanan ini gratis?</h3>
                        <button onclick="toggleAnswer(2)" class="text-blue-500 focus:outline-none">
                            <span id="icon2">+</span>
                        </button>
                    </div>
                    <p id="answer2" class="text-gray-700 mt-2 hidden">Ya, Anda dapat menggunakan layanan dasar kami secara gratis. Kami juga menawarkan layanan premium dengan fitur tambahan.</p>
                </div>
    
                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Bagaimana cara mengelola aset saya?</h3>
                        <button onclick="toggleAnswer(3)" class="text-blue-500 focus:outline-none">
                            <span id="icon3">+</span>
                        </button>
                    </div>
                    <p id="answer3" class="text-gray-700 mt-2 hidden">Anda bisa menambahkan dan mengelola aset Anda di dashboard Ahli Waris yang mudah digunakan.</p>
                </div>
    
                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-md p-4">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold">Bagaimana cara membagikan aset kepada ahli waris?</h3>
                        <button onclick="toggleAnswer(4)" class="text-blue-500 focus:outline-none">
                            <span id="icon4">+</span>
                        </button>
                    </div>
                    <p id="answer4" class="text-gray-700 mt-2 hidden">Anda dapat menggunakan fitur pembagian aset di Ahli Waris untuk menetapkan pembagian sesuai hukum yang berlaku.</p>
                </div>
            </div>
        </div>
    </section>
</section>
    
    <script>
        function toggleAnswer(id) {
            const answer = document.getElementById(`answer${id}`);
            const icon = document.getElementById(`icon${id}`);
            
            // Toggle visibility of answer
            answer.classList.toggle('hidden');
            
            // Toggle icon
            if (answer.classList.contains('hidden')) {
                icon.textContent = '+';
            } else {
                icon.textContent = '-';
            }
        }
    </script>
    
    
    
</main>
