<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>home</title>
</head>
<body class="pt-[75px] ">

<x-navbar></x-navbar>

    
    
    <div class="container flex justify-center">
    <div class="form  border-black border-2 w-[70%]  flex-col pb-36">
        <h1 class="font-body text-black text-4xl underline underline-offset-8 mt-20 mb-16">Formulir Pengajuan Proyek</h1>
        <form>
            <label for="fname" class="font-body text-black font-medium  text-base ">Nama</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="Nama"><br>

            <label for="fname" class="font-body text-black font-medium  text-base ">Email</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="nama@domain.net"><br>

            <label for="fname" class="font-body text-black font-medium  text-base ">Nomor Telepon</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="08xxxxxxxxxx"><br>

            <label for="fname" class="font-body text-black font-medium  text-base ">Instansi</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="Instansi"><br>

            <h3 class="font-body text-black font-medium  text-base mb-6 ">Jenis Proyek</h3>
            
            
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="font-body text-black font-medium  text-base ">Website</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="font-body text-black font-medium  text-base ">Mobile</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="font-body text-black font-medium  text-base ">Desktop</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="Lainnya"><br>
           
            <h3 class="font-body text-black font-medium  text-base mb-6 ">Deskripsi Proyek</h3>
            <textarea id="w3review" name="w3review" rows="4" cols="50" class="w-[626px] h-[162px] py-[16px] px-[12px] rounded-lg	text-lg leading-6 font-medium border-gray-200 border-2" placeholder="Penjelasan Mencakup deskripsi, fitur, fungsi dan tujuan"></textarea>
            <div></div>

            <label for="fname" class="font-body text-black font-medium  text-base ">Expektasi Biaya</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="dd/mm/yyyy"><br>

            <label for="fname" class="font-body text-black font-medium  text-base ">Deadline Proyek</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8  border-gray-200 border-2" placeholder="dd/mm/yyyy"><br>

            <h3 class="font-body text-black font-medium  text-base mb-6 ">Apakah sudah memiliki proyek</h3>
            
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="font-body text-black font-medium  text-base ">Sudah</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="font-body text-black font-medium  text-base ">Belum</label><br>
            
            <input type="submit"  class="w-[626px] h-[42px] rounded-lg  bg-[rgba(10,93,82,1)] text-sm	font-medium	text-white	mt-10">


        </form>
    </div>
    </div>
    
    <x-footer></x-footer>

  
    

</body>
</html>
