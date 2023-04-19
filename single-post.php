<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



get_header(); ?>


<?php  if(get_field('Default_or_custom') || get_field('Default_or_custom') == ''): ?>
<style>
    span {
        display: none;
    }
    header > span {
        display: block;
    }
    main > span {
        display: block;
    }
    footer > span {
        display: block;
    }

    main p {
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 400;
        margin-top: 0;
        margin-bottom: 1.75rem;
    }
    main h4 {
    font-family: "DM Sans", sans-serif;
    font-size: 1.65rem;
    line-height: 2.375rem;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 10px;
    }
</style>
<?php  endif; ?>
<main>

<?php  if(get_field('Default_or_custom') || get_field('Default_or_custom') == '' ): ?>
    <div class="container my-10 md:my-12">
    <h1 class="text-45 leading-50 md:text-60 md:leading-65 pb-5 md:pb-6 font-medium md:pr-4"><?php the_title();?></h1>
    <img class="w-full rounded-3xl object-cover max-h-[600px] object-center mb-6" src="<?php the_post_thumbnail_URL() ?>" alt="">
        <div class="md:w-4/5">
<?php  endif; ?>
            <?php the_content();?>
<?php  if(get_field('Default_or_custom') || get_field('Default_or_custom') == ''): ?>
        </div>
    </div>
 <?php  endif; ?>
</main>
<?php get_footer('black'); ?>