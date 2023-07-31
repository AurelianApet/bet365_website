<?php include 'connection.php';
include "include/pdo_functions.php";
$obj=new user_module($con);
?>
<?php if($_POST['lang']!=''){
 $_SESSION['lang'] = $_POST['lang'];

 if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_POST['lang']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

// Include Language file
if(isset($_SESSION['lang'])){
 include "lang_".$_SESSION['lang'].".php";
}else{
 include "lang_en.php";
}
if($_SESSION['lang']==''){
$lang = "zh";}else{
  $lang=$_SESSION['lang'];
}
if(isset($_GET['lang'])){ 
	$lang = $_GET['lang']; 
} 
?>
<?php if(isset($_POST['login'])){
        $useremail=$_POST['email'];
	$password=sha1($_POST['pass']);
	$data=array($useremail,$password);
	$login=$obj->login($data);
	if($login!="")
	{
		 $login=$login[0];
		 $_SESSION['userid']=$login['user_id'];
	         $_SESSION['name']=$login['name'];
                 header( "Location: profile");
		 
	}
	else
	{
	$error='Invalid username or password';
               		
	}
}?>
<style>
    @media only screen and (min-width: 600px) {
        
    .fixed-header, .fixed-footer{
        width: 100%;
        position: fixed; 
        padding: 0px 0;
        z-index: 10;
        
    }
    .fixed-header{
        top: 0;
    }}</style>

<?php if($page=="register"){?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Index</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-query.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
<link href="css/intlInputPhone.css" rel="stylesheet">
<!--for image in dropdown-->
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<style>
	.bet-icon{
		display: none;
	}	
</style>
<!-- date-picker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://resources/demos/style.css">
</head>

<body>
    <div class="fixed-header">
    <header>
	<div class="container clearfix py-3">
		<div class="float-left">
			<ul class="top-list mr-auto">
				<li><a href="index"><?php $val99=$obj->langu99();                                                 
?><?php echo $val99[0][$lang.'_title']?></a></li>
				<li><a href="#"><?php $val100=$obj->langu100();                                                 
?><?php echo $val100[0][$lang.'_title']?></a></li>
				<li><a href="contact"><?php $val101=$obj->langu101();                                                 
?><?php echo $val101[0][$lang.'_title']?></a></li>
			</ul>
		</div>
		<div class="float-right d-flex">
			<form method="post" action="" id="form_lang" >
			<div class="form-group d-inline-flex1 mb-0">					  
			 <select id="payments"  class="text-left nav-link" style="width: 130px;" name='lang' onchange='changelan();' >       				
      			<option value="en" data-image="Images/uk.png" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>>En / dollar </option>
       			<option value="zh" data-image="Images/ch.svg" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'zh'){ echo "selected"; }else { if($_SESSION['lang']==''){ echo "selected";}} ?>>Ch / Yuan</option>
    		  </select>		  
                        </div></form>
			<div class="">
				<i class="fa fa-user-circle pr-2 text-white"></i><a href="login" class="text-white">Login</a>
			</div>
		</div>  
	</div>
    </header></div>
<?php }else{?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Index</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-query.css" rel="stylesheet" type="text/css">
<link href="css/betting.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Kanit|Roboto" rel="stylesheet">
<!--for image in dropdown-->
<link rel="stylesheet" type="text/css" href="css/dd.css" />
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dc18905154bf74666b79df0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</head>
<body>
    <style>
        .std{
            background-color: #A6D8FF;
        }
        .std1{
           background-color: #FAC9D1
        }
        .std2{
            background-color: #A6D8FF;
        }
        .std3{
           background-color: #FAC9D1
        }
        .std4{
            background-color: #A6D8FF;
        }
        .std5{
           background-color: #FAC9D1
        }
        
    </style><div class="fixed-header">
    <header> <div class="container-fluid logo-bg" style="background-color:#FFB80C;">
    <div class="container clearfix py-3" >
		<div class="float-left">
                    <div class="float-sm-left">
                        <a href="index" class="text-white"><h4>Ex-Betting</h4></a>
			</div>
			
                </div>
		<div class="float-right d-flex">
                    <?php if($_SESSION['userid']==""){?>
                    <form method="post" action="" id="log" class="mb">
			<div class="form-group d-inline-flex1 mb-0">					  
                            <input type="text" name="email" id="email" style="width:130px; height: 25px;background-color: #f7f9fa;background-color: #f7f9fa;border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;padding: 12px 20px;
  " placeholder="<?php $val168=$obj->langu168();?><?php echo $val168[0][$lang.'_title']?>" required="required">
                            <input type="password" name="pass" id="pass" style="width:130px; height: 25px;     background-color: #f7f9fa;background-color:#f7f9fa;border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;padding: 12px 20px;
  ;" placeholder="<?php $val176=$obj->langu176();?><?php echo $val176[0][$lang.'_title']?>" required="required">
                            <button class="button button5" type="submit" name="login"><?php $val227=$obj->langu227();?><?php echo $val227[0][$lang.'_title']?></button>
                    </div></form><?php }?>&nbsp;&nbsp;&nbsp;&nbsp;
                    
			 <?php if($_SESSION['userid']==""){?>
		<div class="float-right">
			<a href="registration" class="text-white"><?php $val102=$obj->langu102();                                                 
?><?php echo $val102[0][$lang.'_title']?></a>
            </div> <?php }else { ?>
                   
            <div class="float-right">
			<a class="text-white"></a>
			<div class="dropdown show">
			  <a class="btn text-white p-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img class="img-fluid profile-img" src="Images/avtar.jpg" /> <?php echo $_SESSION['name'];?>
			  </a>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Deposit</a>
				<a class="dropdown-item" href="profile">My Account</a>
                                <a class="dropdown-item" href="mybets">My Bets</a> 
                                <a class="dropdown-item" href="logout">Logout</a>
                                
			  </div>
			</div>
            </div> <?php }?>
                     <?php if($_SESSION['userid']!=""){?>
                    <div class="float-right" style="margin-left:20px;">
			<a class="text-white"></a>
			<div class="dropdown show">
			  <a class="btn text-white p-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php $userid=$_SESSION['userid'];$data= array($userid); $row=$obj->orgprofile($data);?>
                              <p>Main: &#163;<?php echo $row[0]['balance'];?>.00</p>
			  </a>
			  
			</div>
                    </div> <?php }?>&nbsp;&nbsp;&nbsp;<form method="post" action="" id="form_lang" >
			<div class="form-group d-inline-flex1 mb-0">					  
			 <select id="payments"  class="text-left nav-link" style="width: 130px;" name='lang' onchange='changelan();' >       				
      			<option value="en" data-image="Images/uk.png" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>><?php $val197=$obj->langu197();?><?php echo $val197[0][$lang.'_title']?> </option>
       			<option value="zh" data-image="Images/ch.svg" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'zh'){ echo "selected"; }else { if($_SESSION['lang']==''){ echo "selected";}} ?>><?php $val198=$obj->langu198();?><?php echo $val198[0][$lang.'_title']?></option>
    		  </select>		  
                        </div></form>
		</div> 
    </div></div>
<!--	logo & search-->
<!--<div class="container-fluid logo-bg">
		<div class="container clearfix py-4">
			<div class="float-sm-left">
				<a href="index.html" class="text-white"><h2>Logo</h2></a>
			</div>
			<div class="float-sm-right">
				<form>
					<div class="input-group">
						<input type="text" class="form-control search" placeholder="Enter Search reqest...">
						<div class="input-group-append">
							<a class="btn btn-search" href="#"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</form>
			</div>
		</div>
    <div class="collapse navbar-collapse mr-auto" id="navbarNav">
			<ul class="navbar-nav mr-auto menu">
                          <li class="nav-item <?php if($page=="index"){?> active <?php }?>">
				<a class="nav-link" href="index"><?php $val103=$obj->langu103();                                                 
?><?php echo $val9103[0][$lang.'_title']?></a>
			  </li>
			  
			  <li class="nav-item">
				<a class="nav-link" href="#"><?php $val104=$obj->langu104();                                                 
?><?php echo $val104[0][$lang.'_title']?></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#"><?php $val105=$obj->langu105();                                                 
?><?php echo $val105[0][$lang.'_title']?></a>
			  </li>
			</ul>
			 <div class="form-inline my-2 my-lg-0">
			  	<div class="social">
			  		<a href="#"><i class="fa fa-facebook"></i></a> 
			  		<a href="#"><i class="fa fa-twitter"></i></a> 
			  		<a href="#"><i class="fa fa-google-plus"></i></a> 
			  		<a href="#"><i class="fa fa-instagram"></i></a> 
			  	</div>
			 </div>			
		  </div>
	</div>-->
<!--	navbar -->
	<div class="container px-md-0">
		<nav class="navbar navbar-expand-md px-0">		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars text-white"></span>
		  </button>
		  <div class="collapse navbar-collapse mr-auto" id="navbarNav">
			<ul class="navbar-nav mr-auto menu">
                          <li class="nav-item <?php if($page=="index"){?> active <?php }?>">
				<a class="nav-link" href="index"><?php $val103=$obj->langu103();                                                 
?><?php echo $val103[0][$lang.'_title']?></a>
			  </li>
			  
			  <li class="nav-item <?php if($page=="inplay"){?> active <?php }?>">
				<a class="nav-link" href="inplay"><?php $val104=$obj->langu104();                                                 
?><?php echo $val104[0][$lang.'_title']?></a>
			  </li>
			  <li class="nav-item <?php if($page=="contact"){?> active <?php }?>">
				<a class="nav-link" href="contact"><?php $val105=$obj->langu105();                                                 
?><?php echo $val105[0][$lang.'_title']?></a>
			  </li>
			</ul>
			 <div class="form-inline my-2 my-lg-0">
			  	<div class="social">
			  		<a href="#"><i class="fa fa-facebook"></i></a> 
			  		<a href="#"><i class="fa fa-twitter"></i></a> 
			  		<a href="#"><i class="fa fa-google-plus"></i></a> 
			  		<a href="#"><i class="fa fa-instagram"></i></a> 
			  	</div>
			 </div>			
		  </div>
		</nav>		
	</div>
    </header></div>
<?php }?>
 <script>
 function changelan(){
  document.getElementById('form_lang').submit();
 }
 </script>
 <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 2px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {background-color: #555555;} /* Black */
</style>
