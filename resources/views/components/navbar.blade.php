<nav class="">
    <div class="navbar z-30 top-0 w-full  h-[75px] bg-[rgba(10,93,82,1)] fixed flex flex-col items-center justify-center">
    <div class="content w-full md:w-[70%] h-4/5 flex items-center px-4 md:px-0">
        <a href="/"><img src="img/f.jpg" alt="" class="h-10"></a>
        
        <a href="/">
        <h1 class="font-body text-white text-xl m-1">FIXnCREATE</h1>
        </a>
        
        <div class="ml-auto  md:hidden   ">
            <button id="menu-btn" class="text-white focus:outline-none   ">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div id="menu" class="hidden md:flex link h-4/5 items-center  md:w-5/12 ml-auto  justify-between   ">
        <a href="/porto" class="block md:inline-block">
    <h2 class="font-body text-white text-base m-1 transition-colors duration-300 hover:text-gray-300 focus:text-gray-300">
        Portofolio
    </h2>
</a>
<a href="/#jasa" class="block md:inline-block">
    <h2 class="font-body text-white text-base m-1 transition-colors duration-300 hover:text-gray-300 focus:text-gray-300">
        Jasa
    </h2>
</a>
<a href="/#alur" class="block md:inline-block">
    <h2 class="font-body text-white text-base m-1 transition-colors duration-300 hover:text-gray-300 focus:text-gray-300">
        Alur
    </h2>
</a>
<a href="/form" class="bg-[rgba(167,228,223,1)] h-full rounded-2xl w-24 flex items-center justify-center hover:bg-[#66b5ae]">
    <h2 class="font-body text-black text-xs m-1">
        Pengajuan
    </h2>
</a>

        </div>
    </div>
    

    </div>
    <div id="tambahan" class=" hidden tambahan bg-[rgba(10,93,82,1)] h-28 w-full  ">
        
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
    const tambahan = document.getElementById('tambahan');
    menuBtn.addEventListener('click', () => {
        tambahan.classList.toggle('hidden');
    });
</script>
