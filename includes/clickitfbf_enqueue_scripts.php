<?php
add_action( 'admin_enqueue_scripts', function(){
		wp_enqueue_script('jquery');
		wp_register_script( 'clickitfbf_custom_jq', plugin_dir_url( __FILE__ ) . '../js/my-custom.js', array('jquery','jquery-ui-core','jquery-ui-tabs') );
		wp_enqueue_script( 'clickitfbf_custom_jq');
		wp_enqueue_style( 'clickitfbf_jquery_style', plugin_dir_url( __FILE__ )  . '../css/jquery-ui.css', false, '1.0.0' );
	
		
	}, 10);

add_action( 'wp_enqueue_scripts', function(){
	
		wp_enqueue_script('jquery-ui-tabs');     
		
		wp_register_script( 'clickitfbf_jquery', plugin_dir_url( __FILE__ ) . '../bower_components/jquery/dist/jquery.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitfbf_codebird', plugin_dir_url( __FILE__ ) . '../bower_components/codebird-js/codebird.js', array( 'jquery' ) );
		wp_register_script( 'clickitfbf_doT', plugin_dir_url( __FILE__ ) . '../bower_components/doT/doT.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitfbf_moment', plugin_dir_url( __FILE__ ) . '../bower_components/moment/min/moment.min.js', array( 'jquery' ) );
		wp_register_script( 'clickitfbf_fr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/fr.js', array( 'jquery' ) );
		wp_register_script( 'clickitfbf_socialfeed', plugin_dir_url( __FILE__ ) . '../js/jquery.socialfeed.js', array( 'jquery' ) );
		wp_enqueue_style( 'clickitfbf_socialfeed_style', plugin_dir_url( __FILE__ )  . '../css/jquery.socialfeed.css', false, '1.0.0' );
		
		wp_enqueue_style( 'clickitfbf_jquery');
		wp_enqueue_style( 'clickitfbf_fontawesome_style');
   		wp_enqueue_script( 'clickitfbf_codebird');
   		wp_enqueue_script( 'clickitfbf_doT');
   		wp_enqueue_script( 'clickitfbf_moment');
   		wp_enqueue_script( 'clickitfbf_socialfeed');


		wp_enqueue_script('jquery-ui-tabs');
		//Enqueue the jQuery UI theme css file from google:
		wp_enqueue_style('e2b-admin-ui-css','http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css',false,"1.9.0",false);

	wp_register_script( 'clickitfbf_en', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/en-ca.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf_en');
		
			wp_register_script( 'clickitfbf_ar', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ar.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf_ar');
			wp_register_script( 'clickitfbf_bn', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/bn.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf_bn');
				
			wp_register_script( 'clickitfbf-cs', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/cs.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-cs');
			wp_register_script( 'clickitfbf-da', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/da.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-da');
			wp_register_script( 'clickitfbf-nl', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/nl.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-nl');
			wp_register_script( 'clickitfbf-fr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/fr.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-fr');
			wp_register_script( 'clickitfbf-de', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/de.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-de');
			wp_register_script( 'clickitfbf-it', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/it.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-it');
			wp_register_script( 'clickitfbf-ja', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ja.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-ja');
			wp_register_script( 'clickitfbf-ko', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ko.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-ko');
			wp_register_script( 'clickitfbf-pt', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/pt.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-pt');
			wp_register_script( 'clickitfbf-ru', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/ru.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-ru');
			wp_register_script( 'clickitfbf-es', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/es.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-es');
			wp_register_script( 'clickitfbf-tr', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/tr.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-tr');
			wp_register_script( 'clickitfbf-uk', plugin_dir_url( __FILE__ ) . '../bower_components/moment/locale/uk.js', array( 'jquery' ) );
	   		wp_enqueue_script( 'clickitfbf-uk');
}, 10);

