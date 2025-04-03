<?php
if (post_password_required()) {
    return;
}
?>


<div id="comments" class="comments-area rounded-md border border-gray-700 p-6 flex flex-col gap-4">
    <h2 class="text-xl font-bold mb-4">Comments</h2>
    <ol class="comment-list space-y-4">
        <?php
        wp_list_comments(array(
            'style'      => 'ol',
            'short_ping' => true,
            'avatar_size' => 40,
            'callback'   => function($comment, $args, $depth) {
                $GLOBALS['comment'] = $comment;
                ?>
                <li class="p-4 rounded-md border border-gray-700">
                    <div class="flex items-start gap-4 flex-col">
                        <div class="flex gap-4">
                            <p class="font-semibold flex rounded-md border border-gray-700 p-3"><?php comment_author(); ?></p>
                            <p class="text-sm rounded-md border border-gray-700 p-3 flex flex-col gap-4"><?php comment_date(); ?></p>
                            </div>
                            <div class="mt-2"><?php comment_text(); ?></div>
                    </div>
                </li>
                <?php
            }
        ));
        ?>
    </ol>

    <?php
        comment_form(array(
            'class_form'   => 'p-6 rounded-lg shadow-lg',
            'class_submit' => 'mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded',

            'fields' => array(
                'author' => '<div class="mb-4">
                                <label for="author" class="block text-sm font-medium text-tailwindblue">Naam</label>
                                <input id="author" name="author" type="text" class="w-full px-3 py-2 border border-gray-700 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500" required>
                            </div>',
                'email' => '<div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-tailwindblue">E-mail</label>
                                <input id="email" name="email" type="email" class="w-full px-3 py-2 border border-gray-700 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500" required>
                            </div>',
            ),

            'comment_field' => '<div class="mb-4">
                                    <label for="comment" class="block text-sm font-medium text-tailwindblue">Reactie</label>
                                    <textarea id="comment" name="comment" rows="4" class="w-full px-3 py-2 border border-gray-700 rounded-lg text-white focus:ring-blue-500 focus:border-blue-500" required></textarea>
                                </div>',

            'submit_button' => '<button type="submit" class="w-full rounded-md border border-gray-700 text-white px-4 py-2 cursor-pointer">Plaats Reactie</button>',
        ));
    ?>

</div>
