<?php

/**
 * Avives functions and definitions
 * @package Avives
 */

require_once(get_template_directory() . "/inc/post-type-associados.php");
require_once(get_template_directory() . "/inc/post-type-parceiros.php");
require_once(get_template_directory() . "/inc/bts_navwalker.php");

/**
 * Registrando formatos de imagem personalizados
 */
// add_image_size('slider-full', 1200, 300, true);
// add_image_size('slider-small', 600, 300, true);
// add_image_size('blog-thumbs', 300, 200, true);
// add_image_size('blog-full', 600, 400, true);

/**
 * Adicionando suporte a thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Adiciona suporte aos formatos de imagem na
 * guia do Gutemberg
 */
// add_filter('image_size_names_choose', 'difusa_custom_image_sizes');

// function difusa_custom_image_sizes($sizes)
// {
//     return array_merge($sizes, array(
//         'slider-full' => __('Slider full'),
//         'slider-small' => __('Slider small'),
//         'blog-full' => __('Blog full'),
//     ));
// }


// CUSTOM USER PROFILE FIELDS
// function my_custom_userfields($contactmethods)
// {

//     // ADD CONTACT CUSTOM FIELDS
//     $contactmethods['contact_phone_office']     = 'Office Phone';
//     $contactmethods['contact_phone_mobile']     = 'Mobile Phone';
//     $contactmethods['contact_office_fax']       = 'Office Fax';

//     // ADD ADDRESS CUSTOM FIELDS
//     $contactmethods['address_line_1']       = 'Address Line 1';
//     $contactmethods['address_line_2']       = 'Address Line 2 (optional)';
//     $contactmethods['address_city']         = 'City';
//     $contactmethods['address_state']        = 'State';
//     $contactmethods['address_zipcode']      = 'Zipcode';
//     return $contactmethods;
// }
// add_filter('user_contactmethods', 'my_custom_userfields', 10, 1);
