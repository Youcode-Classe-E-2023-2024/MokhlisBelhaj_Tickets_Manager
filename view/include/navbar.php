<!-- component -->
<nav class=" bg-white w-full flex relative justify-between items-center font-bold text-black mx-auto px-8 h-20">

    <a href="<?= URLROOT?>" class="  flex-grow-0 justify-start px-2">
        Helpdesk-Ticketing
</a>
    <div class="  flex-grow-0 text-2xl justify-start px-2">
       Welcome <?php echo  ucwords($_SESSION['name']);
       ?>

    </div>
    <div class="  flex-grow-0 justify-start px-2">
    <a href="<?php echo URLROOT;?>user/logOut" class="relative inline-flex items-center justify-center p-4 px-6 py-3 overflow-hidden font-medium text-red-600 transition duration-300 ease-out border-2 border-red-500 rounded-full shadow-md group">
<span class="absolute inset-0 flex items-center justify-center w-full h-full text-white duration-300 -translate-x-full bg-red-500 group-hover:translate-x-0 ease">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
</span>
<span class="absolute flex items-center justify-center w-full h-full text-red-500 transition-all duration-300 transform group-hover:translate-x-full ease">logout</span>
<span class="relative invisible">logout</span>
</a>
    </div>



    </div>

</nav>