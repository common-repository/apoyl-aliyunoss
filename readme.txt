=== [凹凸曼]自动同步阿里云对象存储OSS  ===
Contributors: apoyl
Donate link:
Tags: OSS,阿里云,对象存储,云存储,同步附件,同步图片,备份图片
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.9.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


设计理念，这是绿色无任何污染，可以随时关闭插件，实现手动同步和自动同步，让网站图片和附件自动同步到阿里云对象存储OSS,实现图片附件和网站代码分离，流量分流让网站打开速度更快.

== Description ==

设计理念，这是绿色无任何污染，可以随时关闭插件，实现手动同步和自动同步，让网站图片和附件自动同步到阿里云对象存储OSS,实现图片附件和网站代码分离，流量分流让网站打开速度更快.


## 功能概述

* 支持图片和附件同步到阿里云对象存储OSS（OSS Aliyun,同步图片附件到阿里云对象存储OSS）
* 支持选择所属地域 ，一一对应Bucket的地域
* 支持自定义Bucket名称
* 支持后台一键同步网站图片和附件
* 支持上传图片附件实时同步，无需人工干预 +
* 支持随时可以切换自己网站域名访问，防止阿里云云端挂掉，防止网络不通，防止不想要阿里云存储想换成其他的，随时可以切换回来
* 支持流量切换阿里云对象存储OSS
* 支持定义域名访问,Bucket域名或CDN加速域名
* 支持同步缩略图
* 支持调试，测试同步是否成功
* 支持兼容插件 [一键采集微信文章](https://wordpress.org/plugins/apoyl-grabweixin/)，采集回来的图片能自动同步到阿里云

以上功能部分免费,点击购买付费版：[凹凸曼插件](http://www.girltm.com/) 
也可以加开发者QQ：3201361925 email: 3201361925@qq.com


== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `apoyl-aliyunoss` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

方法一：
自己网站后台插件-》安装插件里搜索：凹凸曼 找到插件 自动同步阿里云对象存储OSS  安装即可

方法二：
1.上传apoyl-aliyunoss到你的站点目录下安装
2.通过WordPress插件菜单激活好插件

== Frequently Asked Questions ==

= wordpress网站是否能正常访问阿里云对象存储COS? =
当然需要。
= 如何使用 ? =
开启此插件后，需要自行到[阿里云对象存储OSS](https://www.aliyun.com/product/oss?source=5176.11533457&userCode=qua8s95c)控制台，右上角选中您的昵称-》AccessKey管理，获取AccessKey ID/AccessKey Secret填入后台
= 如何咨询我 ? =
加QQ：3201361925  E-mail：3201361925@qq.com   或者 点击购买：[凹凸曼插件](http://www.girltm.com/)

== Screenshots ==

1. 图片和附件在阿里云控制台截图
1. 图片和附件后台一键同步截图
2. 插件后台管理页截图

== Changelog ==
= 1.9.0 =
* 支持wp6.6

= 1.8.0 =
* 支持6.5
* 修复可能的问题

= 1.7.0 =
* 优化部分

= 1.6.0 =
* 兼容6.4

= 1.5.0 =
* 支持DEBUG调试
* 支持同步缩略图
* 支持兼容插件 [一键采集微信文章](https://wordpress.org/plugins/apoyl-grabweixin/)，采集回来的图片能自动同步到阿里云

= 1.4.0 =
* 更新API
* 修复可能的问题

= 1.3.0 =
* 兼容6.3

= 1.2.0 =
* 支持上传图片附件自动同步阿里云，无需人工干预 

= 1.1.0 =
* 支持流量切换阿里云对象存储OSS
* 支持定义域名访问,Bucket域名或CDN加速域名

= 1.0.0 =
* 支持图片和附件同步到阿里云对象存储OSS
* 支持选择所属地域 ，一一对应Bucket的地域 
* 支持自定义Bucket名称
* 支持后台一键同步网站图片和附件

更新相关文件


== Upgrade Notice ==
暂无
