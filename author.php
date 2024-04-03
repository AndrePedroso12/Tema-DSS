<?php get_header(); ?>


<main id="Author">

<div class="container">
  <div class="row">

    <div class="col-5 sobreAutor ">
    <?php echo get_avatar( $comment, 32 ); ?>
    <h2><?php the_author(); ?></h2>
    <p><?php the_author_nickname(); ?></p>

    <div class="row">
  <a href="https://twitter.com/dsssexshop" target="_blank"><i class="fa-brands fa-twitter HoverUp"></i></a>
<a href="https://www.facebook.com/dssdistribuidora/" target="_blank"> <i class="fa-brands fa-facebook-f HoverUp"></i> </a>
</div>

    <h3>Sobre a(o) Autor(a)</h3>
  <p><?php the_author_description(); ?></p>

  <?php echo do_shortcode( '[insta-gallery id="1"]' ); ?>

    </div>

    <div class="col">

<!-----Blog 2 ----->
<div id="blog3">
    <?php query_posts('showposts=5'); ?>

      <?php while (have_posts()): the_post(); ?>
      <div class="row">


 
      <div class="Thumbnail col" style="background-image: url('<?php the_post_thumbnail_url();?>');">
     
      </div>      
    
  

  <div class="col" >

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

     <p class="data">

     <?php the_date(); ?>  
     </p>

     <a href="<?php the_permalink(); ?>" class="saibamais">Continue Lendo</a>
       
  </div>   
  </div>
<?php endwhile; ?>
    
<div class="proxima">
      <?php echo get_previous_posts_link( __( 'Anterior', 'textdomain' ) ); ?>
      <?php echo 'Página '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' de ' . $wp_query->max_num_pages; ?>
    <?php echo get_next_posts_link( __( 'Próxima', 'textdomain' ) ); ?>
</div>
      
    </div>
 






     

    </div>
    
  </div>
</div>

</main>

<?php get_footer(); ?>

