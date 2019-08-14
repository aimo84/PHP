<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Countries List
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				//get_template_part( 'content', 'page' );

				the_content();

				global $wpdb;

				
				$has_highway = $wpdb->get_var("SELECT has_highway FROM ut_continents WHERE continent_id='".$_GET['continent_id']."'");

				$countries = $wpdb->get_results("SELECT * FROM ut_countries WHERE continent_id='".$_GET['continent_id']."'");

				if(isset($_GET['continent_id']) && !$has_highway){

				?>

				<div class="container-country">
				
				<?php
				foreach ($countries as $country) {
				?>
				<div class="imgDiv">
					<a href="<?=get_permalink('139');?>?country_id=<?=$country->country_id?>">
						<img src="<?=get_template_directory_uri()?>/images/<?=$country->country_image?>">
						<div class="centerText"><?=$country->country_name?></div>
					</a>
				</div>
				<?php
				}
				?>	
				
				</div>

				<?php
				}
				else if(isset($_GET['continent_id']) && $has_highway){
				
				$highways = $wpdb->get_results("SELECT * FROM ut_highways ORDER BY highway_id");	
				$i = 1;
				?>

				<div class="container-country">
				<div class="grayDiv">
					<b>Search By:</b>
		            <button name="btn1" onclick="document.getElementById(&#39;countries&#39;).style.display=&#39;block&#39;;
		            document.getElementById(&#39;highways&#39;).style.display=&#39;none&#39;;">Country</button>
		            <button name="btn2" onclick="document.getElementById(&#39;highways&#39;).style.display=&#39;block&#39;;
		            document.getElementById(&#39;countries&#39;).style.display=&#39;none&#39;;">Highway</button>
	            </div>

	            <div id="countries">
	            	
	            	<?php
					foreach ($countries as $country) {
					?>
					<div class="imgDiv">
						<a href="<?=get_permalink('139');?>?country_id=<?=$country->country_id?>">
							<img src="<?=get_template_directory_uri()?>/images/<?=$country->country_image?>">
							<div class="centerText"><?=$country->country_name?></div>
						</a>
					</div>
					<?php
					}
					?>

				</div> <!-- Countries Div Ends Here -->

	            <div id="highways" style="display:none">
	            	<h3>Reference Image</h3>
	            	<figure id="referenceImage">
	            		<img src="<?=get_template_directory_uri()?>/images/Map_of_Trans-African_Highways.png">
	            		<figcaption>Map of Trans-African Highways</figcaption>
	            	</figure>

	            	<?php
	            	foreach ($highways as $highway) {

						$countries = $wpdb->get_results("SELECT * FROM ut_countries INNER JOIN ut_country_highways ON ut_countries.country_id = ut_country_highways.country_id WHERE highway_id='".$highway->highway_id."' ORDER BY ut_country_highways.country_id");

	            	?>
	            	<div class="highwayDiv">
	            		<h3><?=$i?>. <?=$highway->highway_name?><a href="<?=the_permalink();?>?continent_id=<?=$_GET['continent_id']?>#referenceImage">See Reference Image</a></h3>
	            		
	            		<hr>

						<?php
						foreach ($countries as $country) {
						?>
						<div class="imgDiv">
							<a href="<?=get_permalink('139');?>?country_id=<?=$country->country_id?>">
								<img src="<?=get_template_directory_uri()?>/images/<?=$country->country_image?>">
								<div class="centerText"><?=$country->country_name?></div>
							</a>
						</div>
						<?php
						}
						?>
						
					</div>
	            	<?php	
	            	$i++;
	            	}
	            	?>
	            	
				</div>
				</div>

				<?php
				}
				?>
				



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
	.imgDiv a{
		float: left;
		width:100%;
		height:100%;
		position:relative;
		border:0px solid #FFF;
		box-sizing:border-box;
	}
	.imgDiv{
		display:inline-block;
		margin:5px 5px;
		width: 300px;
		height: 200px;
	}
	.imgDiv img{
		display:block;
		width: 100%;
		height: 100%;
		position:absolute;
		filter: brightness(0.6);
		border-radius: 20px;
	}
	.imgDiv img:hover{
		display:block;
		width: 100%;
		height: 100%;
		filter: brightness(0.9);
		}
	.imgDiv .centerText{
		text-align: center;
		position: absolute;
		font-size: 35px;
		font-family: "League Spartan Bold", "Nirmala UI", "Arial";
		margin: 23% 0% 0% 0%;
		color: #FFFFFF;
		text-shadow: 2px 2px 3px black;
		width: 100%
	}
			


	div.highwayDiv{
		height: auto;
		width: 90%;
		margin: 10px 5% 10px 5%;
		background-color: #DDD;
	}
	div.highwayDiv h3{
		text-align: left;
		padding: 20px 0px 0px 30px;
	}
	div.highwayDiv h3 a{
		float: right;
		font-size: 15px;
		font-weight: 300;
		padding-left: 75%
	}

	div.grayDiv{
		background-color: #BBB;
		height: 50px;
		color: #000;
		text-shadow: none;
		font-size: 20px;
	}
	div.grayDiv b,div.grayDiv button{
		margin:10px 50px 10px 0;
		height: 30px;
		font-size: 20px;
		outline: none;
		border: none;
		border-radius: 10px;
		line-height: 0;
	}
	div.grayDiv button:hover{
		box-shadow: 1px 1px 4px #888;
		background-color: #AAA;
	}
	#highways figure img{
	    margin: 0px auto;
	}

</style>
<?php
get_footer();
