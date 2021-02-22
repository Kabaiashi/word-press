<?php /* Template Name: CustomObjectsArchive */ ?>
<?php

get_header();

$args = array(
    'posts_per_page'   => -1, // -1 here will return all posts
    'post_type'        => 're_objects', //your custom post type
    'post_status'      => 'publish',
);
$projects = get_posts( $args );

foreach ($projects as $project) {
    // 
     printf('<div><a href="%s">%s</a></div><br>',
             get_permalink($project->ID),
             $project->post_title);
}


// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //pagination
// $args = array( 'post_type' => 're_objects', 'posts_per_page' => 5, 'post_status'      => 'publish', 'paged' => $paged );
// $loop = new WP_Query( $args );
// while ( $loop->have_posts() ) : $loop->the_post();
//     the_title();
//     echo '<div class="entry-content">';
//     the_excerpt();
//     echo '</div>';
// endwhile;
get_footer();
?>

