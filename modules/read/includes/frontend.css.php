<?php
  $global_settings = FLBuilderModel::get_global_settings();
?>
.user-data-container{
  background: #<?php echo $settings->box_background; ?>;
  border-style: <?php echo $settings->border_type; ?>;
  border-width: <?php echo $settings->border_width; ?>;
  border-color: #<?php echo $settings->border_color; ?>;
  padding: <?php echo $settings->box_padding; ?>;
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
-webkit-box-pack: start;
    -ms-flex-pack: start;
        justify-content: flex-start;
  flex-direction: column;
}
.user-name{
  color: #<?php echo $settings->name_text_color; ?>;
  text-align: <?php echo $settings->name_text_alignment; ?>;
  margin: <?php echo $settings->name_margin; ?>;
  font-family: <?php echo ( 'Default' == $settings->name_font['family'] ) ? 'inherit' : $settings->name_font['family'] ; ?>;
  font-weight: <?php echo ( 'Default' == $settings->name_font['weight'] ? 'inherit' : $settings->name_font['weight'] ); ?>;
  font-size: <?php echo $settings->name_font_size; ?>;
  font-size: <?php echo $settings->name_line_height; ?>;
  text-transform: <?php echo $settings->name_transform; ?>;
}
.user-description{
  color: #<?php echo $settings->bio_text_color; ?>;
  text-align: <?php echo $settings->bio_text_alignment; ?>;
  font-family: <?php echo ( 'Default' == $settings->bio_font['family'] ) ? 'inherit' : $settings->bio_font['family'] ; ?>;
  font-weight: <?php echo ( 'Default' == $settings->bio_font['weight'] ? 'inherit' : $settings->bio_font['weight'] ); ?>;
  font-size: <?php echo $settings->bio_font_size; ?>;
  font-size: <?php echo $settings->bio_line_height; ?>;
  text-transform: <?php echo $settings->bio_transform; ?>;
}
.icon-link .fa{
  color: #<?php echo $settings->icon_color; ?>;
}
aside.user-data-row,
section.user-data-row{
  padding: 0 15px;
  width: 100%;
}
@media screen and (min-width:<?php echo $global_settings->responsive_breakpoint; ?>px){

}
@media screen and (min-width:<?php echo $global_settings->medium_breakpoint; ?>px){
  aside.user-data-row{
    width: 30%;
    padding: 0 15px;
  }
  section.user-data-row{
    width: 70%;
    padding:
  }
  .user-data-container{
    flex-direction: row;
  }
}
