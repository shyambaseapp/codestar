<?php

if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
		'framework_title'=> 'Find and Replace <small>by Baseapp</small>',
        'framework_class'=> '',
        'menu_title' => 'Find&Replace',
        'menu_slug'  => 'my-framework',
    ));

    //
    // Create a section
    CSF::createSection($prefix, array(
        'title'  => 'Find & Replace',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'opt-switcher-1',
                'type'  => 'switcher',
                'title' => 'Switcher',
            ),
            array(
                'id'    => 'text1',
                'type'  => 'text',
                'title' => 'Replace Text ',
              
            ),
            array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Replace by Text',
            ),


        )
    ));

    CSF::createSection($prefix, array(
        'title'  => 'Tab Title 1',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'opt-text1',
                'type'  => 'text',
                'title' => 'Simple Text',
            ),

        )
    ));
}


$posts = $wpdb->get_results("SELECT post_content FROM $wpdb->posts WHERE post_status = 'publish'");


    function link_words($posts)
    {    
		$options = get_option('my_framework');
        $a = $options['text1'];
        $b = $options['opt-text'];
        $result = str_replace($a,$b,$posts);

        return $result;
    }
    add_action('the_content', 'link_words');

   

    