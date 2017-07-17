<?php
function china_setup(){
	load_theme_textdomain('china');
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
		'height' => 85,
		'width' => 225,
		'flex-height' => true,
		'flex-width'  => true
	));

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(440, 331.484);

	add_theme_support('html5', array(
		'search_form',
		'commrnt-form',
		'comment-list',
		'gallery',
		'caption'
	));

	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'gallery'
	));

	//add_theme_support('menus');
	register_nav_menu('primary','Primary menu');
}

add_action('after_setup_theme','china_setup');

function chinatheme_scripts() {
	
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid-3.3.1.min.css' );
	wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font.css' );
	wp_enqueue_style( 'icon', get_template_directory_uri() . '/css/icon.css' );
	wp_enqueue_style( 'jquery-fancy-min', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'style-min', get_template_directory_uri() . '/css/style-min.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'header-scss', get_template_directory_uri() . '/scss/_header.scss' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jqu', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');
	wp_enqueue_script( 'jquery-elevate', get_template_directory_uri() . '/js/jquery.elevateZoom-3.0.8.min.js');
	wp_enqueue_script( 'jquery-fancy-min', get_template_directory_uri() . '/js/jquery.fancybox.min.js');

	wp_enqueue_script( 'bootstrapmin-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js');
	wp_enqueue_script( 'slickmin-js', get_template_directory_uri() . '/js/slick.min.js');

	




	//<script src="js/jquery-2.1.4.min.js"></script>
	//<script src="js/bootstrap.min.js"></script>
	//<script src="js/slick.min.js"></script>
	//<script src="js/common.js"></script>
}
add_action( 'wp_enqueue_scripts', 'chinatheme_scripts' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function chinatheme_customize_register( $wp_customize ) {

  $wp_customize->add_setting( 'footer_thx' , array(
    'default'   => __('Thank You for Visiting our Site! I’ll be back soon', 'chinatheme'),
    'transport' => 'refresh',
) );

  $wp_customize->add_setting( 'skype_social' , array(
    'default'   => __('skype:nikname?chat', 'chinatheme'),
    'transport' => 'refresh',
) );

  $wp_customize->add_setting( 'viber_social' , array(
    'default'   => __('viber://chat?number=+120345678910', 'chinatheme'),
    'transport' => 'refresh',
) );

  $wp_customize->add_setting( 'whatsapp_social' , array(
    'default'   => __('whatsapp://send?phone=+120345678910', 'chinatheme'),
    'transport' => 'refresh',
) );

  $wp_customize->add_setting( 'footer_phone' , array(
    'default'   => __('+852 66081572', 'chinatheme'),
    'transport' => 'refresh',
) );      

  $wp_customize->add_section( 'footer_section' , array(
    'title'      => __( 'Footer message and social', 'chinatheme' ),
    'priority'   => 30,
) );

  $wp_customize->add_control(
	'footer_thx', 
	array(
		'label'    => __( 'Message in footer', 'chinatheme' ),
		'section'  => 'footer_section',
		'settings' => 'footer_thx',
		'type'     => 'text',
	)
);

  $wp_customize->add_control(
	'skype_social', 
	array(
		'label'    => __( 'Skype', 'chinatheme' ),
		'section'  => 'footer_section',
		'settings' => 'skype_social',
		'type'     => 'text',
	)
);

 $wp_customize->add_control(
	'viber_social', 
	array(
		'label'    => __( 'Viber', 'chinatheme' ),
		'section'  => 'footer_section',
		'settings' => 'viber_social',
		'type'     => 'text',
	)
);

 $wp_customize->add_control(
	'whatsapp_social', 
	array(
		'label'    => __( 'WhatsApp', 'chinatheme' ),
		'section'  => 'footer_section',
		'settings' => 'whatsapp_social',
		'type'     => 'text',
	)
);

 $wp_customize->add_control(
	'footer_phone', 
	array(
		'label'    => __( 'Phone', 'chinatheme' ),
		'section'  => 'footer_section',
		'settings' => 'footer_phone',
		'type'     => 'text',
	)
);

}
add_action( 'customize_register', 'chinatheme_customize_register' );


function wp_bootstrap_pagination( $args = array() ) {
    
    $defaults = array(
        'range'           => 2,
        'custom_query'    => FALSE,
        'previous_string' => __( 'Previous', 'text-domain' ),
        'next_string'     => __( 'Next', 'text-domain' ),
        'before_output'   => '<ul class="pagination">',
        'after_output'    => '</ul>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    $firstpage = esc_attr( get_pagenum_link(1) );
    
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'Previous', 'text-domain') . '">' . Prev . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%2d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="next"><a href="' . $lastpage . '">' . __( 'Last', 'text-domain' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}





 




/*
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
*/

function chinatheme_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Home'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<ul>'; // открывающий тег обертки
  $wrap_after = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = ''; // разделитель между "крошками"
  $sep_before = ''; // тег перед разделителем
  $sep_after = ''; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<li><a>'; // тег перед текущей "крошкой"
  $after = '</a></li>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link_before = '<li><a itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link_after = '</a></li>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '';
  $link_in_after = '';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo $home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
}

/**/
function true_duplicate_post_as_draft(){
	global $wpdb;


	if (! ( isset( $_GET['archive-list']) || isset( $_POST['archive-list'])  || ( isset($_REQUEST['archive-list']) && 'true_duplicate_post_as_draft' == $_REQUEST['archive-list'] ) ) ) {
		wp_die('Нечего дублировать!');
	}
 
	/*
	 * получаем ID оригинального поста
	 */
	$post_id = (isset($_GET['archive-list']) ? $_GET['archive-list'] : $_POST['archive-list']);
	/*
	 * а затем и все его данные
	 */

	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * массив данных нового поста
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * создаем пост при помощи функции wp_insert_post()
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * дублируем все произвольные поля
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * и наконец, перенаправляем пользователя на страницу редактирования нового поста
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
	}
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
	}
	return $actions;
}
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
add_filter( 'archive-list_row_actions', 'true_duplicate_post_link', 10, 2 );
add_filter( 'archive-blog_row_actions', 'true_duplicate_post_link', 10, 2 );

register_post_type( 'archive-list', 
array( 
'labels' => array( 
'name' => __('Catalog'), 
'singular_name' => __('Catalog', 'golf'), 
'menu_name' => __('Catalog', 'golf'), 
'add_new' => __('Add Catalog', 'golf'), 
'add_new_item' => __('Создание', 'golf'), 
'edit' => __('Редактировать', 'golf'), 
'edit_item' => __('Редактировать', 'golf'), 
'new_item' => __('Новая', 'golf'), 
'view' => __('Показать', 'golf'), 
'view_item' => __('Показать', 'golf'), 
'search_items' => __('Искать', 'golf'), 
'not_found' => __('Информация не найдена', 'golf'), 
'not_found_in_trash' => __('В корзине информация не найдена', 'golf'), 
'parent' => __('Parent Products', 'golf'), 
'has_archive' => true 
), 
'public' => true, 
'has_archive' => true, 
'rewrite' => array( 'slug' => 'catalog', 'with_front' => false ), 
'hierarchical' => true, 
'supports' => array( 
'page-attributes', 
'title', 
'author', 
'excerpt', 
'editor', 
'thumbnail', 
'comments', 

) 
) 
);

register_post_type( 'archive-blog', 
array( 
'labels' => array( 
'name' => __('Blog', 'golf'), 
'singular_name' => __('Blog', 'golf'), 
'menu_name' => __('Blog', 'golf'), 
'add_new' => __('Add Blog', 'golf'), 
'add_new_item' => __('Создание', 'golf'), 
'edit' => __('Редактировать', 'golf'), 
'edit_item' => __('Редактировать', 'golf'), 
'new_item' => __('Новая', 'golf'), 
'view' => __('Показать', 'golf'), 
'view_item' => __('Показать', 'golf'), 
'search_items' => __('Искать', 'golf'), 
'not_found' => __('Информация не найдена', 'golf'), 
'not_found_in_trash' => __('В корзине информация не найдена', 'golf'), 
'parent' => __('Parent Products', 'golf'), 
'has_archive' => true 
), 
'public' => true, 
'has_archive' => true, 
'rewrite' => array( 'slug' => 'blog', 'with_front' => false ), 
'hierarchical' => true, 
'supports' => array( 
'page-attributes', 
'title', 
'author', 
'excerpt', 
'editor', 
'thumbnail', 
'comments', 

) 
) 
);



function customize_wp_bootstrap_pagination($args) {
    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';
    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');