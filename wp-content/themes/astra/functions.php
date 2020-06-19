<?php

/**

 * Astra functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package Astra

 * @since 1.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}



/**

 * Define Constants

 */

define( 'ASTRA_THEME_VERSION', '2.4.5' );

define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );

define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );

define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );





/**

 * Minimum Version requirement of the Astra Pro addon.

 * This constant will be used to display the notice asking user to update the Astra addon to latest version.

 */

define( 'ASTRA_EXT_MIN_VER', '2.5.0' );



/**

 * Setup helper functions of Astra.

 */

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';

require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';



/**

 * Update theme

 */

require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';

require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';

require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';





/**

 * Fonts Files

 */

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';

if ( is_admin() ) {

	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';

}



require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';



require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';



/**

 * Custom template tags for this theme.

 */

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';

require_once ASTRA_THEME_DIR . 'inc/template-tags.php';



require_once ASTRA_THEME_DIR . 'inc/widgets.php';

require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';

require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';

require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';



/**

 * Markup Functions

 */

require_once ASTRA_THEME_DIR . 'inc/extras.php';

require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';

require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';

require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**

 * Markup Files

 */

require_once ASTRA_THEME_DIR . 'inc/template-parts.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';



/**

 * Functions and definitions.

 */

require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';



// Required files.

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';



require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';



if ( is_admin() ) {



	/**

	 * Admin Menu Settings

	 */

	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';

	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';



	/**

	 * Metabox additions.

	 */

	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

}



// BSF Analytics library.

require_once ASTRA_THEME_DIR . 'admin/bsf-analytics/class-bsf-analytics.php';



require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';





/**

 * Customizer additions.

 */

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';





/**

 * Compatibility

 */

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';

require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';

require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';

require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';

require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';

require_once ASTRA_THEME_DIR . 'inc/class-astra-filesystem.php';



// Elementor Compatibility requires PHP 5.4 for namespaces.

if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {

	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';

	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';

}



// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.

if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {

	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';

}



/**

 * Load deprecated functions

 */

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';

require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';





/**

 * 模板兔添加

 */

add_action('woocommerce_after_shop_loop_item', 'mbt_woo_acf_metas', 15);

function mbt_woo_acf_metas(){

	global $post;

	$product_cat = get_the_terms($post->ID,'product_cat');

	if($product_cat){

		$acf_metas = get_term_meta($product_cat[0]->term_id,'acf_metas',true);

		if($acf_metas){
			$arr = json_decode($acf_metas);
			$attr_length = count($arr);
			if($attr_length > 0){
			  echo '<div class="woo-acf-metas">';
			  foreach ($arr as $value) {
			  		$className=$value->class;
			  		if($className){
			  			echo '<div class="acf-item ' . $className .'">';
			  		}else{
			  			echo '<div class="acf-item">';
			  		}
			      
			      echo '<div class="item-key">';
			      echo $value->key_content;
			      echo '</div>';
			      
			      $value_content = $value->value_content;

			      $pattern='/_(.*?)_/s';
			      preg_match_all($pattern, $value_content, $matches);
			      $variable_count = count($matches[1]);
			      for ($i = 0; $i < $variable_count; $i++) {
			        $trimed_str = $matches[1][$i];
			        $original_str = $matches[0][$i];
			        $new_str = get_post_meta($post->ID,$trimed_str,true);;
			        $value_content = str_replace($original_str,$new_str,$value_content);
			      }
			      echo '<div class="item-value">';
			      echo $value_content;
			      echo '</div>';
			              
			      echo '</div>';
			  }
			  echo '</div>';
			}

		}

	}

}



add_action('product_cat_add_form_fields','mbt_product_cat_add_category_field',10,2); 

function mbt_product_cat_add_category_field(){

	echo '<div class="form-field">  

            <label for="acf_metas">ACF metas</label>  

            <textarea name="acf_metas" id="acf_metas" type="text" rows="4"></textarea>

            <p>名称,别名，多个用|隔开。例如：productmodel,Model|productlength,Length</p>  

          </div>';

}



add_action('product_cat_edit_form_fields','mbt_product_cat_edit_category_field',10,2);
// admin 编辑
function mbt_product_cat_edit_category_field($tag){ 

	echo '<tr class="form-field">  

            <th scope="row"><label for="acf_metas">ACF metas</label></th>  

            <td>  

                <textarea name="acf_metas" id="acf_metas" type="text" rows="4">';  

                echo get_term_meta($tag->term_id,'acf_metas',true).'</textarea><br>  

                <code class="cat-color">
                	[
										{
										 "key_content": "Model",
										 "value_content": "_productmodel_"
										},
										{
										 "key_content": "Dimension",
										 "value_content": "_productlenght_ * _productwidth_ * _productheight_"
										}
									]
                </code>  

            </td>  

        </tr>'; 

}



add_action('created_product_cat','mbt_product_cat_metadate_edited',10,1);  

add_action('edited_product_cat','mbt_product_cat_metadate_edited',10,1);

function mbt_product_cat_metadate_edited($term_id){  

	update_term_meta($term_id,'acf_metas',$_POST['acf_metas']);

}