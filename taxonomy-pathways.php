<?php 
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<!-- TODO: Get Pathways Content -->
<h1><?php echo $term->name; ?></h1>
<a href="/services">Explore All Services</a>

<!-- TODO: Query All Services Associated to the Taxonomy -->

<?php
// Query
$args = $args = array(
    'post_type' => 'service',
    'tax_query' => array(
        array(
            'taxonomy' => 'pathways',
            'field'    => 'slug',
            'terms'    => $term->slug,
        ),
    ),
);
$the_query = new WP_Query($args);

if( $the_query->have_posts()) {
    while( $the_query->have_posts() ) {
        $the_query->the_post();
        echo get_the_title();
    }
}else{
    echo "No Services Associated With This Pathway";
}

wp_reset_postdata( );
?> 

<?php
get_footer(); 
?>