<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>
<body class="pt-[75px]">
    <x-navbar></x-navbar>
  
    <div class="konten1 bg-[rgba(10,93,82,1)] border-black border-2 flex justify-center items-center flex-col rounded-b-3xl ">
        <div class="landingPage w-[70%] border-black border-2 flex">
            <div class="border-black border-2 mt-20">
                <h1 class="font-body text-white text-4xl underline underline-offset-8">Landing Page</h1>
                <h2 class="font-body text-white mt-6 text-base">Penjelasan Singkat Website</h2>
                <a href="" class="bg-[rgba(167,228,223,1)] h-10 rounded-2xl w-24 flex items-center justify-center mt-14">
                    <h2 class="font-body text-black text-xs m-1">Pengajuan</h2>
                </a>
            </div>
            <div class="image ml-auto">
                <img src="img/ngoding.jpg" class="w-96" alt="">
            </div>
        </div>
        <div class="kenapaFnc w-[70%] border-black border-2 flex flex-col mt-40 pb-52">
            <h1 class="font-body text-white text-4xl underline underline-offset-8 ml-auto mb-24">Kenapa Harus FnC?</h1>
            <div class="alasan border-black border-2 flex   mt-4">
                <div class="w-1/3 border-black border-2 flex h-20">
                    <img src="img/wallet.svg" class="w-16 " alt=""  >
                    <div class="ml-4">
                    <h3 class="font-body text-white mt-1 text-xl">Harga Terjangkau</h3>
                    <h4 class="font-body text-white  mt-4 text-sm">Penjelasan</h4>
                    </div>
                </div>
                <div class="w-1/3 border-black border-2 flex h-20">
                    <img src="img/thumbs-up.svg" class="w-16 " alt=""  >
                    <div class="ml-4">
                    <h3 class="font-body text-white mt-1 text-xl">Developer Andal</h3>
                    <h4 class="font-body text-white  mt-4 text-sm">Penjelasan</h4>
                    </div>
                </div>
                <div class="w-1/3 border-black border-2 flex h-20">
                    <img src="img/briefcase.svg" class="w-16" alt=""  >
                    <div class="ml-4">
                    <h3 class="font-body text-white mt-1 text-xl">Berpengalaman</h3>
                    <h4 class="font-body text-white  mt-4 text-sm">Penjelasan</h4>
                    </div>
                </div>
            </div>
            
        </div>

        
    </div>


    <div id="jasa" class="konten2 bg-white border-black border-2 flex justify-center items-center flex-col  w-full  ">
        <div class="jasaKami w-[70%] border-black border-2 flex flex-col pt-20 ">
                <h1 class="font-body text-black text-4xl underline underline-offset-8 mb-10">Jasa Kami</h1>
                <div class="daftarJasa w-full mt-8 flex">
                    <div class="website flex w-5/12 h-40 shadow-[4px_4px_4px_rgba(0,0,0,0.25)]">
                        <img src="img/logo-chrome.svg" class="w-24 mr-5" alt="">
                        <div class="ml-4">
                            <h3 class="font-body text-black mt-8 text-xl">Website</h3>
                            <h4 class="font-body text-black  mt-4 text-sm">Penjelasan</h4>
                        </div>
                    </div>

                    <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-5/12 h-40 ml-auto">
                        <img src="img/phone-portrait.svg" class="w-24 mr-5" alt="">
                        <div class="ml-4">
                            <h3 class="font-body text-black mt-8 text-xl">Mobile</h3>
                            <h4 class="font-body text-black  mt-4 text-sm">Penjelasan</h4>
                        </div>
                    </div>
                </div>
                <div class="daftarJasa w-full mt-8 flex">
                    <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-5/12 h-40">
                        <img src="img/desktop.svg" class="w-24 mr-5" alt="">
                        <div class="ml-4">
                            <h3 class="font-body text-black mt-8 text-xl">Desktop</h3>
                            <h4 class="font-body text-black  mt-4 text-sm">Penjelasan</h4>
                        </div>
                    </div>
                    <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-5/12 h-40 ml-auto">
                        <img src="img/construct.svg" class="w-24 mr-5" alt="">
                        <div class="ml-4">
                            <h3 class="font-body text-black mt-8 text-xl">Lainnya</h3>
                            <h4 class="font-body text-black  mt-4 text-sm">Penjelasan</h4>
                        </div>
                    </div>
                </div>
                
        </div>
        <div id="alur" class="alurPemesanan w-[70%] border-black border-2 flex flex-col pt-20">
            <h1 class="font-body text-black text-4xl underline underline-offset-8 mb-10">Alur Pemesanan</h1>
                <div class="shadow-[4px_4px_4px_rgba(0,0,0,0.25)] text-center h-96">
                    <h1 id="step-title" class="font-body text-black text-4xl underline underline-offset-8 mb-10">Alur ke-1</h1>
                    <p  id="step-description" class="font-body text-black mt-8 text-xl">Penjelasan alur ke-1</p>

                    
                </div>
            <div class="w-2/3 mb-8 progress mx-auto mt-10">
                <div class="relative flex items-center justify-between">
                <!-- Garis Progress -->
                <div class="absolute top-1/2 transform -translate-y-1/2 w-full h-2.5 bg-[rgba(167,228,223,1)]">
                    <div id="progress-bar" class="h-2.5 bg-[rgba(10,93,82,1)] absolute left-0 top-0" style="width: 0%;"></div>
                </div>
                
                <!-- Lingkaran Progress -->
                <div class="relative z-10 w-10 h-10 bg-[rgba(10,93,82,1)] rounded-full flex items-center justify-center "></div>
                <div class="relative z-10 w-10 h-10 bg-[rgba(167,228,223,1)] rounded-full flex items-center justify-center "></div>
                <div class="relative z-10 w-10 h-10 bg-[rgba(167,228,223,1)] rounded-full flex items-center justify-center "></div>
                <div class="relative z-10 w-10 h-10 bg-[rgba(167,228,223,1)] rounded-full flex items-center justify-center "></div>
                <div class="relative z-10 w-10 h-10 bg-[rgba(167,228,223,1)] rounded-full flex items-center justify-center "></div>
                </div>
            </div>
            <div class="flex justify-center space-x-10 mb-20">
            <button id="btn-back" class="font-body text-white   bg-[rgba(10,93,82,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-teal-700">Kembali</button>
            <button id="btn-submit" class=" font-body  bg-[rgba(167,228,223,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs">Pengajuan</button>
            <button id="btn-next" class="font-body   text-white bg-[rgba(10,93,82,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-teal-700">Selanjutnya</button>
            </div>    
        </div>
    </div>
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.relative.z-10');
        const progressBar = document.getElementById('progress-bar');
        const stepTitles = [
        "Alur ke-1",
        "Alur ke-2",
        "Alur ke-3",
        "Alur ke-4",
        "Alur ke-5"
        ];
        const stepDescriptions = [
        "Penjelasan untuk alur ke-1",
        "Penjelasan untuk alur ke-2.",
        "Penjelasan untuk alur ke-3.",
        "Penjelasan untuk alur ke-4.",
        "Penjelasan untuk alur ke-5."
        ];

        document.getElementById('btn-next').addEventListener('click', function() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateProgress();
        }
        });

        document.getElementById('btn-back').addEventListener('click', function() {
        if (currentStep > 0) {
            currentStep--;
            updateProgress();
        }
        });

        document.getElementById('btn-submit').addEventListener('click', function() {
        alert('Pengajuan dikirim!');
        });

        function updateProgress() {
        steps.forEach((step, index) => {
            if (index <= currentStep) {
            step.classList.add('bg-[rgba(10,93,82,1)]');
            step.classList.remove('bg-[rgba(167,228,223,1)]');
            } else {
            step.classList.add('bg-[rgba(167,228,223,1)]');
            step.classList.remove('bg-[rgba(10,93,82,1)]');
            }
        });

        // Update progress bar width
        const progressPercentage = (currentStep / (steps.length - 1)) * 100;
        progressBar.style.width = `${progressPercentage}%`;

        // Update step title and description
        document.getElementById('step-title').innerText = stepTitles[currentStep];
        document.getElementById('step-description').innerText = stepDescriptions[currentStep];
        }
    </script>
    <x-footer></x-footer>
</body>
</html>
