<?php
add_action('init', function () {
    #create_custom_block_init('test-block');

    $allFiles = scandir(get_template_directory() . '/blocks');

    # . refers to the current directory
    # .. refers to the parent directory (or the root, if the current directory is the root)
    # Using array_diff() to filter them out of the results of scandir:
    $blockFiles = array_diff($allFiles, array('.', '..'));

    foreach ($blockFiles as $file) {
        #create_custom_block_init($file);
        register_block_type(get_template_directory() . '/blocks/' . $file);
    }

});