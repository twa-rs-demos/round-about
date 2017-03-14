<?php
while (have_posts()) : the_post();

    // Include the single post content template.
    get_template_part('content', 'single');
endwhile;

?>