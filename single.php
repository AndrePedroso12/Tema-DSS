



<?php get_header(); ?>


<main id="single-blog">
<?php if( have_posts() ) the_post(); ?>


<div class="banner-titulo" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">>

<div class="info">
      <?php
$categories = get_the_category();
if ( ! empty( $categories ) ) {
	echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="categorias">' . esc_html( $categories[0]->name ) . '</a>';
}
?>

        <h2><?php the_title(); ?></h2>
        <p class="data">
        <?php echo get_avatar( $comment, 32 ); ?>
        <span><?php the_author(); ?></span>
        <span><?php the_date(); ?></span>
 
</p>
      

      </div>



</div>








<div class="container">

<div class="row">
<div class="col-lg-7 conteudo bg-box">
<br>
<?php the_content(); ?>
<?php $tags = get_tags(); ?>
<div class="tags">
<i class="fa-solid fa-tag"></i>
<?php foreach ( $tags as $tag ) { ?>
    <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag" class="HoverDown"><?php echo $tag->name; ?></a>
<?php } ?>
</div>
<p class="show comentarios">
 
<a class="saibamais" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Mostrar comentarios
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card  comentarios">
  <ul class="commentlist">
<?php wp_list_comments(); ?>
</ul>

<?php
$comments_args = array(
        // Change the title of send button 
        'label_submit' => __( 'Publicar Comentário', 'textdomain' ),
        // Change the title of the reply section
        'title_reply' => __( 'Deixe um comentário', 'textdomain' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        // Redefine your own textarea (the comment body).
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

 comment_form( $comments_args ); ?>






  </div>
</div>

<div class="sobreAutor row">

<div class="col avatar">
	


<?php echo get_avatar( $comment, 32 ); ?>

<br>
<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><h2><?php the_author(); ?></h2></a>

<p><?php the_author_nickname(); ?></p>

<div class="row">
  <a href="https://twitter.com/dsssexshop" target="_blank"><i class="fa-brands fa-twitter HoverUp"></i></a>
<a href="https://www.facebook.com/dssdistribuidora/" target="_blank"> <i class="fa-brands fa-facebook-f HoverUp"></i> </a>
</div>
<br>

<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="saibamais">Ver Mais Artigos de <?php echo get_the_author_meta( 'first_name' ); ?></a>
</div>

<div class="col">
  <h3>Sobre a(o) Autor(a)</h3>
  <p><?php the_author_description(); ?></p>


</div>



</div>

</div>


</div>

</div>



<!-------Recomendacoes------>


<div class="blog pg-posts" id="recomendacoes">
    <div class="titulo-recomendacoes">

    <h2>Você pode gostar também</h2>
<span class="linha"></span>
    </div>


    <?php query_posts('showposts=3&offset=4'); ?>
    <div class="row">

      <?php while (have_posts()): the_post(); ?>

      <div class="col-lg-2" >

      <a href="<?php the_permalink(); ?>">
      <div class="box bg-box" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
    
      
          </div> 
        </a>

          <div class="card-body" >
            <a href="<?php the_permalink(); ?>">
            <h4 class="card-title">
              <?php the_title(); ?>
            </h4>
          </a>
          <p class="data">
        <?php the_date(); ?>
          </p>

              
           
       
          </div>
          
        </div>

        <?php endwhile; ?>
      </div>

      
    </div>
 
    <div class="blog pg-posts" id="recomendacoes">
    <div class="titulo-recomendacoes">

    <h2>Outras histórias</h2>
<span class="linha"></span>
    </div>


    <?php query_posts('showposts=2&offset=1'); ?>
    <div class="row">

      <?php while (have_posts()): the_post(); ?>

      <div class="row">
<div class="box-outras-historias bg-box" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
<div class="card-body col" >
            <a href="<?php the_permalink(); ?>">
            <h4 class="card-title">
              <?php the_title(); ?>
            </h4>
          </a>
          <p class="data">
        <?php the_date(); ?>
          </p>

              
           
       
          </div>
<div class="col">
<a href="<?php the_permalink(); ?>" class="saibamais">Continue Lendo</a>
</div>

          
</div>

</div>

        <?php endwhile; ?>
      </div>

      
    </div>

</main>

<?php get_footer(); ?>


