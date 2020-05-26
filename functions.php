<?php
	add_action('wp_enqueue_scripts', 'test_media'); // подключение скриптов
	add_action('widgets_init','name_widgetsFunc'); // подключение виджетов
    add_action( 'init', 'test_post_types' );
    add_action( 'init', 'price_post_types' );
    add_action( 'init', 'card_post_types' );
    add_action( 'init', 'work_post_types' );
	add_action('after_setup_theme','test_after_setup'); // добавляет новые возможности для темы подключение меню/миниатюр
	add_filter( 'show_admin_bar' , 'my_function_admin_bar');//убирает margin top 32px у тега html
	add_filter('wp_list_categories', 'change_cats_links');



//	function change_cats_links($text) {  //стилизация нумерации рубрик
//	    return str_replace(array('(',')'),
//		array('<span>','</span>'), $text);
//	}
//
//
	function test_after_setup () {
		register_nav_menus([
		'top' => 'header-menu',
		'section' => 'section-menu',
	]);
//		// register_nav_menu( 'top', 'header-menu' );
		add_theme_support( 'post-thumbnails' );
//		add_theme_support( 'title-tag' );
	}

	function test_media () {
		wp_enqueue_style ('style-main', get_stylesheet_uri(), array('bootstrap'));//основной файл стилей
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, null );//подключение bootstrap
		if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('slick', get_template_directory_uri() . "/assets/js/slick.js",array('jquery',) );
		wp_enqueue_script('arctic-modal', get_template_directory_uri() . "/assets/js/jquery.arcticmodal-0.3.min.js",array('jquery') );
		wp_enqueue_script('mainjs', get_template_directory_uri() . "/assets/js/main.js",array('jquery','arctic-modal','slick') );

	}


	}

//	function my_function_admin_bar(){ return false; }
//
	function name_widgetsFunc () {
        register_sidebar([
            'name' => 'Сотовый телефон"',
            'id' => 'phone-sot',
            'description' => 'Замена телефона',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => "</div>"
        ]);
        register_sidebar([
            'name' => 'Домашний телефон"',
            'id' => 'phone-home',
            'description' => 'Замена телефона'
        ]);
        register_sidebar([
            'name' => 'Логотип',
            'id' => 'logo',
            'description' => 'Замена логотипа',
            'before_widget' => '<a href="#header" >',
            'after_widget'  => "</a>"
        ]);

        register_sidebar([
            'name' => 'Заголовок секции "Главная"',
            'id' => 'title',
            'description' => 'Замена заголовка'
        ]);
        register_sidebar([
            'name' => 'Заголовок секции "О Компании"',
            'id' => 'title-s2',
            'description' => 'Замена заголовка',
            'before_widget' => '<div class="offer" >',
            'after_widget'  => "</div>"
        ]);
		register_sidebar([
            'name' => 'Текст секции "О компании"',
            'id' => 'section-2',
            'description' => 'Боковая панель',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => "</li>\n",
            'before_title'  => '<h5 class="cats__title">',
            'after_title'   => "</h5>\n",
	    ]);
        register_sidebar([
            'name' => 'Заголовок "Отзывы наших клиентов"',
            'id' => 'section-4',
            'description' => 'Боковая панель',
            'before_widget' => '<li id="%1$s" class="widget review-text %2$s">',
            'after_widget'  => "</li>\n",
            'before_title'  => '<h2 class="portfolio-title">',
            'after_title'   => "</h2>\n",
        ]);

        register_sidebar([
            'name' => 'Текст секции "Распростроненные проблемы"',
            'id' => 'section-3',
            'description' => 'Боковая панель',
            'before_widget' => '<li id="%1$s" class="widget portfolio-text %2$s">',
            'after_widget'  => "</li>\n",
            'before_title'  => '<h2 class="portfolio-title">',
            'after_title'   => "</h2>\n",
     ]);
            register_sidebar([
            'name' => 'Заголовок секции "Прайс"',
            'id' => 'title-price',
            'description' => 'Замена заголовка'
        ]);
        register_sidebar([
            'name' => 'Секция "Контакты"',
            'id' => 'contact',
            'description' => 'Замена заголовка'
        ]);

        register_sidebar([
            'name' => 'E-Mail №1"',
            'id' => 'mail-one',
            'description' => 'Замена email'
        ]);
        register_sidebar([
            'name' => 'E-Mail №2"',
            'id' => 'mail-two',
            'description' => 'Замена email'
        ]);
        register_sidebar([
            'name' => 'Форма обратной связи"',
            'id' => 'contact-form',
            'description' => 'form',
            'before_title'  => '<h5 class="portfolio-title">',
            'after_title'   => "</h5>\n",
            'before_widget' => '<div id="%1$s" class="form-send">',
            'after_widget'  => "</div>\n",
        ]);
        register_sidebar([
            'name' => 'Форма обратной связи для отзывов"',
            'id' => 'contact-form-send',
            'description' => 'form-send',
            'before_title'  => '<h5 class="form-title">',
            'after_title'   => "</h5>\n",
            'before_widget' => '<div id="%1$s" class="form-send-rw">',
            'after_widget'  => "</div>\n",
        ]);
        register_sidebar([
            'name' => 'Секция "Контакты"',
            'id' => 'contacts',
            'description' => 'Замена html'
        ]);
//        register_sidebar([
//        'name' => 'Отзывы',
//        'id' => 'slider',
//        'description' => 'Слайдер отзывов',
//        'before_title'  => '<h5 class="slider__title">',
//        'after_title'   => "</h5>\n",
//    ]);
//		register_sidebar([
//		'name' => 'автор',
//		'id' => 'author',
//		'description' => 'автор'
//	]);
}
//
function test_post_types(){
    register_post_type('reviews', [
        'labels' => [
            'name'               => 'Отзывы', // основное название для типа записи
            'singular_name'      => 'Отзыв', // название для одной записи этого типа
            'add_new'            => 'Добавить новый', // для добавления новой записи
            'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
            'new_item'           => 'Новый отзыв', // текст новой записи
            'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
            'search_items'       => 'Искать отзывы', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отзывы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-format-quote',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ]);
}

function test_show_reviews() {
    $args = [
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'reviews'
    ];

    $posts = get_posts($args);
    return $posts;
}

function price_post_types(){
    register_post_type('price', [
        'labels' => [
            'name'               => 'Прайсы', // основное название для типа записи
            'singular_name'      => 'Прайс', // название для одной записи этого типа
            'add_new'            => 'Добавить новый', // для добавления новой записи
            'add_new_item'       => 'Добавление прайса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование прайса', // для редактирования типа записи
            'new_item'           => 'Новая расценка', // текст новой записи
            'view_item'          => 'Смотреть расценку', // для просмотра записи этого типа.
            'search_items'       => 'Искать расценку', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Прайсы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 26,
        'menu_icon'           => 'dashicons-media-text',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ]);
}

function price_show_reviews() {
    $args = [
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'price'
    ];

    $posts = get_posts($args);
    return $posts;
}

function card_post_types(){
    register_post_type('card', [
        'labels' => [
            'name'               => 'Преймущества', // основное название для типа записи
            'singular_name'      => 'Преймущества', // название для одной записи этого типа
            'add_new'            => 'Добавить новую карточку', // для добавления новой записи
            'add_new_item'       => 'Добавление карточек', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование карточки', // для редактирования типа записи
            'new_item'           => 'Новая карточка', // текст новой записи
            'view_item'          => 'Смотреть карточку', // для просмотра записи этого типа.
            'search_items'       => 'Искать карточку', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Карточки', // название меню
        ],
        'public'              => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-thumbs-up',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ]);
}

function card_show_reviews() {
    $args = [
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'card'
    ];

    $posts = get_posts($args);
    return $posts;
}

function work_post_types(){
    register_post_type('work', [
        'labels' => [
            'name'               => 'Схема работы', // основное название для типа записи
            'singular_name'      => 'Шаг', // название для одной записи этого типа
            'add_new'            => 'Добавить новый шаг', // для добавления новой записи
            'add_new_item'       => 'Шаг Схемы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование ', // для редактирования типа записи
            'new_item'           => 'Новая карточка', // текст новой записи
            'view_item'          => 'Смотреть карточку', // для просмотра записи этого типа.
            'search_items'       => 'Искать карточку', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Схема работы', // название меню
        ],
        'public'              => true,
        'menu_position'       => 25,
        'menu_icon'           => 'dashicons-redo',
        'hierarchical'        => false,
        'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ]);
}

function work_show_reviews() {
    $args = [
        'orderby'     => 'date',
        'order'       => 'DESC',
        'post_type'   => 'work'
    ];

    $posts = get_posts($args);
    return $posts;
}



