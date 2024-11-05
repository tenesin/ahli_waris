<x-filament-panels::page>
    <!-- Custom Dashboard Section -->
    <div class="space-y-8">
        
        <!-- Greeting Section -->
        <div class="text-2xl font-bold text-gray-800">
            Welcome Back, [User Name]!
        </div>
        
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Total Users Card -->
            <div class="p-6 bg-blue-100 rounded-lg shadow flex items-center">
                <div class="bg-blue-600 p-3 rounded-full text-white mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 4a4 4 0 00-4 4v5h6V8a4 4 0 00-4-4zm0 0v9m0 0H4v5h6v-5H9z" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-blue-800">Total Users</h4>
                    <p class="text-2xl font-bold text-blue-900">1,234</p>
                </div>
            </div>

            <!-- Sales Today Card -->
            <div class="p-6 bg-green-100 rounded-lg shadow flex items-center">
                <div class="bg-green-600 p-3 rounded-full text-white mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M4 21V9.5A1.5 1.5 0 015.5 8H10a2 2 0 010 4H6m10 6h5M16 4h5m-5 4h5" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-green-800">Sales Today</h4>
                    <p class="text-2xl font-bold text-green-900">$2,430</p>
                </div>
            </div>

            <!-- New Orders Card -->
            <div class="p-6 bg-red-100 rounded-lg shadow flex items-center">
                <div class="bg-red-600 p-3 rounded-full text-white mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18M3 19h18" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-red-800">New Orders</h4>
                    <p class="text-2xl font-bold text-red-900">78</p>
                </div>
            </div>
        </div>
        
        <!-- Recent Activity Section -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <ul class="divide-y divide-gray-200">
                <li class="py-4">
                    <p class="text-gray-700">User <strong>John Doe</strong> created a new order.</p>
                    <span class="text-gray-500 text-sm">2 hours ago</span>
                </li>
                <li class="py-4">
                    <p class="text-gray-700">Product <strong>Smartphone X</strong> was added to the inventory.</p>
                    <span class="text-gray-500 text-sm">5 hours ago</span>
                </li>
                <!-- Add more activity items as needed -->
            </ul>
        </div>

    </div>
</x-filament-panels::page>
