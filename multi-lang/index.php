<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query = "select * from tbl_multi_lang";
$result = $db_handle->runquery($query);
?>
<?php
// include language configuration file based on selected language
$lang = "zh";
if(isset($_GET['lang'])){ 
	$lang = $_GET['lang']; 
} 
require_once("lang.".$lang.".php");
?>
<html>
<head>
<title>Translator</title>
<style>
body {
    font-family: calibri;
	width:550px;
}
.language-header{
	height:50px;
	border-bottom:#3d6371 2px solid;
}
.demo-page-title{
	float: left;
    padding: 10px;
    color: #3d6371;
    font-size: 1.5em;
}
.language-link{
	text-align:right;
	padding-top: 15px;
	padding-right: 15px;
	color: #6aa8bf;
}
.language-link-item {
	text-decoration:none;
	color: #6aa8bf;
}
.demo-row-data{
	padding-top:20px; 
	border-bottom:1px solid #e0e0e0; 
}
.demo-row-description{
	color:#777;
	padding-top:5px;
}
.no-result {
	color:#FF0000;
	text-align:center;
	padding:30px;
}
</style>
</head>
<body>
<meta charset="utf-8">		
<div class="language-header">
	<div class="demo-page-title"><?php echo $language["LIST_TITLE"]; ?></div>
	<div class="language-link">
		<a class="language-link-item" href="index.php?lang=en" <?php if($lang == 'en'){?> style="color:#ff9900;" <?php } ?>>English</a> | 
		<a class="language-link-item" href="index.php?lang=zh"  <?php if($lang == 'zh'){?> style="color:#ff9900;" <?php } ?>>Chinease</a>
	</div>
</div>
<?php 
	if(!empty($result)){ 
		foreach($result as $k=>$v){
?>
	<div class="demo-row-data">
	<div><strong><?php echo $result[$k][$lang.'_title']; ?></strong></div> 
	<p class="demo-row-description"><?php echo $result[$k][$lang.'_description']; ?>
	</p>
	</div>
<?php 	
		} 
	} else {
?>
	<div class="no-result"><?php echo $language["NOTIFY_NO_RESULT"]; ?></div>
<?php 
	} 
?>
</body>
</html>