<?php

class LBCUserProfile{
  function __construct(){
    add_action( 'show_user_profile',array( $this,'add_profile_fields' ),1 );
    add_action( 'user_new_form',array( $this,'add_profile_fields' ),1 );
    add_action( 'edit_user_profile',array( $this,'add_profile_fields' ),1 );
    add_action( 'profile_update',array( $this,'save_profile_fields' ) );
  }

  /*
  * Add fields to the edit profile page
  * @hook edit_user_profile
  */
  function add_profile_fields( $user ){
    $designation = ( is_object( $user ) ) ? esc_attr( get_the_author_meta( 'designation',$user->ID ) ) : null;
    $youtube_video_link = ( is_object( $user ) ) ? esc_attr( get_the_author_meta( 'youtube_video_link',$user->ID ) ) : null;
    $video_embed = ( is_object( $user ) ) ? esc_attr( get_the_author_meta( 'video_embed',$user->ID ) ) : null;
    ?>
      <h3>More About Yourself</h3>
      <table class="form-table">
        <tr>
            <th><label for="designation"><?php echo __( 'Designation','fl-builder' ); ?></label></th>
            <td>
                <input type="text" class="regular-text" name="designation" value="<?php echo $designation; ?>" id="designation" /><br />
            </td>
        </tr>
        <tr>
            <th><label for="video_embed"><?php echo __( 'Video Embed Code','fl-builder' ); ?></label></th>
            <td>
                <textarea class="regular-text" name="video_embed" id="video_embed">
                  <?php echo $video_embed; ?>
                </textarea>
                <br />
            </td>
        </tr>
      </table>
    <?php
  }
  function save_profile_fields($user_id){

      # save my custom field
      update_user_meta($user_id, 'designation', $_POST['designation']);
      update_user_meta($user_id, 'video_embed', $_POST['video_embed']);
  }
}

$lbcuserprofile = new LBCUserProfile();
