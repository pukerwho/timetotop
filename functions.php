<?php
// Include your functions files here
include('inc/enqueues.php');
// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
    global $wp_version;
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    // let wordpress manage the title
    add_theme_support( 'title-tag' );
    //add_theme_support( 'custom-background', $args );
    //add_theme_support( 'custom-header', $args );
    // Automatic feed links compatibility
    if( version_compare( $wp_version, '3.0', '>=' ) ) {
        add_theme_support( 'automatic-feed-links' );
    } else {
        automatic_feed_links();
    }
}
add_action( 'after_setup_theme', 'customThemeSupport' );
// Content width
if( !isset( $content_width ) ) {
    // @TODO : edit the value for your own specifications
    $content_width = 960;
}
// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' ) //@TODO : change i18n domain name to yours
) );
// Register sidebars

add_post_type_support( 'portfolio', 'page-attributes' );

function registerThemeSidebars() {
    if( !function_exists( 'register_sidebar' ) ) {
        return;
    }
    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . 'css/editor-style.css' );
};
// подключаем файлы со стилями
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'editor-style', get_stylesheet_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js');
    wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/js/mixitup.min.js');
    wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.min.js');
};
function loadmore_ajax_handler(){
 
    // prepare our arguments for the query
    $args = json_decode( stripslashes( $_POST['query'] ), true );
    $args['paged'] = $_POST['page'] + 1; 
    $args['post_status'] = 'publish';
 
   
    query_posts( $args );
 
    if( have_posts() ) :
 
        
        while( have_posts() ): the_post();
            get_template_part( 'blocks/default/loop', 'default' );
        
        endwhile;
 
    endif;
    die; 
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler'); 
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler'); 

function create_post_type() {
  register_post_type( 'portfolio',
    array(
      'labels' => array(
          'name' => __( 'Портфолио' ),
          'singular_name' => __( 'Портфолио' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
  register_post_type( 'cases',
    array(
      'labels' => array(
          'name' => __( 'Кейсы' ),
          'singular_name' => __( 'Кейс' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
  register_post_type( 'reviews',
    array(
      'labels' => array(
          'name' => __( 'Отзывы' ),
          'singular_name' => __( 'Отзыв' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
  register_post_type( 'vacancies',
    array(
      'labels' => array(
          'name' => __( 'Вакансии' ),
          'singular_name' => __( 'Вакансия' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    )
  );
}
add_action( 'init', 'create_post_type' );

function your_prefix_get_meta_box( $meta_boxes ) {
    $prefix = 'meta-';

    $meta_boxes[] = array(
        'id' => 'portfolio-info',
        'title' => esc_html__( 'Информация', 'wemodern-portfolio' ),
        'post_types' => array( 'portfolio' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'portfolio-name',
            'type' => 'text',
            'name' => esc_html__( 'Название работы', 'wemodern-portfolio' ),
          ),
          array(
            'id' => $prefix . 'portfolio-link',
            'type' => 'text',
            'name' => esc_html__( 'Ссылка', 'wemodern-portfolio' ),
          ),
          array(
            'name'             => 'Лого',
            'id' => $prefix . 'portfolio-logo',
            'type'             => 'image',
            'force_delete'     => false,
            'max_file_uploads' => 1,
          ),
          array(
            'name'             => 'Категория',
            'id' => $prefix . 'portfolio-cat',
            'type'    => 'checkbox_list',
            // Options of checkboxes, in format 'value' => 'Label'
            'options' => array(
                'create'       => 'Создание сайта',
                'seo' => 'SEO-продвижение',
                'smm'        => 'SMM-продвижение',
            ),
          ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'cases-info',
        'title' => esc_html__( 'Информация', 'wemodern-cases' ),
        'post_types' => array( 'cases' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'cases-desc',
            'type' => 'text',
            'name' => esc_html__( 'Описание кейса', 'wemodern-cases' ),
          ),
          array(
            'id' => $prefix . 'cases-category',
            'type' => 'text',
            'name' => esc_html__( 'Категория', 'wemodern-cases' ),
          ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'review-info',
        'title' => esc_html__( 'Информация', 'wemodern-review' ),
        'post_types' => array( 'reviews' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'name'             => 'Аватарка',
            'id' => $prefix . 'review-avatar',
            'type'             => 'image',
            'force_delete'     => false,
            'max_file_uploads' => 1,
          ),
          array(
            'id' => $prefix . 'review-name',
            'type' => 'text',
            'name' => esc_html__( 'Имя автора', 'wemodern-review' ),
          ),
          array(
            'id' => $prefix . 'review-who',
            'type' => 'text',
            'name' => esc_html__( 'Должность автора', 'wemodern-review' ),
          ),
          array(
            'id' => $prefix . 'review-from',
            'type' => 'text',
            'name' => esc_html__( 'Город', 'wemodern-review' ),
          ),
          array(
            'id' => $prefix . 'review-video',
            'type' => 'textarea',
            'name' => esc_html__( 'Код видео', 'wemodern-review' ),
          ),
          array(
            'name'             => 'Категория',
            'id' => $prefix . 'review-cat',
            'type'    => 'select',
            'options' => array(
                'create'       => 'Создание сайта',
                'seo' => 'SEO-продвижение',
                'smm'        => 'SMM-продвижение',
            ),
          ),
          array(
            'id' => $prefix . 'review-popular',
            'type' => 'checkbox',
            'name' => esc_html__( 'На главную?', 'vvk' ),
            'std'  => 0,
          ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'vacancy-info',
        'title' => esc_html__( 'Информация', 'wemodern-vacancy' ),
        'post_types' => array( 'vacancies' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'vacancy-desc',
            'type' => 'textarea',
            'name' => esc_html__( 'Коротко о вакансии', 'wemodern-vacancy' ),
          ),
        ),
    );

    $meta_boxes[] = array(
        'id' => 'page-info',
        'title' => esc_html__( 'Информация', 'wemodern-page' ),
        'post_types' => array( 'page' ),
        'context' => 'advanced',
        'priority' => 'default',
        'autosave' => true,
        'fields' => array(
          array(
            'id' => $prefix . 'page-more',
            'type' => 'textarea',
            'name' => esc_html__( 'Дополнительная Информация', 'wemodern-page' ),
          ),
        ),
    );

    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'your_prefix_get_meta_box' );


add_action('init', 'create_taxonomy');
function create_taxonomy(){
  register_taxonomy('tx_cases', array('cases'), array(
    'label'                 => '', // определяется параметром $labels->name
    'labels'                => array(
      'name'              => 'Категории',
      'singular_name'     => 'Категория',
      'search_items'      => 'Поиск категорий',
      'all_items'         => 'Все категории',
      'view_item '        => 'Посмотреть категорию',
      'parent_item'       => 'Родительская категория',
      'parent_item_colon' => 'Родительская категория:',
      'edit_item'         => 'Редактировать категорию',
      'update_item'       => 'Одновить категорию',
      'add_new_item'      => 'Добавить',
      'new_item_name'     => 'Новая',
      'menu_name'         => 'Категории',
    ),
    'description'           => '', // описание таксономии
    'public'                => true,
    'publicly_queryable'    => null, // равен аргументу public
    'show_in_nav_menus'     => true, // равен аргументу public
    'show_ui'               => true, // равен аргументу public
    'show_in_menu'          => true, // равен аргументу show_ui
    'show_tagcloud'         => true, // равен аргументу show_ui
    'show_in_rest'          => null, // добавить в REST API
    'rest_base'             => null, // $taxonomy
    'hierarchical'          => true,
    'update_count_callback' => '',
    'rewrite'               => true,
    //'query_var'             => $taxonomy, // название параметра запроса
    'capabilities'          => array(),
    'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
    'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
    '_builtin'              => false,
    'show_in_quick_edit'    => null, // по умолчанию значение show_ui
  ) );
}


function add_theme_menu_item() {
    add_menu_page("Мои настройки", "Мои настройки", "manage_options", "theme-panel", "theme_settings_page", null, 99);
    //register our settings
    register_setting( 'my-settings-group', 'facebook_link' );
    register_setting( 'my-settings-group', 'twitter_link' );
    register_setting( 'my-settings-group', 'google_link' );
    register_setting( 'my-settings-group', 'pinterest_link' );
    register_setting( 'my-settings-group', 'google_analytics' );
    register_setting( 'my-settings-group', 'jivo_site' );
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page() {
    include 'form-file.php';
}