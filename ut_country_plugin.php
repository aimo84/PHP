<?php
/**
* Plugin Name: UT Country Plugin
* Plugin URI: #
* Description: [ut_country id="my_id" field="correspondant_field"]
* Version: 1.0
* Author: Tourism Development
* Author URI: //7millionjobs.com/
**/

 function get_country_by($id) {
  	global $wpdb;
  	//$table_name = $wpdb->prefix . "ut_country";
    $table_name = "ut_countries"; 
  	$query = "SELECT * FROM $table_name WHERE country_id = $id ";
  	return $wpdb->get_row( $query , OBJECT );
  }

  function get_continent_by($id) {
    global $wpdb;
    //$table_name = $wpdb->prefix . "ut_country";
    $table_name = "ut_continents"; 
    $query = "SELECT * FROM $table_name WHERE continent_id = $id ";
    return $wpdb->get_row( $query , OBJECT );
  }

  function get_president_by($id) {
    global $wpdb;
    //$table_name = $wpdb->prefix . "ut_country";
    $table_name = "ut_president"; 
    $query = "SELECT * FROM $table_name WHERE country_id = $id ";
    return $wpdb->get_row( $query , OBJECT );
  }

  function get_highways_by($id) {
    global $wpdb;
    //$table_name = $wpdb->prefix . "ut_country";
    $table_name = "ut_highways"; 
    $query = "SELECT * FROM $table_name WHERE country_id = $id ";
    return $wpdb->get_results( $query , OBJECT );
  }



  // [ut_country id="my_id" field="correspondant_field"]
  function ut_country_func( $atts ){
  	$a = shortcode_atts( array(
        'id' => '', // default value set
        'field' => ''
    	), $atts );

    	$country = get_country_by($a['id']);
      $continent = get_continent_by($country->continent_id);
      $president = get_president_by($country->country_id);
      $highways = get_highways_by($country->country_id);

      $strHighways = '';
      if ( count($highways) > 0 ) {
        foreach ($highways as $k3y => $oneRow) {
          $strHighways .= " " . $oneRow->highway_name . ";";
        }
      } else {
        $strHighways = 'Nothing';
      }
      
    	switch ($a['field']) {
    		case 'name':
    			$out = $country->country_name;
    			break;
        case 'continent':
          $out = $continent->continent_name;
          break;
        case 'image':
          $out = $country->country_image;
          break;
        case 'playlist':
          $out = $country->country_playlist;
          break;
        case 'highways':
          $out = $strHighways;
          break;
        case 'president':
          $out = $president->name;
          break;
    		
    		default:
    			$out = 'Nothing to display here ....';
    			break;
    	}
  	
  	return $out;
  }

  add_shortcode( 'ut_country', 'ut_country_func' );