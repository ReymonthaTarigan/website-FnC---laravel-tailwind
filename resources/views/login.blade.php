<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login Form</title>
</head>

<body class="pt-[75px] min-h-screen flex flex-col">

    <x-navbar></x-navbar>

    <div class="container mx-auto flex justify-center items-center flex-grow px-4">
        <div class="login w-full md:w-1/2 flex flex-col justify-center items-center rounded-lg mt-16 shadow-[4px_4px_4px_rgba(0,0,0,0.25)] mb-10">
            <h1 class="font-body text-black text-2xl font-semibold mt-16">Login</h1>
            <form method="POST" action="{{ route('login') }}" class="w-full px-10 md:px-16 flex flex-col items-center">
                @csrf
                <input type="text" id="username" name="username" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 mb-8 border-gray-200 border-2" placeholder="Username">

                <input type="password" id="password" name="password" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 mb-8 border-gray-200 border-2" placeholder="Password">

                <input type="submit" value="Login" class="w-full h-[42px] rounded-lg bg-[rgba(10,93,82,1)] text-sm font-medium text-white mt-10 mb-16  hover:bg-teal-700">
            </form>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
