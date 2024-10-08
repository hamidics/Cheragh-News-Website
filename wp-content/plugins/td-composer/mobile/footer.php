    <!-- footer AD -->
    <?php
        // ad spot
        echo td_global_blocks::get_instance('td_block_ad_box_mob')->render(array('spot_id' => 'footer_mob'));
    ?>

    <!-- footer -->
    <?php if ( td_util::get_option( 'tds_footer_mob' ) != 'no' ) { ?>
    <div class="td-mobile-footer-wrap">
        <div class="td-container">
            <?php
            $td_footer_logo = td_util::get_option('tds_footer_logo_upload');
            $td_footer_logo_width = td_util::get_option('tds_footer_logo_upload_width') ? td_util::get_option('tds_footer_logo_upload_width') : '';
            $td_footer_logo_height = td_util::get_option('tds_footer_logo_upload_height') ? td_util::get_option('tds_footer_logo_upload_height') : '';
            $td_footer_retina_logo = td_util::get_option('tds_footer_retina_logo_upload');
            $td_top_logo = td_util::get_option('tds_logo_upload');
            $td_top_logo_width = td_util::get_option('tds_logo_upload_width') ? td_util::get_option('tds_logo_upload_width') : '';
            $td_top_logo_height = td_util::get_option('tds_logo_upload_height') ? td_util::get_option('tds_logo_upload_height') : '';
            $td_top_retina_logo = td_util::get_option('tds_logo_upload_r');
            $td_footer_text = td_util::parse_footer_texts(td_util::get_option('tds_footer_text'));
            $td_footer_email = td_util::get_option('tds_footer_email');

            // read alt and title for the logo
            $td_logo_alt = td_util::get_option('tds_logo_alt');
            $td_footer_logo_alt = td_util::get_option('tds_footer_logo_alt');
            $td_logo_title = td_util::get_option('tds_logo_title');
            $td_footer_logo_title = td_util::get_option('tds_footer_logo_title');

            // specific Mobile Theme logo and other options
            $td_footer_logo_mob = td_util::get_option('tds_footer_logo_upload_mob');
            $td_footer_logo_mob_width = td_util::get_option('tds_footer_logo_upload_mob_width') ? td_util::get_option('tds_footer_logo_upload_mob_width') : '';
            $td_footer_logo_mob_height = td_util::get_option('tds_footer_logo_upload_mob_height') ? td_util::get_option('tds_footer_logo_upload_mob_height') : '';
            $td_footer_retina_logo_mob = td_util::get_option('tds_footer_retina_logo_upload_mob');
            $td_footer_text_mob = td_util::parse_footer_texts(td_util::get_option('tds_footer_text_mob'));
            $td_footer_email_mob = td_util::get_option('tds_footer_email_mob');
            $td_footer_logo_alt_mob = td_util::get_option('tds_footer_logo_alt_mob');
            $td_footer_logo_title_mob = td_util::get_option('tds_footer_logo_title_mob');

            $logo_image_size = ' width="' . $td_footer_logo_width . '"' . ' height="' . $td_footer_logo_height . '"';

            // use Mobile Theme settings if are set
            if (!empty($td_footer_logo_mob)) {
                $td_footer_logo = $td_footer_logo_mob;
                $logo_image_size = ' width="' . $td_footer_logo_mob_width . '"' . ' height="' . $td_footer_logo_mob_height . '"';
            }
            if (!empty($td_footer_retina_logo_mob)) {
                $td_footer_retina_logo = $td_footer_retina_logo_mob;
                $logo_image_size = ' width="' . $td_footer_logo_mob_width . '"' . ' height="' . $td_footer_logo_mob_height . '"';
            }
            if (!empty($td_footer_text_mob)) {
                $td_footer_text = $td_footer_text_mob;
            }
            if (!empty($td_footer_email_mob)) {
                $td_footer_email = $td_footer_email_mob;
            }

            // use Mobile Theme footer logo alt
            // elseif there's no footer logo alt set use the alt from the header logo
            if ($td_footer_logo_alt_mob != '') {
                $td_footer_logo_alt = $td_footer_logo_alt_mob;
            }
            elseif ($td_footer_logo_alt == '') {
                $td_footer_logo_alt = $td_logo_alt;
            }
            // use Mobile Theme footer logo title
            // elseif there's no footer logo title set use the title from the header logo
            if ($td_footer_logo_title_mob != '') {
                $td_footer_logo_title = $td_footer_logo_title_mob;
            }
            elseif ($td_footer_logo_title == '') {
                $td_footer_logo_title = $td_logo_title;
            }



            $buffy = '';

            // logo
            $buffy .= '<div class="td-footer-wrap"><aside class="td-footer-logo">';
            if (!empty($td_footer_logo)) { // if have footer logo
                if (empty($td_footer_retina_logo)) { // if don't have a retina footer logo load the normal logo
                    $buffy .= '<a href="' . esc_url(home_url( '/' )) . '" aria-label="Logo"><img src="' . $td_footer_logo . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '" ' . $logo_image_size . '/></a>';
                } else {
                    $buffy .= '<a href="' . esc_url(home_url( '/' )) . '" aria-label="Logo"><img class="td-retina-data" src="' . $td_footer_logo . '" data-retina="' . esc_attr($td_footer_retina_logo) . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '" ' . $logo_image_size . '/></a>';
                }
            } else { // if you don't have a footer logo load the top logo
                $logo_image_size = ' width="' . $td_top_logo_width . '"' . ' height="' . $td_top_logo_height . '"';

                if (empty($td_top_retina_logo)) {
                    $buffy .= '<a href="' . esc_url(home_url( '/' )) . '" aria-label="Logo"><img src="' . $td_top_logo . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '"' . $logo_image_size . '/></a>';
                } else {
                    $buffy .= '<a href="' . esc_url(home_url( '/' )) . '" aria-label="Logo"><img class="td-retina-data" src="' . $td_top_logo . '" data-retina="' . esc_attr($td_top_retina_logo) . '" alt="' . $td_footer_logo_alt . '" title="' . $td_footer_logo_title . '"' . $logo_image_size . ' /></a>';
                }
            }
            $buffy .= '</aside></div>';

            // description
            $buffy .= '<div class="td-footer-wrap"><aside class="td-footer-description">';
            $buffy .= '<div class="block-title"><span>' . __td('ABOUT US', TD_THEME_NAME) . '</span></div>';
            $buffy .= stripcslashes($td_footer_text);

            if (!empty($td_footer_email)) {
                $buffy .= '<div class="footer-email-wrap">';
                $buffy .= __td('Contact us', TD_THEME_NAME) . ': <a href="mailto:' . $td_footer_email  . '">' . $td_footer_email . '</a>';
                $buffy .= '</div>';
            }
            $buffy .= '</aside></div>';

            // social icons
            if(td_util::get_option('tds_footer_social_mob') != 'no') {
                $buffy .= '<div class="td-footer-wrap"><aside class="td-footer-social">';
                $buffy .= '<div class="block-title"><span>' . __td('FOLLOW US', TD_THEME_NAME) . '</span></div>';
                //get the socials that are set by user
                $td_get_social_network = td_options::get_array('td_social_networks');

                if(!empty($td_get_social_network)) {
                    foreach($td_get_social_network as $social_id => $social_link) {
                        if(!empty($social_link)) {
                            $buffy .= td_social_icons::get_icon($social_link, $social_id, true);
                        }
                    }
                }
                $buffy .= '</aside></div>';
            }


            echo $buffy;
            ?>
        </div><!-- close td-container -->
    </div><!-- close footer -->
<?php } ?>
    <!-- sub footer -->
    <?php if (td_util::get_option('tds_sub_footer_mob') != 'no') { ?>
        <div class="td-mobile-sub-footer-wrap">
            <div class="td-container">

                    <div class="td-sub-footer-menu">
                        <?php
                        td_wp_nav_menu(array(
                            'theme_location' => 'footer-menu-mobile',
                            'menu_class'=> 'td-subfooter-menu',
                            'fallback_cb' => 'td_wp_footer_menu'
                        ));

                        //if no menu
                        function td_wp_footer_menu() {
                            //do nothing?
                        }
                        ?>
                    </div>

                    <div class="td-sub-footer-copy">
                        <?php
                        // Global options from Standard Pack
                        $tds_footer_copyright = stripslashes(td_util::parse_footer_texts(td_util::get_option('tds_footer_copyright')));
                        $tds_footer_copy_symbol = td_util::get_option('tds_footer_copy_symbol');
                        // Mobile Theme specific options
                        $tds_footer_copyright_mob = stripslashes(td_util::parse_footer_texts(td_util::get_option('tds_footer_copyright_mob')));
                        $tds_footer_copy_symbol_mob = td_util::get_option('tds_footer_copy_symbol_mob');
                        
                        if ($tds_footer_copyright_mob !== '') {
                            $tds_footer_copyright = $tds_footer_copyright_mob;
                        }
                        if ($tds_footer_copy_symbol_mob !== '') {
                            $tds_footer_copy_symbol = $tds_footer_copy_symbol_mob;
                        }

                        //show copyright symbol
                        if ($tds_footer_copy_symbol == '') {
                            echo '&copy; ';
                        }

                        echo $tds_footer_copyright;
                        ?>
                    </div>

            </div>
        </div>
    <?php }

    // The custom HTML and JS need to be here in "td-outer-wrap" to be at the end of the content. We moved this code from wp_footer();

    //get and paste user custom html
    $td_custom_html_mob = stripslashes(td_util::get_option('tds_custom_html_mob'));
    if(!empty($td_custom_html_mob)) {
        echo '<div class="td-container td-custom-html-mob">' . $td_custom_html_mob . '</div>';
    }

    //get and paste user custom javascript
    $td_custom_javascript_mob = stripslashes(td_util::get_option('tds_custom_javascript_mob'));
    if(!empty($td_custom_javascript_mob)) {
        echo '<script type="text/javascript">'
             .$td_custom_javascript_mob.
             '</script>';
    }
?>

</div><!-- close td-outer-wrap -->

<?php wp_footer(); ?>

</body>
</html>
