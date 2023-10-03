<?php 
/**
 * Template name: Careers all 2023
 */



get_header(); 

wp_enqueue_script(
    'my-script', // Unique handle for your script
    get_template_directory_uri() . '/componenten/recruiteeScript.js', // Full path to the script
    '1.0', // Version number
    true // Load the script in the footer?
);

?>
<?php include get_template_directory() . '/componenten/recruiteeApi.php'; ?>




<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>
<style>
  footer.bg-black {
    background-color: #202020 !important;
}
  </style>

<main class=" bg-[#F1EFEC] recruitee-all-new">  
 <section class="py-10 md:py-12 vacancies-all min-h-[80vh]">
        <div class="container text-center">
            <h2 class="text-40 leading-40 md:text-55 md:leading-55 pb-6 font-medium text-black">Join us! <br><span class="text-oranje">Current openings</span></h2>
        </div>
        <div class="section-filter hidden">
            <div class="container relative z-2">
            <div class="bg-oranje rounded-3xl p-3 mb-6 md:flex">
                <p class="text-white font-medium text-16 leading-26 flex items-center min-w-[150px]">Filter jobs:</p>
                <div class="flex flex-col md:flex-row w-full justify-end">
                  <div class="dropdown-careers mr-0 md:mr-2">
                      <input id="filter-technologies-button" class="text-box" type="text"
                          placeholder="All technologies" readonly>
                      <div class="options">
                          <div id="filter-item-all-technologies"
                              
                              value="All Tech Stack">All technologies</div>
                          <?php for($x=0;$x<=count($taglistUnique);$x++){?>
                          <?php if(!empty($taglistUnique[$x])){?>
                          <div id="filter-item-<?php echo str_replace(' ', '', $taglistUnique[$x])?>"
                            
                              value="<?php echo $taglistUnique[$x];?>">
                              <?php echo $taglistUnique[$x];?></div>
                          <?php } ?>
                          <?php } ?>
                      </div>
                  </div>
                  <div class="dropdown-careers-1">
                      <input id="filter-location-button" class="text-box-1" type="text"
                          placeholder="All locations" readonly>
                      <div class="options-1">
                          <div id="filter-item-all-locations"
                              
                              value="All locations">All locations</div>
                            <?php foreach($landlistUnique as $x => $val) { ?>
                              <?php if(!empty($val)) {?>
                                <div id="filter-item-<?php echo str_replace(' ', '', $val)?>"
                                  
                                  value="<?php echo $val;?>">
                                  <?php echo $val;?>
                                </div>
                              <?php } ?>
                          <?php } ?>
                      </div>
                  </div>
                </div>
            </div>
            </div>
            <div class="container">
              <div id="recruitee-careers"></div>
            </div>
        </div>
        <div class="no-result hidden mx-auto mt-0"">
          <p class="text-40 leading-40 md:text-45 md:leading-45 pb-6 font-medium text-black text-center">No results found</p>
        </div>
        <div class="loader mx-auto mt-10 mb-12"></div>
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

<script type="text/javascript" src="http://gapstars.local/wp-content/themes/gapstars/componenten/recruiteeScript.js"></script>

<?php get_footer('black'); ?>