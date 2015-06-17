<?php
/*
Plugin Name: Bootstrap TinyMCE Styles
Plugin URI: https://github.com/bostondv/bootstrap-tinymce-styles
Description: Adds Bootstrap styles to the WordPress TinyMCE editor for easy access to style your content using Bootstrap components.
Version: 1.0.2
Author: bostondv
Author URI: http://pomelodesign.com
Text Domain: bs-mce-styles
Domain Path: /languages/
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

/**
 * Add "Format" dropdown
 */ 
function bs_mcekit_editor_buttons( $buttons ) {
    unset( $buttons[0] );
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
add_filter( 'mce_buttons_2', 'bs_mcekit_editor_buttons' );

/**
 * Add Bootstrap styles to "Format" dropdown
 */
function bs_mcekit_editor_settings( $settings ) {
    $new_styles = array(
        array(
            'title' => __( 'Typography', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Lead Text', 'bs-mce-styles' ),
                    'block'  => 'p',
                    'classes'   => 'lead',
                ),
                array(
                    'title'     => __( 'Small', 'bs-mce-styles' ),
                    'inline'    => 'small',
                ),
                array(
                    'title'     => __( 'Highlight', 'bs-mce-styles' ),
                    'inline'    => 'mark',
                ),
                array(
                    'title'     => __( 'Insert', 'bs-mce-styles' ),
                    'inline'    => 'ins',
                ),
                array(
                    'title'     => __( 'Abbreviation', 'bs-mce-styles' ),
                    'inline'    => 'abbr',
                ),
                array(
                    'title'     => __( 'Initialism', 'bs-mce-styles' ),
                    'inline'    => 'abbr',
                    'classes'   => 'initialism',
                ),
                array(
                    'title'     => __( 'Cite', 'bs-mce-styles' ),
                    'inline'    => 'cite',
                ),
                array(
                    'title'     => __( 'User Input', 'bs-mce-styles' ),
                    'inline'    => 'kbd',
                ),
                array(
                    'title'     => __( 'Variable', 'bs-mce-styles' ),
                    'inline'    => 'var',
                ),
                array(
                    'title'     => __( 'Sample Output', 'bs-mce-styles' ),
                    'inline'    => 'samp',
                ),
                array(
                    'title'     => __( 'Address', 'bs-mce-styles' ),
                    'format'    => 'address',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Code Block', 'bs-mce-styles' ),
                    'format'    => 'pre',
                    'wrapper'   => true,
                ),
            ),
        ),
        array(
            'title' => __( 'Colors', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Muted', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-muted',
                ),
                array(
                    'title'     => __( 'Primary', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-primary',
                ),
                array(
                    'title'     => __( 'Success', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-success',
                ),
                array(
                    'title'     => __( 'Info', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-info',
                ),
                array(
                    'title'     => __( 'Warning', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-warning',
                ),
                array(
                    'title'     => __( 'Danger', 'bs-mce-styles' ),
                    'inline'    => 'span',
                    'classes'   => 'text-danger',
                ),
                array(
                    'title'     => __( 'Background Primary', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'bg-primary',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Background Success', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'bg-success',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Background Info', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'bg-info',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Background Warning', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'bg-warning',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Background Danger', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'bg-danger',
                    'wrapper'   => true,
                ),
            ),
        ),
        array(
            'title' => __( 'Utilities', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Caret', 'bs-mce-styles' ),
                    'block'  => 'div',
                    'classes'   => 'caret',
                ),
                array(
                    'title'     => __( 'Pull Left', 'bs-mce-styles' ),
                    'block'  => 'div',
                    'classes'   => 'pull-left',
                ),
                array(
                    'title'     => __( 'Pull Right', 'bs-mce-styles' ),
                    'block'  => 'div',
                    'classes'   => 'pull-right',
                ),
                array(
                    'title'     => __( 'Clearfix', 'bs-mce-styles' ),
                    'block'  => 'div',
                    'classes'   => 'clearfix',
                ),
                array(
                    'title'     => __( 'Center Block', 'bs-mce-styles' ),
                    'block'  => 'div',
                    'classes'   => 'center-block',
                ),
                array(
                    'title'     => __( 'Show', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'show',
                ),
                array(
                    'title'     => __( 'Hidden', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'hidden',
                ),
                array(
                    'title'     => __( 'Invisible', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'invisible',
                ),
                array(
                    'title'     => __( 'Hide Text', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'hide-text',
                ),
            ),
        ),
        array(
            'title' => __( 'Lists', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Unstyled List', 'bs-mce-styles' ),
                    'selector'  => 'ul,ol',
                    'classes'   => 'list-unstyled',
                ),
                array(
                    'title'     => __( 'Inline List', 'bs-mce-styles' ),
                    'selector'  => 'ul,ol',
                    'classes'   => 'list-inline',
                ),
            ),
        ),
        array(
            'title' => __( 'Buttons', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Default', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-default',
                ),
                array(
                    'title'     => __( 'Primary', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-primary',
                ),
                array(
                    'title'     => __( 'Success', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-success',
                ),
                array(
                    'title'     => __( 'Info', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-info',
                ),
                array(
                    'title'     => __( 'Warning', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-warning',
                ),
                array(
                    'title'     => __( 'Danger', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-danger',
                ),
                array(
                    'title'     => __( 'Link', 'bs-mce-styles' ),
                    'inline'    => 'a',
                    'classes'   => 'btn btn-link',
                ),
                array(
                    'title'     => __( 'Large', 'bs-mce-styles' ),
                    'selector'  => 'a,button,input',
                    'classes'   => 'btn-lg',
                ),
                array(
                    'title'     => __( 'Small', 'bs-mce-styles' ),
                    'selector'  => 'a,button,input',
                    'classes'   => 'btn-sm',
                ),
                array(
                    'title'     => __( 'Extra Small', 'bs-mce-styles' ),
                    'selector'  => 'a,button,input',
                    'classes'   => 'btn-xs',
                ),
                array(
                    'title'     => __( 'Block', 'bs-mce-styles' ),
                    'selector'  => 'a,button,input',
                    'classes'   => 'btn-block',
                ),
                array(
                    'title'        => __( 'Disabled', 'bs-mce-styles' ),
                    'selector'     => 'a,button,input',
                    'attributes'   => array(
                        'disabled' => 'disabled'
                    ),
                ),
            ),
        ),
        array(
            'title' => __( 'Labels', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Default', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-default',
                ),
                array(
                    'title'     => __( 'Primary', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-primary',
                ),
                array(
                    'title'     => __( 'Success', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-success',
                ),
                array(
                    'title'     => __( 'Info', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-info',
                ),
                array(
                    'title'     => __( 'Warning', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-warning',
                ),
                array(
                    'title'     => __( 'Danger', 'bs-mce-styles' ),
                    'inline'  => 'span',
                    'classes'   => 'label label-danger',
                ),
            ),
        ),
        array(
            'title' => __( 'Alerts', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Default', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-default',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Primary', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-primary',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Success', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-success',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Info', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-info',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Warning', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-warning',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Danger', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'alert alert-danger',
                    'wrapper'   => true,
                ),
            ),
        ),
        array(
            'title' => __( 'Other', 'bs-mce-styles' ),
            'items' => array(
                array(
                    'title'     => __( 'Reverse Blockquote', 'bs-mce-styles' ),
                    'selector'  => 'blockquote',
                    'classes'   => 'blockquote-reverse',
                ),
                array(
                    'title'     => __( 'Centered Blockquote', 'bs-mce-styles' ),
                    'selector'  => 'blockquote',
                    'classes'   => 'text-center',
                ),
                array(
                    'title'     => __( 'Blockquote Footer', 'bs-mce-styles' ),
                    'block'     => 'footer',
                ),
                array(
                    'title'     => __( 'Well', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'well',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Large Well', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'well well-lg',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Small Well', 'bs-mce-styles' ),
                    'block'     => 'div',
                    'classes'   => 'well well-sm',
                    'wrapper'   => true,
                ),
                array(
                    'title'     => __( 'Badge', 'bs-mce-styles' ),
                    'inline'     => 'span',
                    'classes'   => 'badge',
                ),
                array(
                    'title'     => __( 'Rounded Image', 'bs-mce-styles' ),
                    'selector'  => 'img',
                    'classes'   => 'img-rounded',
                ),
                array(
                    'title'     => __( 'Circle Image', 'bs-mce-styles' ),
                    'selector'  => 'img',
                    'classes'   => 'img-circle',
                ),
                array(
                    'title'     => __( 'Thumbnail Image', 'bs-mce-styles' ),
                    'selector'  => 'img',
                    'classes'   => 'img-thumbnail',
                ),
            ),
        ),
    );

    $settings['style_formats_merge'] = true;
    $settings['style_formats'] = json_encode( $new_styles );

    return $settings;
}
add_filter( 'tiny_mce_before_init', 'bs_mcekit_editor_settings' );
