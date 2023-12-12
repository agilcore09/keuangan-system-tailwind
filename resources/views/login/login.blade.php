<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login Page</title>
</head>

<div class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <div class="flex justify-center">

            <img src="logo.png" alt="logo" class="w-20">
        </div>

        <!-- Formulir login -->
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <input type="email" id="username" name="email"
                    class="w-full p-2 border rounded focus:border-green-500" autocomplete="off">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded"
                    autocomplete="off">
            </div>

            <button type="submit" class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">Login</button>
        </form>
    </div>

</div>

</html>
