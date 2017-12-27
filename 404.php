<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Soroka-kiev
 */

get_header(); ?>

	<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title"><?php esc_html_e( 'Ошибка 404', 'soroka-kiev' ); ?></h1>
	</section>

			
				<div class="container">
			<div class="row" id="primary">

				<main id="content" class="col-sm-8" role="main">
				
					<p><?php esc_html_e( 'К сожалению данная страница не найдена, попробуйте воспользоватся поиском!', 'soroka-kiev' ); ?></p>

					<?php
						get_search_form();

						
					?>
					<br>
					<p>А также Вы можете вернутся на <a href="http://soroka-kiev.com">главную страницу</a>.</p>



				</main>

					<aside class="col-sm-4">
					
					<?php get_sidebar(); ?>
		
					

					</aside>

				</div>
			</div>
			

		

<?php
get_footer();
