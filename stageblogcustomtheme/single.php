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

        <!-- Blog -->

        <div id="stageblog" class="mb-20 w-full h-auto p-4 flex flex-col justify-center items-center rounded-md border border-gray-700">
            <div class="flex items-center gap-2">
                <svg fill="#00BCFF" width="32" height="32" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.362 2c4.156 0 2.638 6 2.638 6s6-1.65 6 2.457v11.543h-16v-20h7.362zm.827-2h-10.189v24h20v-14.386c0-2.391-6.648-9.614-9.811-9.614zm4.811 13h-10v-1h10v1zm0 2h-10v1h10v-1zm0 3h-10v1h10v-1z"/></svg>
                <h2 class="text-3xl">Blog Posts</h2>
            </div> 
            <div class="grid grid-rows-2 p-6 gap-4 w-full">

                <div class="flex flex-col gap-4 rounded-md border border-gray-700 w-full p-4 relative">
                    <div class="top-2 left-2 h-[10px] w-[10px] bg-tailwindblue absolute rounded-full">
                        <div class="h-[10px] w-[10px] bg-tailwindblue animate-ping rounded-full"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.134 19.319 11.587-11.588c.171-.171.279-.423.279-.684 0-.229-.083-.466-.28-.662l-3.115-3.104c-.185-.185-.429-.277-.672-.277s-.486.092-.672.277l-11.606 11.566c-.569 1.763-1.555 4.823-1.626 5.081-.02.075-.029.15-.029.224 0 .461.349.848.765.848.511 0 .991-.189 5.369-1.681zm-3.27-3.342 2.137 2.137-3.168 1.046zm.955-1.166 10.114-10.079 2.335 2.327-10.099 10.101z" fill-rule="nonzero"/></svg>
                        <h2>Stage 1 Posts - FBI Digital Agency</h2>
                        <svg fill="#F2501A" class="hidden sm:block" width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.322 2.923c.126-.259.39-.423.678-.423.289 0 .552.164.678.423.974 1.998 2.65 5.44 2.65 5.44s3.811.524 6.022.829c.403.055.65.396.65.747 0 .19-.072.383-.231.536-1.61 1.538-4.382 4.191-4.382 4.191s.677 3.767 1.069 5.952c.083.462-.275.882-.742.882-.122 0-.244-.029-.355-.089-1.968-1.048-5.359-2.851-5.359-2.851s-3.391 1.803-5.359 2.851c-.111.06-.234.089-.356.089-.465 0-.825-.421-.741-.882.393-2.185 1.07-5.952 1.07-5.952s-2.773-2.653-4.382-4.191c-.16-.153-.232-.346-.232-.535 0-.352.249-.694.651-.748 2.211-.305 6.021-.829 6.021-.829s1.677-3.442 2.65-5.44z" fill-rule="nonzero"/></svg>
                    </div>
                    <?php 
                        $stage1_query = new WP_Query(array(
                            'category_name' => 'stage-1',
                            'posts_per_page' => 10, 
                            'order'          => 'ASC',
                            'orderby'        => 'date'
                        ));
                        if ($stage1_query->have_posts()): ?>
                            <?php while ($stage1_query->have_posts()): $stage1_query->the_post(); ?>

                            <article class="rounded-md border border-gray-700 p-6 text-center">
                                <h3 class="text-xl font-semibold">
                                    <a class="flex gap-2 justify-center items-center group" style="animation-fill-mode: both;" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </article>

                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>

                <div class="flex flex-col gap-5 rounded-md border border-gray-700 w-full p-4 relative">
                    <div class="top-2 left-2 h-[10px] w-[10px] bg-tailwindblue absolute rounded-full">
                        <div class="h-[10px] w-[10px] bg-tailwindblue animate-ping rounded-full"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.134 19.319 11.587-11.588c.171-.171.279-.423.279-.684 0-.229-.083-.466-.28-.662l-3.115-3.104c-.185-.185-.429-.277-.672-.277s-.486.092-.672.277l-11.606 11.566c-.569 1.763-1.555 4.823-1.626 5.081-.02.075-.029.15-.029.224 0 .461.349.848.765.848.511 0 .991-.189 5.369-1.681zm-3.27-3.342 2.137 2.137-3.168 1.046zm.955-1.166 10.114-10.079 2.335 2.327-10.099 10.101z" fill-rule="nonzero"/></svg>
                        <h2>Stage 2 Posts - ???</h2>
                    </div>

                    <?php 
                        $stage2_query = new WP_Query(array(
                            'category_name' => 'stage-2',
                            'posts_per_page' => 10,
                            'order'          => 'ASC', 
                            'orderby'        => 'date'
                        ));
                        if ($stage2_query->have_posts()): ?>
                            <?php while ($stage2_query->have_posts()): $stage2_query->the_post(); ?>

                                <article class="rounded-md border border-gray-700 p-6 text-center">
                                    <h3 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </article>

                            <?php endwhile; ?>
                        <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_template_part('components/footer'); ?>