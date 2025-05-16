<!-- resources/views/login.blade.php -->
@extends('layouts.master')

@section('login-section')

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>

        <form action="{{ route('login.sumbit') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-600">Name</label>
                <input 
                    id="username" 
                    name="username" 
                    type="text" 
                    required 
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email Address</label>
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    required 
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    required 
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"
            >
                Submit
            </button>
        </form>
    </div>
</div>

@endsection
