<?php

namespace FTNorth;

class ArtProjectsPostType  
{
  private $text_domain;

  public function __construct($options)
  {
    // set text domain  
    $this->text_domain=$options;
    // invoke the custom post type method
    add_action( 'init', 'render_field_settings' );  
  }

  // create a method to build the custom post type using text domain

  public function render_field_settings( $text_domain ) {
    
  
    if( function_exists('acf_add_local_field_group') ):

      acf_add_local_field_group(array(
        'key' => 'group_62282367cd419',
        'title' => 'Project Details',
        'fields' => array(
          array(
            'key' => 'field_622823d1c51e7',
            'label' => 'Price',
            'name' => 'price',
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
          ),
          array(
            'key' => 'field_62282406c51e8',
            'label' => 'Medium',
            'name' => 'medium',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'Digital' => 'Digital',
              'Analog' => 'Analog',
            ),
            'default_value' => false,
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
          ),
          array(
            'key' => 'field_62282462c51e9',
            'label' => 'Stylized True/False: For Sale?',
            'name' => 'stylized',
            'type' => 'radio',
            'instructions' => 'On',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'On' => 'On',
              'Off' => 'Off',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => '',
            'layout' => 'vertical',
            'return_format' => 'value',
            'save_other_choice' => 0,
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'page',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
          0 => 'the_content',
          1 => 'excerpt',
          2 => 'discussion',
          3 => 'comments',
          4 => 'format',
          5 => 'page_attributes',
          6 => 'featured_image',
          7 => 'categories',
          8 => 'tags',
          9 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 1,
      ));
      
      acf_add_local_field_group(array(
        'key' => 'group_6228253f1fb3d',
        'title' => 'Project Images',
        'fields' => array(
          array(
            'key' => 'field_6228255f46d04',
            'label' => 'Image 1',
            'name' => 'image_1',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6228256c46d05',
            'label' => 'Image 2',
            'name' => 'image_2',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6228257446d06',
            'label' => 'Image 3',
            'name' => 'image_3',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_6228258046d07',
            'label' => 'Image 4',
            'name' => 'image_4',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'page',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
          0 => 'the_content',
          1 => 'excerpt',
          2 => 'discussion',
          3 => 'comments',
          4 => 'format',
          5 => 'page_attributes',
          6 => 'featured_image',
          7 => 'categories',
          8 => 'tags',
          9 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => '',
        'show_in_rest' => 1,
      ));
      
      acf_add_local_field_group(array(
        'key' => 'group_6228259bbf5c5',
        'title' => 'Testimonial',
        'fields' => array(
          array(
            'key' => 'field_622825b92ead6',
            'label' => 'Quote',
            'name' => 'quote',
            'type' => 'textarea',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'new_lines' => '',
          ),
          array(
            'key' => 'field_622825cc2ead7',
            'label' => 'Name',
            'name' => 'name',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_622825d72ead8',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_622825e92ead9',
            'label' => 'Company',
            'name' => 'company',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'post_type',
              'operator' => '==',
              'value' => 'page',
            ),
          ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 1,
      ));
      
      endif;		
  }


  // create method to build ACF subpage
  public function acf_add_options_page($text_domain){

    if ( function_exists( 'acf_add_options_page' ) ) {

      // Add a top menu page
      acf_add_options_page(
          array(
              'page_title' => 'Footer Options Page',
              'menu_title' => 'Footer Options',
              'menu_slug'  => 'techie-options',
              'redirect'   => false,
              'capability' => 'administrator',
              'position'   => 5.4
          )
      );
      
      // Add a Sub Page
      acf_add_options_sub_page(
          array(
              'page_title' => 'Sub Footer Options Page',
              'menu_title' => 'Sub Footer Options',
              'parent_slug'  => 'Art Project',
          )
      );
    }



  }

}
