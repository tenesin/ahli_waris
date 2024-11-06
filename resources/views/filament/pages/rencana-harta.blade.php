<x-filament-panels::page>
    <!-- User Information Card -->
    <div class="absolute top-4 right-4 bg-white border border-gray-200 rounded-lg shadow-md p-4 flex items-center space-x-2">
        <img src="path-to-user-avatar.png" alt="User Avatar" class="w-10 h-10 rounded-full">
        <div>
            <div class="font-semibold">Adhitya Pratama Mangku</div>
            <div class="text-sm text-gray-500">Member Ahli Waris</div>
        </div>
    </div>

    <!-- Page Title -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold">Buat Rencana Pembagian Warisan</h1>
    </div>

    <!-- Tab Navigation -->
    <div class="border-b border-gray-200 mb-6">
        <nav class="flex space-x-4">
            <button class="py-2 px-4 text-gold-500 border-b-2 border-gold-500 font-semibold">Aset & Tanggungan Pewaris</button>
            <button class="py-2 px-4 text-gray-500">Detail Keluarga</button>
            <button class="py-2 px-4 text-gray-500">Hasil Kalkulasi</button>
        </nav>
    </div>

    <!-- Content Section -->
    <div class="space-y-6">
        <!-- Rencana Wasiat Section -->
        <div class="flex justify-between items-center">
            <div>
                <label class="font-semibold">Rencana Wasiat <span class="text-red-500">*</span></label>
                <p class="text-sm text-gray-500">Menampilkan 0 baris data, untuk detailnya <a href="#" class="text-gold-500">Klik Disini</a></p>
            </div>
            <button class="px-4 py-2 text-gold-500 border border-gold-500 rounded-md">+ Tambah Wasiat Baru</button>
        </div>

        <!-- Rencana Hibah Section -->
        <div class="flex justify-between items-center">
            <div>
                <label class="font-semibold">Rencana Hibah <span class="text-red-500">*</span></label>
                <p class="text-sm text-gray-500">Menampilkan 0 baris data, untuk detailnya <a href="#" class="text-gold-500">Klik Disini</a></p>
            </div>
            <button class="px-4 py-2 text-gold-500 border border-gold-500 rounded-md">+ Tambah Hibah Baru</button>
        </div>

        <!-- Hutang Piutang Input -->
        <div>
            <label for="hutang" class="font-semibold">Hutang Piutang <span class="text-red-500">*</span></label>
            <input
                type="text"
                id="hutang"
                placeholder="Masukkan nilai hutang piutang yang dimiliki"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold-500"
            />
        </div>

        <!-- Biaya Kematian Input -->
        <div>
            <label for="biaya_kematian" class="font-semibold">Biaya Kematian <span class="text-red-500">*</span></label>
            <input
                type="text"
                id="biaya_kematian"
                placeholder="Masukkan nilai rencana biaya kematian yang dianggarkan"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gold-500"
            />
        </div>

        <!-- Toggle Switch -->
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="use_all_assets" class="w-5 h-5 text-gold-500 rounded-full">
            <label for="use_all_assets" class="font-semibold text-gold-500">Gunakan Semua Aset Kekayaan untuk diwariskan</label>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button class="px-6 py-2 text-white bg-gold-500 rounded-md">Lanjutkan</button>
        </div>
    </div>
</x-filament-panels::page>
