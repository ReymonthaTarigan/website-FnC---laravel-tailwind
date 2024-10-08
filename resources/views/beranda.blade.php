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
  
    <div class="konten1 bg-[rgba(10,93,82,1)]  flex justify-center items-center flex-col rounded-b-3xl ">
        <div class="landingPage xl:w-[70%] w-[90%]  flex">
            <div class=" mt-20 xl:w-2/3">
                <h1 class="font-body text-white text-4xl underline underline-offset-8">Landing Page</h1>
                <h2 class="font-body text-white mt-6 text-base text-justify pr-8">Fix n Create adalah sebuah platform pemesanan aplikasi dan website yang beroperasi di Himpunan Mahasiswa Teknik Informatika. Website ini memungkinkan pengguna untuk mengajukan permintaan pengembangan aplikasi, situs web, atau yang lainnya kepada tim developer yang terdiri dari mahasiswa teknik informatika. 
                </h2>
                <h2 class="font-body text-white mt-6 text-base text-justify pr-8">Melalui Fix n Create, pengguna dapat mendiskusikan kebutuhan proyek mereka, memperoleh estimasi biaya, dan berkolaborasi dengan para pengembang dalam setiap tahap pembuatan. 
                </h2>
                <a href="/form" class="bg-[rgba(167,228,223,1)] h-10 rounded-2xl w-24 flex items-center justify-center mt-14 hover:bg-[#66b5ae]">
                    <h2 class="font-body text-black text-xs m-1">Pengajuan</h2>
                </a>
            </div>
            <div class="image ml-auto xl:contents hidden">
                <img src="img/ngoding.jpg" class="w-96" alt="">
            </div>
        </div>
        <div class="kenapaFnc xl:w-[70%] w-[90%]  flex flex-col mt-40 pb-52">
    <h1 class="font-body text-white text-4xl underline underline-offset-8 xl:ml-auto mb-24">Kenapa Harus FnC?</h1>
    <div class="alasan  flex flex-wrap justify-center  mt-4">
        <div class="w-full xl:w-1/3  flex mb-4 xl:mb-0">
            <img src="img/HargaIcon.png" class="w-16 h-16 object-contain my-auto" alt="">
            <div class="ml-4">
                <h3 class="font-body text-white mt-1 text-xl">Harga Terjangkau</h3>
                <h4 class="font-body text-white mt-4 text-sm text-justify pr-5">Layanan ini menawarkan harga yang lebih terjangkau dibandingkan dengan pengembang profesional, tanpa mengurangi kualitas.</h4>
            </div>
        </div>
        <div class="w-full xl:w-1/3  flex mb-4 xl:mb-0">
            <img src="img/AndalIcon.png" class="w-16 h-16 object-contain my-auto" alt="">
            <div class="ml-4">
                <h3 class="font-body text-white mt-1 text-xl">Developer Andal</h3>
                <h4 class="font-body text-white mt-4 text-sm text-justify pr-5">Anda bekerja langsung dengan mahasiswa teknik informatika yang antusias dan berbakat.</h4>
            </div>
        </div>
        <div class="w-full xl:w-1/3  flex mb-4 xl:mb-0">
            <img src="img/pengalamanIcon.png" class="w-16 h-16 object-contain my-auto" alt="">
            <div class="ml-4">
                <h3 class="font-body text-white mt-1 text-xl">Berpengalaman</h3>
                <h4 class="font-body text-white mt-4 text-sm text-justify pr-5">Dengan menggunakan jasa ini anda bisa bekerjasama dengan Mahasiswa Teknik Informatika yang berpengalaman dalam bidang yang mereka tekuni saat ini.</h4>
            </div>
        </div>
    </div>
</div>


        
    </div>


    <div id="jasa" class="konten2 bg-white  flex justify-center items-center flex-col w-full bg-no-repeat bg-fixed bg-contain "  style="background-image: url(latar/tanya.png)">
    <div class="jasaKami w-[90%] xl:w-[70%]  flex flex-col pt-20">
        <h1 class="font-body text-black text-4xl underline underline-offset-8 mb-10">Jasa Kami</h1>
        <div class="daftarJasa w-full mt-8 flex flex-wrap justify-center">
            <div class="website flex w-full xl:w-5/12 h-40 shadow-[4px_4px_4px_rgba(0,0,0,0.25)] mb-4 xl:mb-10 xl:mr-10 bg-white">
                <img src="img/WebsiteIcon.png" class="w-24 h-24 my-auto object-contain mr-5" alt="">
                <div class="ml-4">
                    <h3 class="font-body text-black mt-8 text-xl">Pembuatan Website</h3>
                    <h4 class="font-body text-black mt-4 text-sm text-justify pr-5">Merancang dan mengembangkan situs web yang responsif dan user-friendly untuk berbagai keperluan bisnis atau pribadi.</h4>
                </div>
            </div>
            <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-full xl:w-5/12 h-40 mb-4 xl:mb-10 xl:mr-10 bg-white">
                <img src="img/MobileIcon.png" class="w-24 h-24 my-auto object-contain mr-5" alt="">
                <div class="ml-4">
                    <h3 class="font-body text-black mt-8 text-xl">Pengembangan Aplikasi</h3>
                    <h4 class="font-body text-black mt-4 text-sm text-justify pr-5">FnC menyediakan pembuatan aplikasi mobile atau desktop sesuai kebutuhan klien, dengan fitur-fitur khusus yang disesuaikan.</h4>
                </div>
            </div>
            <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-full xl:w-5/12 h-40 mb-4 xl:mb-10 xl:mr-10 bg-white">
                <img src="img/DesktopIcon.png" class="w-24 h-24 my-auto object-contain mr-5" alt="">
                <div class="ml-4">
                    <h3 class="font-body text-black mt-8 text-xl">Design UI/UX</h3>
                    <h4 class="font-body text-black mt-4 text-sm text-justify pr-5">Menyediakan desain antarmuka yang menarik dan pengalaman pengguna yang optimal.</h4>
                </div>
            </div>
            <div class="website shadow-[4px_4px_4px_rgba(0,0,0,0.25)] flex w-full xl:w-5/12 h-40 mb-4 xl:mb-10 xl:mr-10 bg-white">
                <img src="img/LainnyaIcon.png" class="w-24 h-24 my-auto object-contain mr-5" alt="">
                <div class="ml-4">
                    <h3 class="font-body text-black mt-8 text-xl">Lainnya</h3>
                    <h4 class="font-body text-black mt-4 text-sm">Layanan tambahan lain yang masih berkaitan</h4>
                </div>
            </div>
        </div>
    </div>
    <div id="alur" class="alurPemesanan xl:w-[70%] w-[90%]  flex flex-col pt-20">
        <h1 class="font-body text-black text-4xl underline underline-offset-8 mb-10">Alur Pemesanan</h1>
        <div class="shadow-[4px_4px_4px_rgba(0,0,0,0.25)] text-center h-96 bg-white">
            <h1 id="step-title" class="font-body text-black text-4xl underline underline-offset-8 mb-10">Mengisi Form Request</h1>
            <p id="step-description" class="font-body text-black mt-8 text-xl">Isi form untuk mengajukan proyek yang anda inginkan dan jelaskan detail dari proyek yang akan dibuat.</p>
        </div>
        <div class="w-full mb-8 progress mx-auto mt-10">
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
            <button id="btn-back" class="font-body text-white bg-[rgba(10,93,82,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-teal-700">Kembali</button>
            <a href="/form" class="font-body bg-[rgba(167,228,223,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-[#66b5ae] no-underline">
            Pengajuan
        </a>
            <button id="btn-next" class="font-body text-white bg-[rgba(10,93,82,1)] h-10 rounded-2xl w-24 flex items-center justify-center text-xs hover:bg-teal-700">Selanjutnya</button>
        </div>
    </div>
</div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.relative.z-10');
        const progressBar = document.getElementById('progress-bar');
        const stepTitles = [
        "Mengisi Form Request",
        "Diskusi Dengan Klien",
        "Diskusi Kelayakan Proyek",
        "Persetujuan",
        "Pengerjaan Proyek"
        ];
        const stepDescriptions = [
        "Isi form untuk mengajukan proyek yang anda inginkan dan jelaskan detail dari proyek yang akan dibuat",
        "Setelah mengisi form anda akan dihubungi oleh tim FnC untuk menjelaskan lebih lanjut tentang proyek yang anda ajukan",
        "Tim FnC akan berdiskusi untuk menentukan apakah proyek yang diajukan dapat dilanjutkan atau tidak",
        "Tim FnC akan membuat sebuah Memorandum Of Understanding (MOU) yang akan disahkan dengan persetujuan dari kedua belah pihak",
        " Proyek yang sudah di sepakati Memorandum Of Understanding akan langsung dikerjakan oleh para tim developer yang andal! jadi tunggu apalagi ayo segera ajukan proyek yang anda impikan sekarang"
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
