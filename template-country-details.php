<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Country Details
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				
				if(isset($_GET['country_id'])){ 

				$country_id = $_GET['country_id'];

				global $wpdb;

				$country = $wpdb->get_row("SELECT * FROM ut_countries WHERE country_id='".$country_id."'");
				?>
    <h3 class="country-title">Country: <b>
      <?=$country->country_name?>
      </b></h3>
    <div class="imgDiv"> <img src="<?=get_template_directory_uri()?>/images/<?=$country->country_image?>">
      <iframe src="//www.youtube.com/embed/?listType=playlist&list=<?=$country->country_playlist?>" class="country-playlist" style="margin:200px 0 0 0;"> </iframe>
       <p>This website supports <br>
	  #1 the United Nations World Tourism Organization's goal to maximize tourism's contribution to poverty reduction and increase awareness on the sector's development potential..</p> 
	 #2 the ASEAN Tourism Strategic Plan 2016-2025 seeking to make a greater contribution towards the ASEAN integration goal in the post 2015 decade of moving to an economic growth scenario that is more “inclusive,” “green” and “knowledge-based
	 
	  </div>
	    <table border="0" width="500" class="video" >
<tbody>
<tr>
<td><br/><br/><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"><input name="cmd" type="hidden" value="_s-xclick" />
<input name="hosted_button_id" type="hidden" value="9X6T5WBVYPXG4" />
<input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" type="image" />
<img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form><b>Microsoft, AliBaba, Google, Facebook, The Pentagon, Twitter etc all have enough cash. To take over we'll need every dollar you can spare. Today. Now. Please.</b></td>
<td>
<!--[video width="600" height="400" mp4="http://7.asianhighwaynetwork.com/wp-content/uploads/2017/07/promo-1.mp4"][/video]-->
<video width="1500" height="290" controls>
  <source src="http://7.asianhighwaynetwork.com/wp-content/uploads/2017/07/promo-1.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</td>
</tr>
</tbody>
</table> 

	  </div>
	  	
    <?php }

				
				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop. ?>
            
  </main>
  <!-- #main -->

</div>
<!-- #primary -->


<script>
	jQuery( document ).ready(function() {
	jQuery('#primary .entry-content h1').each(function() {   var text = jQuery(this).text();    jQuery(this).text(text.replace('THIS COUNTRY', '<?=$country->country_name?>')); });
	jQuery('#primary .entry-content h2').each(function() {   var text = jQuery(this).text();    jQuery(this).text(text.replace('this country', '<?=$country->country_name?>')); });
	jQuery('#primary .entry-content p').each(function() {   var text = jQuery(this).text();    jQuery(this).text(text.replace('this country', '<?=$country->country_name?>')); });
});
</script>



<style type="text/css">
	.right-sidebar .content-area{
		width: 100%;
	}
	.imgDiv{
		position: relative;
	}
	.imgDiv img{
		margin: 0% auto;
		position: absolute;
		width: 250px;
		right: 0px;
		top: -45px;
	}
	.country-playlist{
	    width: 100%;
	    height: 606px;
	    margin: 200px 0px;
	}
			
.entry-content > h1 {
  text-transform: uppercase;
}
table tbody td {
  border: 1px solid #b5b5b5 !important
}

</style>
<?php
get_footer();?>
