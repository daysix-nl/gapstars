<?php include get_template_directory() . '/componenten/recruiteeApi.php'; ?>

<?php 
if( isset( $block['data']['preview_image_help'] )  ) :    /* rendering in inserter preview  */

echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';


else : /* rendering in editor body */

?>

    <style>
        body, 
        .is-root-container.block-editor-block-list__layout {
            background-image: url(/wp-content/themes/gapstars/img/local/main-background-carreers.png);
            background-position: top;
            background-size: cover;
            background-repeat: repeat-y;
            background-color: #21024e;
        }
    </style> 

    <section class="my-10 md:my-12 vacancies-all min-h-[80vh]">
        <?php if(get_field('title')): ?>
            <div class="container text-center">
                <h2 class="text-40 leading-40 md:text-65 md:leading-70 pb-6 font-medium text-white"><?php the_field('title'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="section-filter hidden">
            <div class="container relative z-[1]">
            <div class="bg-oranje rounded-3xl p-3 mb-6 md:grid md:grid-cols-8">
                <p class="text-white font-medium text-16 leading-26 md:col-span-4 flex items-center">Filter jobs:</p>

                <div class="dropdown-careers my-2 md:m-0 md:col-span-2">
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

                <div class="dropdown-careers-1 md:col-span-2">
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
            <div class="container">
                <div class="pb-3">
                    <div id="recruitee-careers"></div>
                </div>
            </div>
        </div>
        <div class="no-result hidden mx-auto mt-0"">
          <p class="text-40 leading-40 md:text-45 md:leading-45 pb-6 font-medium text-white text-center">No results found</p>
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