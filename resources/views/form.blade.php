<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>home</title>
</head>
<body class="bg-[rgba(221,221,221,1)] overflow-x-hidden relative">

    <nav class="absolute top-0 w-full h-[92px] bg-[rgba(59,63,70,1)] z-10 px-10 py-5 flex">
        <div class="foto w-[43px] h-[48px] top-[22px] left-[53px] bg-[rgba(217,217,217,1)]"></div>
        <div class="sitename text-xl px-5 py-2.5 text-[rgba(241,194,50,1)]">Site name</div>
        <div class="absolute right-10 flex">
            <div class="page text-xl px-5 py-2.5 text-[rgba(241,194,50,1)]"><a href="">page 1</a></div>
            <div class="page text-xl px-5 py-2.5 text-[rgba(241,194,50,1)]"><a href="">page 2</a></div>
            <div class="page text-xl px-5 py-2.5 text-[rgba(241,194,50,1)]"><a href="">page 3</a></div>
            <div class=" text-base pengajuan w-[129px] h-[52px] bg-[rgba(241,194,50,1)] rounded-lg">
                <h1 class="px-6 py-3 "><a href="">Pengajuan</a></h1>
            </div>
        </div>     
    </nav>

    <!-- gambar latar -->
    <div class="latar absolute z-100 top-[87px] left-[-64px] rotate-[-11deg] w-[845px] h-[25px] bg-[rgba(241,194,50,1)]"></div>
    <div class="latar absolute z-100 top-[137px] left-[-64px] rotate-[-11deg] w-[845px] h-[25px] bg-[rgba(241,194,50,1)]"></div>
    <div class="latar absolute z-100 top-[500px] right-[-300px] w-[600px] h-[600px] border-[rgba(241,194,50,1)] rounded-full border-[30px] ">
        <div class="latar absolute z-100 top-[18px] left-[18px] w-[500px] h-[500px] border-[rgba(241,194,50,1)] rounded-full border-[30px]"></div>
    </div>
    
    <div class="form absolute ml-[100px] w-[624px] h-[1007px] mt-[200px]">
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

    <footer class="absolute  w-full  bg-[rgba(59,63,70,1)]   flex mt-[1500px] text-xl px-5 py-2.5 text-[rgba(241,194,50,1)] ">
    
        <div class="sitename text-xl px-5 py-2.5 text-[rgba(241,194,50,1)] my-20 mx-10">
            <h1>Site name</h1>
            <h1 class="pt-[100px]"><a href="">instagram</a></h1>
        </div>
        <div class="kosong w-[500px] -"></div>
       <div >
        <h1 class="my-10 mx-20"><a href="">topik</a></h1>
        <h1 class="my-10 mx-20"><a href="">topik</a></h1>
        <h1 class="my-10 mx-20"><a href="">topik</a></h1>
        <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       </div>
       <div >
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       </div>
       <div >
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       <h1 class="my-10 mx-20"><a href="">topik</a></h1>
       </div>
        
    

    </footer>


    

</body>
</html>
