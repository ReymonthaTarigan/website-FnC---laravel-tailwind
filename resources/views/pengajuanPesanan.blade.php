<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Pesanan Berhasil</title>
</head>

<body class="pt-[75px] min-h-screen flex flex-col">

    <x-navbar></x-navbar>

    <div class="container mx-auto flex justify-center items-center flex-grow px-4">
        <div class="login w-full md:w-1/2 flex flex-col justify-center items-center rounded-lg mt-16 shadow-[4px_4px_4px_rgba(0,0,0,0.25)] mb-10 ">
            <h1 class="font-body text-black text-2xl font-semibold mt-16 text-center">Pengajuan proyek berhasil!</h1>
            <h1 class="font-body text-black text-2xl font-semibold mt-16 text-center">Silahkan hubungi kami di WA untuk keterangan dan pembahasan lebih lanjut</h1>
            <a href="https://wa.me/+6282113230068"><button id="btn-back" class="font-body mt-10 mb-10 text-white bg-[rgba(10,93,82,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-teal-700">WhatsApp</button></a>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>