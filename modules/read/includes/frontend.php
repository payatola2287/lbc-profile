<?php
  $user = ( isset( $_GET['email'] ) ) ? get_user_by( 'email',sanitize_email( $_GET['email'] ) ) : wp_get_current_user();

  $first_name = $user->user_firstname;
  $last_name = $user->user_lastname;
  $bio = $user->description;
  $email = $user->user_email;
  $website = $user->user_url;
  $gplus = get_user_meta( $user->ID,'googeplus', true );
  $twitter = get_user_meta( $user->ID,'twitter', true );
  $facebook = get_user_meta( $user->ID,'facebook', true );
?>

<div class="user-data-container">
  <aside class="user-data-row">
    <figure class="user-avatar">
      <?php echo get_wp_user_avatar( $user->ID,'medium' ); ?>
    </figure>
    <section class="user-connect">
      <?php if( '' != $email ): ?>
        <a class="icon-link" href="mailto:<?php echo sanitize_email( $email ); ?>" title="Send email"><i class="fa fa-envelope <?php echo $settings->icon_size; ?>"></i></a>
      <?php endif; ?>
      <?php if( '' != $website ): ?>
        <a class="icon-link" href="<?php echo $website; ?>" title="Visit Website"><i class="fa fa-globe <?php echo $settings->icon_size; ?>"></i></a>
      <?php endif; ?>
      <?php if( $facebook && '' != $facebook ): ?>
        <a class="icon-link" href="<?php echo $facebook; ?>" title="View Facebook"><i class="fa fa-facebook <?php echo $settings->icon_size; ?>"></i></a>
      <?php endif; ?>
      <?php if( $twitter && '' != $twitter ): ?>
        <span class="icon-link"><i class="fa fa-twitter <?php echo $settings->icon_size; ?>"></i></span>
      <?php endif; ?>
      <?php if( $gplus && '' != $gplus ): ?>
        <a class="icon-link" href="<?php echo $gplus; ?>"><i class="fa fa-gplus <?php echo $settings->icon_size; ?>"></i></a>
      <?php endif; ?>
    </section>
  </aside>
  <section class="user-data-row">
    <p class="user-name"><?php echo $first_name . ' ' . $last_name; ?></p>
    <p class="user-description"><?php echo $bio; ?></p>
  </section>
</div>
