<?php 
// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	//JS
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.1.3', true );

	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );

	//CSS
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );

	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0', 'all' );
	
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function config(){

	// Registrando menus
	register_nav_menus(
		array(
			'primary' => 'Menu Topo',
			'footer_menu_1' => 'Menu Rodape 1',
			'footer_menu_2' => 'Menu Rodape 2'
		)
);
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );	
	add_theme_support( 'title-tag');
}
add_action( 'after_setup_theme', 'config', 0 );


	// Adicionando Hover aos menus
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'HoverDown ';
     }
     return $classes;
}


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function ea_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="comment"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'ea_comment_textarea_placeholder' );

/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Seu Nome *"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Seu E-mail *"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Seu Site (Se disponivel)"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );