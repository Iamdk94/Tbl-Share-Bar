<div class="share-buttons">
  <amp-social-share type="whatsapp"></amp-social-share>
  <amp-social-share type="facebook" width="32" height="32"
                    data-url="<?php echo esc_url( get_permalink() ); ?>"
                    data-param-app_id="<?php echo esc_attr( {YOUR_FB_APP_ID} ); ?>"
                    data-media="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>"
                    data-description="<?php the_title_attribute(); ?>">
  </amp-social-share>
  <amp-social-share type="twitter" width="32" height="32"
                    data-url="<?php echo esc_url( get_permalink() ); ?>"
                    data-media="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>"
                    data-description="<?php the_title_attribute(); ?>">
  </amp-social-share>
  <amp-social-share type="pinterest" width="32" height="32"
                    data-url="<?php echo esc_url( get_permalink() ); ?>"
                    data-media="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>"
                    data-description="<?php the_title_attribute(); ?>">
  </amp-social-share>
  <amp-social-share type="gplus"></amp-social-share>
  <amp-social-share type="email"></amp-social-share>
  <amp-social-share type="linkedin"
    width="40"
    height="40"
    data-param-text="<?php the_title_attribute(); ?>"
    data-param-url="<?php echo esc_url( get_permalink() ); ?>"
    data-param-attribution="AMPhtml">
  </amp-social-share>
  <amp-social-share type="tumblr"></amp-social-share>
</div>
