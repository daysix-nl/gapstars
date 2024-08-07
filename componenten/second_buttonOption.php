<?php 
$linkb = get_field('second_button', 'option');
if( $linkb ): 
    $linkb_url = $linkb['url'];
    $linkb_title = $linkb['title'] ?: "Tekst hier";
    $linkb_target = $linkb['target'] ? $linkb['target'] : '_self';
?>
     <a 
        id="button-<?php echo esc_html( str_replace(' ', '', $linkb_title) ); ?>" 
        href="<?php echo esc_url( $linkb_url ); ?>" target="<?php echo esc_attr( $linkb_target ); ?>"     
        class="btn-<?php echo get_field('second_button_color', 'option');?> text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"> 
        <?php echo esc_html( $linkb_title ); ?>
    </a>
<?php endif; ?>