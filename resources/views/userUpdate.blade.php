<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-50 to-purple-100 min-h-screen flex items-center justify-center px-4">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    @if (!$user)
        <h1 class="text-2xl font-bold text-red-600 text-center">User not found.</h1>
    @else
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Edit User</h1>

        {{-- Display validation errors --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-md">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Update Form --}}
        <form action="{{ route('user.update', $user->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-semibold text-gray-700">Name</label>
                <input type="text" name="name" id="name" required
                       value="{{ $user->name }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                       value="{{ $user->email }}"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password <span class="text-gray-400 text-xs">(leave blank to keep current)</span></label>
                <input type="password" name="password" id="password"
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none shadow-sm">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                Update User
            </button>
        </form>
    @endif
</div>
</body>
</html>
