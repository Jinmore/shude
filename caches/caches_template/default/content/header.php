<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- DEVELOPED BY WZ010.NET 网站建设与技术支持：龙鼎腾信 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
	<meta name="description" content="<?php echo $SEO['description'];?>">
    <link href="<?php echo CSS_PATH;?>default/base.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>default/css.css">
    <link href="<?php echo CSS_PATH;?>default/index.css" rel="stylesheet" type="text/css">
    <script src="<?php echo JS_PATH;?>default/jquery-3.1.0.min.js"></script>
    <script src="<?php echo JS_PATH;?>default/Validform_v5.3.2_min.js"></script>
    <script src="<?php echo JS_PATH;?>default/slider.js"></script>
    <!--<script src="<?php echo JS_PATH;?>default/jwplayer5.7.min.js"></script>-->
    <script src="<?php echo JS_PATH;?>default/base.js"></script>
    <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<?php include template("content","check"); ?>
</head>
<?php include template("content","dm"); ?>