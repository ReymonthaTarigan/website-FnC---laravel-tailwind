<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>home</title>
</head>
<body class="bg-[rgba(221,221,221,1)] overflow-x-hidden relative ">

<x-navbar></x-navbar>

    <!-- gambar latar -->
    <x-background-form></x-background-form>
    
    <div class="form relative ml-[100px] w-[624px]  mt-[200px] pb-4	">
        <h1 class="text-[64px] font-bold">Judul Form</h1>
        <h2 class="text-[rgba(130,130,130,1)] font-normal	text-2xl py-3">Penjelasan</h2>

        <form>
            <label for="fname" class="text-lg leading-6 font-medium ">Isian Singkat</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8" placeholder="Jane"><br>

            <label for="fname" class="text-lg leading-6 font-medium ">Isian Singkat</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8" placeholder="email@janesfakedomain.net"><br>

            <label for="fname" class="text-lg leading-6 font-medium ">Isian Singkat</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8" placeholder="dd/mm/yyyy"><br>

            <h3 class="text-lg leading-6 font-medium mb-6 ">Pilihan</h3>
            
            
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Pilihan 1</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Pilihan 2</label><br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Lainnya</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8" placeholder="Lainnya"><br>

            <h3 class="text-lg leading-6 font-medium mb-6 mt-8">Checkbox</h3>



            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Pilihan 1</label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Pilihan 2</label><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" >
            <label for="vehicle1" class="text-lg leading-6 font-medium ">Lainnya</label><br>
            <input type="text" id="fname" name="fname" class="w-[626px] h-[48px] py-[16px] px-[12px] rounded-lg	text-lg	font-medium	leading-6 mt-2 mb-8" placeholder="Lainnya"><br>

           
            <h3 class="text-lg leading-6 font-medium mb-6 mt-8">Textarea</h3>
            <textarea id="w3review" name="w3review" rows="4" cols="50" class="w-[626px] h-[162px] py-[16px] px-[12px] rounded-lg	text-lg leading-6 font-medium" placeholder="Enter your question massage"></textarea>
            <div></div>
            <input type="submit" class="w-[626px] h-[42px] rounded-lg  bg-[rgba(59,63,70,1)] text-sm	font-medium	text-white mt-3	">


        </form>
       
        
    </div>

    <x-footer-form></x-footer-form>
    

</body>
</html>
