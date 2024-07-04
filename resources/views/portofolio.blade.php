<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portofolio</title>
</head>
<body class=" pt-[75px] ">
<x-navbar></x-navbar>

  
  <div class="container min-h-screen flex justify-center bg-no-repeat  bg-cover   "  style="background-image: url(latar/latarForm.jpg)">  

    <div class="portofolio   w-[70%]  flex-col pb-36 bg-white">
        
        <h1 class="font-body text-black text-4xl underline underline-offset-8 mt-20 mb-16 font-medium">Portofolio</h1>

        <div class="website flex  h-[1148px] shadow-[4px_4px_4px_rgba(0,0,0,0.25)]">
        
            <div class="max-h-full overflow-y-auto">
          
              <img src="" alt="Gambar 1" class="w-full h-auto rounded-lg">
          
            </div>
              
        </div>
        
   </div>
    

    </div>
    

</div>
   <x-footer></x-footer>

</body>
</html>