<?php
/*
 * @link http://www.girltm.com
 * @since 1.0.0
 * @package APOYL_ALIYUNOSS
 * @subpackage APOYL_ALIYUNOSS/admin/partials
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
if (! empty($_POST['submit']) && check_admin_referer('apoyl-aliyunoss-settings', '_wpnonce')) {
    
    $arr_options = array(
    	'open' => isset ( $_POST ['open'] ) ? ( int ) sanitize_key ( $_POST ['open'] ) :  0,
        'accessid' => sanitize_text_field($_POST['accessid']),
        'secretkey' => sanitize_text_field($_POST['secretkey']),
        'region' => sanitize_text_field($_POST['region']),
        'bucket' => sanitize_text_field($_POST['bucket']),
    	'openauto' => isset ( $_POST ['openauto'] ) ? ( int ) sanitize_key ( $_POST ['openauto'] ) :  0,
        'domain' => sanitize_text_field($_POST['domain']),
    	'openchgoss' => isset ( $_POST ['openchgoss'] ) ? ( int ) sanitize_key ( $_POST ['openchgoss'] ) :  0,
        'opensmall' => isset ( $_POST ['opensmall'] ) ? ( int ) sanitize_key ( $_POST ['opensmall'] ) :  0,
        'opendebug' => isset ( $_POST ['opendebug'] ) ? ( int ) sanitize_key ( $_POST ['opendebug'] ) :  0
    );
    
    $updateflag = update_option($options_name, $arr_options);
    $updateflag = true;
}
$arr = get_option($options_name);

?>
    <?php if( !empty( $updateflag ) ) { echo '<div id="message" class="updated fade"><p>' . __('updatesuccess','apoyl-aliyunoss') . '</p></div>'; } ?>

<div class="wrap">
<?php   require_once APOYL_ALIYUNOSS_DIR . 'admin/partials/nav.php';?>
	<form
		action="<?php echo admin_url('options-general.php?page=apoyl-aliyunoss-settings');?>"
		name="settings-apoyl-aliyunoss" method="post">
		<table class="form-table">
			<tbody>
				<tr>
					<th><label><?php _e('open','apoyl-aliyunoss'); ?></label></th>
					<td><input type="checkbox" class="regular-text" value="1" id="open"
						name="open" <?php checked( '1', $arr['open'] ); ?>>
    					<?php _e('open_desc','apoyl-aliyunoss'); ?>
    					</td>
				</tr>
				<tr>
					<th><label><?php _e('accessid','apoyl-aliyunoss'); ?></label></th>
					<td><input type="text" class="regular-text"
						value="<?php echo esc_attr($arr['accessid'])?>" id="accessid"
						name="accessid">
    					<?php _e('accessid_desc','apoyl-aliyunoss'); ?>
    					</td>
				</tr>
				<tr>
					<th><label><?php _e('secretkey','apoyl-aliyunoss'); ?></label></th>
					<td><input type="text" class="regular-text"
						value="<?php echo esc_attr($arr['secretkey'])?>" id="secretkey"
						name="secretkey">
    					<?php _e('secretkey_desc','apoyl-aliyunoss'); ?>
    					</td>
				</tr>
				<tr>
					<th><label><?php _e('region','apoyl-aliyunoss'); ?></label></th>
					<td><select name="region" id="region">
						<?php $this->region_select($arr['region']);?>
						</select>
    					<?php _e('region_desc','apoyl-aliyunoss'); ?>
    					</td>
				</tr>
				<tr>
					<th><label><?php _e('bucket','apoyl-aliyunoss'); ?></label></th>
					<td><input type="text" class="regular-text"
						value="<?php echo esc_attr($arr['bucket'])?>" id="bucket"
						name="bucket">
    					<?php _e('bucket_desc','apoyl-aliyunoss'); ?>
    					</td>
				</tr>
				<tr>
					<th><label><?php _e('openauto','apoyl-aliyunoss'); ?></label></th>
					<td><input type="checkbox" class="regular-text" value="1"
						id="openauto" name="openauto"
						<?php checked( '1', $arr['openauto'] ); ?>>
    					<?php _e('openauto_desc','apoyl-aliyunoss'); ?>--<strong><?php _e('calldev_desc','apoyl-aliyunoss'); ?></strong>
					</td>
				</tr>
				<tr>
					<th><label><?php _e('domain','apoyl-aliyunoss'); ?></label></th>
					<td><input type="text" class="regular-text"
						value="<?php echo esc_attr($arr['domain'])?>" id="domain"
						name="domain">
    					<?php _e('domain_desc','apoyl-aliyunoss'); ?>--<strong><?php _e('calldev_desc','apoyl-aliyunoss'); ?></strong>
					</td>
				</tr>
				<tr>
					<th><label><?php _e('openchgoss','apoyl-aliyunoss'); ?></label></th>
					<td><input type="checkbox" class="regular-text" value="1"
						id="openchgoss" name="openchgoss"
						<?php checked( '1', $arr['openchgoss'] ); ?>>
    					<?php _e('openchgoss_desc','apoyl-aliyunoss'); ?>--<strong><?php _e('calldev_desc','apoyl-aliyunoss'); ?></strong>
					</td>
				</tr>
				<tr>
					<th><label><?php _e('opensmall','apoyl-aliyunoss'); ?></label></th>
					<td><input type="checkbox" class="regular-text" value="1"
						id="opensmall" name="opensmall"
						<?php if(isset($arr['opensmall'])) checked( '1', $arr['opensmall'] ); ?>>
    					<?php _e('opensmall_desc','apoyl-aliyunoss'); ?>--<strong><?php _e('calldev_desc','apoyl-aliyunoss'); ?></strong>
					</td>
				</tr>
				<tr>
					<th><label><?php _e('opendebug','apoyl-aliyunoss'); ?></label></th>
					<td><input type="checkbox" class="regular-text" value="1"
						id="opendebug" name="opendebug"
						<?php if(isset($arr['opendebug'])) checked( '1', $arr['opendebug'] ); ?>>
    					<?php _e('opendebug_desc','apoyl-aliyunoss'); ?>
					</td>
				</tr>
			</tbody>
		</table>
                <?php
                wp_nonce_field("apoyl-aliyunoss-settings");
                submit_button();
                ?>
               
    </form>
</div>