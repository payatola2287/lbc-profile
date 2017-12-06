<?php
class LBCPReadModuleClass extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Member Profile Module', 'fl-builder' ),
            'description'     => __( '', 'fl-builder' ),
            'category'        => __( 'Advanced Modules', 'fl-builder' ),
            'dir'             => LBCP_MODULES_DIR . 'modules/read',
            'url'             => LBCP_MODULES_URL . 'modules/read',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
        $this->add_css( 'font-awesome' );
    }

}
FLBuilder::register_module( 'LBCPReadModuleClass',apply_filters( 'lbc-profile-read-settings',array(
  'styling-tab' => array(
    'title' => __( 'Style' ,'fl-builder' ),
    'sections' => array(
      'text-style-section' => array(
        'title' => __( 'Text','fl-builder' ),
        'fields' => array(
          'name_text_color' => array(
            'type' => 'color',
            'default' => '000',
            'label' => __( 'Name Color','fl-builder' ),
            'show_reset' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-name',
              'property' => 'color'
            )
          ),
          'name_text_alignment' => array(
            'type' => 'select',
            'options' => array(
              'left' => __( 'Left','fl-builder' ),
              'center' => __( 'Center','fl-builder' ),
              'right' => __( 'Right','fl-builder' )
            ),
            'default' => 'left',
            'label' => __( 'Name Alignment','fl-builder' )
          ),
          'name_margin' => array(
            'type' => 'text',
            'label' => __( 'Name Margin','fl-builder' ),
            'description' => __( 'Include unit.','fl-builder' )
          ),
          'designation_text_color' => array(
            'type' => 'color',
            'default' => '000',
            'label' => __( 'Designation Color','fl-builder' ),
            'show_reset' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-name',
              'property' => 'color'
            )
          ),
          'designation_text_alignment' => array(
            'type' => 'select',
            'options' => array(
              'left' => __( 'Left','fl-builder' ),
              'center' => __( 'Center','fl-builder' ),
              'right' => __( 'Right','fl-builder' )
            ),
            'default' => 'left',
            'label' => __( 'Designation Alignment','fl-builder' )
          ),
          'bio_text_color' => array(
            'type' => 'color',
            'default' => '000',
            'label' => __( 'Description Name','fl-builder' ),
            'show_reset' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-description',
              'property' => 'color'
            ),
          ),
          'bio_text_alignment' => array(
            'type' => 'select',
            'options' => array(
              'left' => __( 'Left','fl-builder' ),
              'center' => __( 'Center','fl-builder' ),
              'right' => __( 'Right','fl-builder' )
            ),
            'default' => 'left',
            'label' => __( 'Name Alignment','fl-builder' )
          ),
        )
      ),
      'connect-styling-section' => array(
        'title' => __( 'Icons','fl-builder' ),
        'fields' => array(
          'icon_color' => array(
            'label' => __( 'Icon Color','fl-builder' ),
            'type' => 'color',
            'default' => '000',
            'show_reset' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.icon-link',
              'property' => 'color'
            )
          ),
          'icon_size' => array(
            'label' => __( 'Icon Size','fl-builder' ),
            'type' => 'select',
            'options' => array(
              'small' => __( 'Small','fl-builder' ),
              'fa-lg' => __( 'Large','fl-builder' ),
              'fa-2x' => __( '2x','fl-builder' ),
              'fa-3x' => __( '3x','fl-builder' ),
              'fa-4x' => __( '4x','fl-builder' ),
              'fa-5x' => __( '5x','fl-builder' )
            ),
            'default' => 'small'
          )
        )
      ),
      'background-styling-section' => array(
        'title' => __( 'Box','fl-builder' ),
        'fields' => array(
          'box_background' => array(
            'label' => __( 'Box Color','fl-builder' ),
            'type' => 'color',
            'default' => 'fff',
            'show_reset' => true,
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-data-container',
              'property' => 'background-color'
            )
          ),
          'box_padding' => array(
            'label' => __( 'Padding','fl-builder' ),
            'type' => 'text',
            'default' => '15px',
            'description' => __( 'Include unit.','fl-builder' ),
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-data-container',
              'property' => 'padding'
            )
          )
        )
      ),
      'border-style-section' => array(
        'title' => __( 'Border','fl-builder' ),
        'fields' => array(
          'border_type' => array(
            'type' => 'select',
            'label' => __( 'Border Type' ,'fl-builder' ),
            'options' => array(
              'none' => __( 'None','fl-builder' ),
              'solid' => __( 'Solid','fl-builder' ),
              'dotted' => __( 'Dotted','fl-builder' ),
              'dashed' => __( 'Dashed','fl-builder' )
            ),
            'default' => 'none'
          ),
          'border_width' => array(
            'type' => 'text',
            'default' => '1px',
            'label' => __( 'Border Width','fl-builder' ),
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-data-container',
              'property' => 'border-width'
            )
          ),
          'border_color' => array(
            'type' => 'color',
            'default' => 'eee',
            'label' => __( 'Border Color','fl-builder' ),
            'preview' => array(
              'type' => 'css',
              'selector' => '.user-data-container',
              'property' => 'border-color'
            ),
            'show_reset' => true
          )
        )
      ),
    )
  ),
  'typography-tab' => array(
    'title' => __( 'Typography','fl-builder' ),
    'sections' => array(
      'name-typo-section' => array(
        'title' => __( 'Name','fl-builder' ),
        'fields' => array(
          'name_font' => array(
            'type' => 'font',
            'default' => array(
              'family' => 'Default',
              'weight' => 'Default'
            ),
            'label' => __( 'Font Family','fl-builder' )
          ),
          'name_font_size' => array(
            'type' => 'text',
            'default' => '36px',
            'label' => __( 'Font Size','fl-builder' ),
            'description' => __( 'Include units.','fl-builder' )
          ),
          'name_line_height' => array(
            'type' => 'text',
            'default' => '1',
            'label' => __( 'Line Height','fl-builder' ),
            'description' => __( 'You can leave the units.','fl-builder' )
          ),
          'name_transform' => array(
            'type' => 'select',
            'options' => array(
              'none' => __( 'Default','fl-builder' ),
              'uppercase' => __( 'UPPERCASE','fl-builder' ),
              'lowercase' => __( 'lowercase','fl-builder' ),
              'capitalize' => __( 'Capitalize','fl-builder' )
            ),
            'label' => __( 'Text Transform','fl-builder' ),
            'default' => 'none'
          ),
        )
      ),
      'designation-typo-section' => array(
        'title' => __( 'Designation', 'fl-builder' ),
        'fields' => array(
          'designation_font' => array(
            'type' => 'font',
            'default' => array(
              'family' => 'Default',
              'weight' => 'Default'
            ),
            'label' => __( 'Font Family','fl-builder' )
          ),
          'designation_font_size' => array(
            'type' => 'text',
            'default' => '16px',
            'label' => __( 'Font Size','fl-builder' ),
            'description' => __( 'Include units.','fl-builder' )
          ),
          'designation_line_height' => array(
            'type' => 'text',
            'default' => '1',
            'label' => __( 'Line Height','fl-builder' ),
            'description' => __( 'You can leave the units.','fl-builder' )
          ),
          'designation_transform' => array(
            'type' => 'select',
            'options' => array(
              'none' => __( 'Default','fl-builder' ),
              'uppercase' => __( 'UPPERCASE','fl-builder' ),
              'lowercase' => __( 'lowercase','fl-builder' ),
              'capitalize' => __( 'Capitalize','fl-builder' )
            ),
            'label' => __( 'Text Transform','fl-builder' ),
            'default' => 'none'
          ),
        )
      ),
      'bio-typo-section' => array(
        'title' => __( 'Description','fl-builder' ),
        'fields' => array(
          'bio_font' => array(
            'type' => 'font',
            'default' => array(
              'family' => 'Default',
              'weight' => 'Default'
            ),
            'label' => __( 'Font Family','fl-builder' )
          ),
          'bio_font_size' => array(
            'type' => 'text',
            'default' => '16px',
            'label' => __( 'Font Size','fl-builder' ),
            'description' => __( 'Include units.','fl-builder' )
          ),
          'bio_line_height' => array(
            'type' => 'text',
            'default' => '1',
            'label' => __( 'Line Height','fl-builder' ),
            'description' => __( 'You can leave the units.','fl-builder' )
          ),
          'bio_transform' => array(
            'type' => 'select',
            'options' => array(
              'none' => __( 'Default','fl-builder' ),
              'uppercase' => __( 'UPPERCASE','fl-builder' ),
              'lowercase' => __( 'lowercase','fl-builder' ),
              'capitalize' => __( 'Capitalize','fl-builder' )
            ),
            'label' => __( 'Text Transform','fl-builder' ),
            'default' => 'none'
          ),
        )
      ),
    )
  ),
) ) );
