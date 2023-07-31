<?php 
$page="index";
include 'header.php';
if(isset($_POST['placebet'])){
        $teams=$_POST['teams'];
	$odds=$_POST['txt1'];
        $stake=$_POST['txt2'];
        $profit=$_POST['txt3'];
        $userid=$_SESSION['name'];
	$data=array($teams,$odds,$stake,$profit,$userid);
	$bets=$obj->bets($data); 
        echo '<script>alert("Your free bets has been successfull!")</script>';
}
?>
<style>
     @media only screen and (min-width: 600px) {
         .zr{
            margin-top:140px;
         }
    .fixed-sidebar, .fixed-footer{
        width: 16%;
        position: fixed; 
        padding: 0px 0;
        z-index: 10;
       margin-top:140px;
    }
    .fixed-sidebar{
        top: 0;
    }}
</style>
<div class="container-fluid">
    <div class="row zr">
            <div class="col-xl-2 col-md-3 px-0 sidelist"><div class="fixed-sidebar"><div style="color:white;width: 100%;height:35px;
  margin-top: 0px;
  padding: 7px;
  border: 0px solid #ddd;
  background-color: #20A052;"> <?php $val37=$obj->langu37();                                                 
  ?><?php echo $val37[0][$lang.'_title']?></div>
                    <aside class="side-menu">
                        
                        <ul class="game-list mb-4" style="max-height:450px; overflow: auto;">
				 <?php 
                                 $row=$obj->sports();
                                 foreach($row as $res){	?>
                                   <li>
	     <a href="competition_<?php echo $res['en_title']?>" id="football" class="selectGame"><?php echo $res[$lang.'_title']?></a>
						<ul class="country-list">
							
						</ul>
                                 </li><?php }?>				
				</ul>
				
                    </aside></div>
		</div>
		
		<div class="col-xl-8 col-md-9 px-2 plusPage">
			<div class="bg-444 pt-3 mt-2">
				<div class="px-3 mb-3">
					<div class="form-row">
                                             <?php
                                        $vals=$obj->offer();$i=0;
                                        foreach($vals as $fet)
                                        { 
                                        $i++;
					?>
                                    <div class="col-md-4">
                                            <div class="bg-betDiv card border-0">
                                                <img class="img-fluid" src="admin/images/user/<?php echo $fet['image']?>" alt="">
                                                    <div class="bg-dark p-2 text-white"><?php echo $fet[$lang.'_title']?></div>
<!--                                                    <h6 class="px-2 pt-2 mb-0 font-weight-bold"><?php echo $fet[$lang.'_title']?></h6>-->
                                                    <a class="p-2 mb-0 text-white-50" href="#"><small><?php echo $fet[$lang.'_titlee']?></small></a>
                                            </div>						
                                    </div>
						
                                        <?php }?>
						
					</div>
				</div>
					

				
				<div class="table-responsive">
					<table class="table table-dark table-betting table-bordered">
                                            <thead>
                                            <tr class="text-capitalize">
								<th colspan="12">Sport Highlights</th>								
                                            </tr></thead>
                                            
						
							 <thead>
							<tr class="table-heading">
                                                                <th>Volleyball</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Matched</th>
								<th colspan="2" class="text-center">1</th>
								<th colspan="2" class="text-center">X</th>
								<th colspan="2" class="text-center">2</th>
								<th><i class="fa fa-plus"></i></th>
							</tr>
						</thead>
                                                
                                            <?php
                                            if($_REQUEST['bname']!=''){
                                            $sprts=$_REQUEST['bname'];} else{
                                           $sprts="Volleyball";
                                            } 
                                            $cd=date("Y-m-d");
                                           $data=array($sprts,$cd);
                                           $fet=$obj->leagues($data);
                                           foreach($fet as $fets)
                                           { 
					   ?>
						<tbody>
					   <?php $key1=$fets['id'];$i=0;
                                            $data1=array($key1);
                                            $teamodds=$obj->teamodds($data1);
                                            foreach ($teamodds as $teamodds1){ $i++; ?>
							<tr>
                                                            <td style="background-color:#F6F6F6;"><?php 
                                               $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>
                                                            <td id="test" style="font-weight: 700"><?php echo $teamodds1['home']; ?><br><?php  echo $teamodds1['away']; ?></td><td></td><td></td>
                                                             <td>&#163;0.00</td>
                                                                <td class="std"  id="<?php echo $teamodds1['home']; ?>"><?php if($teamodds1['home_back']>0){ echo $teamodds1['home_back'];}else{?>-<?php }?></td>
								<td class="std1" id="<?php echo $teamodds1['home']; ?>"><?php if($teamodds1['home_lay']>0){ echo $teamodds1['home_lay'];}else{?>-<?php }?></td>
								<td class="std2" id="<?php echo "The draw"; ?>"><?php if($teamodds1['draw_back']>0){ echo $teamodds1['draw_back'];}else{?>-<?php }?></td>
								<td class="std3" id="<?php echo "The draw"; ?>"><?php if($teamodds1['draw_lay']>0){ echo $teamodds1['draw_lay'];}else{?>-<?php }?></td>
								<td class="std4" id="<?php echo $teamodds1['away']; ?>"><?php if($teamodds1['away_back']>0){ echo $teamodds1['away_back'];}else{?>-<?php }?></td>
								<td class="std5" id="<?php echo $teamodds1['away']; ?>"><?php if($teamodds1['away_lay']>0){ echo $teamodds1['away_lay'];}else{?>-<?php }?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
							
                                                </tbody>
						    <?php } } ?>
						
					</table>
                                    	
				</div>
<div class="table-responsive">
					<table class="table table-dark table-betting table-bordered">
                                            
                                            
						
							 <thead>
							<tr class="table-heading">
                                                                <th>Tennis</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
								<th>Matched</th>
								<th colspan="2" class="text-center">1</th>
								<th colspan="2" class="text-center">X</th>
								<th colspan="2" class="text-center">2</th>
								<th><i class="fa fa-plus"></i></th>
							</tr>
						</thead>
                                                <?php
                                            if($_REQUEST['bname']!=''){
                                            $sprts=$_REQUEST['bname'];} else{
                                                 $sprts="Tennis";
                                            } 
                                               $cd=date("Y-m-d");
                                            $data=array($sprts,$cd);
                                           
                                        $fet=$obj->leagues($data);
                                        foreach($fet as $fets)
                                        {  
                                           
                                            
					?>
						<tbody>
					   <?php $key1=$fets['id'];$i=0;
                                            $data1=array($key1);
                                            $teamodds=$obj->teamodds($data1);
                                            foreach ($teamodds as $teamodds1){ $i++; ?>
							<tr>
                                               <td style="background-color:#F6F6F6;"><?php 
                                               $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>
                                                            
                                               <td style="font-weight: 700"<?php echo $i;?>><?php echo $teamodds1['home']; ?> <br> <?php  echo $teamodds1['away']; ?></td><td></td><td></td>
                                                              <td>&#163;0.00</td>
                                                                <td class="std" id="<?php echo $teamodds1['home']; ?>"><?php if($teamodds1['home_back']>0){ echo $teamodds1['home_back'];}else{?>-<?php }?></td>
								<td class="std1" id="<?php echo $teamodds1['home']; ?>"><?php if($teamodds1['home_lay']>0){ echo $teamodds1['home_lay'];}else{?>-<?php }?></td>
								<td class="std2" id="<?php echo "The draw"; ?>"><?php if($teamodds1['draw_back']>0){ echo $teamodds1['draw_back'];}else{?>-<?php }?></td>
								<td class="std3" id="<?php echo "The draw"; ?>"><?php if($teamodds1['draw_lay']>0){ echo $teamodds1['draw_lay'];}else{?>-<?php }?></td>
								<td class="std4" id="<?php echo $teamodds1['away']; ?>"><?php if($teamodds1['away_back']>0){ echo $teamodds1['away_back'];}else{?>-<?php }?></td>
								<td class="std5" id="<?php echo $teamodds1['away']; ?>"><?php if($teamodds1['away_lay']>0){ echo $teamodds1['away_lay'];}else{?>-<?php }?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
							
                                                </tbody>
						    <?php } } ?>
						
					</table>
                                    	
				</div>
				
				
<!--			sports listing	-->
				<div class="px-3">
					<div class="form-row">
						<div class="col-md-4">
                                                    <div class="bg-betDiv" style="background-color: red;" >
								<div class="bg-dark py-1 px-2 text-white">
									Cricket
								</div>
								<table class="table sportTable">
                                                                      <?php $sprts="Cricket";
                                                                      $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                        $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>									 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name']; ?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
                                                                       
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">View all Cricket</a></h6>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="bg-betDiv">
								<div class="bg-dark py-1 px-2 text-white">
									Tennis
								</div>
								<table class="table sportTable">
								<?php $sprts="Tennis";
                                                                      $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                       $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>									 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name'];?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
									
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">view all Tennis</a></h6>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="bg-betDiv">
								<div class="bg-dark py-1 px-2 text-white">
									Mixed Martial Arts
								</div>
								<table class="table sportTable">
								<?php $sprts="Mixed Martial Arts";
                                                                      $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                         $dd=date("M-d", strtotime($teamodds1['start']));
                                                                $ddt=date("h:i", strtotime($teamodds1['start']));
                                                                echo $dd;?><br><?php echo $ddt;?></td>											 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name'];?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
									
									
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">view all Football</a></h6>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			
				<div class="px-3">
					<div class="form-row">
						<div class="col-md-4">
							<div class="bg-betDiv">
								<div class="bg-dark py-1 px-2 text-white">
									Handball
								</div>
								<table class="table sportTable">
									<?php $sprts="Handball";
                                                                         $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                       $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>									 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name'];?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">view all Football</a></h6>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="bg-betDiv">
								<div class="bg-dark py-1 px-2 text-white">
									Ice Hockey
								</div>
								<table class="table sportTable">
								<?php $sprts="Ice Hockey";
                                                                      $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                        $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>											 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name'];?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">view all Football</a></h6>
										</td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="bg-betDiv">
								<div class="bg-dark py-1 px-2 text-white">
									Boxing
								</div>
								<table class="table sportTable">
									<?php $sprts="Boxing";
                                                                          $cd=date("Y-m-d");
                                                                      $data=array($sprts,$cd);
                                                                      $fet=$obj->leagues($data);
                                                                      foreach($fet as $fets)
                                                                      { ?> 
                                                                      <?php $key1=$fets['id'];$i=0;
                                                                       $data1=array($key1);
                                                                       $teamodds=$obj->teamodds($data1);
                                                                       foreach ($teamodds as $teamodds1){ $i++; ?>
									<tr>
								       <td><?php 
                                                                         $dd=date("M-d", strtotime($teamodds1['start']));
                                               $ddt=date("h:i", strtotime($teamodds1['start']));
                                             echo $dd;?><br><?php echo $ddt;?></td>									 <td style="font-weight: 700;height: 40px;overflow: hidden;border-bottom: 1px solid #efefef;"><a href="market_<?php echo $teamodds1['name'];?>"><?php echo $teamodds1['home']; ?><br> <?php  echo $teamodds1['away']; ?></a></td>
									</tr>
                                                                      <?php }}?>
									<tr class="">
										<td class="text-right py-2" colspan="2">
											<h6 class="mb-0"><a href="#">view all Football</a></h6>
										</td>
									</tr>
								</table>
                                                           
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		
		
		<div class="col-xl-2 px-0 couponSide">
                    <h6 class="text-white p-2" style="background-color:#20A052"><?php $val214=$obj->langu214();                                                 
?><?php echo $val214[0][$lang.'_title']?></h6>
			<ul class="quick-links">
                            <?php
                            $sports='Volleyball';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
                <?php
                            $sports='Tennis';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
                <?php
                            $sports='Soccer';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
                <?php
                            $sports='Cricket';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
                <?php
                            $sports='Boxing';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
                <?php
                            $sports='Tennis';
                            $cd=date("Y-m-d");
                            $data= array($sports,$cd);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['id']?>"><?php echo $row[0]['name']?></a></li>
               
				
			</ul>
		</div>
		
	</div>
</div>

<?php include 'footer.php';?>

<script src="js/jquery-3.2.1.js"></script>	

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
   new WOW().init();
</script>
<script>
	$(document).ready(function(){
		var h = document.body.scrollHeight;		
		$(".side-menu").css("min-height", h - 335);
	});
</script>
<script src="js/betting.js"></script>

<!-- plus js  -->
<script>

    $(".table-betting tbody tr td:nth-last-child(n+0):nth-last-child(-n+9)").click(function(){
		var getVal = $(this).text();
               
                if(getVal>0){
//                var name =  $(this).parent().parent().find('td').eq(1).html();
                var name=$(this).attr("id");
                var cle=$(this).attr("class");
                
                var odds =  $(this).parent().parent().find('td').eq(5).html();
                var oddsa =  $(this).parent().parent().find('td').eq(6).html();
                var oddsb =  $(this).parent().parent().find('td').eq(7).html();
                var oddsc =  $(this).parent().parent().find('td').eq(8).html();
                var oddsd =  $(this).parent().parent().find('td').eq(9).html();
                var oddse =  $(this).parent().parent().find('td').eq(10).html();
               if(odds==getVal && cle=="std"){
                   cr='Back (Bet For)';
                   var color='#cbe3f5;';
               }
               if(oddsa==getVal && cle=="std1"){
                   cr='Lay (Bet Against):';
                   var color='#f5d7e6';
               }
                if(oddsb==getVal && cle=="std2"){
                   cr='Back (Bet For)';
                     var color='#cbe3f5;';
               }
               if(oddsc==getVal && cle=="std3"){
                   cr='Lay (Bet Against):';
                    var color='#f5d7e6';
               }
               if(oddsd==getVal && cle=="std4"){
                   cr='Back (Bet For)';
                     var color='#cbe3f5;';
               }
               if(oddse==getVal && cle=="std5"){
                   cr='Lay (Bet Against):';
                    var color='#f5d7e6';
               }
               if(oddsa==getVal && cle=="std1" || oddsc==getVal && cle=="std3" || oddse==getVal && cle=="std5"){
                   var id='block';
               }else{
                   var id='none';
               }
               
               
              var addRow = ('<tr class="betRow" style="background-color:'+ color +';"><td colspan="4" class="" style="color:#000;">'+ cr +':<br>'+ name +'- Match odds </td><td colspan="8" class=""><p style="float:right; margin-top:5px; margin-left:5px; display:'+ id +'"><input type="radio" name="check" id="pay" value="pay" onclick="sum(this.value);">Payout<input type="radio" name="check" id="pay" value="lay" onclick="sum(this.value);" checked>Liability</p><form class="form-inline float-right" method="post" id="myForm"><input type="hidden" value="'+ name +'" name="teams" id="teams"><input type="submit" style="color:#fff; background-color:#bfbfbf;" value="Cancel" class="btn btn-live" id="onee" onclick="div1(1);"><div class="form-group ml-2"> <input type="text" class="form-control bet-txt" value="'+ getVal +'" name="txt1" id="txt1" onkeyup="sum();"></div><div class="form-group mx-2">  <input type="text" class="form-control bet-txt" placeholder="Stack" name="txt2" id="txt2"  onkeyup="sum();"></div><div class="form-group mx-2"> <input type="text" readonly="readonly" class="form-control bet-txt" placeholder="Profit" name="txt3" id="txt3"></div><?php if($_SESSION['userid']!=''){ ?><input type="button" name="placebet" id="sub1" style="display:block;" class="btn btn-red" value="Place bet" disabled onclick="div2();"><input type="button" name="placebet" id="submitFormData" onclick="SubmitFormData();" class="btn btn-red" value="Confirm" style="display:none;"><?php }else{?><a href="login" class="btn btn-red" style="color:black; font-size:14px;;">Login</a><?php }?></form><br><br><br><span style="color:green;" id="results"></span></td></tr>');
		 
		$(this).parent("tr").after(addRow);
		$(this).css("background", "");
		
		if( $(this).parents("tbody").children("tr").hasClass("betRow") ){
			$(".betRow").remove();
			$(this).parent("tr").after(addRow);
		}
		else{
			alert("false");
		}		
	}});
        
  function SubmitFormData() {
    var teams = $("#teams").val();
    var txt1 = $("#txt1").val();
    var txt2 = $("#txt2").val();
    var txt3 = $("#txt3").val();
    var user = $("#user").val();
    if(txt1==""){
     alert("Odds data will be emty!.please try later");
     return false;
    }
    $.post("submit.php", { teams:teams, txt1: txt1, txt2: txt2, txt3: txt3, user: user },
    function(post) {
	 $('#results').html(post);
	 $('#myForm')[0].reset();
    });
}

function div2() {
           
                if (document.getElementById('submitFormData').style.display == 'none') {
                    document.getElementById('submitFormData').style.display = 'block';
                    document.getElementById('sub1').style.display = 'none';
                   
                }
            }

</script>
<script>
    function manage(txt) {
        var bt = document.getElementById('submitFormData');
        if (txt.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
        }
    }    
</script>
<!--	dropdown footer-->
<script src="js/jquery.dd.min.js"></script>
<script>	
$(document).ready(function(e) {
	$("#payments").msDropdown({});
	$("#tech").msDropdown().data("dd");//{animStyle:'none'} /{animStyle:'slideDown'} {animStyle:'show'}		
	//no use
	try {
		var pages = $("#pages").msDropdown({on:{change:function(data, ui) {
												var val = data.value;
												if(val!="")
													window.location = val;
											}}}).data("dd");

		var pagename = document.location.pathname.toString();
		pagename = pagename.split("/");
		pages.setIndexByValue(pagename[pagename.length-1]);
		$("#ver").html(msBeautify.version.msDropdown);
	} catch(e) {
		//console.log(e);	
	}
	
	$("#ver").html(msBeautify.version.msDropdown);
});
</script>
<script>
function sum(val) {
       var vals=val;
       if(vals!="" && vals=="pay"){
           
        var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       var bt = document.getElementById('sub1');
            if (txtFirstNumberValue.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
        }
         if (txtSecondNumberValue.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
        }
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if(txtFirstNumberValue != "" && txtSecondNumberValue != ""){
       var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);}else{
       var result = 0;
       }
       if (!isNaN(result)) {
           var df=document.getElementById('txt3').value = result.toFixed(2);
            var bt = document.getElementById('sub1');
           
            
            if (df.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
        }
       
           $("#txt3").html(result); 
       }   
       }else{
       var txtFirstNumberValue = document.getElementById('txt1').value;
       var txtSecondNumberValue = document.getElementById('txt2').value;
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if(txtFirstNumberValue != "" && txtSecondNumberValue != ""){
       var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue)-parseFloat(txtSecondNumberValue);}else{
       var result = 0;
       }
       if (!isNaN(result)) {
           document.getElementById('txt3').value = result.toFixed(2);
       }}
   var bt = document.getElementById('sub1');
        if (txt2.value != '') {
            bt.disabled = false;
        }
        else {
            bt.disabled = true;
        }
   }
   
        </script>
        <script>
                        function resp(){
                            document.forms['crt'].submit();
                        }
                        </script>
                        <style>
    .md-modal {
	position: fixed;
	top: 50%;
	left: 50%;
	width: 50%;
	max-width: 630px;
	min-width: 320px;
	height: auto;
	z-index: 2000;
	visibility: hidden;
	transform: translateX(-50%) translateY(-50%);
}

.md-modal:target {
	visibility: visible;
}

.md-overlay {
	position: fixed;
	width: 100%;
	height: 100%;
	visibility: hidden;
	top: 0;
	left: 0;
	z-index: 1000;
	opacity: 0;
	background: rgba(117, 190, 218, 0.5);
	transition: all 0.3s;
}

.md-modal:target ~ .md-overlay {
	opacity: 1;
	visibility: visible;
}

/* Content styles */
.md-content {
	color: #000;
	background: #fff;
	position: relative;
	border-radius: 3px;
	margin: 0 auto;
}

.md-content h3 {
	margin: 0;
	padding: 0.4em;
	text-align: center;
	font-size: 2.4em;
	font-weight: 300;
	opacity: 0.8;
	background: rgba(0,0,0,0.1);
	border-radius: 3px 3px 0 0;
}

.md-content > div {
	padding: 15px 40px 30px;
	margin: 0;
	font-weight: 300;
	font-size: 1.15em;
}

.md-content > div p {
	margin: 0;
	padding: 10px 0;
}

.md-content > div ul {
	margin: 0;
	padding: 0 0 30px 20px;
}

.md-content > div ul li {
	padding: 5px 0;
}

.md-content a {
	display: block;
	margin: 0 auto;
	font-size: 0.8em;
}

/* Effect */

.md-modal .md-content {
	-webkit-transform: scale(0.7);
	-moz-transform: scale(0.7);
	-ms-transform: scale(0.7);
	transform: scale(0.7);
	opacity: 0;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.md-modal:target .md-content {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}
</style>
<div class="md-modal" id="modal">
	<div class="md-content">
            <h4 style="text-align:center; background-color: #FFB80C;">Match Odds - Rules</h4>
		<div>
                    <p style="font-weight: 700;">Market Information</p>

                    <p style="font-size:12px;">For further information please see Rules & Regs.</p><p style="font-size:12px;">

Predict the result of this match. All bets apply to Full Time according to the match officials, plus any stoppage time. Extra-time/penalty shoot-outs are not included.

If this market is re-opened for In-Play betting, unmatched bets will be cancelled at kick off and the market turned in play. The market will be suspended if it appears that a goal has been scored, a penalty will be given, or a red card will be shown. With the exception of bets for which the "keep" option has been selected, unmatched bets will be cancelled if it appears that a goal has been scored or a red card has been shown (notwithstanding that such goal or red card may ultimately not be awarded). Please note that should our data feeds fail we may be unable to manage this game in-play. 

Customers should be aware that:

</p>
<a class="md-close" href="#" style="float:right;"><img src="images/close.png"></a>	
		</div>
	</div>
</div>
<div class="md-overlay"></div>
</body>
</html>


