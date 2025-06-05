<?php
if (post_password_required()) {
    return;
}
?>


<div id="comments" class="comments-area rounded-md border border-gray-700 p-6 flex flex-col gap-4">
    <div class="flex gap-2 items-center">
        <svg fill="#00bcff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 1c-6.338 0-12 4.226-12 10.007 0 2.05.739 4.063 2.047 5.625l-1.993 6.368 6.946-3c1.705.439 3.334.641 4.864.641 7.174 0 12.136-4.439 12.136-9.634 0-5.812-5.701-10.007-12-10.007zm0 1c6.065 0 11 4.041 11 9.007 0 4.922-4.787 8.634-11.136 8.634-1.881 0-3.401-.299-4.946-.695l-5.258 2.271 1.505-4.808c-1.308-1.564-2.165-3.128-2.165-5.402 0-4.966 4.935-9.007 11-9.007zm-5 7.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm5 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5zm5 0c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5z"/></svg>
        <h2 class="text-xl font-bold flex items-center">Comments</h2>
    </div>
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
                                <p class="font-semibold flex gap-2 rounded-md border border-gray-700 p-3">
                                    <svg fill="#00bcff" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm8.127 19.41c-.282-.401-.772-.654-1.624-.85-3.848-.906-4.097-1.501-4.352-2.059-.259-.565-.19-1.23.205-1.977 1.726-3.257 2.09-6.024 1.027-7.79-.674-1.119-1.875-1.734-3.383-1.734-1.521 0-2.732.626-3.409 1.763-1.066 1.789-.693 4.544 1.049 7.757.402.742.476 1.406.22 1.974-.265.586-.611 1.19-4.365 2.066-.852.196-1.342.449-1.623.848 2.012 2.207 4.91 3.592 8.128 3.592s6.115-1.385 8.127-3.59zm.65-.782c1.395-1.844 2.223-4.14 2.223-6.628 0-6.071-4.929-11-11-11s-11 4.929-11 11c0 2.487.827 4.783 2.222 6.626.409-.452 1.049-.81 2.049-1.041 2.025-.462 3.376-.836 3.678-1.502.122-.272.061-.628-.188-1.087-1.917-3.535-2.282-6.641-1.03-8.745.853-1.431 2.408-2.251 4.269-2.251 1.845 0 3.391.808 4.24 2.218 1.251 2.079.896 5.195-1 8.774-.245.463-.304.821-.179 1.094.305.668 1.644 1.038 3.667 1.499 1 .23 1.64.59 2.049 1.043z"/></svg>
                                    <?php comment_author(); ?>
                                </p>
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
