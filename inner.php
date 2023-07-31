<?php 
$page="sports-inner";
include 'header.php';
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
    }}</style>
<div class="container-fluid cricket" >
	<div class="row zr">
             <div class="col-xl-2 col-md-3 px-0 sidelist"><div class="fixed-sidebar"><div style="color:white;width: 100%;height:35px;
  margin-top: 0px;
  padding: 7px;
  border: 0px solid #ddd;
  background-color: #20A052;"> <?php $val37=$obj->langu37();                                                 
  ?><?php echo $val37[0][$lang.'_title']?></div>
                    <aside class="side-menu">
                        
				<ul class="game-list mb-4">
                                    <h5 style="text-align: center;color:#FFF;"><?php echo $_REQUEST['sports']?></h5>
                                                    <?php
                                                    $sports=$_REQUEST['sports'];
                                                    $data= array($sports);
                                                    $row=$obj->innersports($data);
                                                     foreach($row as $res){
                                                    ?>
                                        <li>
					<a href="competition_<?php echo $res['id']?>" id="football" class="selectGame"><?php echo $res[$lang.'_title']?> </a>
						<ul class="country-list">
							
						</ul>
					</li>
                                                    <?php }?>
										
				</ul>
				
                    </aside></div>
		</div>
		
		<div class="col-xl-8 col-md-9 px-2 plusPage">
			<div class="bg-444 pt-3 mt-2">
<!--				Next Race List	-->
				<div class="mb-3 bg-777">
					<div class="clearfix bg-dark p-2">
						<div class="float-left text-white"><?php echo $_REQUEST['sports']?></div>						
						<div class="float-right">
							<ul class="nav nav-pills mb-0 next-race cricket-tab" id="pills-tab1" role="tablist">
							  <li class="nav-item">
								<a class="nav-link active" id="gb-tab" data-toggle="pill" href="#gb" role="tab" aria-controls="gb" aria-selected="true"><?php $val225=$obj->langu225();                                                 
  ?><?php echo $val225[0][$lang.'_title']?></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" id="allRaces-tab" data-toggle="pill" href="#allRaces" role="tab" aria-controls="allRaces" aria-selected="false"><?php $val104=$obj->langu104();                                                 
  ?><?php echo $val104[0][$lang.'_title']?></a>
							  </li>  
							  <li class="nav-item">
								<a class="nav-link" id="today-tab" data-toggle="pill" href="#today" role="tab" aria-controls="today" aria-selected="false"><?php $val110=$obj->langu110();                                                 
  ?><?php echo $val110[0][$lang.'_title']?></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" id="tomorrow-tab" data-toggle="pill" href="#tomorrow" role="tab" aria-controls="tomorrow" aria-selected="false"><?php $val111=$obj->langu111();                                                 
  ?><?php echo $val111[0][$lang.'_title']?></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" id="future-tab" data-toggle="pill" href="#future" role="tab" aria-controls="future" aria-selected="false"><?php $val224=$obj->langu224();                                                 
  ?><?php echo $val224[0][$lang.'_title']?></a>
							  </li>
							</ul>
						</div>						
					</div>
					<div>
						<div class=" px-2">
                                                     <form name="showprice" method="post">
							<div class="float-left py-3 mt-1">
								<div class="form-group mb-0">
									<label><?php $val226=$obj->langu226();                                                 
  ?><?php echo $val226[0][$lang.'_title']?></label>
                                                                   
                                                                        <select class=" edit-input" name="rate" id="rate" onchange="myfun();">
                                                                                <option value="Competition" <?php if($_REQUEST['rate']=='Competition'){?>selected="selected"<?php }?>>Competition</option>
										<option value="time" <?php if($_REQUEST['rate']=='time'){?> selected="selected"<?php }?>>Time</option>
                                                                                <option value="price" <?php if($_REQUEST['rate']=='price'){?>selected="selected"<?php }?>>Matched Amount</option>
                                                                        </select>
								</div>
							</div></form>
                                                    <script>
                        function myfun(){
                            document.forms['showprice'].submit();
                        }
                        </script>
<!--							<div class="float-right py-3 ontv-media">	
								<label class="mr-3">Filter by</label>
								<div class="btn btn-secondary">On Tv</div>		
								<div class="btn btn-secondary">Live Video</div>		
								<div class="btn btn-secondary">Matched Amount</div>			
							</div>-->
						</div>
<!--
						<div class="row py-4 px-2">
							<div class="col-md-5">
								<div class="form-group mb-0">
									<label>View by</label>
									<select class=" edit-input">
										<option>Competition</option>
										<option>Time</option>
										<option>Matched Amount</option>
									</select>
								</div>
							</div>
							<div class="col-md-7 text-right">	
								<label class="mr-3">Filter by</label>
								<div class="btn btn-secondary">On Tv</div>		
								<div class="btn btn-secondary">Live Video</div>		
								<div class="btn btn-secondary">Matched Amount</div>		
							</div>
						</div>
-->
					</div>
					<div class="tab-content" id="pills-tabContent1">
					  <div class="tab-pane fade show active" id="gb" role="tabpanel" aria-labelledby="gb-tab">
					  	<div class="table-responsive">
                                                    
					<table class="table table-dark table-betting table-bordered">
                                           
							 <thead>
                                                             	
							<tr class="table-heading">
                                                                <th>Coming up</th>
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
						<tbody>
                                            <?php 
                                            if($_POST['rate']=='price'){
                                            $order='order by price desc';}
                                            else if($_POST['rate']=='time'){
                                            $order='order by start_date asc';   
                                            }
                                            $sql ="select * from team_odds where sports='$_REQUEST[sports]' $order";
                                            foreach ($con->query($sql) as $teamodds1) {?>
							<tr>
                                            <td style="background-color:#F6F6F6;"><?php 
                                             $dd=date("M-d", strtotime($teamodds1['start_date']));
                                             echo $dd;?><br><?php echo $teamodds1['start_time'];?></td>
                                             <td id="test<?php echo $i;?>"><?php echo $teamodds1[$lang.'_title']; ?> <br> <?php echo $teamodds1[$lang.'_titlea']; ?></td><td></td><td></td>
                                                            <td>&#163;<?php echo $teamodds1['price'];?></td>
                                                                <td class="std" id="<?php echo $teamodds1['en_title']; ?>"><?php echo $teamodds1['hodds'];?></td>
								<td class="std1" id="<?php echo $teamodds1['en_title']; ?>"><?php echo $teamodds1['hoddss'];?></td>
								<td class="std2" id="<?php echo "The draw"; ?>"><?php echo $teamodds1['draw'];?></td>
								<td class="std3" id="<?php echo "The draw"; ?>"><?php echo $teamodds1['draws'];?></td>
								<td class="std4" id="<?php echo $teamodds1['en_titlea']; ?>"><?php echo $teamodds1['away'];?></td>
								<td class="std5" id="<?php echo $teamodds1['en_titlea']; ?>"><?php echo $teamodds1['aways'];?></td>
                                                                <td><a href="#modal"><i class="fa fa-plus"></i></a></td>
							</tr>
						</tbody>
                                                     <?php } ?>
					</table>
                                    	
				</div>
					  </div>
					  <div class="tab-pane fade" id="allRaces" role="tabpanel" aria-labelledby="allRaces-tab">
					  		<div class="table-responsive">
							<table class="table table-dark table-betting table-bordered">
							 <thead>
							<tr class="table-heading">
                                                                <th>Coming up</th>
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
						<tbody>
					   <?php 
                                           if($_POST['rate']=='price'){
                                            $order='order by price desc';}
                                            else if($_POST['rate']=='time'){
                                             $order='order by start_date asc';   
                                            }
                                            $today=date("Y-m-d");
                                            $time=date ('H:i'); ;
                                          $sql ="select * from team_odds where sports='$_REQUEST[sports]' and start_date='$today' AND start_time<='$time' AND end_time>='$time' order by price $order";
                                            foreach ($con->query($sql) as $teamoddsh) {?>
							<tr>
                                                            <td style="color: #20A052;background-color:#F6F6F6;">In-Play</td>
                                                            
                                                            <td id="test<?php echo $i;?>"><?php echo $teamoddsh[$lang.'_title']; ?> <br> <?php  echo $teamodds1[$lang.'_titlea']; ?></td><td></td><td></td>
                                                            <td>&#163;<?php echo $teamoddsh['price'];?></td>
                                                                 <td class="std" id="<?php echo $teamoddsh['en_title']; ?>"><?php echo $teamoddsh['hodds'];?></td>
								<td class="std1" id="<?php echo $teamoddsh['en_title']; ?>"><?php echo $teamoddsh['hoddss'];?></td>
								<td class="std2"  id="<?php echo "The draw"; ?>"><?php echo $teamoddsh['draw'];?></td>
								<td class="std3"  id="<?php echo "The draw"; ?>"><?php echo $teamoddsh['draws'];?></td>
								<td class="std4" id="<?php echo $teamoddsh['en_titlea']; ?>"><?php echo $teamoddsh['away'];?></td>
								<td class="std5" id="<?php echo $teamoddsh['en_titlea']; ?>"><?php echo $teamoddsh['aways'];?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
							</tr>
						</tbody>
						    <?php } ?>
					</table>
						  </div>
					  </div>	
					  <div class="tab-pane fade" id="today" role="tabpanel" aria-labelledby="today-tab">
					  		<div class="table-responsive">
							<table class="table table-dark table-betting table-bordered">
                                           
							 <thead>
							<tr class="table-heading">
                                                                <th>Coming up</th>
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
						<tbody>
					   <?php 
                                           if($_POST['rate']=='price'){
                                            $order='order by price desc';}
                                            else if($_POST['rate']=='time'){
                                             $order='order by start_date asc';   
                                            }
                                           $key1=$_REQUEST['sports'];
                                           $today=date("Y-m-d");
                                           $sql ="select * from team_odds where sports='$_REQUEST[sports]' and start_date='$today' order by price $order";
                                           foreach ($con->query($sql) as $teamoddsho) { ?>
							<tr>
                                                            <td style="background-color:#F6F6F6;"><?php 
                                               $dd=date("M-d", strtotime($teamoddsho['start_date']));
                                             echo $dd;?><br><?php echo $teamoddsho['start_time'];?></td>
                                                            
                                                            <td id="test<?php echo $i;?>"><?php echo $teamoddsho[$lang.'_title']; ?> <br> <?php  echo $teamodds1[$lang.'_titlea']; ?></td><td></td><td></td>
                                                                <td>&#163;<?php echo $teamoddsho['price'];?></td>
                                                                 <td class="std" id="<?php echo $teamoddsho['en_title']; ?>"><?php echo $teamoddsho['hodds'];?></td>
								<td class="std1" id="<?php echo $teamoddsho['en_title']; ?>"><?php echo $teamoddsho['hoddss'];?></td>
								<td class="std2"  id="<?php echo "The draw"; ?>"><?php echo $teamoddsho['draw'];?></td>
								<td class="std3"  id="<?php echo "The draw"; ?>"><?php echo $teamoddsho['draws'];?></td>
								<td class="std4" id="<?php echo $teamoddsho['en_titlea']; ?>"><?php echo $teamoddsho['away'];?></td>
								<td class="std5" id="<?php echo $teamoddsho['en_titlea']; ?>"><?php echo $teamoddsho['aways'];?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
							</tr>
						</tbody>
						    <?php  } ?>
					</table>
						  </div>
					  </div>	
					  <div class="tab-pane fade" id="tomorrow" role="tabpanel" aria-labelledby="tomorrow-tab">
					  		<div class="table-responsive">
							<table class="table table-dark table-betting table-bordered">
                                           
							 <thead>
							<tr class="table-heading">
                                                                <th>Coming up</th>
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
						<tbody>
					    <?php 
                                            if($_POST['rate']=='price'){
                                            $order='order by price desc';}
                                            else if($_POST['rate']=='time'){
                                             $order='order by start_date asc';   
                                            }
                                           $chdate=date("Y-m-d",strtotime("+1 days"));
                                           $key1=$_REQUEST['sports'];
                                           $sql ="select * from team_odds where sports='$_REQUEST[sports]' and start_date='$chdate' order by price $order";
                                           foreach ($con->query($sql) as $teamodds1) { ?>
							<tr>
                                                            <td style="background-color:#F6F6F6;"><?php 
                                               $dd=date("M-d", strtotime($teamodds1['start_date']));
                                             echo $dd;?><br><?php echo $teamodds1['start_time'];?></td>
                                                            
                                                            <td id="test<?php echo $i;?>"><?php echo $teamodds1[$lang.'_title']; ?> <br> <?php  echo $teamodds1[$lang.'_titlea']; ?></td><td></td><td></td>
                                                            <td>&#163;<?php echo $teamodds1['price'];?></td>
                                                                 <td class="std" id="<?php echo $teamodds1['en_title']; ?>"><?php echo $teamodds1['hodds'];?></td>
								<td class="std1" id="<?php echo $teamodds1['en_title']; ?>"><?php echo $teamodds1['hoddss'];?></td>
								<td class="std2"  id="<?php echo "The draw"; ?>"><?php echo $teamodds1['draw'];?></td>
								<td class="std3"  id="<?php echo "The draw"; ?>"><?php echo $teamodds1['draws'];?></td>
								<td class="std4" id="<?php echo $teamodds1['en_titlea']; ?>"><?php echo $teamodds1['away'];?></td>
								<td class="std5" id="<?php echo $teamodds1['en_titlea']; ?>"><?php echo $teamodds1['aways'];?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
							</tr>
							
						</tbody>
						    <?php }  ?>
					</table>
						  </div>
					  </div>		
					  <div class="tab-pane fade" id="future" role="tabpanel" aria-labelledby="future-tab">
					  		<div class="table-responsive">
							<table class="table table-dark table-betting table-bordered">
                                           
                                            
						
							 <thead>
							<tr class="table-heading">
                                                                <th>Coming up</th>
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
						<tbody>
					    <?php 
                                            if($_POST['rate']=='price'){
                                            $order='order by price desc';}
                                            else if($_POST['rate']=='time'){
                                             $order='order by start_date asc';   
                                            }
                                             $chdate=date("Y-m-d",strtotime("+1 days"));
                                             $key1=$_REQUEST['sports'];
                                             $today=date("Y-m-d");
                                             $sql ="select * from team_odds where sports='$key1' and start_date>'$chdate' order by price $order";
                                             foreach ($con->query($sql) as $teamodds11) { ?>
							<tr>
                                                            <td style="background-color:#F6F6F6;"><?php 
                                               $dd=date("M-d", strtotime($teamodds11['start_date']));
                                             echo $dd;?><br><?php echo $teamodds11['start_time'];?></td>
                                                            
                                                            <td id="test<?php echo $i;?>"><?php echo $teamodds1[$lang.'_title']; ?> <br> <?php  echo $teamodds1[$lang.'_titlea']; ?></td><td></td><td></td>
                                                                <td>&#163;<?php echo $teamodds11['price'];?></td>
                                                                <td class="std" id="<?php echo $teamodds11['en_title']; ?>"><?php echo $teamodds11['hodds'];?></td>
								<td class="std1" id="<?php echo $teamodds11['en_title']; ?>"><?php echo $teamodds11['hoddss'];?></td>
								<td class="std2"  id="<?php echo "The draw"; ?>"><?php echo $teamodds11['draw'];?></td>
								<td class="std3"  id="<?php echo "The draw"; ?>"><?php echo $teamodds11['draws'];?></td>
								<td class="std4" id="<?php echo $teamodds11['en_titlea']; ?>"><?php echo $teamodds11['away'];?></td>
								<td class="std5" id="<?php echo $teamodds11['en_titlea']; ?>"><?php echo $teamodds11['aways'];?></td>
								<td><a href="#modal"><i class="fa fa-plus"></i></a></td>
							</tr>
							
						</tbody>
						    <?php }  ?>
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
                            $sports='Baseball';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
                <?php
                            $sports='Baseketball';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
                <?php
                            $sports='Football';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
                <?php
                            $sports='Cricket';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
                <?php
                            $sports='Boxing';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
                <?php
                            $sports='Tennis';
                            $data= array($sports);
                            $row=$obj->innersports($data);
                              ?>
		<li><a href="competition_<?php echo $row[0]['league_id']?>"><?php echo $row[0][$lang.'_title']?></a></li>
               
				
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
//                var name =  $(this).parent().parent().find('td').eq(1).html();
                var name=$(this).attr("id");
                
                var odds =  $(this).parent().parent().find('td').eq(5).html();
                var oddsa =  $(this).parent().parent().find('td').eq(6).html();
                var oddsb =  $(this).parent().parent().find('td').eq(7).html();
                var oddsc =  $(this).parent().parent().find('td').eq(8).html();
                var oddsd =  $(this).parent().parent().find('td').eq(9).html();
                var oddse =  $(this).parent().parent().find('td').eq(10).html();
               if(odds==getVal){
                   cr='Back (Bet For)';
                   var color='#cbe3f5;';
               }
               if(oddsa==getVal){
                   cr='Lay (Bet Against):';
                   var color='#f5d7e6';
               }
                if(oddsb==getVal){
                   cr='Back (Bet For)';
                     var color='#cbe3f5;';
               }
               if(oddsc==getVal){
                   cr='Lay (Bet Against):';
                    var color='#f5d7e6';
               }
               if(oddsd==getVal){
                   cr='Back (Bet For)';
                     var color='#cbe3f5;';
               }
               if(oddse==getVal){
                   cr='Lay (Bet Against):';
                    var color='#f5d7e6';
               }
               if(oddsa==getVal || oddsc==getVal || oddse==getVal){
                   var id='block';
               }else{
                   var id='none';
               }
               
              var addRow = ('<tr class="betRow" style="background-color:'+ color +';"><td colspan="4" class="" style="color:#000;">'+ cr +':<br>'+ name +'- Match odds </td><td colspan="8" class=""><p style="float:right; margin-top:5px; margin-left:5px; display:'+ id +'"><input type="radio" name="check" id="pay" value="pay" onclick="sum(this.value); style="margin-top:2px;">Payout &nbsp;<input type="radio" name="check" id="pay" value="lay" onclick="sum(this.value);" checked>Liability</p><form class="form-inline float-right" method="post" id="myForm"><input type="hidden" value="'+ name +'" name="teams" id="teams"><input type="reset" style="color:#fff; background-color:red;" value="Reset" class="btn btn-live onclick="resp();"><div class="form-group ml-2"> <input type="text" class="form-control bet-txt" value="'+ getVal +'" name="txt1" id="txt1" onkeyup="sum();"></div><div class="form-group mx-2">  <input type="text" class="form-control bet-txt" placeholder="Stack" name="txt2" id="txt2"  onkeyup="sum();"></div><div class="form-group mx-2">  <input type="text" readonly="readonly" class="form-control bet-txt" placeholder="Profit" name="txt3" id="txt3"></div><?php if($_SESSION['userid']!=''){ ?><input type="button" name="placebet" id="submitFormData" onclick="SubmitFormData();" class="btn btn-red" value="Place bet"><?php }else{?><a href="login" class="btn btn-red" style="color:black; font-size:14px;;">Login</a><?php }?></form><br><br><br><span style="color:green;" id="results"></span></td></tr>');
		 
		$(this).parent("tr").after(addRow);
		$(this).css("background", "");
		
		if( $(this).parents("tbody").children("tr").hasClass("betRow") ){
			$(".betRow").remove();
			$(this).parent("tr").after(addRow);
		}
		else{
			alert("false");
		}		
	});
        
    function SubmitFormData() {
    var teams = $("#teams").val();
    var txt1 = $("#txt1").val();
    var txt2 = $("#txt2").val();
    var txt3 = $("#txt3").val();
    var user = $("#user").val();
    $.post("submit.php", { teams:teams, txt1: txt1, txt2: txt2, txt3: txt3, user: user },
    function(post) {
	 $('#results').html(post);
	 $('#myForm')[0].reset();
    });
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
       if (txtFirstNumberValue == "")
           txtFirstNumberValue = 0;
       if (txtSecondNumberValue == "")
           txtSecondNumberValue = 0;
       if(txtFirstNumberValue != "" && txtSecondNumberValue != ""){
       var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);}else{
       var result = 0;
       }
       if (!isNaN(result)) {
           document.getElementById('txt3').value = result.toFixed(2);
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
<a class="md-close" href="#" style="float:right;"><img src="Images/close.png"></a>	
		</div>
	</div>
</div>
<div class="md-overlay"></div>
</body>
</html>
 