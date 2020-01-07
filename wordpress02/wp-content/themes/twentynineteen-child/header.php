<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="utf-8">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>  
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   	
　　　
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

		<header class="clearfix">            

                <a class="logo" href="<?php echo get_stylesheet_directory_uri(); ?>/#"><i class="fab fa-fedex my"></i></a>
                <nav>
                <ul class="dropdwn">
                    <li>
                    <span>PHILOSOPHY
                    <i class="fas fa-check"></i>
                    </span><br>
                    <span>ミッション・ビジョン</span>
                    <ul class="secondary_nav">
                      <li>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/philosophy">PHYLOSOPHY</a>
                      </li>
                    </ul>
                    </li>
                    <li>
                    <span>ABOUT
                    <i class="fas fa-check"></i>
                    </span><br>
                    <span>ブレインパッドについて</span>
                    <ul class="secondary_nav">
                      <li>
                        <a href="#">dummy</a>
                      </li>
                      <li>
                        <a href="#">dummy</a>
                      </li>
                    </ul>

                    </li>
                    <li>
                      <a href="<?php echo get_stylesheet_directory_uri(); ?>/member">
                      <span>MEMBER
                      </span><br>
                       <span>社員インタビュー</span>

                      </a>

                    </li>
                    <li>
                    <span>PROJECT
                    <i class="fas fa-check"></i>
                    </span><br>
                    <span>プロジェクト</span>
                    <ul class="secondary_nav">
                      <li>
                        <a href="<?php echo get_stylesheet_directory_uri(); ?>/project1">Project1</a>
                      </li>
                    </ul>

                    </li>
                    <li>
                    <span>CROSS TALK
                    <i class="fas fa-check"></i>
                    </span><br>
                    <span>クロストーク</span>
                    <ul class="secondary_nav">
                      <li>
                        <a href="#">dummy</a>
                      </li>
                    </ul>

                    </li>

                </ul>
            </nav>
        <div class="recruit-site">
            <div class="a">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/graduate">GRADUATE
            <br>
            新卒採用
            </a>

            </div>
            <div class="b">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/carrer">CAREER<br>
            中途採用</a>

            </div>
        </div>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
		</header><!-- #masthead -->