<?php

/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO 404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Author Template',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Search Template',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Mintyside PRO Header Template',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);



/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_homepage_id = td_demo_content::add_page(array(
    'title' => 'Homepage',
    'file' => 'homepage.txt',
    'homepage' => true,
));


/*  ----------------------------------------------------------------------------
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_9');

td_demo_misc::update_background_login('tdx_pic_10');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
