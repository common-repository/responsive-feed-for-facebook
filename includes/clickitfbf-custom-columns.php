<?php

add_filter( 'manage_clickitfbf_fb_feed_posts_columns', function($columns){
    	$newColumns = array();
	$newColumns['title'] = 'Feed Title';
	$newColumns['info'] = 'Feed Info';
	$newColumns['shortcode'] = 'Shortcode';
	$newColumns['date'] = 'Date';
	$newColumns['author'] = 'Created by';
	return $newColumns;
    
    
    } );

add_action( 'manage_clickitfbf_fb_feed_posts_custom_column',function($column,$id){
    switch($column){
        case 'shortcode':
            $short="[clickitfbf id='".$id."']";
            
            echo '<span style="font-size:16px;font-weight:;display:inline-block;padding-top:7px;">'.$short.'</span><br/>';            
        break;
        case 'info':
            $clickitfbf_fb_page_name=get_post_meta($id,'clickitfbf_fb_page_name',true);
            $clickitfbf_feed_style=get_post_meta($id,'clickitfbf_feed_style',true);
            $clickitfbf_layout=get_post_meta($id,'clickitfbf_layout',true);
            echo '<span>Page Name: '.$clickitfbf_fb_page_name.'</span><br>';
            echo '<span>Feed Style: '.$clickitfbf_feed_style.'</span><br>';
            echo '<span>Layout Style: '.$clickitfbf_layout.'</span><br>';
                   
        break;


        
    };
    
    
    },10,2);
?>