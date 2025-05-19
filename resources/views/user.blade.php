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
            <h2 class="text-3xl font-bold text-center mb-6 text-blue-700">User List</h2>

            <!-- ✅ Create User Button -->
            <div class="flex justify-end mb-6">
                <a href="{{ route('user.index') }}"
                   class="bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700 transition">
                    + Create User
                </a>
            </div>

            @forelse ($users as $user)
                <div class="mb-4 p-4 bg-blue-50 border border-blue-200 rounded-lg hover:shadow transition">
                    <p class="text-xl font-semibold text-blue-800">{{ $user->name }}</p>
                    <p class="text-sm text-blue-600 mb-4">{{ $user->email }}</p>

                    <div class="flex space-x-4">
                        <!-- Update Button -->
                        <a href="{{ route('user.edit', $user->id) }}"
                           class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
                            Update
                        </a>

                        <!-- Delete Form -->
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">No users found.</p>
            @endforelse
        </div>
    </div>

</body>
</html>
