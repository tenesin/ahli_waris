<x-filament-panels::page>
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-bold">Chatbot Konsultasi Warisan</h1>
        <button class="px-4 py-2 font-semibold text-white bg-gold-500 rounded-md">Riwayat Konsultasi</button>
    </div>

    <!-- Chat Room Section -->
    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50 mb-4">
        <div class="text-sm font-semibold text-gray-500 mb-2">Ruang Konsultasi #0000001</div>
        <div class="flex justify-center text-sm text-gray-600 mb-2">Hari ini</div>

        <!-- Chat Messages -->
        <div class="space-y-4">
            <!-- Bot Message -->
            <div class="flex items-start space-x-2">
                <img src="path-to-chatbot-avatar.png" alt="Chatbot Avatar" class="w-8 h-8 rounded-full">
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-gray-700">Ahli Waris Chatbot</div>
                    <p class="text-gray-600">Halo! Selamat datang di layanan Konsultasi Waris. Saya di sini untuk membantu Anda menemukan solusi yang tepat untuk masalah anda.</p>
                    <div class="text-xs text-gray-400 mt-1">10:00 PM</div>
                </div>
            </div>

            <!-- User Message -->
            <div class="flex justify-end space-x-2">
                <div class="bg-green-100 border border-green-200 rounded-lg p-4 max-w-md">
                    <p class="text-gray-700">Saya sedang butuh penengah dalam masalah pembagian warisan saya!</p>
                    <div class="text-xs text-gray-400 mt-1 text-right">10:00 PM</div>
                </div>
            </div>

            <!-- Bot Follow-up Message -->
            <div class="flex items-start space-x-2">
                <img src="path-to-chatbot-avatar.png" alt="Chatbot Avatar" class="w-8 h-8 rounded-full">
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <div class="text-gray-700">Ahli Waris Chatbot</div>
                    <p class="text-gray-600">Oke, bisa tolong jawab pertanyaan berikut:</p>
                    <ul class="text-gray-600 list-decimal ml-6">
                        <li>Apakah anda sudah membuat rencana pembagian warisan di website kami?</li>
                        <li>Apakah masing-masing ahli waris sudah mengecek hasil pembagian pada website?</li>
                        <li>Ceritakan lebih detail permasalahan kamu</li>
                    </ul>
                    <div class="text-xs text-gray-400 mt-1">10:00 PM</div>
                </div>
            </div>

            <!-- User Message -->
            <div class="flex justify-end space-x-2">
                <div class="bg-green-100 border border-green-200 rounded-lg p-4 max-w-md">
                    <p class="text-gray-700">Saya sudah membuat rencana pembagian warisan, namun salah satu ahli waris saya keberatan dan tidak mau diajak diskusi. Saya sudah tidak tahu bagaimana lagi, jadi saya butuh bantuan penengah.</p>
                    <div class="text-xs text-gray-400 mt-1 text-right">10:00 PM</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification and Suggested Prompts Section -->
    <div class="bg-yellow-100 border border-yellow-300 rounded-lg p-3 mb-4 text-sm text-yellow-700">
        <p>📜 Baca Syarat dan Ketentuan sebelum memulai sesi konsultasi</p>
    </div>

    <div class="flex space-x-2 mb-4">
        <button class="px-4 py-2 bg-gray-100 rounded-full text-gray-700 text-sm">Saya sedang mengalami konflik warisan</button>
        <button class="px-4 py-2 bg-gray-100 rounded-full text-gray-700 text-sm">Ahli waris saya tidak setuju dengan hasil pembagian</button>
        <button class="px-4 py-2 bg-gray-100 rounded-full text-gray-700 text-sm">Apakah anda info kontak lawyer</button>
    </div>

    <!-- Input Section -->
    <div class="flex items-center border-t border-gray-200 pt-2">
        <input
            type="text"
            placeholder="Ketik permasalahan atau keluhan terkait warisan disini"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold-500 text-gray-700"
        />
        <button class="px-4 py-2 ml-2 text-white bg-gold-500 rounded-lg">Kirim</button>
    </div>
</x-filament-panels::page>
