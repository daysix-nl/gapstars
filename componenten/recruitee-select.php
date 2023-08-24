<?php
wp_enqueue_script(
    'my-script', // Unique handle for your script
    get_template_directory_uri() . '/componenten/recruitee-select.js', // Full path to the script
    '1.0', // Version number
    true // Load the script in the footer?
);

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://gapstars.recruitee.com/api/offers/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $decodedData = json_decode($response, true);
  if (isset($decodedData['offers']) && is_array($decodedData['offers'])) {
    ?>
    <div class="flex justify-between">
        <h3 class="text-black text-26 leading-30 mb-2">I want to quik apply for:</h3>
        <button class="close-modal-apply mb-2">
            <?php include get_template_directory() . '/img/icons/close-black.php'; ?>
        </button>
    </div>
    <div class="dropdown-careers careers-form mr-0 md:mr-2">
        <input id="filter-careers-button" class="text-box" type="text"
            placeholder="All careers" readonly>
        <div class="options">
                <?php foreach ($decodedData['offers'] as $offer) {  ?>
                    <div id="filter-item-<?php echo str_replace(' ', '', $offer['title'])?>"
                        value="<?php echo $offer['title'];?>">
                        <?php echo $offer['title'];?>
                    </div>
                <?php
    } ?> 
            </div>
        </div>
    <?php
  } else {
      echo "No offers available";
  }
} ?>