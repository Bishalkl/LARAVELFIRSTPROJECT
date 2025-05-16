<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <main class="container mx-auto px-6 mt-10">
        <div class="bg-white shadow rounded-lg p-8 max-w-3xl mx-auto">
            <h2 class="text-3xl font-semibold mb-6 text-gray-700">
                Welcome, <span class="text-blue-600">{{ $value['username'] ?? 'User' }}</span>
            </h2>
            <p class="mb-8 text-gray-500">Here is the summary of your submitted data.</p>

            <!-- Edit Profile Button -->
            <div class="mb-8">
                <a href="{{ route('login.form') }}" 
                   class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Edit Profile
                </a>
            </div>

            @if (isset($value) && !empty($value))
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="p-4 border rounded-lg">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Username</h3>
                        <p class="text-gray-800">{{ $value['username'] ?? 'N/A' }}</p>
                    </div>

                    <div class="p-4 border rounded-lg">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Email</h3>
                        <p class="text-gray-800">{{ $value['email'] ?? 'N/A' }}</p>
                    </div>

                    <div class="p-4 border rounded-lg md:col-span-2">
                        <h3 class="text-lg font-medium text-gray-600 mb-2">Password (hidden)</h3>
                        <p class="text-gray-800">********</p>
                    </div>
                </div>
            @else
                <p class="text-center text-gray-500 text-lg">No data submitted yet.</p>
            @endif
        </div>
    </main>

</body>
</html>
