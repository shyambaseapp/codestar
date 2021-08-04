<?php // Silence is golden
//require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
include dirname(__FILE__) . '/inc/codestar-framework/codestar-framework.php';
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
    
    //
    // Create options
    CSF::createOptions( $prefix, array(
    
      // framework title
      'framework_title'         => 'Codestar Framework <small>by Codestar</small>',
      'framework_class'         => '',
    
      // menu settings
      'menu_title'              => '',
      'menu_slug'               => '',
      'menu_type'               => 'menu',
      'menu_capability'         => 'manage_options',
      'menu_icon'               => null,
      'menu_position'           => null,
      'menu_hidden'             => false,
      'menu_parent'             => '',
    
      // menu extras
      'show_bar_menu'           => true,
      'show_sub_menu'           => true,
      'show_in_network'         => true,
      'show_in_customizer'      => false,
    
      'show_search'             => true,
      'show_reset_all'          => true,
      'show_reset_section'      => true,
      'show_footer'             => true,
      'show_all_options'        => true,
      'show_form_warning'       => true,
      'sticky_header'           => true,
      'save_defaults'           => true,
      'ajax_save'               => true,
    
      // admin bar menu settings
      'admin_bar_menu_icon'     => '',
      'admin_bar_menu_priority' => 80,
    
      // footer
      'footer_text'             => '',
      'footer_after'            => '',
      'footer_credit'           => '',
    
      // database model
      'database'                => '', // options, transient, theme_mod, network
      'transient_time'          => 0,
    
      // contextual help
      'contextual_help'         => array(),
      'contextual_help_sidebar' => '',
    
      // typography options
      'enqueue_webfont'         => true,
      'async_webfont'           => false,
    
      // others
      'output_css'              => true,
    
      // theme and wrapper classname
      'nav'                     => 'normal',
      'theme'                   => 'dark',
      'class'                   => '',
    
      // external default values
      'defaults'                => array(),
    
    ) );
    
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 1',
      'fields' => array(
    
        //
        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Simple Text',
        ),
    
      )
    ) );
    
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
    
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
    
      )
    ) );
    
    }