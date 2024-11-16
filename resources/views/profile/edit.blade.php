<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="py-12 bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-500 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
            <!-- Update Profile Information Form -->
            <div class="p-6 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">
                    Update Profile Information
                </h2>
                <p class="text-gray-600 text-center mb-6">
                    Update your account's profile information and email address.
                </p>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Form -->
            <div class="p-6 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-4">
                    Update Password
                </h2>
                <p class="text-gray-600 text-center mb-6">
                    Ensure your account is using a long, random password to stay secure.
                </p>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete User Form -->
            <div class="p-6 sm:p-8 bg-white shadow-lg sm:rounded-lg transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-red-600 text-center mb-4">
                    Delete Account
                </h2>
                <p class="text-gray-600 text-center mb-6">
                    Permanently delete your account. This action cannot be undone.
                </p>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
