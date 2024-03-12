<div class="hidden fixed modal-form-header">
    <div class=" bg-creme rounded-3xl h-fit w-[90vw] sm:w-[75vw] md:w-[600px] p-4 mx-auto mt-6 md:mt-10">
        <div class="flex flex-row justify-between items-center mb-4">
            <h3 class="text-black text-26 leading-30 ">Plan discovery call</h3>
            <button class="close-modal"><?php include('wp-content/themes/gapstars/img/icons/close-black.php'); ?></button>
        </div>
        <div class="w-full">
            <?php echo get_field('modal_form', 'option'); ?>
        </div>
    </div>
</div>