<?php if ( post_password_required() ) {
  return;
} ?>
  <div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
      <ul class="comment-list">
        <?php 
          wp_list_comments( array(
            'short_ping'  => true,
            'style' => 'ul',
          ) );
        ?>
      </ul>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
      <p class="no-comments">
        <?php _e( 'Comments are closed.' ); ?>
      </p>
    <?php endif; ?>
    <?php comment_form(); ?>
  </div>