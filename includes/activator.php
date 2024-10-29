<?php

/*
 * @link http://www.girltm.com/
 * @since 1.0.0
 * @package APOYL_ALIYUNOSS
 * @subpackage APOYL_ALIYUNOSS/includes
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
class Apoyl_Aliyunoss_Activator
{

    public static function activate()
    {
        $options_name = 'apoyl-aliyunoss-settings';
        $arr_options = array(
            'open' => 1,
            'accessid' => '',
            'secretkey' => '',
            'region' => '',
            'bucket' => '',
            'openauto' => 0,
            'domain' => '',
            'openchgoss'=>0,
            'opensmall'=>0,
            'opendebug'=>1,
        );
        add_option($options_name, $arr_options);
    }

    public static function install_db()
    {
    	global $wpdb;
    	$apoyl_aliyunoss_db_version = APOYL_ALIYUNOSS_VERSION;
    	$tablename = $wpdb->prefix . 'apoyl_aliyunoss';
    	$ishave = $wpdb->get_var('show tables like \'' . $tablename . '\'');
        $sql='';
    	if ($tablename != $ishave) {
    		$sql = "CREATE TABLE " . $tablename . " (
                      `id`	bigint(20) NOT NULL AUTO_INCREMENT,
                      `pid` bigint(20) NOT NULL default '0',
                      `key` varchar(200) NOT NULL,
                      `pstatus` tinyint(1) NOT NULL default '0',
                      `msgs` varchar(200) NOT NULL,
                      `addtime` int(10) NOT NULL default '0',
                      PRIMARY KEY (`id`),
                      KEY `addtime` (`addtime`),
                      KEY `pid` (`pid`)
                    );";
    	}
    	
    	include_once ABSPATH . 'wp-admin/includes/upgrade.php';
    	dbDelta($sql);
    	add_option('apoyl_aliyunoss_db_version', $apoyl_aliyunoss_db_version);
    }
}
?>