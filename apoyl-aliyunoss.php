<?php
/*
 * Plugin Name: apoyl-aliyunoss
 * Plugin URI: http://www.girltm.com/
 * Description: 设计理念，这是绿色无任何污染，可以随时关闭插件，实现手动同步和自动同步，让网站图片和附件自动同步到阿里云对象存储OSS,实现图片附件和网站代码分离，流量分流让网站打开速度更快.
 * Version:     1.9.0
 * Author:      凹凸曼
 * Author URI:  http://www.girltm.com/
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: apoyl-aliyunoss
 * Domain Path: /languages
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
define('APOYL_ALIYUNOSS_VERSION','1.9.0');
define('APOYL_ALIYUNOSS_PLUGIN_FILE',plugin_basename(__FILE__));
define('APOYL_ALIYUNOSS_URL',plugin_dir_url( __FILE__ ));
define('APOYL_ALIYUNOSS_DIR',plugin_dir_path( __FILE__ ));

function activate_apoyl_aliyunoss(){
    require plugin_dir_path(__FILE__).'includes/activator.php';
    Apoyl_Aliyunoss_Activator::activate();
    Apoyl_Aliyunoss_Activator::install_db();
}
register_activation_hook(__FILE__, 'activate_apoyl_aliyunoss');

function uninstall_apoyl_aliyunoss(){
    require plugin_dir_path(__FILE__).'includes/uninstall.php';
    Apoyl_Aliyunoss_Uninstall::uninstall();
}

register_uninstall_hook(__FILE__,'uninstall_apoyl_aliyunoss');

require plugin_dir_path(__FILE__).'includes/aliyunoss.php';

function apoyl_aliyunoss_file($filename)
{
	$file = WP_PLUGIN_DIR . '/apoyl-common/v1/apoyl-aliyunoss/components/' . $filename . '.php';
	if (file_exists($file))
		return $file;
		return '';
}
function run_apoyl_aliyunoss(){
    $plugin=new APOYL_ALIYUNOSS();
    $plugin->run();
}
run_apoyl_aliyunoss();
?>