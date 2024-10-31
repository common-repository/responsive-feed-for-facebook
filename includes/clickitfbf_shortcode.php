<?php
add_shortcode('clickitfbf',function($atts,$content){
    
    extract( shortcode_atts( array( 'id' => null ) , $atts ) );
    $clickitfbf_fb_page_name=get_post_meta($id,'clickitfbf_fb_page_name',true);
    $clickitfbf_show_photos_only=get_post_meta($id,'clickitfbf_show_photos_only',true);
    $clickitfbf_hide_date_posted=get_post_meta($id,'clickitfbf_hide_date_posted',true);
    $clickitfbf_profile_picture=get_post_meta($id,'clickitfbf_profile_picture',true);
    $clickitfbf_hide_read_more_link=get_post_meta($id,'clickitfbf_hide_read_more_link',true);
    $clickitfbf_hide_caption_text=get_post_meta($id,'clickitfbf_hide_caption_text',true);
    $clickitfbf_feed_style=get_post_meta($id,'clickitfbf_feed_style',true);
    $clickitfbf_thumb_size=get_post_meta($id,'clickitfbf_thumb_size',true);
    $clickitfbf_col_count=get_post_meta($id,'clickitfbf_col_count',true);
    $clickitfbf_num_feed=get_post_meta($id,'clickitfbf_num_feed',true);
    $clickitfbf_caption_text_limit=get_post_meta($id,'clickitfbf_caption_text_limit',true);
    $clickitfbf_color_sceheme='light';
    $clickitfbf_layout=get_post_meta($id,'clickitfbf_layout',true);
    $clickitfbf_max_height=get_post_meta($id,'clickitfbf_max_height',true);
    $clickitfbf_date_lang=get_post_meta($id,'clickitfbf_date_lang',true);
      //default values
    if($clickitfbf_date_lang=='')
        $clickitfbf_date_lang='en';
    if($clickitfbf_max_height=='')
        $clickitfbf_max_height='520';
    /*
    if($clickitfbf_color_sceheme=='')
        $clickitfbf_color_sceheme='light';  
    */
    if($clickitfbf_fb_page_name=='')
        $clickitfbf_fb_page_name='google';
    if($clickitfbf_layout=='')
        $clickitfbf_layout='classic';  
    if($clickitfbf_col_count=='')
        $clickitfbf_col_count='2';
    if($clickitfbf_thumb_size=='')
        $clickitfbf_thumb_size='250';
    if($clickitfbf_feed_style=='')
        $clickitfbf_feed_style='vertical';
    if($clickitfbf_num_feed=='')
        $clickitfbf_num_feed='20';
    if($clickitfbf_caption_text_limit=='')
        $clickitfbf_caption_text_limit='50';


     if($clickitfbf_layout=="dark")
        $clickitfbf_color_sceheme='dark';    
    if($clickitfbf_feed_style=='grid'){
        $clickitfbf_show_photos_only='1';
        $clickitfbf_layout="classic";
    }
 function clickitfbf_detTamplate($layout){
        if($layout=='default'||$layout=='classic'||$layout=='scroll'||$layout=='dark'){
            ?>
            <script>
                console.log("good enough");
            </script>
            <?php
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<p>';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='<a href="{{=it.link}}" target="_blank" class="">{{=it.attachment}}</a>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        if($layout=='layout-2'){
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            
            $template.='<div class="media-body">';
            
            $template.='<p>';
            $template.='<strong><a class="time-ago" style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='</p>';
            $template.='<br/>';
            $template.='<a href="{{=it.link}}" target="_blank" class="attachment">{{=it.attachment}}</a>';
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        if($layout=='layout-3'){
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            /* attachment */
            $template.='<a href="{{=it.link}}" target="_blank" class="clickitfbf-attachment">{{=it.attachment}}</a>';
            /* feed text */
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            $template.='<div class="clickitfbf-media">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<br/>';
            $template.='<p class="clickitfbf-text">';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
        else{
            $template='';
            $template.='<div class="grid-item">';
            $template.='<div class="social-feed-element {{? !it.moderation_passed}}hidden{{?}}" dt-create="{{=it.dt_create}}" ';
            $template.='social-feed-id = "{{=it.id}}">';
            $template.='<div class="content">';
            /* feed text */
            $template.='<div class="text-wrapper">';
            $template.='<p class="social-feed-text">{{=it.text}} <a href="{{=it.link}}" target="_blank" class="read-button">read more</a></p>';
            $template.='</div>';
            /* attachment */
            $template.='<a href="{{=it.link}}" target="_blank" class="clickitfbf-attachment">{{=it.attachment}}</a>';
            $template.='<div class="clickitfbf-media">';
            $template.='<a class="pull-left" href="{{=it.author_link}}" target="_blank"><img class="media-object" src="{{=it.author_picture}}"></a>';
            $template.='<div class="media-body">';
            $template.='<br/>';
            $template.='<p class="clickitfbf-text">';
            $template.='<span class="muted pull-right"> {{=it.time_ago}}</span>';
            $template.='<strong><a style="font-weight: bold !important;" href="{{=it.author_link}}" target="_blank" >';
            $template.='<span class="author-title">{{=it.author_name}}</span>';
            $template.='</a></strong>';
            $template.='</p>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            $template.='</div>';
            return $template;
        }
    }
    

   
    $layout_template=clickitfbf_detTamplate($clickitfbf_layout);
    /*
    if($clickitfbf_caption_text_limit=='')
        $clickitfbf_caption_text_limit='50'; 
    if($clickitfbf_col_count=='')
        $clickitfbf_col_count='2';
    if($clickitfbf_num_feed=='')
        $clickitfbf_num_feed='20';
    */

    ?>
      <script>
        var asd='<?php echo $clickitfbf_date_lang?>';
        console.log("Thumb Style:"+asd);
    </script>
  
    <?php
    ob_start();
    if($clickitfbf_layout=='default'||$clickitfbf_layout=='classic'||$clickitfbf_layout=='scroll'||$clickitfbf_layout=='dark'){
        ?>
    <style>
        .social-feed-container-<?php echo $id;?> .read-button{
            display: inline-block !important;
        }
        <?php }?>


        /* template----1*/
        <?php if($clickitfbf_layout=='layout-1'||$clickitfbf_layout=='layout-3'){?>
        .social-feed-container-<?php echo $id; ?> .social-feed-text{
            text-align: center;
            padding-bottom: 10px !important;
        }
        .social-feed-container-<?php echo $id;?> .social-feed-element {
            padding-top: 8px !important;    
            padding-bottom: 8px !important;    
        }
        .social-feed-container-<?php echo $id;?> .clickitfbf-attachment{
            padding-bottom: 10px;
        }
        /* end of layout 1*/
        <?php }?>
        /* template----2*/
        <?php if($clickitfbf_layout=='layout-2'){?>
        .social-feed-container-<?php echo $id; ?> .pull-left{
            display:block !important;
            width: 100% !important;
            float: none !important;
            margin: 0 !important;
            padding: 5px !important;
            text-align:center !important;
        }
        .social-feed-container-<?php echo $id; ?> .time-ago{
            display:block !important;
            width: 100% !important;
            float: none !important;
            margin: 0 !important;
            text-align:center !important;
        }
        .social-feed-container-<?php echo $id; ?> .media-object{
            margin: 0 auto !important;
            width: 70px !important;  
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            color: black !important;
            font-weight: bold;
            margin: 0 auto !important;
            font-size: 17px !important;
            text-align:center !important;
            float: none !important;
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-element .pull-right{
            display: block !important;
            width: 100% !important;
            float: none !important;
            margin : 0px !important;
            text-align: center !important;
            color: #969696;
            height: 17px;
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-text{
            text-align: center !important;
            font-size: 1.4em !important; 
        }
        .social-feed-container-<?php echo $id; ?> .attachment{
            margin: 5px !important;
        }
        <?php }?>
        /* end of layout 2*/
       
        /*date posted*/
        .social-feed-container-<?php echo $id; ?> .pull-right{
            <?php if($clickitfbf_hide_date_posted=='1'||$clickitfbf_show_photos_only=='1') echo 'display:none !important;';
                    else echo 'float:right !important;';if($clickitfbf_color_sceheme=='dark') echo 'color:#999;';?>         
        
        }

        <?php if($clickitfbf_hide_caption_text=='1'){?>
         .social-feed-container-<?php echo $id; ?> .content{
            padding-bottom:20px !important;
         }
         .social-feed-container-<?php echo $id; ?> .media-body{
            margin-top: 17px !important;
         }
            
        <?php }?>
        .social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            display:inline-block;
            color: black !important;
            font-weight: bold !important;
            text-decoration: none !important;
            cursor: pointer !important;
        }
        .social-feed-container-<?php echo $id; ?> .read-button{
            padding: 5px !important;
        }
        
        /*profile pic*/
        .social-feed-container-<?php echo $id; ?> .pull-left{
            float: left;
            <?php if($clickitfbf_profile_picture=='1'||$clickitfbf_show_photos_only=='1') echo 'display:none !important;';?>         
            /* dark theme*/
            <?php if($clickitfbf_color_sceheme=='dark'){?>
            <?php }?>
                cursor: pointer !important;

        }
        /* read more button*/
        .social-feed-container-<?php echo $id; ?> .read-button{
            <?php if($clickitfbf_hide_read_more_link=='1'||$clickitfbf_show_photos_only=='1') echo 'display:none !important;';?>         
            /* dark theme*/
            <?php if($clickitfbf_color_sceheme=='dark'){?>
            <?php }?>
            cursor: pointer !important;
        }
        /* caption text*/
        .social-feed-container-<?php echo $id; ?> .social-feed-text{
            <?php if($clickitfbf_hide_caption_text=='1'||$clickitfbf_show_photos_only=='1') echo 'display:none !important;';?>         
            /* dark theme*/
            <?php if($clickitfbf_color_sceheme=='dark'){?>
            <?php }?>

        }
        .social-feed-container-<?php echo $id; ?> .content{
            display: block !important;
            <?php if($clickitfbf_show_photos_only=='1') echo 'display:none !important;';?>         
            /* dark theme*/
            <?php if($clickitfbf_color_sceheme=='dark'){?>
                background-color:#414141;
            <?php }?>
        }
        .social-feed-container-<?php echo $id; ?> .grid-item{
            padding:5px;
            margin: 2px;
            /* dark theme*/
            <?php if($clickitfbf_color_sceheme=='dark'){?>
                background-color:white;
            <?php }?>
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-element a{
            color: #0088cc !important;
            text-decoration: none !important;
            
        }
        .social-feed-container-<?php echo $id; ?> .content .media-body p{
            margin: 0 !important;
        }
        /*Author Title*/
        .social-feed-container-<?php echo $id; ?> .social-feed-element p.social-feed-text,
        .social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            <?php if($clickitfbf_hide_caption_text=='1'||$clickitfbf_show_photos_only=='1') echo 'display:none !important;';?>         
            <?php if($clickitfbf_color_sceheme=='light'){?>
                color: black !important;
            <?php }else{echo 'color:white !important;';}?>
            
        }
        
        <?php if($clickitfbf_feed_style=='vertical'){?>
        .social-feed-container-<?php echo $id; ?> {
            width: 442px !important;
            margin: 0 auto !important;
        }
        
        <?php } if($clickitfbf_feed_style=='masonry'){ ?>
        /* masonary*/
        
        .social-feed-container.<?php $id;?> .social-feed-element{
            box-shadow: 0 0 10px 0 rgba(10, 10, 10, 0.2) !important;
            transition: 0.25s !important;
            -webkit-backface-visibility: hidden !important;
            text-align: left;
            padding: 0 !important;
            margin: 0 !important;
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-text{
            margin: 0 !important;
            color: black !important;
        }
        .social-feed-container-<?php echo $id; ?>{
            column-gap:0 !important;
            column-count: <?php echo $clickitfbf_col_count;?> ;
            -webkit-column-count: <?php echo $clickitfbf_col_count;?> ;
            -moz-column-count: <?php echo $clickitfbf_col_count;?> ;
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-element .author-title{
            font-size: 15px !important;
            font-weight: bold !important;
            text-decoration: none !important;
        }
        .social-feed-container-<?php echo $id; ?> .social-feed-element  {
            break-inside: avoid;
            padding: 0 !important;
            vertical-align: top !important;
            margin: 0 !important;        
        }
        
        .social-feed-container-<?php echo $id; ?> .social-feed-element .media-body > p{
            margin: 0 !important;
        }
        @media (max-width: 600px) {
            .social-feed-container-<?php echo $id; ?> {
                column-count: 2;
                -webkit-column-count:2;
                -moz-column-count: 2;
            }
        }
        @media (max-width: 360px) {
            .social-feed-container-<?php echo $id; ?> {
                column-count: 1;
                -webkit-column-count: 1 ;
                -moz-column-count: 1 ;
            }
        }

        
        
        
        <?php }?>
        /* Thumbnail CSS */
        <?php if($clickitfbf_feed_style=='grid'){?>
            .social-feed-container-<?php echo $id; ?> .social-feed-element{
            width: <?php echo $clickitfbf_thumb_size; ?>px !important;
            display: inline-block !important;
            background-color:white !important;
            padding: 0 !important;
            margin: 5px !important;
            vertical-align: middle !important;
        }
        .social-feed-container-<?php echo $id; ?> .grid-item {
            display: inline-block !important;
        } 
        .social-feed-container-<?php echo $id; ?> {
            text-align: center !important;
        }
        <?php }if($clickitfbf_layout=="scroll"){?>
        .social-feed-container-<?php echo $id;?>{
            height: <?php echo $clickitfbf_max_height;?>px;
            width: 100%;
            border: 1px solid #ddd;
            overflow-x: scroll;
            padding: 10px;
        }
        <?php }?>
    </style>

    <div id="social-feed-container-<?php echo $id; ?>" class="social-feed-container-<?php echo $id; ?>">

    <script>
    var clickitfbf_fb_page_name='<?php echo $clickitfbf_fb_page_name;?>';
   // var	clickitfbf_access_token= '3115610306.54da896.ae799867a8074bcb91b5cd6995b4974e';
    setTimeout(function(){


    jQuery(document).ready(function(){
        jQuery('.social-feed-container-'+<?php echo $id;?>).socialfeed({
            facebook:{
                accounts:['@'+clickitfbf_fb_page_name],
                limit:<?php echo $clickitfbf_num_feed;?>,
                access_token:'274376249625432|03d7cc70158f4b720a124c11aad5606e'},
            template_html:'<?php echo $layout_template;?>' ,
            date_format: "ll",                              //String: Display format of the date attribute (see http://momentjs.com/docs/#/displaying/format/)
            date_locale: "en",   
        // GENERAL SETTINGS
            length:<?php echo $clickitfbf_caption_text_limit;?>,                                     //Integer: For posts with text longer than this length, show an ellipsis.
                show_media:true
            });
        
        });    
     },1000);
    moment.locale("<?php echo $clickitfbf_date_lang;?>");
    </script>
    <?php
    return ob_get_clean();
    });
?>