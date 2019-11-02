<?php
/**
 * foodlife.shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package foodlife.shop
 */

if ( ! function_exists( 'foodlife_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function foodlife_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on foodlife.shop, use a find and replace
		 * to change 'foodlife' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'foodlife', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'foodlife' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'foodlife_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'foodlife_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function foodlife_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'foodlife_content_width', 640 );
}
add_action( 'after_setup_theme', 'foodlife_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function foodlife_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'foodlife' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'foodlife' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'foodlife_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function foodlife_scripts() {
	wp_enqueue_style( 'foodlife-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1' );
	wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/fontawesome.min.css', array(), '5.9.0' );
	wp_enqueue_style( 'lightbox-style', get_template_directory_uri() . '/css/lightbox.css', array(), '2.11.1' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.4.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
	wp_enqueue_script( 'jquery-mask', get_template_directory_uri() . '/js/jquery.mask.min.js', array(), '1.14.16', true );
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', array(), '2.11.1', true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array(), '2.11.1', true );
	wp_enqueue_script( 'foodlife', get_template_directory_uri() . '/js/foodlife.js', array(), '1.0.1', true );
	
	//wp_enqueue_script( 'foodlife-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'foodlife-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/
}
add_action( 'wp_enqueue_scripts', 'foodlife_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Полностью убираем версию WordPress
add_filter('the_generator', '__return_empty_string');
// Удаление параметра ver из добавляемых скриптов и стилей
function rem_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'rem_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );

/**
 * WC add to cart     
 * https://inprocess.by/blog/kak-vyvesti-korzinu-woocommerce-v-shapke-sajta/
 */
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');

function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn__counter badge badge-light p-1"><?php echo sprintf($woocommerce->cart->cart_contents_count); ?></span>
    <?php
    $fragments['.basket-btn__counter'] = ob_get_clean();
    return $fragments;
}

/**
* WC update cart quantity AJAX
*/
function enqueue_cart_qty_ajax() {

    wp_register_script( 'cart-qty-ajax-js', get_template_directory_uri() . '/js/cart-qty-ajax.js', array( 'jquery' ), '', true );
    wp_localize_script( 'cart-qty-ajax-js', 'cart_qty_ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_script( 'cart-qty-ajax-js' );

}
add_action('wp_enqueue_scripts', 'enqueue_cart_qty_ajax');
function ajax_qty_cart() {
    // Set item key as the hash found in input.qty name
    $cart_item_key = $_POST['hash'];
    // Get the array of values owned by the product we're updating
    $threeball_product_values = WC()->cart->get_cart_item( $cart_item_key );
    // Get the quantity of the item in the cart
    $threeball_product_quantity = apply_filters( 'woocommerce_stock_amount_cart_item', apply_filters( 'woocommerce_stock_amount', preg_replace( "/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT)) ), $cart_item_key );
    // Update cart validation
    $passed_validation  = apply_filters( 'woocommerce_update_cart_validation', true, $cart_item_key, $threeball_product_values, $threeball_product_quantity );
    // Update the quantity of the item in the cart
    if ( $passed_validation ) {
        WC()->cart->set_quantity( $cart_item_key, $threeball_product_quantity, true );
    }
    // Refresh the page
    echo do_shortcode( '[woocommerce_cart]' );
    die();
}
add_action('wp_ajax_qty_cart', 'ajax_qty_cart');
add_action('wp_ajax_nopriv_qty_cart', 'ajax_qty_cart');

// breadcrumbs
function the_breadcrumb(){
global $post;
if(!is_home()){ 
   echo '<li class="breadcrumb-item mx-2"><a href="'.site_url().'">Главная</a></li>'.' / ';
	if(is_single()){ // записи
	the_category(', ');
	//echo " / ";
	the_title();
	}
	elseif (is_page() || is_product()) { // страницы или продукты
		// if ниже переписать под WC - см. стр. 217
		if ($post->post_parent ) {
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();
			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<li class="breadcrumb-item mx-2"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			foreach ($breadcrumbs as $crumb) echo $crumb . ' / ';
		}
		//echo the_title();
		echo '<li class="breadcrumb-item active" aria-current="page">' . the_title() . '</li>';
	}
	/*elseif(is_product_category()) {
	    $parentcats = get_ancestors(21, 'product_cat');
        foreach($parentcats as $parentcat){
            echo $parentcat;
        }
	}*/
	elseif (is_category()) { // категории
		global $wp_query;
		$obj_cat = $wp_query->get_queried_object();
		$current_cat = $obj_cat->term_id;
		$current_cat = get_category($current_cat);
		$parent_cat = get_category($current_cat->parent);
		if ($current_cat->parent != 0) 
			echo (get_category_parents($parent_cat, TRUE, ' &amp;raquo; '));
		single_cat_title();
	}
	elseif (is_search()) { // страницы поиска
		echo 'Результаты поиска для "' . get_search_query() . '"';
	}
	elseif (is_tag()) { // теги (метки)
		echo single_tag_title('', false);
	}
	elseif (is_day()) { // архивы (по дням)
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
		echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> &amp;raquo; ';
		echo get_the_time('d');
	}
	elseif (is_month()) { // архивы (по месяцам)
		echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
		echo get_the_time('F');
	}
	elseif (is_year()) { // архивы (по годам)
		echo get_the_time('Y');
	}
	elseif (is_author()) { // авторы
		global $author;
		$userdata = get_userdata($author);
		echo 'Опубликовал(а) ' . $userdata->display_name;
	} elseif (is_404()) { // если страницы не существует
		echo 'Ошибка 404';
	}
 
	if (get_query_var('paged')) // номер текущей страницы
		echo ' (' . get_query_var('paged').'-я страница)';
 
} /*else { // главная
   $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
   if($pageNum>1)
      echo '<a href="'.site_url().'">Главная</a> &amp;raquo; '.$pageNum.'-я страница';
   else
      echo 'Вы находитесь на главной странице';
}*/
}

/**
 * получить детали заказа
 * http://qaru.site/questions/279620/how-to-get-woocommerce-order-details
*/
function get_order_details($order_id){

    // 1) Get the Order object
    $order = wc_get_order( $order_id );

    // OUTPUT
    echo '<h3>RAW OUTPUT OF THE ORDER OBJECT: </h3>';
    print_r($order);
    echo '<br><br>';
    echo '<h3>THE ORDER OBJECT (Using the object syntax notation):</h3>';
    echo '$order->order_type: ' . $order->order_type . '<br>';
    echo '$order->id: ' . $order->id . '<br>';
    echo '<h4>THE POST OBJECT:</h4>';
    echo '$order->post->ID: ' . $order->post->ID . '<br>';
    echo '$order->post->post_author: ' . $order->post->post_author . '<br>';
    echo '$order->post->post_date: ' . $order->post->post_date . '<br>';
    echo '$order->post->post_date_gmt: ' . $order->post->post_date_gmt . '<br>';
    echo '$order->post->post_content: ' . $order->post->post_content . '<br>';
    echo '$order->post->post_title: ' . $order->post->post_title . '<br>';
    echo '$order->post->post_excerpt: ' . $order->post->post_excerpt . '<br>';
    echo '$order->post->post_status: ' . $order->post->post_status . '<br>';
    echo '$order->post->comment_status: ' . $order->post->comment_status . '<br>';
    echo '$order->post->ping_status: ' . $order->post->ping_status . '<br>';
    echo '$order->post->post_password: ' . $order->post->post_password . '<br>';
    echo '$order->post->post_name: ' . $order->post->post_name . '<br>';
    echo '$order->post->to_ping: ' . $order->post->to_ping . '<br>';
    echo '$order->post->pinged: ' . $order->post->pinged . '<br>';
    echo '$order->post->post_modified: ' . $order->post->post_modified . '<br>';
    echo '$order->post->post_modified_gtm: ' . $order->post->post_modified_gtm . '<br>';
    echo '$order->post->post_content_filtered: ' . $order->post->post_content_filtered . '<br>';
    echo '$order->post->post_parent: ' . $order->post->post_parent . '<br>';
    echo '$order->post->guid: ' . $order->post->guid . '<br>';
    echo '$order->post->menu_order: ' . $order->post->menu_order . '<br>';
    echo '$order->post->post_type: ' . $order->post->post_type . '<br>';
    echo '$order->post->post_mime_type: ' . $order->post->post_mime_type . '<br>';
    echo '$order->post->comment_count: ' . $order->post->comment_count . '<br>';
    echo '$order->post->filter: ' . $order->post->filter . '<br>';
    echo '<h4>THE ORDER OBJECT (again):</h4>';
    echo '$order->order_date: ' . $order->order_date . '<br>';
    echo '$order->modified_date: ' . $order->modified_date . '<br>';
    echo '$order->customer_message: ' . $order->customer_message . '<br>';
    echo '$order->customer_note: ' . $order->customer_note . '<br>';
    echo '$order->post_status: ' . $order->post_status . '<br>';
    echo '$order->prices_include_tax: ' . $order->prices_include_tax . '<br>';
    echo '$order->tax_display_cart: ' . $order->tax_display_cart . '<br>';
    echo '$order->display_totals_ex_tax: ' . $order->display_totals_ex_tax . '<br>';
    echo '$order->display_cart_ex_tax: ' . $order->display_cart_ex_tax . '<br>';
    echo '$order->formatted_billing_address->protected: ' . $order->formatted_billing_address->protected . '<br>';
    echo '$order->formatted_shipping_address->protected: ' . $order->formatted_shipping_address->protected . '<br><br>';
    echo '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br><br>';

    // 2) Get the Order meta data
    $order_meta = get_post_meta($order_id);

    echo '<h3>RAW OUTPUT OF THE ORDER META DATA (ARRAY): </h3>';
    print_r($order_meta);
    echo '<br><br>';
    echo '<h3>THE ORDER META DATA (Using the array syntax notation):</h3>';
    echo '$order_meta[_order_key][0]: ' . $order_meta[_order_key][0] . '<br>';
    echo '$order_meta[_order_currency][0]: ' . $order_meta[_order_currency][0] . '<br>';
    echo '$order_meta[_prices_include_tax][0]: ' . $order_meta[_prices_include_tax][0] . '<br>';
    echo '$order_meta[_customer_user][0]: ' . $order_meta[_customer_user][0] . '<br>';
    echo '$order_meta[_billing_first_name][0]: ' . $order_meta[_billing_first_name][0] . '<br><br>';
    echo 'And so on ……… <br><br>';
    echo '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br><br>';

    // 3) Get the order items
    $items = $order->get_items();

    echo '<h3>RAW OUTPUT OF THE ORDER ITEMS DATA (ARRAY): </h3>';

    foreach ( $items as $item_id => $item_data ) {

        echo '<h4>RAW OUTPUT OF THE ORDER ITEM NUMBER: '. $item_id .'): </h4>';
        print_r($item_data);
        echo '<br><br>';
        echo 'Item ID: ' . $item_id. '<br>';
        echo '$item_data["product_id"] <i>(product ID)</i>: ' . $item_data['product_id'] . '<br>';
        echo '$item_data["name"] <i>(product Name)</i>: ' . $item_data['name'] . '<br>';

        // Using get_item_meta() method
        echo 'Item quantity <i>(product quantity)</i>: ' . $order->get_item_meta($item_id, '_qty', true) . '<br><br>';
        echo 'Item line total <i>(product quantity)</i>: ' . $order->get_item_meta($item_id, '_line_total', true) . '<br><br>';
        echo 'And so on ……… <br><br>';
        echo '- - - - - - - - - - - - - <br><br>';
    }
    echo '- - - - - - E N D - - - - - <br><br>';
}

// фильтруем поля оформления заказа
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
// Все $fields пропущены через фильтр
function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);
    //unset($fields['billing']['billing_email']);
    //unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    
    unset( $fields['billing']['billing_address_1']['validate']);
    
    $fields['billing']['billing_first_name'] = array(
    	'label'     => __('First name', 'woocommerce'),
        //'label'       => true,
		'placeholder' => $fields['billing']['billing_first_name']['label'],
		'class'       => array('form-group'),
		'input_class' => array('form-control','form-control-lg', 'ym-disable-keys'),
		'required'    => true,
        'clear'     => true,
        'priority'  => 10,
     );
    
     $fields['billing']['billing_phone'] = array(
        'label'     => __('Phone', 'woocommerce'),
		'placeholder' => $fields['billing']['billing_phone']['label'],
		'class'       => array('form-group'),
		'input_class' => array('form-control','form-control-lg', 'ym-disable-keys'),
		'required'    => true,
        'clear'     => true,
        'priority'  => 20,
     );
     $fields['billing']['billing_email'] = array(
        'label'     => __('Email', 'woocommerce'),
		'placeholder' => $fields['billing']['billing_email']['label'],
		'class'       => array('form-group'),
		'input_class' => array('form-control','form-control-lg', 'ym-disable-keys'),
		'required'    => true,
        'clear'     => true,
        'priority'  => 30,
     );
     $fields['billing']['billing_address_1'] = array(
        'label'     => 'Адрес доставки',
		'placeholder' => 'Адрес доставки',
		'class'       => array('form-group'),
		'input_class' => array('form-control','form-control-lg', 'ym-disable-keys'),
		'required'    => true,
        'clear'     => true,
        'priority'  => 40,
     );
     $fields['billing']['billing_country'] = array(
        'label'       => false,
        'placeholder' => $fields['billing']['billing_country']['label'],
		'class'       => array('form-group','d-none'),
		'input_class' => array('form-control','form-control-lg', 'ym-disable-keys'),
		'required'    => true,
        'priority'  => 50,
     ); 
    
    /*$fields['billing']['billing_first_name'] = array(
        'label'     => __('Phone', 'woocommerce'),
        'label'     => false,
        'placeholder'   => _x('Имя', 'placeholder', 'woocommerce'),
        'required'  => true,
        'class'     => array('form-control','form-control-lg'),
        'style'     => array('border:1px red solid;'),
        'clear'     => true,
        'priority'  => 10,
     );
    */
    
    return $fields;
}

/*
	Настройка полей формы заказа
	https://rudrastyh.com/woocommerce/checkout-fields.html
*/
// disable validation
/*add_filter( 'woocommerce_checkout_fields' , 'mihail_disable_address_fields_validation' );
 
function mihail_disable_address_fields_validation( $fields ) {
 
	unset( $fields['billing']['billing_email']['validate']);
	unset( $fields['billing']['billing_address_1']['validate']);
 
	return $fields;
 
}*/

// disable required
/*add_filter( 'woocommerce_checkout_fields' , 'mihail_disable_required_fields' );
 
function mihail_disable_required_fields( $fields ) {
 
	unset( $fields['billing']['billing_email']['required']);
	unset( $fields['billing']['billing_address_1']['required']);
 
	return $fields;
 
}*/

