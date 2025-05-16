<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Laravel App</title>

    <!-- ✅ Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Header -->
    @include('layouts.header')

    <!-- Dynamic Content Section -->
    <main class="py-10">
        @yield('login-section')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>
