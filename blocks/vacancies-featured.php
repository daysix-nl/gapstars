
<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
  <section class="<?php echo get_field('inner-margin'); ?> <?php echo get_field('background-color'); ?> <?php echo get_field('inner-padding'); ?> vacancies-featured">
      <?php if(get_field('title')): ?>
          <div class="container text-center">
              <h2 class="text-40 leading-40 md:text-65 md:leading-70 pb-6 font-medium <?php echo get_field('text-color') ?>"><?php echo get_field('title'); ?></h2>
          </div>
      <?php endif; ?>
          <div class="container">
              <div class="pb-3 hidden section-vacancies">
                  <div id="recruitee-careers"></div>
              </div>
              <div class="loader mx-auto mt-10 mb-12"></div>
              <div class="flex justify-center">
                  <?php include get_template_directory() . '/componenten/button.php'; ?>
              </div>
          </div>
  </section>
<?php endif; ?>

<script type="text/javascript"> 
          var rtscript = document.createElement('script'); 
          rtscript.type = 'text/javascript';  
          rtscript.onload = function() { 
            var widget = new RTWidget({ 
 "companies": [
   1674
 ],
 "detailsMode": "popup",
 "language": "en",
 "departmentsFilter": [],
 "themeVars": {
   "primary": "#1999e3",
   "secondary": "#000",
   "text": "#5c6f78",
   "textDark": "#37474f",
   "fontFamily": " sans-serif;",
   "baseFontSize": "16px"
 },
 "flags": {
   "showLocation": true,
   "showCountry": true,
   "showCity": true,
   "groupByLocation": false,
   "groupByDepartment": false,
   "groupByCompany": false,
 }
 }) };
            rtscript.src = 'https://d10zminp1cyta8.cloudfront.net/widget.js';
            document.body.appendChild(rtscript);
</script>

<script>
      setTimeout(() => {
        document.querySelector('.section-vacancies').classList.remove("hidden");
        document.querySelector('.loader').classList.add("hidden");
    }, 2000)
</script>