<?php
/*
 * @link http://www.girltm.com/
 * @since 1.0.0
 * @package APOYL_ALIYUNOSS
 * @subpackage APOYL_ALIYUNOSS/api
 * @author 凹凸曼 <jar-c@163.com>
 *
 */
require APOYL_ALIYUNOSS_DIR . 'api/aliyun-oss-php-sdk-2.6.0/autoload.php';

use OSS\OssClient;
use OSS\Core\OssException;

class ApoylAliyunossCom
{

    public function __construct($cache)
    {
        $this->cache = $cache;
    }

    public function putObj($attachment)
    {
        try {
          
            $endpoint = $this->cache['region'] . '.aliyuncs.com';
            $ossClient = new OssClient($this->cache['accessid'], $this->cache['secretkey'], $endpoint);
            $key = $attachment;
            $srcPath = WP_CONTENT_DIR . '/' . $attachment;
            $result = $ossClient->uploadFile($this->cache['bucket'], $key, $srcPath);
  
            if (isset($result['info']))
                return '';
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
?>