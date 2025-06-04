<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - JemberSpot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center"
    style="background-image: url('/images/bg-login.jpg');">

    <div class="bg-white bg-opacity-90 backdrop-blur-md shadow-lg rounded-xl w-full max-w-md p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-2">Login</h2>
        <p class="text-sm text-center text-gray-500 mb-6">Silakan masuk ke akun Anda</p>

        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm text-center">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 text-red-600 text-sm text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input type="checkbox" name="remember" id="remember"
                    class="text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label for="remember" class="ml-2 text-sm text-gray-700">Remember Me</label>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
                Login
            </button>
        </form>

        <div class="text-center mt-6">
            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot your
                password?</a>
        </div>
    </div>

</body>

</html>
