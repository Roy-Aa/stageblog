<?php get_template_part('components/header'); ?>

<section class="relative flex justify-center items-center">
    <div class="w-[1200px] h-auto px-5 flex flex-col justify-center items-center">
        <div class="flex flex-col items-center justify-center gap-7 w-full min-h-[100vh] select-none">
            <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-4 my-20">
                <h2 class="text-white flex gap-2"><?php the_title() ?></h2>
                <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-4"><?php the_content()?></div>
                
                <?php
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('components/footer'); ?>