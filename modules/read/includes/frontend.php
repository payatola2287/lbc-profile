<?php
  $user = ( isset( $_GET['email'] ) ) ? get_user_by( 'email',sanitize_email( $_GET['email'] ) ) : wp_get_current_user();

  $first_name = $user->user_firstname;
  $last_name = $user->user_lastname;
  $bio = $user->description;
?>

<div class="user-data-container">
  <section class="user-data-row">
    <p class="user-name"><?php echo $first_name . ' ' . $last_name; ?></p>
    <p class="user-description"><?php echo $bio; ?></p>
  </section>
</div>
