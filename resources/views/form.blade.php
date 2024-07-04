<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Form</title>
</head>
<body class="pt-[75px]">

<x-navbar></x-navbar>

<div class="container flex justify-center bg-no-repeat  bg-cover   "  style="background-image: url(latar/latarForm.jpg)">
    <div class="form  w-full md:w-[70%] flex-col pb-36 px-4 md:px-0">
        <h1 class="font-body text-black text-4xl underline underline-offset-8 mt-20 mb-16">Formulir Pengajuan Proyek</h1>
        <form method="POST" action="{{ route('form') }}">
            @csrf
            <div class="mb-8">
                <label for="fname" class="font-body text-black font-medium text-base">Nama</label><br>
                <input type="text" id="fname" name="fname" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="Nama">
            </div>

            <div class="mb-8">
                <label for="email" class="font-body text-black font-medium text-base">Email</label><br>
                <input type="email" id="email" name="email" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="nama@domain.net">
            </div>

            <div class="mb-8">
                <label for="phone" class="font-body text-black font-medium text-base">Nomor Telepon</label><br>
                <input type="tel" id="phone" name="phone" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="08xxxxxxxxxx">
            </div>

            <div class="mb-8">
                <label for="instansi" class="font-body text-black font-medium text-base">Instansi</label><br>
                <input type="text" id="instansi" name="instansi" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="Instansi">
            </div>

            <h3 class="font-body text-black font-medium text-base mb-6">Jenis Proyek</h3>
            <div class="mb-8">
                <input type="radio" id="website" name="project_type" value="Website">
                <label for="website" class="font-body text-black font-medium text-base">Website</label><br>
                <input type="radio" id="mobile" name="project_type" value="Mobile">
                <label for="mobile" class="font-body text-black font-medium text-base">Mobile</label><br>
                <input type="radio" id="desktop" name="project_type" value="Desktop">
                <label for="desktop" class="font-body text-black font-medium text-base">Desktop</label><br>
                <input type="text" id="other" name="other_project" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="Lainnya">
            </div>

            <h3 class="font-body text-black font-medium text-base mb-6">Deskripsi Proyek</h3>
            <div class="mb-8">
                <textarea id="project_desc" name="project_desc" rows="4" class="w-full h-[162px] py-[16px] px-[12px] rounded-lg text-lg leading-6 font-medium border-gray-200 border-2" placeholder="Penjelasan Mencakup deskripsi, fitur, fungsi dan tujuan"></textarea>
            </div>

            <div class="mb-8">
                <label for="cost" class="font-body text-black font-medium text-base">Expektasi Biaya</label><br>
                <input type="text" id="cost" name="cost" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="Jumlah Biaya">
            </div>

            <div class="mb-8">
                <label for="deadline" class="font-body text-black font-medium text-base">Deadline Proyek</label><br>
                <input type="text" id="deadline" name="deadline" class="w-full h-[48px] py-[16px] px-[12px] rounded-lg text-lg font-medium leading-6 mt-2 border-gray-200 border-2" placeholder="dd/mm/yyyy">
            </div>

            <h3 class="font-body text-black font-medium text-base mb-6">Apakah sudah memiliki proyek</h3>
            <div class="mb-8">
                <input type="radio" id="yes" name="project_status" value="Sudah">
                <label for="yes" class="font-body text-black font-medium text-base">Sudah</label><br>
                <input type="radio" id="no" name="project_status" value="Belum">
                <label for="no" class="font-body text-black font-medium text-base">Belum</label><br>
            </div>

            <input type="submit" class="w-full h-[42px] rounded-lg bg-[rgba(10,93,82,1)]  hover:bg-teal-700 text-sm font-medium text-white mt-10">
        </form>
    </div>
</div>

<x-footer></x-footer>

</body>
</html>
