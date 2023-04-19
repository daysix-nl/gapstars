<?php if( have_rows('client_repeater') ): ?>
  <div class="flex">
    <div class="swiper swiperhero">
      <div class="swiper-wrapper">
    <?php while( have_rows('client_repeater') ): the_row(); 
        $image = get_sub_field('logo');
        if( !empty( $image ) ):
        ?>
          <div class="swiper-slide">
            <img class="h-[40px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          </div>
        <?php endif; ?>
    <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
