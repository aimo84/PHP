<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Continents List
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				
				global $wpdb;

				?>


				<div class="container-country">
				<table id="locations">
				<tbody><tr>
					<td id="america"><a href="<?=get_permalink('137');?>?continent_id=1"><img src="<?=get_template_directory_uri()?>/images/America1.png"></a></td>
					<td id="asia"><a href="<?=get_permalink('137');?>?continent_id=2"><img src="<?=get_template_directory_uri()?>/images/Asia1.png"></a></td>
				</tr>
				<tr>
					<th id="Choose" colspan="2"><h1>Click-A-Flag</h1></th>
				</tr>
					<tr><td id="africa"><a href="<?=get_permalink('137');?>?continent_id=3"><img src="<?=get_template_directory_uri()?>/images/Africa1.png"></a></td>
					<td id="australia"><a href="<?=get_permalink('137');?>?continent_id=4"><img src="<?=get_template_directory_uri()?>/images/Australia1.png"></a></td>
				</tr>
				</tbody></table>
				</div>
				<?php
				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<style type="text/css">
	.right-sidebar .content-area{
		width: 100%;
	}
	.container-country{
		width: 100%;
		height: auto;
		border: thin solid #fbfbfb;
		text-align: center;
		position: relative;
	}
	.container-country h1, a{
		font-family: sans-serif,Times, serif;
		font-size: 35px;
		color: #FBFBFB;
		text-shadow: 2px 2px 6px #0F0F0F;
		text-align: center;
	}
	table#locations{
	    border-collapse: collapse;
	    background-color: #D0D0D0;
	    min-width: 512px;
	    max-width: 1024px;
	}
	table#locations td{
		-webkit-filter: brightness(0.9);
	    filter: brightness(0.9);
		padding: 0;

	}
	table#locations td:hover{
		-webkit-filter: brightness(1);
	    filter: brightness(1);
	}
	table, th, td {
	    border: 0px solid transparent;
	    padding-bottom: 0px;
	}
	td#africa{
		padding-top: 1px;
	}
	td#australia{
		padding-top: 1px;
	}
			

</style>
<?php
get_footer();
