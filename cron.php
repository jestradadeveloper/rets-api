<?php

global $wpdb;
    $table_name = $wpdb->prefix . 'property';
  
   
    $filename='retslist.json';
    $url = 'https://rets-api.herokuapp.com';
	$datosCochranListing = wp_remote_get($url.'/'.$filename);
	if(is_wp_error($datosCochranListing)){
		echo  "Error al leer";
	} else {
        $arrayDatosCochran= json_decode($datosCochranListing['body'], true); 
        foreach ($arrayDatosCochran as $post) {
            setup_postdata($post);
            $listing_mls =  $post['id'];
            $listing_size      =  $post['size'];
            $listing_bedrooms  = $post['bedrooms'];
            $listing_bathrooms = $post['bathrooms'];
            $listing_address   = $post['address'];
            $listing_price =  $post['price'];
            $listing_image = $post['image'];
            $listing_long = $post['long'];
            $listing_lat = $post['lat'];
            $listing_name= $post['name'];
            $listing_preview = $post['preview'];
            $listing_location = $post['area'];
            $listing_area = $post['community'];
            $listing_beachfront = $post['beachfront'];
            $listing_petfriendly = $post['petfriendly'];
            $listing_type= $post['type'];
            $listing_link= $post['link'];
            $listing_headline= $post['headline'];
            $listing_subheadline= $post['subheadline'];
            $listing_preconstruction = $post['preconstruction'];
            $listing_agent= $post['agent'];
            $listing_thumb= $post['thumbnail'];
            $listing_timestamp= $post['timestamp'];
            $wpdb->replace(
                $table_name ,
                array( 
                    'listing_mls' => $listing_mls, 
                    'listing_type'=> $listing_type,
                    'listing_name' => $listing_name, 
                    'listing_headline'=>$listing_headline,
                    'listing_subheadline'=> $listing_subheadline,
                    'listing_preconstruction'=> $listing_preconstruction,
                    'listing_image' => $listing_image,      
                    'listing_link' => $listing_link,
                    'listing_preview' => $listing_preview,  
                    'listing_size'=> $listing_size,
                    'listing_location'=>$listing_location,
                    'listing_area' => $listing_area,
                    'listing_bedrooms' => $listing_bedrooms,
                    'listing_bathrooms' => $listing_bathrooms,
                    'listing_address' => $listing_address,
                    'listing_price' => $listing_price,
                    'listing_long' => $listing_long,
                    'listing_lat' => $listing_lat,
                    'listing_beachfront' => $listing_beachfront,
                    'listing_petfriendly' => $listing_petfriendly,
                    'listing_agent'=> $listing_agent,
                    'listing_thumb'=>$listing_thumb,
                    'listing_timestamp'=>$listing_timestamp,
                    'listing_database_date' => current_time( 'mysql')
                ),
                array(
                    '%d',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%d',
                    '%d',
                    '%s',
                    '%s',
                    '%d',
                    '%d',
                    '%d',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',     
                    '%s',
                )
            );

        }
            $wpdb->insert( 
                $table_name, 
                array( 
                    'listing_mls' => $listing_mls, 
                    'listing_type'=> $listing_type,
                    'listing_name' => $listing_name, 
                    'listing_headline'=>$listing_headline,
                    'listing_subheadline'=> $listing_subheadline,
                    'listing_preconstruction'=> $listing_preconstruction,
                    'listing_image' => $listing_image,      
                    'listing_link' => $listing_link,
                    'listing_preview' => $listing_preview,  
                    'listing_size'=> $listing_size,
                    'listing_location'=>$listing_location,
                    'listing_area' => $listing_area,
                    'listing_bedrooms' => $listing_bedrooms,
                    'listing_bathrooms' => $listing_bathrooms,
                    'listing_address' => $listing_address,
                    'listing_price' => $listing_price,
                    'listing_long' => $listing_long,
                    'listing_lat' => $listing_lat,
                    'listing_beachfront' => $listing_beachfront,
                    'listing_petfriendly' => $listing_petfriendly,
                    'listing_agent'=> $listing_agent,
                    'listing_thumb'=>$listing_thumb,
                    'listing_timestamp'=>$listing_timestamp,
                    'listing_database_date' => current_time( 'mysql')
                ) 
            );
        }
    
    }
   // $wpdb->print_error();
    //die;