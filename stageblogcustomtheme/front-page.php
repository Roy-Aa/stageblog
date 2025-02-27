<?php get_template_part('components/header'); ?>

<section class="relative flex justify-center items-center">
    <div class="w-[1200px] h-auto px-5">
        
        <!-- x -->

        <div class="flex flex-col items-center justify-center gap-7 w-full h-[80vh] select-none">
        <h1 id="smiley" class="text-4xl sm:text-6xl transition-opacity duration-500 cursor-pointer" onclick="smileyfade(this)">Stageblog Site</h1>

            <div class="flex gap-4 items-center">
                <svg onclick="this.style.transform = 'rotate(360deg)';" class="duration-1000" xmlns="http://www.w3.org/2000/svg" fill="#00BCFF" width="27" height="27" viewBox="0 0 24 24"><path d="M2.597 7.81l4.911 13.454c-3.434-1.668-5.802-5.19-5.802-9.264 0-1.493.32-2.91.891-4.19zm16.352 3.67c0-1.272-.457-2.153-.849-2.839-.521-.849-1.011-1.566-1.011-2.415 0-.978.747-1.88 1.862-1.819-1.831-1.677-4.271-2.701-6.951-2.701-3.596 0-6.76 1.845-8.601 4.64.625.02 1.489.032 3.406-.118.555-.034.62.782.066.847 0 0-.558.065-1.178.098l3.749 11.15 2.253-6.756-1.604-4.394c-.555-.033-1.08-.098-1.08-.098-.555-.033-.49-.881.065-.848 2.212.17 3.271.171 5.455 0 .555-.033.621.783.066.848 0 0-.559.065-1.178.098l3.72 11.065 1.027-3.431c.444-1.423.783-2.446.783-3.327zm-6.768 1.42l-3.089 8.975c.922.271 1.898.419 2.908.419 1.199 0 2.349-.207 3.418-.583-.086-.139-3.181-8.657-3.237-8.811zm8.852-5.839c.224 1.651-.099 3.208-.713 4.746l-3.145 9.091c3.061-1.784 5.119-5.1 5.119-8.898 0-1.79-.457-3.473-1.261-4.939zm2.967 4.939c0 6.617-5.384 12-12 12s-12-5.383-12-12 5.383-12 12-12 12 5.383 12 12zm-.55 0c0-6.313-5.137-11.45-11.45-11.45s-11.45 5.137-11.45 11.45 5.137 11.45 11.45 11.45 11.45-5.137 11.45-11.45z"/></svg>
                <h2 class="font-italic">WordPress</h2>
                <svg fill="#eee" clip-rule="evenodd" width="24" height="24" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"/></svg>
                <svg viewBox="0 0 162 24" fill="none" class="h-6 text-white"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.668 2c-4.445 0-7.223 2.222-8.334 6.667 1.667-2.222 3.611-3.055 5.833-2.5 1.268.317 2.175 1.236 3.178 2.255C18.979 10.081 20.87 12 25 12c4.445 0 7.223-2.222 8.334-6.666-1.666 2.222-3.61 3.055-5.833 2.5-1.269-.318-2.175-1.237-3.178-2.255C22.69 3.919 20.8 2 16.668 2zM8.334 12C3.889 12 1.11 14.222 0 18.667c1.667-2.222 3.612-3.056 5.833-2.5 1.269.316 2.175 1.236 3.178 2.255C10.645 20.081 12.536 22 16.668 22c4.444 0 7.222-2.222 8.333-6.666-1.667 2.222-3.611 3.055-5.833 2.5-1.268-.317-2.175-1.238-3.177-2.255C14.356 13.92 12.463 12 8.334 12z" class="fill-sky-400"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M50 10.427h-2.908v5.63c0 1.501.985 1.477 2.909 1.383v2.276c-3.895.47-5.443-.61-5.443-3.66v-5.63H42.4V7.988h2.158v-3.15l2.534-.751v3.901H50v2.44zm11.088-2.44h2.533v11.729h-2.533v-1.689c-.892 1.243-2.276 1.994-4.105 1.994-3.19 0-5.841-2.698-5.841-6.17 0-3.494 2.65-6.169 5.84-6.169 1.83 0 3.215.75 4.106 1.97V7.988zm-3.706 9.618c2.111 0 3.706-1.572 3.706-3.754s-1.595-3.753-3.706-3.753c-2.111 0-3.706 1.572-3.706 3.753 0 2.182 1.595 3.754 3.706 3.754zM67.844 6.228c-.891 0-1.618-.75-1.618-1.619.002-.43.173-.842.476-1.145a1.612 1.612 0 012.283 0c.304.303.475.715.477 1.145 0 .868-.727 1.619-1.618 1.619zm-1.267 13.488V7.987h2.534v11.729h-2.534zm5.466 0V2.59h2.533v17.124h-2.533zM91.021 7.987h2.674l-3.683 11.729h-2.487l-2.44-7.905-2.463 7.905h-2.486L76.453 7.987h2.674l2.276 8.092 2.463-8.092h2.416l2.44 8.092 2.299-8.092zm5.817-1.759c-.892 0-1.619-.75-1.619-1.619.003-.43.174-.842.477-1.145a1.612 1.612 0 012.284 0c.303.303.475.715.477 1.145 0 .868-.727 1.619-1.619 1.619zm-1.266 13.488V7.987h2.533v11.729H95.57zm11.634-12.034c2.628 0 4.504 1.783 4.504 4.833v7.2h-2.533v-6.943c0-1.783-1.032-2.72-2.627-2.72-1.666 0-2.979.985-2.979 3.377v6.287h-2.534V7.987h2.534V9.49c.774-1.22 2.04-1.807 3.635-1.807zm16.515-4.386h2.533v16.42h-2.533v-1.69c-.891 1.244-2.275 1.994-4.105 1.994-3.19 0-5.841-2.697-5.841-6.17 0-3.494 2.651-6.168 5.841-6.168 1.83 0 3.214.75 4.105 1.97V3.296zm-3.707 14.309c2.112 0 3.707-1.572 3.707-3.754s-1.595-3.753-3.707-3.753c-2.111 0-3.706 1.572-3.706 3.753 0 2.182 1.595 3.754 3.706 3.754zm14.732 2.416c-3.542 0-6.193-2.698-6.193-6.17 0-3.494 2.651-6.169 6.193-6.169 2.299 0 4.293 1.196 5.231 3.026l-2.182 1.267c-.516-1.102-1.665-1.806-3.072-1.806-2.065 0-3.636 1.572-3.636 3.682 0 2.111 1.571 3.683 3.636 3.683 1.407 0 2.556-.727 3.119-1.806l2.182 1.243c-.985 1.853-2.979 3.05-5.278 3.05zm9.453-8.797c0 2.135 6.311.844 6.311 5.185 0 2.346-2.041 3.612-4.574 3.612-2.346 0-4.035-1.056-4.786-2.745l2.182-1.266c.375 1.055 1.313 1.689 2.604 1.689 1.126 0 1.993-.376 1.993-1.315 0-2.087-6.31-.914-6.31-5.113 0-2.205 1.9-3.589 4.293-3.589 1.924 0 3.519.892 4.34 2.44l-2.135 1.196c-.422-.915-1.243-1.337-2.205-1.337-.915 0-1.713.399-1.713 1.243zm10.815 0c0 2.135 6.31.844 6.31 5.185 0 2.346-2.041 3.612-4.575 3.612-2.345 0-4.034-1.056-4.785-2.745l2.182-1.266c.375 1.055 1.313 1.689 2.603 1.689 1.126 0 1.995-.376 1.995-1.315 0-2.087-6.31-.914-6.31-5.113 0-2.205 1.899-3.589 4.292-3.589 1.924 0 3.519.892 4.34 2.44l-2.135 1.196c-.422-.915-1.243-1.337-2.205-1.337-.915 0-1.712.399-1.712 1.243z" fill="currentColor"></path></svg>
            </div>
        </div>

        <!-- Info -->
        <div id="info" class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero"/></svg>
                <h2 class="text-3xl">Info</h2>
            </div>
                    
            <div class="grid grid-rows-2 w-full gap-4">
                <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                    <h2>Stage</h2>
                    <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                    
                    </div>
                </div>
                <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                    <h2>Periodes</h2>
                    <div class="grid grid-cols-2 w-full h-auto gap-4">
                        <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                        </div>
                        <div class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col items-center gap-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="stageplek" class="my-10 w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero"/></svg>
                <h2 class="text-3xl">Stageplek 2025 Feb - Jul</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="rounded-md border border-gray-700 p-6 flex items-center justify-center">
                <img class="object-cover w-auto transition hover:rotate-x-10 hover:-rotate-y-30" src="<?php echo get_template_directory_uri(); ?>/assets/img/fbi_logo.webp" alt="Logo">
                </div>
                <div class="rounded-md border border-gray-700 p-6 flex flex-col gap-2">
                    <div class="flex gap-2 items-center">
                        <h2>FBI Digital Agency </h2> 
                        <svg fill="#F2501A" width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.322 2.923c.126-.259.39-.423.678-.423.289 0 .552.164.678.423.974 1.998 2.65 5.44 2.65 5.44s3.811.524 6.022.829c.403.055.65.396.65.747 0 .19-.072.383-.231.536-1.61 1.538-4.382 4.191-4.382 4.191s.677 3.767 1.069 5.952c.083.462-.275.882-.742.882-.122 0-.244-.029-.355-.089-1.968-1.048-5.359-2.851-5.359-2.851s-3.391 1.803-5.359 2.851c-.111.06-.234.089-.356.089-.465 0-.825-.421-.741-.882.393-2.185 1.07-5.952 1.07-5.952s-2.773-2.653-4.382-4.191c-.16-.153-.232-.346-.232-.535 0-.352.249-.694.651-.748 2.211-.305 6.021-.829 6.021-.829s1.677-3.442 2.65-5.44z" fill-rule="nonzero"/></svg>
                    </div>
                    <p>Mijn eerste stage periode loop ik bij FBI Digital Agency Haarlem. Hier leer ik hoe het is om in een team te werken en leer ik omgaan met verschillende tools zoals Wordpress en Tailwind CSS.</p>
                </div>
            </div>
        </div>

        <div id="stageplek" class="w-full h-auto rounded-md border border-gray-700 p-6 flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <svg fill="#00BCFF" width="32" height="32" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 6.5c-.414 0-.75.336-.75.75v5.5c0 .414.336.75.75.75s.75-.336.75-.75v-5.5c0-.414-.336-.75-.75-.75zm-.002-3c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1z" fill-rule="nonzero"/></svg>
                <h2 class="text-3xl">Stageplek 2025 Sep - 2026 Maart</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="rounded-md border border-gray-700 p-6 flex justify-center text-center">
                    <p class="text-8xl">?</p>
                </div>
                <div class="rounded-md border border-gray-700 p-6 flex justify-center items-center">
                    <p class="text-4xl">???</p>
                </div>
            </div>
        </div>

        <section id="stageblog" class="my-20 w-full h-auto p-4 flex flex-col justify-center items-center rounded-md border border-gray-700">
            <div class="flex items-center gap-2">
                <svg fill="#00BCFF" width="32" height="32" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.362 2c4.156 0 2.638 6 2.638 6s6-1.65 6 2.457v11.543h-16v-20h7.362zm.827-2h-10.189v24h20v-14.386c0-2.391-6.648-9.614-9.811-9.614zm4.811 13h-10v-1h10v1zm0 2h-10v1h10v-1zm0 3h-10v1h10v-1z"/></svg>
                <h2 class="text-3xl">Stageblog</h2>
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
                            'posts_per_page' => 5, 
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
                            'posts_per_page' => 5,
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
        </section>
    </div>
</section>

<?php get_template_part('components/footer'); ?>