<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

<body>
    <section class="top">
        <div class="table-cell">
            <h2>Dummy</h2>
            <i class="fas fa-times" center></i>
            <h2>Dummy</h2>
            <i class="fas fa-times" center></i>
            <h2>Dummy</h2>
            <h3>データに魂を。</h3>        
        </div>
    </section>
    <section class="recruit">
        <h2>RECRUIT</h2>
        <h3>採用情報</h3>
        <div class="re-image0">
        <?php echo get_recruit(); ?>
        </div>
    </section>
    <section class="message">
		<div class="me">
		<div class="message-img">
	    <img src="./wp-content/themes/twentynineteen-child/img/book01.jpeg" alt="">			
		</div>
        <div class="text-container">
            <b>messege</b>
            <h3>この文章はダミーです。</h3>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、</br>
                心にうつりゆくよしなし事を、そこはかとなく書きつくれば、</br>
                あやしうこそものぐるほしけれ。（Wikipediaより）</p>
            <p>つれづれなるまゝに、日暮らし、硯にむかひて、</br>
                心にうつりゆくよしなし事を、そこはかとなく書きつくれば、</br>
                あやしうこそものぐるほしけれ。（Wikipediaより）</p>
            <a href=""><span>View Our Phylosophy</span></a>
        </div>

		</div>
    </section>
    <section>
        <div class="news-archive">
            <div class="new-archive-span">
                <h2><span>Information</span></h2>
                <p>お知らせ</p>
            </div>
            <?php echo get_works(); ?>
        </div>
    </section>
    <section class="informations">
        <div class="section-inner clearfix">
            <h2>Menber</h2>
            <h3>社員インタビュー</h3>
        </div>
        <div class="member">
            <ul class="slider">
                <?php echo get_member(); ?>
            </ul>
        </div>
        <div class="viewall">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/member">View All</a>
        </div>
    </section>
    <section class="cross">
			<div class="crosstalk">
				<h3>Cross Talk</h3>
				<div class="re-image0">
						<?php echo get_crosstalk(); ?>
				</div>
			</div>
    </section>
    <section class="project">
		<div class="project-name">
		  <h3>Project</h3>
        <p>プロジェクト</p>
		</div>
        <div class="re-image0">
        <?php echo get_project(); ?>
        </div>
    </section>
<?php
get_footer();
?>