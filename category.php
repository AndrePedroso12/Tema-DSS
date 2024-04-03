<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="categorias" class="site-content">
<div id="content" role="main">

<h1>Categoria:<br> <?php single_cat_title()?> </h1> 

 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>


      <div id="blog2">
      <div class="row">
<?php
 
// The Loop

while ( have_posts() ) : the_post(); ?>


 <div class="col-lg-3" id="posts2" >

<a href="<?php the_permalink(); ?>">
  <div class="Thumbnail" style="background-image: url('<?php the_post_thumbnail_url();?>');">
 
  </div>      

</a>

<div class="card-body" >

<?php
$categories = get_the_category();
if ( ! empty( $categories ) ) {
echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="categorias">' . esc_html( $categories[0]->name ) . '</a>';
}
?>

    <a href="<?php the_permalink(); ?>">
        <h5 class="card-title2"><?php the_title(); ?>
      </h5>
    </a>
             
             
 <?php the_excerpt( '<p class="excerpt" ">'); ?>
 <p id="autor">
      
<?php echo get_avatar( $comment, 32 ); ?>
 <?php the_author(); ?>
 </p>
 <p class="data">

 <?php the_date(); ?>  
 </p>

 <a href="<?php the_permalink(); ?>" class="saibamais">Continue Lendo</a>
   
</div>   
</div>
 


<?php endwhile; ?>
</div></div>


<div class="proxima">
<?php echo get_previous_posts_link( __( 'Anterior', 'textdomain' ) ); ?>
      <?php echo 'Página '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' de ' . $wp_query->max_num_pages; ?>
    <?php echo get_next_posts_link( __( 'Próxima', 'textdomain' ) ); ?>
</div>


 <?php else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>

</div>

</section>
 
 

<?php get_footer(); ?>