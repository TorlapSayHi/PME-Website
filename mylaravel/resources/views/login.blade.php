<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4 sm:px-0">
<div class="absolute top-4 left-4">
    <a href="{{ route('home') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 text-sm sm:text-base">
        Go to Home
    </a>
</div>
    <div class="bg-white shadow-lg rounded-lg p-6 sm:p-8 w-full max-w-sm sm:max-w-md">
        <h2 class="text-xl sm:text-2xl font-bold text-center text-gray-800 mb-4 sm:mb-6">Login</h2>
        
        <!-- แสดงข้อความผิดพลาดถ้ามี -->
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 text-sm sm:text-base" role="alert">
                {{ session('error') }}
            </div>
        @endif
        
        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control mt-1 block w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base" required>
            </div>
            <div class="form-group">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" id="password" name="password" class="form-control mt-1 block w-full px-3 sm:px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm sm:text-base" required>
            </div>
            <div class="form-group">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-sm sm:text-base">Login</button>
            </div>
        </form>
        <p class="text-center text-sm text-gray-600 mt-4">
            Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
        </p>
    </div>
</body>

</html>