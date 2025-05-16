<!-- resources/views/login.blade.php -->
@extends('layouts.master')

@section('login-section')

<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-100 to-purple-200 py-12 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl rounded-3xl p-10 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Welcome Back</h2>

        @if(session('success'))
               <div 
        class="flex items-start justify-between p-4 mb-6 text-sm text-green-800 bg-green-100 border border-green-300 rounded-xl shadow-md relative"
        role="alert"
    >
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-3 flex-shrink-0 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path 
                    fill-rule="evenodd" 
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" 
                    clip-rule="evenodd"
                />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        <button 
            onclick="this.parentElement.remove()" 
            class="text-green-600 hover:text-green-800 font-semibold ml-4"
        >
            ×
        </button>
    </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Name</label>
                <input 
                    id="username" 
                    name="username" 
                    value="{{ old('username') }}"
                    type="text" 
                    placeholder="Enter your name"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                @error('username') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input 
                    id="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    type="email" 
                    placeholder="Enter your email"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                @error('email') 
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    placeholder="Enter your password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
                @error('password')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button 
                type="submit" 
                class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded-xl font-semibold hover:from-blue-600 hover:to-purple-700 transition duration-300 shadow-md"
            >
                Log In
            </button>
        </form>
    </div>
</div>

@endsection
