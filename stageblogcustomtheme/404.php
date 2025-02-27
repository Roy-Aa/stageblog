<?php get_template_part('components/header'); ?>

<section class="relative flex justify-center items-center">
    <div class="w-[1200px] h-auto px-5 flex flex-col justify-center items-center">
        <div class="flex flex-col items-center justify-center gap-7 w-full h-[94vh] select-none">
        <h1 id="mark" class="text-tailwindblue text-7xl sm:text-9xl transition-opacity duration-500 cursor-pointer" onclick="markfade(this)">404</h1>
            <h2 class="text-white">Pagina niet gevonden?</h2>
            <a href="/" class="text-white animate-bounce transition-2">Terug naar de home pagina?</a>
        </div>
    </div>
</section>

<?php get_template_part('components/footer'); ?>