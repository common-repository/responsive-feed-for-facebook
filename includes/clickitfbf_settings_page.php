<?php
    $post_id=get_the_id();
    //loading values from meta
    $clickitfbf_fb_page_name=get_post_meta($post_id,'clickitfbf_fb_page_name',true);
    $clickitfbf_num_feed=get_post_meta($post_id,'clickitfbf_num_feed',true);
    $clickitfbf_show_photos_only=get_post_meta($post_id,'clickitfbf_show_photos_only',true);
    $clickitfbf_hide_date_posted=get_post_meta($post_id,'clickitfbf_hide_date_posted',true);
    $clickitfbf_profile_picture=get_post_meta($post_id,'clickitfbf_profile_picture',true);
    $clickitfbf_hide_read_more_link=get_post_meta($post_id,'clickitfbf_hide_read_more_link',true);
    $clickitfbf_hide_caption_text=get_post_meta($post_id,'clickitfbf_hide_caption_text',true);
    $clickitfbf_feed_style=get_post_meta($post_id,'clickitfbf_feed_style',true);
    $clickitfbf_thumb_size=get_post_meta($post_id,'clickitfbf_thumb_size',true);
    $clickitfbf_caption_text_limit=get_post_meta($post_id,'clickitfbf_caption_text_limit',true);
    $clickitfbf_col_count=get_post_meta($post_id,'clickitfbf_col_count',true);
    $clickitfbf_layout=get_post_meta($post_id,'clickitfbf_layout',true);
    //$clickitfbf_color_sceheme=get_post_meta($post_id,'clickitfbf_color_sceheme',true);
    $clickitfbf_max_height=get_post_meta($post_id,'clickitfbf_max_height',true);
    $clickitfbf_date_lang=get_post_meta($post_id,'clickitfbf_date_lang',true);
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
        
?>
<script type="text/javascript">
    console.log("display:"+'<?php echo $clickitfbf_feed_style;?>')
    function clickitfbf_setDisplayOptions(feed_style,layout){
        jQuery(document).ready( function($) {
   
            if(feed_style=='grid'){
                $('#grid_options').show();  
                $('#vertical_options').hide();
            }
            else{
                $('#vertical_options').show();
                $('#grid_options').hide();  
            }
            if(feed_style=='masonry')
                    $('#mansonary_options').show();
            else
                    $('#mansonary_options').hide();
            console.log("Hel:"+layout);
            
            if(layout!='scroll')
                $('#scroll_options').hide();
            else
                $('#scroll_options').show();
            
        });
    }
    
    jQuery(document).ready( function($) {
    var feed_style=$('input[name=clickitfbf_feed_style]:checked','#feed_style_option').val();
    var layout=$('input[name=clickitfbf_layout]:checked','#layout_option').val();
    clickitfbf_setDisplayOptions(feed_style,layout);
     
       $('#feed_style_option input').on('change',function(){
 
            var feed_style=$('input[name=clickitfbf_feed_style]:checked','#feed_style_option').val();
            var layout=$('input[name=clickitfbf_layout]:checked','#layout_option').val();
            clickitfbf_setDisplayOptions(feed_style,layout);
        }); 
       $('#layout_option input').on('change',function(){
            var feed_style=$('input[name=clickitfbf_feed_style]:checked','#feed_style_option').val();
            var layout=$('input[name=clickitfbf_layout]:checked','#layout_option').val();
            clickitfbf_setDisplayOptions(feed_style,layout);
        }); 
        
    });
     
</script>
<style>

    main{
        background: #EEEEEE;
        width:98%;
        padding:1%;
        margin-top:1%;
        box-shadow:0 3px 5px rgba(0,0,0,0.2);
    }
    table{
    border-collapse:separate; 
    }
    td {
    padding-top: 1em;
    padding-bottom: 1em;
    }
    .clickitfbf_checkbox{
        width: 25px !important;
        height: 25px !important;
        border: 2px solid #34c5ff !important;
        border-radius: 5px !important;
        margin-left:20px !important;
    }
    .clickitfbf_checkbox:checked:before{
    font-size: 30px !important;
    }
    label a{
        color: blue !important;
    }

    
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script >
    jQuery(document).ready( function($) {
      //  $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    });
  </script>
  <style>
  html{
    box-sizing:border-box;
    
  }
  *,*:before,*:after{
    box-sizing:inherit;
    
  }
    
  .ui-tabs-vertical { width: 100%; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 20%; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%;  border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a {outline: none; color: #21759b;}
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0;cursor: pointer !important;   background: #ffffff;padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active a{ color:#000000; cursor: pointer !important;}
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width:80%; 
  }
  #general_tab,#design_tab,#theme_tab,#shortcode_tab{
    background: #ffffff
  }
  .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active{
    font-weight:normal;
    border: none;
    background: none;
  }
  
  </style>
</head>
<main>
<div id="tabs" class="ui-tabs-vertical ui-helper-clearfix" style="background: #EEEEEE">
  <div style="display:inline;">
  <ul>
    <li><a href="#general_tab" style="width:100%;font-size: 16px;">General</a></li>
    <li><a href="#theme_tab"   style="width: 100%;font-size: 16px;">Theme</a></li>
    <li><a href="#design_tab"  style="width: 100%;font-size: 16px;">Theme Settings</a></li>
    <li><a href="#shortcode_tab"  style="width: 100%;font-size: 16px;">Shortcode</a></li>

  </ul>
  </div>
  <div id="general_tab">
   <table class="general_options">
        <tr>
            <td >
                <label style="font-size: 13px; "> Enter Facebook Page Name:</label>
            </td>
            <td >
                <label style="font-size: 13px; ">http://www.facebook.com/</label>
                <input style="width: 90px; " type="text" id="clickitfbf_fb_page_name" name="clickitfbf_fb_page_name" placeholder="google" value="<?php echo $clickitfbf_fb_page_name;?>"/>
            </td>
        </tr>
        <tr>
            <td >
                <label style="font-size: 13px; "> Number Of Feeds To Show:</label>
            </td>
            <td>
                <input style="margin-left: 15px; width: 55px;" type="number" id="clickitfbf_num_feed" name="clickitfbf_num_feed" value="<?php echo $clickitfbf_num_feed;?>" max="20" min="1"/>
            </td>
        </tr>
        <tr>
            <td>
                <label style="font-size: 13px; ">Limit Caption Text:</label>
            </td>
            <td>
                <input style="margin-left: 15px; width: 55px" type="number" id="clickitfbf_caption_text_limit" name="clickitfbf_caption_text_limit" value="<?php echo $clickitfbf_caption_text_limit;?>" max="600" min="5"/>
                <span>Minimum Value is 50 & Maximum Value is 600</span>
            </td>
        </tr>
        <tr>
            <td>
                <label style="font-size: 13px; ">Date Posted Language:</label>
            </td>
            
            <td>
                
                <select style="margin-left: 15px;" name="clickitfbf_date_lang" id="clickitfbf_date_lang" value='1'<?php checked(1, $clickitfbf_date_lang); ?> >
                    <option value="en" <?php if ( $clickitfbf_date_lang == "en" ) echo 'selected="selected"'; ?> >English (Default)</option>
                    <option disabled value="ar"  >Arabic (Premium)</option>
                    <option disabled value="bn"  >Bangali (Premium)</option>
                    <option disabled value="cs"  >Czech (Premium)</option>
                    <option disabled value="da"  >Danish (Premium)</option>
                    <option disabled value="nl"  >Dutch (Premium)</option>
                    <option disabled value="fr"  >French (Premium)</option>
                    <option disabled value="de"  >German (Premium)</option>
                    <option disabled value="it"  >Italian (Premium)</option>
                    <option disabled value="ja"  >Japanese (Premium)</option>
                    <option disabled value="ko"  >Korean (Premium)</option>
                    <option disabled value="pt"  >Portuguese (Premium)</option>
                    <option disabled value="ru"  >Russian (Premium)</option>
                    <option disabled value="es"  >Spanish (Premium)</option>
                    <option disabled value="tr"  >Turkish (Premium)</option>
                    <option disabled value="uk"  >Ukranian (Premium)</option>
                </select>

            </td>
        </tr>
        
   </table>
  </div>
  <div id="design_tab">
        <table id="vertical_options" class="general_options">
            <tr id="mansonary_options">
                <td>
                  <h3 style="margin: 6px";>Columns in a Row: </h3> 
                </td>
                <td>
                  <input style="width: 50px;" type="number"  id="clickitfbf_col_count" name="clickitfbf_col_count"
                         value="<?php echo $clickitfbf_col_count;?>" min="1" max="5" /> 
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top">
                    <h3 style="margin: 6px;">Show Photos Only:</h3>
                </td>
                <td>
                    <input style="margin-left:15px" class="clickitfbf_checkbox cmn-toggle cmn-toggle-round" type="checkbox" id="clickitfbf_show_photos_only" name="clickitfbf_show_photos_only" value="1"<?php checked(1,$clickitfbf_show_photos_only);?>/>
                <label for="clickitfbf_show_photos_only"></label>
                </td>   
            </tr>
            <tr>
                <td style="vertical-align: top">
                    <h3 style="margin: 6px;">Hide Date Posted:</h3>
                </td>
                <td>
                    <input style="margin-left:15px" class="clickitfbf_checkbox" type="checkbox" id="clickitfbf_hide_date_posted" name="clickitfbf_hide_date_posted" value="1"<?php checked(1,$clickitfbf_hide_date_posted);?>/>
                </td>   
            </tr>
        
        
            <tr>
                <td style="vertical-align: top">
                    <h3 style="margin: 6px;">Hide Profile Picture:</h3>
                </td>
                <td>
                    <input style="margin-left:15px" class="clickitfbf_checkbox" type="checkbox" id="clickitfbf_profile_picture" name="clickitfbf_profile_picture" value="1"<?php checked(1,$clickitfbf_profile_picture);?>/>
                </td>   
            </tr>
            <tr>
                <td style="vertical-align: top">
                    <h3 style="margin: 6px;">Hide "read more" link:</h3>
                </td>
                <td>
                    <input style="margin-left:15px" class="clickitfbf_checkbox" type="checkbox" id="clickitfbf_hide_read_more_link" name="clickitfbf_hide_read_more_link" value="1"<?php checked(1,$clickitfbf_hide_read_more_link);?>/>
                </td>   
            </tr>
            <tr>
                <td style="vertical-align: top">
                    <h3 style="margin: 6px;">Hide Caption Text:</h3>
                </td>
                <td>
                    <input style="margin-left:15px" class="clickitfbf_checkbox" type="checkbox" id="clickitfbf_hide_caption_text" name="clickitfbf_hide_caption_text" value="1"<?php checked(1,$clickitfbf_hide_caption_text);?>/>
                </td>   
            </tr>
                 
        </table>
     <table id="grid_options" class="general_options">
        <tr>
            <td style="vertical-align: top">
                <h3 style="margin: 6px;">Thumbnail Size:</h3>
            </td>
            <td>
                <input style="margin-left: 15px; width: 60px" type="number" id="clickitfbf_thumb_size"
                       name="clickitfbf_thumb_size" value="<?php echo $clickitfbf_thumb_size;?>" max="600" min="50"/>
            </td>
        </tr>
    </table>
     <table id="scroll_options" class="general_options">
        <tr>
            <td style="vertical-align: top">
                <h3 style="margin: 6px;">Max Height:</h3>
            </td>
            <td>
                <input style="margin-left: 15px; width: 60px" type="number" id="clickitfbf_max_height"
                       name="clickitfbf_max_height" value="<?php echo $clickitfbf_max_height;?>" max="1000" min="200"/>
                
                <span>&emsp;&emsp;Height in px before adding a scrollbar</span>
            </td>
        </tr>
    </table>

  </div>
  
  <div id="theme_tab">
    <table id="feed_style_option">
        <h3>Select Feed Style:</h3>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input id="clickitfbf_feed_style_vertial" type="radio" name="clickitfbf_feed_style" value="vertical"
                        <?php echo($clickitfbf_feed_style=='vertical')? 'checked="checked"':'';?>>
                <label><strong>Vertical</strong></label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img src="<?php echo plugins_url('images/vertical.png',__FILE__); ?>" />
                </p>
            </td>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input id="clickitfbf_feed_style_blog" type="radio" name="clickitfbf_feed_style" value="blog"
                        <?php echo($clickitfbf_feed_style=='blog')? 'checked="checked"':'';?>>
                <label><strong>Blog Style</strong></label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img src="<?php echo plugins_url('images/blog_style.png',__FILE__); ?>" />
                </p>
            </td>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input disabled id="clickitfbf_feed_style_grid" type="radio" name="clickitfbf_feed_style" value="">
                <label>
                    <strong>Thumbnails</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img src="<?php echo plugins_url('images/thumbnails.png',__FILE__); ?>" />
                </p>
            </td>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input disabled id="clickitfbf_feed_style_masonry" type="radio" name="clickitfbf_feed_style" value="masonry"
                        <?php echo($clickitfbf_feed_style=='masonry')? 'checked="checked"':'';?>>
                <label>
                    <strong>Masonry</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img src="<?php echo plugins_url('images/masonry.png',__FILE__); ?>" />
                </p>
            </td>

    </table>
    <!--
    <table id="color_scheme_option">
        <h3>Color Scheme:</h3>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input id="clickitfbf_color_sceheme_light" type="radio" name="clickitfbf_color_sceheme" value="light"
                        <?php// echo($clickitfbf_color_sceheme=='light')? 'checked="checked"':'';?>>
                <label><strong>Light</strong></label>
            </td>
            <td>
                <p style="text-align: center; margin-left: 30px;">
                <input id="clickitfbf_color_sceheme_dark" type="radio" name="clickitfbf_color_sceheme" value="dark"
                        <?php //echo($clickitfbf_color_sceheme=='dark')? 'checked="checked"':'';?>>
                <label><strong>Dark</strong></label>
            </td>

    </table>
    -->
    <table id="layout_option">
        <h3>Select Layout:</h3>
            <tr>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input id="clickitfbf_layout_classic" type="radio" name="clickitfbf_layout" value="classic"
                        <?php echo($clickitfbf_layout=='classic')? 'checked="checked"':'';?>>
                <label><strong>Classic</strong></label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 275px;" src="<?php echo plugins_url('images/default-template.png',__FILE__); ?>" />
                </p>
            </td>
            <td>
                <p style="text-align: center; margin: 0px;">
                <input disabled id="clickitfbf_layout_dark" type="radio" name="clickitfbf_layout" value="dark"
                        <?php echo($clickitfbf_layout=='dark')? 'checked="checked"':'';?>>
                <label>
                    <strong>Dark</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 275px;" src="<?php echo plugins_url('images/template-0.png',__FILE__); ?>" />
                </p>
            </td>

            </tr>
            <tr style="vertical-align:top;">
            <td style="padding: 20px; vertical-align: top;">
                <p style="text-align: center; margin: 0px;">
                <input disabled id="clickitfbf_layout_scroll" type="radio" name="clickitfbf_layout" value="layout-1"
                        <?php echo($clickitfbf_layout=='layout-1')? 'checked="checked"':'';?>>
                <label>
                    <strong>layout-1</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 275px;" src="<?php echo plugins_url('images/template-4.png',__FILE__); ?>" />
                </p>
            </td>
            <td style="vertical-align:top">
                <p style="text-align: center; margin: 0px;">
                <input disabled id="clickitfbf_layout_scroll" type="radio" name="clickitfbf_layout" value="scroll"
                        <?php echo($clickitfbf_layout=='scroll')? 'checked="checked"':'';?>>
                <label>
                    <strong>layout-2</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 275px;" src="<?php echo plugins_url('images/template-3.png',__FILE__); ?>" />
                </p>
            </td>

            </tr>
            <tr style="vertical-align:top;">
            <td>
                <p style="vertical-align: top;text-align: center; margin: 0px;">
                <input  disabled type="radio" name="clickitfbf_layout" value="layout-2"
                        <?php echo($clickitfbf_layout=='layout-2')? 'checked="checked"':'';?>>
                <label>
                    <strong>layout-3</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 250px; " src="<?php echo plugins_url('images/template-5.png',__FILE__); ?>" />
                </p>
            </td>
            <td style="vertical-align:top;">
                <p style="text-align: center; margin: 0px;">
                <input  disabled type="radio" name="clickitfbf_layout" value="layout-3"
                        <?php echo($clickitfbf_layout=='layout-3')? 'checked="checked"':'';?>>
                <label>
                    <strong>layout-4</strong>
                    <a href="https://clickitplugins.com/facebook-feed/" target="_blank">Locked</a>
                </label>
                </p>
                <p style="text-align: center;margin: 5px;">
                <img style="width: 290px; " src="<?php echo plugins_url('images/template-6.png',__FILE__); ?>" />
                </p>
            </td>

            </tr>
    </table>
    </div>
    <div id="shortcode_tab" style="min-height: 20em;">
        <span>Use this shortcode to add facebook feeds to your post,pages & widgets.</span>
        <br/>
        <br/>
        <br/>
        <input style="width: 300px; text-align: center; font-weight: bold; font-size: 20px;" type="text" readonly="" value="[clickitfbf id='<?php echo $post_id;?>']">
   
    </div>
</div>

    
</main>