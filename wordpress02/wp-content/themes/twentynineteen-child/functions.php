<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


function get_works() {
	$information = '';
	// 条件の設定fieldz
$args = Array(
    'post_type' => 'post',      // 投稿
    'posts_per_page' => 4,     // 表示する投稿数(-1を指定すると全投稿を表示)
	'category_name' => 'information',
);
	
	// クエリの定義
$wp_query = new WP_Query( $args );
	
if ( $wp_query->have_posts() ) {
while ( $wp_query->have_posts() ) {
  $wp_query->the_post();
	 	$information .= '<div>' . get_the_title()  . get_the_time("Y年n月j日")  .'<br></div>' ;
}
}
wp_reset_postdata();
		return  '<div class="information">' . $information .'<br/></div>';
}

function get_member() {
	// 条件の設定fieldz
$args = Array(
    'post_type' => 'post',      // 投稿
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'posts_per_page' => 3,     // 表示する投稿数(-1を指定すると全投稿を表示)
	'category_name' => 'member',
	
);
 
// クエリの定義
$wp_query = new WP_Query( $args );
 
// ループ
if ( $wp_query->have_posts() ) {
    while ( $wp_query->have_posts() ) {
        $wp_query->the_post();
        // 処理を記述
			if(has_post_thumbnail()){
			$image .= '<div class="work"><div class="works">' . get_the_post_thumbnail() . '<p>JOB :' . get_field('job')  . '</p><br><p>NAME :' . get_field('name') . '</p><br><p>JOINED :' . get_field('joined') .'</p></div></div>';
		}else{
			$image .= '<div class="work"><div class="js-modal-open" data-modal="' . get_post_field( 'post_name', get_the_ID() ) . '"><div class="img"><img src="./wp-content/themes/twentynineteen_child/images/no-image.png"></div></div></div>';
		};		
}			
// 投稿データのリセット</p>
wp_reset_postdata();
	return  '<div class="slider">' . $image .'</div>'  ;
}}

function get_recruit() {
	// 条件の設定fieldz
$args = Array(
    'post_type' => 'post',      // 投稿
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'posts_per_page' => 3,     // 表示する投稿数(-1を指定すると全投稿を表示)
	'category_name' => 'recruit',
	
);
 
// クエリの定義
$wp_query = new WP_Query( $args );
 
// ループ
if ( $wp_query->have_posts() ) {
    while ( $wp_query->have_posts() ) {
        $wp_query->the_post();
        // 処理を記述
			if(has_post_thumbnail()){
			$image .= '<div class="re-image0"><a href='. get_field('recruit_url')  .get_the_post_thumbnail() . '</a>'  .'<div class = "recruit-description"><h3>' . get_field('recruit_gate') .'</h3></div></div>';
		}else{
			$image .= '<div class="work"><div class="js-modal-open" data-modal="' . get_post_field( 'post_name', get_the_ID() ) . '"><div class="img"><img src="./wp-content/themes/twentynineteen_child/images/no-image.png"></div></div></div>';
		};
		
}			
// 投稿データのリセット
wp_reset_postdata();
	return  '<div class="re-image0">' . $image . '</div>';
}}

function get_crosstalk() {
	// 条件の設定fieldz
$args = Array(
    'post_type' => 'post',      // 投稿
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'posts_per_page' => 3,     // 表示する投稿数(-1を指定すると全投稿を表示)
	'category_name' => 'crosstalk',
	
);
 
// クエリの定義
$wp_query = new WP_Query( $args );

 
// ループ
if ( $wp_query->have_posts() ) {
    while ( $wp_query->have_posts() ) {
        $wp_query->the_post();
        // 処理を記述
			if(has_post_thumbnail()){
			$image .= '<div class="re-image0">'. get_the_post_thumbnail() .'<p>' . get_field('crosstalk_name') .'</p></div>' ;
		}else{
			$image .= '<div class="work"><div class="js-modal-open" data-modal="' . get_post_field( 'post_name', get_the_ID() ) . '"><div class="img"><img src="./wp-content/themes/twentynineteen_child/images/no-image.png"></div></div></div>';
		};
		
}			
// 投稿データのリセット
wp_reset_postdata();
	return  $image ;
}}

function get_project() {
	// 条件の設定fieldz
$args = Array(
    'post_type' => 'post',      // 投稿
    'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
    'posts_per_page' => 2,     // 表示する投稿数(-1を指定すると全投稿を表示)
	'category_name' => 'project'
);
 
// クエリの定義
$wp_query = new WP_Query( $args );
 
// ループ
if ( $wp_query->have_posts() ) {
    while ( $wp_query->have_posts() ) {
        $wp_query->the_post();
        // 処理を記述
			if(has_post_thumbnail()){
			$image .= '<div class="re-image0">'.  get_the_post_thumbnail() .'<p>' . get_field('project_name') .'</p></div>' ;
		}else{
			$image .= '<div class="re-image">' . get_post_field( 'post_name', get_the_ID() ) . '"><div class="img"><img src="./wp-content/themes/twentynineteen_child/images/no-image.png"></div></div>';
		}

		} 	
}		
	
// 投稿データのリセット
wp_reset_postdata();
	return  $image  ;
}

?>