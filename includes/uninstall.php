<?php
/*
 * @link       http://www.girltm.com/
 * @since      1.0.0
 * @package    APOYL_ALIYUNOSS
 * @subpackage APOYL_ALIYUNOSS/includes
 * @author     凹凸曼 <jar-c@163.com>
 *
 */
class Apoyl_Aliyunoss_Uninstall {

	
	public static function uninstall() {
	    global $wpdb;
        delete_option('apoyl-aliyunoss-settings');
	}

}