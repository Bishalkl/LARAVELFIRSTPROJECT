<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-3xl bg-white rounded-lg shadow-md p-8">
            <h2 class="text-3xl font-bold text-center mb-8 text-blue-700">User List</h2>

            @forelse ($users as $user)
                <div class="mb-4 p-4 bg-blue-50 border border-blue-200 rounded-lg hover:shadow transition">
                    <p class="text-xl font-semibold text-blue-800">{{ $user->name }}</p>
                    <p class="text-sm text-blue-600">{{$user->email}}
                </div>
            @empty
                <p class="text-center text-gray-500">No users found.</p>
            @endforelse
        </div>
    </div>

</body>
</html>
