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
				
				$countryName = $country->country_name;
				$playList = $country->country_playlist;
				$countryImage = $country->country_image;
				$countryHeadImage = $country->head_image;
				$secondHeadImage = $country->second_head_image;
				$headWikiLink = $country->head_wiki_link;
				$secondHeadWikiLink= $country->second_head_wiki_link;
				$headQuote = $country->head_quote;
				$secondHeadQuote = $country->second_head_quote;
				?>
    	<h3 class="country-title">Country: <b><?php echo $countryName; ?></b></h3>
		
		<table>
		<tr>
		
		<!-- Show second header images if not null workable for PAN America only--> 
			<?php 
    	if(strlen($secondHeadImage)> 0){?>
   			 	<td style="padding: 0px;display: inline-block; border: none !important;">
   			 	<a href="<?php echo $secondHeadWikiLink; ?>" target="_blank"><img style ="width: 183px;right: 268px; height: 198px;display: inline-block;" src="<?=get_template_directory_uri()?>/president_images/<?php echo $secondHeadImage;?>"> </a></td>
   			 	
   			 	<?php	if(strlen($secondHeadQuote)> 0){?>	
    	    				<td style="border: none;background: none;padding-left: -34px; border: none !important;display: inline-block;"><h4 style="font-style: italic;"><?php echo $secondHeadQuote ?></h4></td>
				<?php }?>
    	 <?php 
    	 }
    	 ?>
		 </tr>
		 </table>
    <div class="imgDiv">
    
    	<!-- show country head image -->
    	<a href="<?php echo $headWikiLink; ?>" target="_blank"><img style ="width: 183px;right: 268px; height: 198px;" src="<?=get_template_directory_uri()?>/president_images/<?php echo $countryHeadImage; ?>"></a>
    	 
    	<img src="<?=get_template_directory_uri()?>/images/<?php echo $countryImage; ?>">
      <iframe src="//www.youtube.com/embed/?listType=playlist&list="<?php echo $playList; ?> class="country-playlist" style="margin:200px 0 0 0;"> </iframe>
       <p><b>This website supports  #1 the United Nations World Tourism Organization's goal to maximize tourism's contribution to poverty reduction and increase awareness on the sector's development potential..</b></p> 
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
	  
	   <h3> Donate cash or your skills to help finish this remaining part. Contact "info@7millionjobs.com" +855 965 975 998</h3>
<!-- HTML Code -->
<table class="GeneratedTable">
<thead>
<tr>
<th>Click To Meet Local People</th>
<th>Click To Upload Your Video</th>
<th>Barter - Trade Your Skills</th>
</tr>
</thead>
<tbody>
<tr>
  <td><h5>Profitable Ideas & Video Tutorials</h5></td>
<td><h5>Community Development Projects</h5></td>
<td><h5>Scammed? Warn Other Tourists</h5></td>
</tr>
<tr>
  <td><h5>1st 7 Million Jobs TV Host's photo</h5></td>
  <td><h5>2nd 7 Million Jobs TV Host's photo</h5></td>
<td><h5>3rd 7 Million Jobs TV Host's photo</h5></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
	  	
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
