<?php
// read the mobile logo + retina logo
$td_mobile_customLogo = td_util::get_option('tds_logo_menu_upload');
$td_logo_width = td_util::get_option('tds_logo_menu_upload_width') ? td_util::get_option('tds_logo_menu_upload_width') : '';
$td_logo_height = td_util::get_option('tds_logo_menu_upload_height') ? td_util::get_option('tds_logo_menu_upload_height') : '';
$td_mobile_customLogoR = td_util::get_option('tds_logo_menu_upload_r');

$logo_image_size = ' width="' . $td_logo_width. '"' . ' height="' . $td_logo_height . '"';

// read the header logo + retina logo
$td_header_logo = td_util::get_option('tds_logo_upload');
$td_header_logo_width = td_util::get_option('tds_logo_upload_width') ? td_util::get_option('tds_logo_upload_width') : '';
$td_header_logo_height = td_util::get_option('tds_logo_upload_height') ? td_util::get_option('tds_logo_upload_height') : '';
$td_header_logoR = td_util::get_option('tds_logo_upload_r');
$header_logo_image_size = '';

if ($td_mobile_customLogo === '' && $td_header_logo !== '') {
    $logo_image_size = ' width="' . $td_header_logo_width. '"' . ' height="' . $td_header_logo_height . '"';
}

$td_logo_alt = td_util::get_option('tds_logo_alt');
$td_logo_title = td_util::get_option('tds_logo_title');

if (!empty($td_logo_title)) {
	$td_logo_title = ' title="' . $td_logo_title . '"';
}

// read logo on sticky menu - disabled / header logo / mobile logo - used for css
$td_sticky_option = '';
if (td_util::get_option('tds_logo_on_sticky') == 'show') {
	$td_sticky_option = 'td-sticky-mobile';
} elseif (td_util::get_option('tds_logo_on_sticky') == 'show_header_logo') {
	$td_sticky_option = 'td-sticky-header';
} else {
	$td_sticky_option = 'td-sticky-disable';
}


// mobile logo here
if (!empty($td_mobile_customLogoR)) { // if retina
	?>
		<a class="td-mobile-logo <?php echo $td_sticky_option?>" aria-label="Logo" href="<?php echo esc_url(home_url( '/' )); ?>">
			<img class="td-retina-data" data-retina="<?php echo esc_attr($td_mobile_customLogoR) ?>" src="<?php echo $td_mobile_customLogo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title . ' ' . $logo_image_size ?>/>
		</a>
	<?php
} else { // not retina
	if (!empty($td_mobile_customLogo)) {
	?>
		<a class="td-mobile-logo <?php echo $td_sticky_option?>" aria-label="Logo" href="<?php echo esc_url(home_url( '/' )); ?>">
			<img src="<?php echo $td_mobile_customLogo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title . ' ' . $logo_image_size ?>/>
		</a>
	<?php
	}
}

// header logo here
if (!empty($td_header_logoR)) { // if retina
	?>
		<a class="td-header-logo <?php echo $td_sticky_option?>" aria-label="Logo" href="<?php echo esc_url(home_url( '/' )); ?>">
			<img class="td-retina-data" data-retina="<?php echo esc_attr($td_header_logoR) ?>" src="<?php echo $td_header_logo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title . ' ' . $logo_image_size ?>/>
		</a>
	<?php
} else { // not retina
	if (!empty($td_header_logo)) {
	?>
		<a class="td-header-logo <?php echo $td_sticky_option?>" aria-label="Logo" href="<?php echo esc_url(home_url( '/' )); ?>">
			<img src="<?php echo $td_header_logo?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title . ' ' . $logo_image_size ?>/>
		</a>
	<?php
	}
}