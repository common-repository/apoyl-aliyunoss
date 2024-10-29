<?php
/*
 * @link http://www.girltm.com
 * @since 1.0.0
 * @package Apoyl_Aliyunoss
 * @subpackage Apoyl_Aliyunoss/public/partials
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ($arr['domain']&&$arr['openchgoss']) {
	$file=apoyl_aliyunoss_file('cdn');
	 if($file){
		include $file;
	 }
}

?>