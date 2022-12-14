<?php
if( !defined('ABSPATH') ) exit;
if( !function_exists( 'videotube_core_home_v1_2cols_right_sidebar' ) ){
	function videotube_core_home_v1_2cols_right_sidebar($data) {
		$template               = array();
		$template['name']       = __( 'Homepage V1 - 2 Cols- Right Sidebar', 'videotube-core' );
		$template['image_path'] = get_template_directory_uri() .'/img/home_v1_2cols_right_sidebar.png'; // always use preg replace to be sure that "space" will not break logic
		$template['custom_class'] = 'videotube_core_home_v1_2cols_right_sidebar';
		$template['content']    = <<<CONTENT
		[vc_row][vc_column width="1/1"][vc_row_inner][vc_column_inner width="8/12"][videotube type="main" show="18" id="video-widget-3911" rows="1" columns="2" navigation="on" title="Recent Videos" orderby="ID" order="DESC"][/vc_column_inner][vc_column_inner width="4/12" el_class="sidebar"][videotube_core_vc_socialsbox title="Socials Box"][videotube type="widget" show="3" id="video-widget-3338" rows="1" columns="1" title="Latest Videos" orderby="ID" order="DESC"][vc_wp_text title="ABOUT VIDEOTUBE"]Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean which is great.
		
		A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences.[/vc_wp_text][videotube type="widget" show="4" id="video-widget-2003" rows="1" columns="2" title="Top Videos Comment" orderby="comment_count" order="DESC"][videotube type="widget" show="4" id="video-widget-3338" rows="1" columns="2" title="Random Videos" orderby="ID" order="DESC"][vc_wp_text title="LIKE US ON FACEBOOK"]<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=360&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false" width="360" height="260"></iframe>[/vc_wp_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
		array_unshift($data, $template);
		return $data;
	}
	add_filter( 'vc_load_default_templates', 'videotube_core_home_v1_2cols_right_sidebar', 30, 1 );
}

