<?php
// Template Name: home





get_header();?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css"/>

<div class="slider">
<?php query_posts('showposts=3'); ?>
     <?php while (have_posts()): the_post(); ?>



    <div class="artigo-slider" style="background-image: url('<?php the_post_thumbnail_url();?>');">
      <div class="info">
      <?php
$categories = get_the_category();
if ( ! empty( $categories ) ) {
	echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="categorias">' . esc_html( $categories[0]->name ) . '</a>';
}
?>

        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <p class="data">
        <?php the_date(); ?>
</p>
        <a href="<?php the_permalink(); ?>" class="saibamais">Ler Mais</a>

      </div>

      <div class="overlay"></div>
  
  </div>

  <?php endwhile; ?>
   

  </div>



<!-----Blog 2 ----->
<div id="blog2">
    <?php query_posts('showposts=12&offset=3'); ?>
    <div class="row">
      <?php while (have_posts()): the_post(); ?>
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
      </div>

      
    </div>
 






      <div class="proxima">
      <?php echo get_previous_posts_link( __( 'Anterior', 'textdomain' ) ); ?>
      <?php echo 'Página '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' de ' . $wp_query->max_num_pages; ?>
    <?php echo get_next_posts_link( __( 'Próxima', 'textdomain' ) ); ?>
</div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

 




  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
        dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  respondTo: 'window'
      });
    });
  </script>

  

<?php get_footer();
?>