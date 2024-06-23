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

<div class="container border-black border-2 flex justify-center items-center mb-10">
    <div class="login w-1/2 border-black border-2 flex flex-col justify-center items-center rounded-lg mt-16 shadow-[4px_4px_4px_rgba(0,0,0,0.25)]">
        <h1 class="font-body text-black text-2xl font-semibold mt-16">Login</h1>
        <form action="" class="w-full px-10 border-black border-2 flex flex-col items-center">
            <input type="text" id="fname" name="fname" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 mb-8 border-gray-200 border-2" placeholder="Username">

            <input type="password" id="fname" name="fname" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 mb-8 border-gray-200 border-2" placeholder="Password">

            <input type="submit" value="Login" class="w-full h-[42px] rounded-lg  bg-[rgba(10,93,82,1)] text-sm	font-medium	text-white	mt-10 mb-16">
        </form>
    </div>
</div>

<x-footer></x-footer>
</body>
</html>
