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
        <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-8">

            <!-- Page Title -->
            <h2 class="text-4xl font-bold text-center mb-8 text-blue-700">User List</h2>

            <!-- Create User Button -->
            <div class="flex justify-end mb-6">
                <a href="{{ route('user.index') }}"
                   class="bg-blue-600 text-white font-semibold px-5 py-2 rounded-md hover:bg-blue-700 transition duration-300 shadow">
                    + Create User
                </a>
            </div>

            <!-- User Cards -->
            @forelse ($users as $user)
                <div class="mb-6 p-5 bg-blue-50 border border-blue-200 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-xl font-semibold text-blue-800">{{ $user->name }}</p>
                            <p class="text-sm text-blue-600">{{ $user->email }}</p>
                        </div>
                        <div class="flex space-x-3">
                            <!-- Update Button -->
                            <a href="{{ route('user.edit', $user->id) }}"
                               class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300 shadow">
                                Update
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-300 shadow">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">No users found.</p>
            @endforelse

            <!-- Enhanced Pagination -->
            <div class="mt-10">
                <div class="flex justify-center">
                    {{ $users->links() }}
                </div>
            </div>

        </div>
    </div>

</body>
</html>
