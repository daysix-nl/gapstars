<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/


  function add_theme_scripts() {
    // Lees de versie uit het bestand
    $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';


   wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), $version, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), $version, true);
    // wp_enqueue_script( 'flipdown', get_template_directory_uri() . '/script/flipdown.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/*
|--------------------------------------------------------------------------
| Menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}

add_action( 'after_setup_theme', 'day_six_config', 0 );




/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/


add_filter('block_categories_all', function ($categories) {

        array_unshift($categories,           
        [
            'slug'  => 'styling',
            'title' => 'styling',
            'icon'  => null
        ],  
        [
            'slug'  => 'hero',
            'title' => 'hero',
            'icon'  => null
        ],
        [
            'slug'  => 'card',
            'title' => 'card',
            'icon'  => null
        ],
        [
            'slug'  => 'image',
            'title' => 'image',
            'icon'  => null
        ],
        [
            'slug'  => 'slider',
            'title' => 'slider',
            'icon'  => null
        ],
        [
            'slug'  => 'content',
            'title' => 'Content',
            'icon'  => null
        ],
        [
            'slug'  => 'general',
            'title' => 'general',
            'icon'  => null
        ],
        [
            'slug'  => 'vacancies',
            'title' => 'vacancies',
            'icon'  => null
        ],
        [
            'slug'  => 'post',
            'title' => 'post',
            'icon'  => null
        ],
    );

    return $categories;
}, 10, 1);

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        $blocks = [
            [
                'name'              => 'styling-body',
                'title'             => __('Styling - body'),
                'description'       => __('A custom styling block'),
                'category'          => 'styling',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'styling'],
            ],
            [
                'name'              => 'hero-home',
                'title'             => __('Hero - Home'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-image',
                'title'             => __('Hero - Image'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero ',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-careers',
                'title'             => __('Hero - Careers'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-title',
                'title'             => __('Hero - Title'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'hero-client-story',
                'title'             => __('Hero - Client Story'),
                'description'       => __('A custom hero block'),
                'category'          => 'hero',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'hero'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-featured',
                'title'             => __('Card - Featured'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-icon-flex',
                'title'             => __('Card - Icon Flex'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-icon',
                'title'             => __('Card - Icons'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-careers',
                'title'             => __('Card - Careers'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-team',
                'title'             => __('Card - Team Members'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-technologies',
                'title'             => __('Card - Technologies'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'card-image-flex',
                'title'             => __('Card - Image Flex'),
                'description'       => __('A custom card block'),
                'category'          => 'card',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-testimonial',
                'title'             => __('Slider - testimonial'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-inner-block',
                'title'             => __('Slider - Inner Block'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-tabs',
                'title'             => __('Slider - Tabs'),
                'description'       => __('A custom slider Tabs'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-3d',
                'title'             => __('Slider - 3D'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'slider-gallery',
                'title'             => __('Slider - Gallery'),
                'description'       => __('A custom slider block'),
                'category'          => 'slider',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'slider'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'image-full',
                'title'             => __('Image - Full'),
                'description'       => __('A custom image block'),
                'category'          => 'image',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'image'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'content-text-image',
                'title'             => __('Content - Text & Image [x2]'),
                'description'       => __('A custom content block'),
                'category'          => 'content',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'content'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'content-text-imageblock',
                'title'             => __('Content - Text & Image Block'),
                'description'       => __('A custom content block'),
                'category'          => 'content',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'content'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'content-text-icon',
                'title'             => __('Content - Text & Icon'),
                'description'       => __('A custom content block'),
                'category'          => 'content',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'content'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'content-wysiwyg',
                'title'             => __('Content - Blog content'),
                'description'       => __('A custom content block'),
                'category'          => 'content',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'content'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'vacancies-featured',
                'title'             => __('Vacancies - Featured'),
                'description'       => __('A custom vacancies block'),
                'category'          => 'vacancies',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'vacancies'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'vacancies-all',
                'title'             => __('Vacancies - All'),
                'description'       => __('A custom vacancies block'),
                'category'          => 'vacancies',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'vacancies'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'general-accordion',
                'title'             => __('General - Accordion'),
                'description'       => __('A custom generals block'),
                'category'          => 'general',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'general'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'general-form',
                'title'             => __('General - Form'),
                'description'       => __('A custom generals block'),
                'category'          => 'general',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'general'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'general-hub-contact',
                'title'             => __('General - Hub Contact'),
                'description'       => __('A custom generals block'),
                'category'          => 'general',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'general'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'post-all',
                'title'             => __('Post - CTO or Developers'),
                'description'       => __('A custom post block'),
                'category'          => 'post',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'post'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'post-client-stories',
                'title'             => __('Post - Client Stories'),
                'description'       => __('A custom post block'),
                'category'          => 'post',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'post'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
            [
                'name'              => 'post-featured-client-stories',
                'title'             => __('Post - Featured Client Stories'),
                'description'       => __('A custom post block'),
                'category'          => 'post',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
             [
                'name'              => 'post-event',
                'title'             => __('Event - full template'),
                'description'       => __('A custom post block'),
                'category'          => 'post',
                'icon'              => 'laptop',
                'keywords'          => ['layout', 'card'],
                'example'           => [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            'preview_image_help' => '/wp-content/themes/gapstars/img/preview-acf/hero-home.jpg',
                            'is_preview'    => true
                        ]
                    ]
                ]
            ],
        ];

        foreach ($blocks as $block) {
            acf_register_block_type([
                'name'              => $block['name'],
                'title'             => $block['title'],
                'description'       => $block['description'],
                'render_template'   => 'blocks/'.$block['name'].'.php',
                'category'          => $block['category'],
                'icon'              => $block['icon'],
                'keywords'          => $block['keywords'],
                'supports'          => $block['supports'] ?? [],
                'example'           => $block['example'] ?? [],
            ]);
        }

        add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) use ($blocks) {
            if ($editor_context->name !== 'core/edit-post') {
                return $allowed_blocks;
            }

           $acf_blocks = []; 
            foreach ($blocks as $block) { 
                $acf_blocks[] = 'acf/' . $block['name'];
            }

            $core_blocks = [
                // 'core/paragraph',
                // 'core/heading',
            ];

            return array_merge($acf_blocks, $core_blocks);
        }, 10, 2);
    }
}, 10);

    

/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}


/*
|--------------------------------------------------------------------------
| Shortcode
|--------------------------------------------------------------------------
|
| 
| 
|
*/

add_shortcode('orange', function ($atts, $content = null) {
	return '<span class="text-oranje">' . $content . '</span>';
});


// add_shortcode('light-blue', function ($atts, $content = null) {
// 	return '<span class="text-morning-glory">' . $content . '</span>';
// });


/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*Custom Post type start*/
function cw_post_type_ptteam() {
    $supports = array(
    'title', // post title
    'editor', // post content
    // 'author', // post author
    // 'thumbnail', // featured images
    // 'excerpt', // post excerpt
    // 'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Team Members', 'plural'),
    'singular_name' => _x('Team Member', 'singular'),
    'menu_name' => _x('Team Members', 'admin menu'),
    'name_admin_bar' => _x('Team Members', 'admin bar'),
    'add_new' => _x('Add new', 'add new'),
    'add_new_item' => __('Add new Team Member'),
    'new_item' => __('New Team Member'),
    'edit_item' => __('Edit'),
    'view_item' => __('View'),
    'all_items' => __('All Team Members'),
    'search_items' => __('Search Team Member'),
    'not_found' => __('Not found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => false,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'exclude_from_search' => true,  // you should exclude it from search results
    'show_in_nav_menus' => false,
    'query_var' => true,
    'rewrite' => array('slug' => 'members'),
    'taxonomies'  => array( 'category' ),
    'has_archive' => true,
    'hierarchical' => false,
    'menu_icon' => 'dashicons-insert',
    );
    register_post_type('ptteam', $args);
}
add_action('init', 'cw_post_type_ptteam');
/*Custom Post type BLOG end*/





/*Custom Post type BLOG end*/

/*Register WordPress  Gutenberg CPT */
function cw_post_type_client() {
    register_post_type( 'casesclient',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => _x('Client Stories', 'plural'),
                'singular_name' => _x('Client Story', 'singular'),
                'menu_name' => _x('Client Stories', 'admin menu'),
                'name_admin_bar' => _x('Client Stories', 'admin bar'),
                'add_new' => _x('Add new', 'add new'),
                'add_new_item' => __('Add new Client Story'),
                'new_item' => __('New Client Story'),
                'edit_item' => __('Edit'),
                'view_item' => __('View'),
                'all_items' => __('All Client Stories'),
                'search_items' => __('Search Client Story'),
                'not_found' => __('Not found.'),
            ),
            'public' => false,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,
            'query_var' => true,
            'rewrite' => array('slug' => 'client-story'),
            'show_in_rest' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-insert',
            'supports' => array('editor','title', )
        )
    );
}
 
add_action( 'init', 'cw_post_type_client' );


/*Register WordPress  Gutenberg CPT */
function cw_post_type_ptevents() {
    register_post_type( 'ptevents',
        // WordPress CPT Options Start
        array(
            'labels' => array(
                'name' => _x('Events', 'plural'),
                'singular_name' => _x('Events', 'singular'),
                'menu_name' => _x('Events', 'admin menu'),
                'name_admin_bar' => _x('Events', 'admin bar'),
                'add_new' => _x('Add new', 'add new'),
                'add_new_item' => __('Add new Event'),
                'new_item' => __('New Event'),
                'edit_item' => __('Edit'),
                'view_item' => __('View'),
                'all_items' => __('All Events'),
                'search_items' => __('Search Events'),
                'not_found' => __('Not found.'),
            ),
            'public' => false,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'exclude_from_search' => true,  // you should exclude it from search results
            'show_in_nav_menus' => false,
            'query_var' => true,
            'rewrite' => array('slug' => 'event'),
            'show_in_rest' => true,
            'has_archive' => true,
            'hierarchical' => false,
            'menu_icon' => 'dashicons-insert',
             'supports' => array('editor', 'title', 'thumbnail'),  // Voeg 'thumbnail' toe om de featured image in te schakelen.
            'taxonomies' => array('post_tag'),  // Voeg 'post_tag' toe om Tags in te schakelen.
        )
    );
}
 
add_action( 'init', 'cw_post_type_ptevents' );




/*
|--------------------------------------------------------------------------
| Options - MENU
|--------------------------------------------------------------------------
|
| 
| 
|
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Call to action',
		'menu_title'	=> 'Call to action',
		'parent_slug'	=> 'options',
	));
	
}


/*
|--------------------------------------------------------------------------
| Create endpoint for careers with data
|--------------------------------------------------------------------------
|
| 
| 
|
*/


// Register your custom endpoint
add_action( 'rest_api_init', function () {
    register_rest_route( 'v1', '/careers/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'my_careers_by_id_callback',
    ) );
} );



function my_careers_by_id_callback( $data ) {
    $variableToken = BEARER_TOKEN;
    $token = 'Bearer ' . $variableToken;
    $id = $data['id'];
    $url = "https://api.recruitee.com/c/1674/offers/$id";

    $options = array(
        'http' => array(
            'header'  => "Authorization: $token\r\n" .
                         "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'GET'
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        $responseCode = http_response_code();
        return new WP_Error($responseCode, 'An error occurred while fetching data from the API.');
    }

    $offer = json_decode($result, true)["offer"];

    $offerData = [];
    $offerData['offer_tags'] = $offer['offer_tags'];
    $offerData['title'] = $offer['title'];
    $offerData['location'] = $offer['location'];
    $offerData['id'] = $offer['id'];

    return rest_ensure_response( $offerData );
}




   
/*
|--------------------------------------------------------------------------
| Wordpress menu
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function customize_dashboard_menu() {
    global $menu;

    // Vervang "super admin" door de gebruikersnaam die je wilt tonen.
    $allowed_user = 'kevin';

    // Haal de huidige ingelogde gebruiker op.
    $current_user = wp_get_current_user();
    $current_user_login = $current_user->user_login;

    // Verberg specifieke menu-onderdelen voor alle gebruikers behalve "kevin".
    if ($current_user_login !== $allowed_user) {
        // Hier kun je de volledige URL/querystrings vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_url = array(
            // 'edit.php',
            'edit.php?post_type=acf-field-group',
            'edit-comments.php',
            'themes.php',
            'plugins.php',
            // 'users.php',
            'options-general.php',
            'tools.php',
            'admin.php?page=ai1wm_export'
            // Voeg hier andere URL's/querystrings toe van de items die je wilt verbergen op basis van de URL.
        );

        // Hier kun je de classes vinden van de menu-onderdelen die je wilt verbergen:
        $hidden_menu_items_by_class = array(
            'toplevel_page_wppusher', 
            'toplevel_page_ai1wm_export',
            'menu-top toplevel_page_mlang',
            'toplevel_page_rank-math',
            'toplevel_page_gf_edit_forms',
            'toplevel_page_feedzy-admin-menu'
            // Voeg hier andere classes toe van de items die je wilt verbergen op basis van de class.
        );

        foreach ($menu as $key => $item) {
            // Verberg op basis van URL/querystring.
            if (in_array($item[2], $hidden_menu_items_by_url)) {
                unset($menu[$key]);
            }

            // Verberg op basis van class.
            foreach ($hidden_menu_items_by_class as $class) {
                if (strpos($item[4], $class) !== false) {
                    unset($menu[$key]);
                    break;
                }
            }
        }
    }
}

add_action('admin_menu', 'customize_dashboard_menu');


/*
|--------------------------------------------------------------------------
| Wordpress topbar
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function add_custom_admin_bar_styles() {
    // Controleren of de gebruiker is ingelogd
    if (is_user_logged_in()) {
        // Gebruiker met de gebruikersnaam "xxx" uitsluiten
        $user = wp_get_current_user();
        if ($user->user_login === 'xxx') {
            return;
        }

        // Voeg hier de CSS-styling toe voor de menu-items die je wilt aanpassen
        $custom_styles = "
            #wp-admin-bar-comments { display: none !important; }
            #wp-admin-bar-customize { display: none !important; }
            #wp-admin-bar-new-content { display: none !important; }
            #wp-admin-bar-rank-math { display: none !important; }
            #dashboard_primary { display: none !important; }
            #dashboard_quick_press { display: none !important; }
            #dashboard_activity  { display: none !important; }
            #welcome-panel { display: none !important; }
            #dashboard_site_health { display: none !important; }
            #rg_forms_dashboard { display: none !important; }
            #themeisle { display: none !important; }
            #rank_math_dashboard_widget { display: none !important; }
            #wp-admin-bar-gform-forms { display: none !important; }
            #toplevel_page_gf_edit_forms { display: none !important; }
// 			.acf-admin-notice { display: none !important; }
            /* Voeg hier meer CSS-styling toe indien nodig */
        ";

        // Voeg de CSS-styling toe aan zowel de front-end als het WordPress-dashboard
        echo '<style type="text/css">' . $custom_styles . '</style>';
        echo '<style type="text/css" id="custom-admin-bar-styles">' . $custom_styles . '</style>';
    }
}
add_action('wp_head', 'add_custom_admin_bar_styles');
add_action('admin_head', 'add_custom_admin_bar_styles');



/*
|--------------------------------------------------------------------------
| Wordpress footer
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function vervang_dashboard_footer_tekst() {
    echo 'Day Six Digitale Communicatie B.V.';
}

add_filter('admin_footer_text', 'vervang_dashboard_footer_tekst');



/*
|--------------------------------------------------------------------------
| Wordpress admin URL
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// Functie voor het doorverwijzen van "/backend" naar "/wp-login.php"
function redirect_backend_to_wp_login() {
    if ($_SERVER['REQUEST_URI'] == '/backend') {
        wp_redirect(wp_login_url());
        exit;
    }
}
add_action('init', 'redirect_backend_to_wp_login');



/*
|--------------------------------------------------------------------------
| E-mailadres verzenden van mails
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_wp_mail_from($original_email_address) {
    // Vervang 'jouw@emailadres.com' door het gewenste specifieke e-mailadres
    return 'noreply@gapstars.net';
}

function custom_wp_mail_from_name($original_email_from) {
    // Vervang 'Jouw Naam' door de gewenste afzender naam
    return 'Gapstars';
}

add_filter('wp_mail_from', 'custom_wp_mail_from');
add_filter('wp_mail_from_name', 'custom_wp_mail_from_name');


/*
|--------------------------------------------------------------------------
| Hide Super Admin
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function exclude_user_kevin_from_users_list($query) {
    if (!is_admin()) {
        return; // We voeren deze actie alleen uit in de backend
    }

    $current_user = wp_get_current_user();

    // Controleer of de huidige gebruiker "super admin" is
    if ($current_user->user_login === 'kevin') {
        return; // "super admin" kan zijn eigen gebruikersgegevens zien
    }

    // Haal de huidige gebruiker op
    $current_user_id = $current_user->ID;

    // Haal de gebruiker "super admin" op
    $kevin_user = get_user_by('login', 'kevin');

    // Controleer of "super admin" bestaat en niet dezelfde is als de huidige gebruiker
    if ($kevin_user && $current_user_id !== $kevin_user->ID) {
        // Voeg een voorwaarde toe aan de gebruikersquery om "super admin" te verbergen voor andere gebruikers
        $query->query_vars['exclude'] = array($kevin_user->ID);
    }
}
add_action('pre_get_users', 'exclude_user_kevin_from_users_list');



/*
|--------------------------------------------------------------------------
| Hide auteur
|--------------------------------------------------------------------------
|
| 
| 
|
*/


function verwijder_auteur_kolom($columns) {
    // Controleer of de 'auteur' kolom aanwezig is in de array van kolommen
    if (isset($columns['author'])) {
        // Verwijder de 'auteur' kolom uit de array
        unset($columns['author']);
    }
    return $columns;
}
add_filter('manage_posts_columns', 'verwijder_auteur_kolom');
add_filter('manage_pages_columns', 'verwijder_auteur_kolom');
// Voeg indien nodig filters toe voor aangepaste posttypes, bijv. 'book' => 'manage_book_columns'



