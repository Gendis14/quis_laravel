<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="py-12 bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Welcome Message Card -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg transition-transform transform hover:scale-105">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    <h2 class="text-2xl font-bold">Welcome to Your Dashboard</h2>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        {{ __("You're logged in! Enjoy exploring the features.") }}
                    </p>
                </div>
            </div>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature Card 1 -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold mb-2">📊 Analytics</h3>
                    <p>Track and analyze your performance with detailed insights.</p>
                    <a href="#" class="mt-4 inline-block text-sm font-semibold text-indigo-200 hover:text-white">Learn More →</a>
                </div>

                <!-- Feature Card 2 -->
                <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold mb-2">⚙️ Settings</h3>
                    <p>Customize your account preferences and configurations.</p>
                    <a href="#" class="mt-4 inline-block text-sm font-semibold text-green-200 hover:text-white">Configure →</a>
                </div>

                <!-- Feature Card 3 -->
                <div class="bg-gradient-to-r from-red-500 to-pink-600 text-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:scale-105">
                    <h3 class="text-xl font-semibold mb-2">🔒 Security</h3>
                    <p>Update your password and manage account security.</p>
                    <a href="#" class="mt-4 inline-block text-sm font-semibold text-red-200 hover:text-white">Manage Security →</a>
                </div>
            </div>

            <!-- Footer -->
            <div class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg shadow-lg">
                <p class="text-center text-sm text-gray-600 dark:text-gray-400">
                    &copy; {{ now()->year }} Your Company. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
