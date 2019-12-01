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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta charset="utf-8">
                <link rel="stylesheet" href="./css/style.css">
                <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<header>            
                <a href=""><i class="fab fa-fedex" ></i></a>
                <nav>
                <ul>
                    <li>
                    <span>PHILOSOPHY
                    <i class="fas fa-check"></i>
                    </span></br>
                    <span>ミッション・ビジョン</span>
                    </li>
                    <li>
                    <span>ABOUT
                    <i class="fas fa-check"></i>
                    </span></br>
                    <span>ブレインパッドについて</span>

                    </li>
                    <li>
                    <span>MEMBER
                    <i class="fas fa-check"></i>
                    </span></br>
                    <span>社員インタビュー</span>

                    </li>
                    <li>
                    <span>PROJECT
                    <i class="fas fa-check"></i>
                    </span></br>
                    <span>プロジェクト</span>

                    </li>
                    <li>
                    <span>CROSS TALK
                    <i class="fas fa-check"></i>
                    </span></br>
                    <span>クロストーク</span>
                    </li>

                </ul>
            </nav>
        <div>
        <a href=""><span>NEW GRADUATE</span>
        <span>新卒採用</span>
        </a>
        <a href=""><span>CAREER</span>
        <span>中途採用</span></a>
        </div>
		</header><!-- #masthead -->