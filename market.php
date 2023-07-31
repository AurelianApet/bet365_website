<?php 
$page="sports-inner";
include 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    
  window.addEventListener("beforeunload", function (e) {
    var confirmationMessage = 'It looks like you have been editing something. '
                            + 'If you leave before saving, your changes will be lost.';

    (e || window.event).returnValue = confirmationMessage; //Gecko + IE

    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
});
	function div1() {
            if (document.getElementById('one')) {

                if (document.getElementById('one').style.display == 'none') {
                    document.getElementById('one').style.display = 'block';
                   
                }
                else {
                    document.getElementById('one').style.display = 'none';
                   
                }
            }
            if (document.getElementById('onee')) {

                if (document.getElementById('onee').style.display == 'none') {
                    document.getElementById('onee').style.display = 'block';
                   
                }
               
            }
             if (document.getElementById('lia')) {

                if (document.getElementById('lia').style.display == 'none') {
                    document.getElementById('lia').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('even').style.display == 'block') {
                    document.getElementById('even').style.display = 'none';
                   
                }
         
		var myResult = "0.00";
               $("#ren").html(myResult);
           
}


function div2() {
            if (document.getElementById('two')) {

                if (document.getElementById('two').style.display == 'none') {
                    document.getElementById('two').style.display = 'block';
                   
                }
                else {
                    document.getElementById('two').style.display = 'none';
                   
                }
            }
            if (document.getElementById('onee')) {

                if (document.getElementById('onee').style.display == 'none') {
                    document.getElementById('onee').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('lia')) {

                if (document.getElementById('lia').style.display == 'none') {
                    document.getElementById('lia').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('even').style.display == 'block') {
                    document.getElementById('even').style.display = 'none';
                   
                }
            
		var myResult = "0.00";
               $("#ren1").html(myResult);
}

function div3() {
            if (document.getElementById('three')) {

                if (document.getElementById('three').style.display == 'none') {
                    document.getElementById('three').style.display = 'block';
                   
                }
                else {
                    document.getElementById('three').style.display = 'none';
                   
                }
            }
            if (document.getElementById('thee')) {

                if (document.getElementById('thee').style.display == 'none') {
                    document.getElementById('thee').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('lia')) {

                if (document.getElementById('lia').style.display == 'none') {
                    document.getElementById('lia').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('even').style.display == 'block') {
                    document.getElementById('even').style.display = 'none';
                   
                }
            
	 var myResult = "0.00";
         $("#ren2").html(myResult);
}

function div4() {
            if (document.getElementById('four')) {

                if (document.getElementById('four').style.display == 'none') {
                    document.getElementById('four').style.display = 'block';
                   
                }
                else {
                    document.getElementById('four').style.display = 'none';
                   
                }
            }
            if (document.getElementById('thee')) {

                if (document.getElementById('thee').style.display == 'none') {
                    document.getElementById('thee').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('lia')) {

                if (document.getElementById('lia').style.display == 'none') {
                    document.getElementById('lia').style.display = 'block';
                   
                }
               
            }
            if (document.getElementById('even').style.display == 'block') {
                    document.getElementById('even').style.display = 'none';
                   
                }
            
		var myResult = "0.00";
               $("#ren3").html(myResult);
}

function calculate() {
 
		var myBox1 = document.getElementById('box1').value;	
		var myBox2 = document.getElementById('box2').value;
		var result = document.getElementById('pay');
		var myResult = myBox1 * myBox2-myBox2;
                var myResult = myResult.toFixed(2);
                var pay = document.getElementById('pay');	
               $("#ren").html(myResult);
            }
           
        
            function calculate1() {
                var myBox3 = document.getElementById('box3').value;	
		var myBox4 = document.getElementById('box4').value;
		var result = document.getElementById('result1');	
		var myResult1 = myBox3 * myBox4-myBox4;
                var myResult1 = myResult1.toFixed(2);
	       $("#ren1").html(myResult1);
      
		
	}
      
       function calculate2(val) {
           
                var vals=val;
                if(vals!='' && vals=="pay"){
                   
		var myBox5 = document.getElementById('box5').value;	
		var myBox6 = document.getElementById('box6').value;
		var myResult2 = myBox5 * myBox6;
                var myResult2 = myResult2.toFixed(2);
               
               $("#ren2").html(myResult2);
            }else if(vals!='' && vals=="lay"){
                var myBox5 = document.getElementById('box5').value;	
		var myBox6 = document.getElementById('box6').value;
		var myResult2 = myBox5 * myBox6-myBox6;
                var myResult2 = myResult2.toFixed(2);
                	
               $("#ren2").html(myResult2); 
            }else{
              var myBox5 = document.getElementById('box5').value;	
		var myBox6 = document.getElementById('box6').value;
		var myResult2 = myBox5 * myBox6-myBox6;
                var myResult2 = myResult2.toFixed(2);
                	
               $("#ren2").html(myResult2);   
            }
        }
         function calculate3(val) {
            
                var vals=val;
                if(vals!='' && vals=="pay"){
                   
		var myBox7 = document.getElementById('box7').value;	
		var myBox8 = document.getElementById('box8').value;
		var myResult3 = myBox7 * myBox8;
                var myResult3 = myResult3.toFixed(2);
               
               $("#ren3").html(myResult3);
            }else if(vals!='' && vals=="lay"){
                var myBox7 = document.getElementById('box7').value;	
		var myBox8 = document.getElementById('box8').value;
		var myResult3 = myBox7 * myBox8-myBox8;
                var myResult3 = myResult3.toFixed(2);
                	
               $("#ren3").html(myResult3); 
            }else{
                var myBox7 = document.getElementById('box7').value;	
	        var myBox8 = document.getElementById('box8').value;
		var myResult3 = myBox7 * myBox8-myBox8;
                var myResult3 = myResult3.toFixed(2);
                	
               $("#ren3").html(myResult3);   
            }
        }
 function both(){
    var myBoxs2 = document.getElementById('box2').value;
    var myBoxs5 = document.getElementById('box5').value;	
    var myBoxs6 = document.getElementById('box6').value;
    var myResults2 = myBoxs5 * myBoxs6-myBoxs6;
    var myResults2 = myResults2.toFixed(2);
    
    var myBoxs4 = document.getElementById('box4').value;
    var myBoxs7 = document.getElementById('box7').value;
    var myBoxs8 = document.getElementById('box8').value;
    var myResults3 = myBoxs7 * myBoxs8-myBoxs8;
    var myResults3 = myResults3.toFixed(2);
    
    var myBox5 = document.getElementById('box5').value;	
		var myBox6 = document.getElementById('box6').value;
		var myResult2 = myBox5 * myBox6-myBox6;
                var myResult2 = myResult2.toFixed(2);
    var namy=+myBoxs2 + +myResults3;
    if(namy>+myBoxs4 + +myResults2) {
       
        tdl=namy;
       
    }else{
        tdl=+myBoxs4 + +myResults2;
       
    }
    $("#liabil").html(tdl); 
  
     var myBox1 = document.getElementById('box1').value;	
     var myBox2 = document.getElementById('box2').value;
     var myResult = myBox1 * myBox2-myBox2;
     var myResult = myResult.toFixed(2);
     
     var myBox3 = document.getElementById('box3').value;	
     var myBox4 = document.getElementById('box4').value;
     var result = document.getElementById('result1');	
     var myResult1 = myBox3 * myBox4-myBox4;
     var myResult1 = myResult1.toFixed(2);
    
     var homea=myResult-myBox4-myResults2;
     var hmess=+homea + +myBoxs8; 
     var hmes = hmess.toFixed(2);
     if(hmes>0){
         document.getElementById("hme").style.color = "#008000";
     }else{
         document.getElementById("hme").style.color = "#ff0000";
     }
     $("#hme").html(hmes);
      
     var awaya=myResult1-myBox2-myResults3;
     var awyss=+awaya + +myBoxs6;
     var awys = awyss.toFixed(2);
     if(awys>0){
         document.getElementById("awy").style.color = "#008000";
     }else{
         document.getElementById("awy").style.color = "#ff0000";
     }
     $("#awy").html(awys);
   
var myBoxs1 = document.getElementById('box1').value;
var myBoxs5 = document.getElementById('box5').value;
var myBoxs3 = document.getElementById('box3').value;
var myBoxs7 = document.getElementById('box7').value;
 if(myBoxs1<=myBoxs5){   
   
    $("#als").html("Back odds cannot be less or the same as Lay odds."); 
    
 }else{
      $("#als").html("");
 }  
 
 if(myBoxs3<=myBoxs7){   
   
    $("#als").html("Back odds cannot be less or the same as Lay odds."); 
    
 }else{
      $("#als").html("");
 }  
 
 }     
        $(document).ready(function(){
	
$("#myTable").on('input', '.txtCal', function () {
       var calculated_total_sum = 0;
     
       $("#myTable .txtCal").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
              $("#total_sum_value").html(calculated_total_sum);
       });

});

      </script>
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
<div class="container-fluid">
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
                                                    $sports=$_REQUEST['tm'];
                                                    $data= array($sports);
                                                    $rows=$obj->teammatch($data);
                                                     
                                                    ?>
                                        <li>
                                            <p style="color:#fff;"><?php echo $rows[0]['name']?> </p>
						<ul class="country-list">
							
						</ul>
					</li>
                                                   
										
				</ul>
                        </aside></div>
		</div>
		
		<div class="col-xl-6 col-md-6 px-2 plusPage">
			<div class="bg-444 pt-0 mt-2">
				<div class="bg-dark p-2">
					<h2 class="heading"><?php echo $rows[0]['name']?></h2>
					<div class="clearfix">
                                        <span class="text-white-50 small float-left"><?php echo $dd=date("M-d", strtotime($rows[0]['start']))?>,&nbsp;&nbsp;<?php echo $rows[0]['start_time'];?></span>
<!--						<a href="#"><span class="text-black-50 small badge badge-warning float-right">Multipal</span></a>-->
					</div>
				</div>
				
                            <div class="p-2" style="background-color:white;">
					<h5 class="text-black">Match Odds</h5><hr>					
					<p class="text-danger"></p>
					<div class="table-responsive">
                                            
					<table class="table table-dark table-betting table-bordered">
                                            <tr class="" style="">
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th style="background-color:#a6d8ff;;">Back all</th>
                                                                <th style="background-color:#fac9d4;">Lay all</th>
								<th></th>
                                                                <th></th>
                                                                 <th></th>
								
							</tr>
                                            <tbody>
                                           
                                                <tr>
                                                    
                                                    <td id="test<?php echo $i;?>"><?php echo $rows[0]['home']; ?><div><span id="hme"></span></div>  <?php  echo $teamodds1[$lang.'_titlea']; ?></td>
                                                                <td>-</td>
								<td>-</td>
								<td class="std2" id="1" onclick="div1();"><?php echo $rows[0]['home_back'];?></td>
								<td class="std3" id="2" onclick="div3();"><?php echo $rows[0]['home_lay'];?></td>
                                                                
								<td>-</td>
								<td>-</td>
								<td><i></i></td>
							</tr>
							
						</tbody>
                                                <tbody>
					  
                                                            
                                                              <td id="test<?php echo $i;?>"><?php echo $rows[0]['away']; ?><div><span id="awy"></span></div>  <?php  echo $teamodds1[$lang.'_titlea']; ?></td>
                                                           
                                                                <td>-</td>
								<td>-</td>
								<td class="std2" id="3" onclick="div2();"><?php echo $rows[0]['away_back'];?></td>
								<td class="std3" id="4" onclick="div4();"><?php echo $rows[0]['away_lay'];?></td>
								<td>-</td>
								<td>-</td>
                                                                <td><i></i></td>
								
							</tr>
							
						</tbody>
<!--                                                <tbody>
					  
                                                            
                                                              <td id="test<?php echo $i;?>">Draw</td>
                                                           
                                                                <td>-</td>
								<td>-</td>
								<td class="std2"><?php echo $rows[0]['draw'];?></td>
								<td class="std3"><?php echo $rows[0]['draws'];?></td>
								<td>-</td>
								<td>-</td>
                                                                <td><i></i></td>
								
							</tr>
							
						</tbody>-->
						   
                                        </table><br>
                                            <p style="font-size:12px;">Warning: Although the current score, time elapsed, video and other data provided on this site is sourced from "live" feeds provided by third parties, you should be aware that this data may be subject to a time delay and/or be inaccurate.  Please also be aware that other Betfair customers may have access to data that is faster and/or more accurate than the data shown on the Betfair site. If you rely on this data to place bets, you do so entirely at your own risk. Betfair provides this data AS IS with no warranty as to the accuracy, completeness or timeliness of such data and accepts no responsibility for any loss (direct or indirect) suffered by you as a result of your reliance on it.</p>
				</div>
				</div>
				
				
			</div>	
		</div>
			 
	
		<div class="col-xl-4 px-0 couponSide1 bg-dark py-4">
			<ul class="nav nav-tabs batiing-tab" id="gameTab" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active" id="place-bet-tab" data-toggle="tab" href="#place-bet" role="tab" aria-controls="place-bet" aria-selected="true">Place bets</a>
			  </li>
			  
			</ul>
                    <div class="tab-content">
			  <div class="tab-pane fade show active" id="place-bet" role="tabpanel" aria-labelledby="home-tab">
                              <h5 class="mt-2 text-black pl-3">Win Only Market</h5>&nbsp;&nbsp;<span style="font-size:10px; color:red;" id="als"></span>
			  	
			  	<div class="text-center mt-5" id="even" style="display:block;">
			  		<span class="small text-black-50">Click on the odds to add selections to the betslip.</span><br>			  		
			  		<a href="#" class="btn btn-warning small mt-4">Place Multiples on the exchangebet</a>
			  	</div>
			  </div>
<!--			  <div class="tab-pane fade" id="open-bet" role="tabpanel" aria-labelledby="profile-tab">
			  	<h5 class="mt-2 text-white pl-3">Win Only Market</h5>
			  	<hr>
			  	<div class="text-center mt-5">
			  		<span class="small text-white-50">Click on the odds to add selections to the betslip.</span><br>
			  		<a href="#" class="btn btn-warning small mt-4">Place Multiples on the Betfair Sportbook</a>
			  	</div>
			  </div>-->
			  <div class="tab-pane fade" id="game" role="tabpanel" aria-labelledby="contact-tab"></div>
			</div>
			<div class="rTable">
                            
<div class="rTableRow" id="onee" style="display: none;">
<div class="rTableHead"><strong>Back (bet for)</strong></div>
<div class="rTableHead"><span style="font-weight: bold;">Odds</span></div>
<div class="rTableHead">Stake</div>
<div class="rTableHead">Profit</div>
</div>
                            <div class="rTableRow" id="one" style="display: none;">
<div class="rTableCell"><button class="deleteButton" onclick="div1();">X</button>&nbsp;<?php echo $rows[0]['home']; ?></div>
<div class="rTableCell"><input id="box1"  type="number" value="<?php echo $rows[0]['home_back'];?>" style="width:60; height: 20px;" oninput="calculate(),both();"></div>
<div class="rTableCell"><input id="box2"  type="text" class='txtCal' oninput="calculate(),both();" value="" style="width:60; height: 20px;"></div>
<div class="rTableCell">&#163;<span id="ren"></span></div>

</div>
<div class="rTableRow" id="two" style="display: none;">
<div class="rTableCell"><button class="deleteButton" onclick="div2();">X</button>&nbsp;<?php  echo $rows[0]['away']; ?></div>
<div class="rTableCell"><input id="box3"  type="number" value="<?php echo $rows[0]['away_back'];?>" style="width:60; height: 20px;" oninput="calculate1(),both();"></div>
<div class="rTableCell"><input id="box4" oninput="calculate1(),both();" type="text" value="" style="width:60; height: 20px;"></div>
<div class="rTableCell">&#163;<span id="ren1"></span></div>
</div>
                            <div class="rTableRow" id="thee" style="display: none;">
<div class="rTableHead1" sty><strong>Lay (bet Against)</strong></div>
<div class="rTableHead1"><span style="font-weight: bold;">Bakers Odds</span></div>
<div class="rTableHead1">Bakers Stake</div>
<div class="rTableHead1" style="font-size:12px;">
    <input type="radio" name="check" id="pay" value="pay" onclick="calculate2(this.value);calculate3(this.value);">Payout<br><input type="radio" name="check" id="pay" value="lay" onclick="calculate2(this.value);calculate3(this.value);" checked>Liability</div>
</div><br>
<div class="rTableRow1"  id="three" style="display: none;">
<div class="rTableCell1"><button class="deleteButton" onclick="div3();">X</button>&nbsp;<?php echo $rows[0]['home']; ?></div>
<div class="rTableCell1"><input id="box5" oninput="calculate2(),both();" type="number" value="<?php echo $rows[0]['home_lay'];?>" style="width:60; height: 20px;"></div>
<div class="rTableCell1"><input id="box6" oninput="calculate2(),both();" type="text" value="" style="width:60; height: 20px;"></div>
<div class="rTableCell1">&#163;<span id="ren2"></span></div>

</div>
<div class="rTableRow1" id="four" style="display: none;">
<div class="rTableCell1"><button class="deleteButton" onclick="div4();">X</button>&nbsp;<?php  echo $rows[0]['away']; ?></div>
<div class="rTableCell1"><input id="box7" oninput="calculate3(),both();" type="number" value="<?php echo $rows[0]['away_lay'];?>" style="width:60; height: 20px;"></div>
<div class="rTableCell1"><input id="box8" oninput="calculate3(),both();" type="text" value="" style="width:60; height: 20px;"></div>
<div class="rTableCell1">&#163;<span id="ren3"></span></div>
</div>
<div class="rTableRow1" id="lia" style="display: none;">
    <div class="rTableCell2" style="color:#fff;">Liability:&#163;<span id="liabil"></span></div>
<div class="rTableCell2"></div>
<div class="rTableCell2"></div>
<div class="rTableCell2"><button class="button">Place bets</button></div>

</div>
</div>
                    <style>
                        .rTable {
   display: table;
   width: 100%;
}
.rTableRow {
  
}
.rTableHeading {
   display: table-header-group;
   background-color: #ddd;
}
.rTableCell, .rTableHead {
   display: table-cell;
   padding: 3px 10px;
   border: 1px solid white;;
   border-bottom: 1px solid white;;
   background-color: #dbefff;;
}
.rTableCell1, .rTableHead1 {
   display: table-cell;
   padding: 3px 10px;
   border: 1px solid white;;
   border-bottom: 1px solid white;;
   background-color: #fee9ee;;;
}
.rTableCell2, .rTableHead1 {
   display: table-cell;
   padding: 3px 10px;
   border: 0px solid white;;
   border-bottom: 0px solid white;;
  
}
.rTableHeading {
   display: table-header-group;
   background-color: #ddd;
   font-weight: bold;
}
.rTableFoot {
   display: table-footer-group;
   font-weight: bold;
   background-color: #ddd;
}
.rTableBody {
   display: table-row-group;
}.rTable {
   display: block;
   width: 100%;
}
.rTableHeading, .rTableBody, .rTableFoot, .rTableRow{
   clear: both;
}
.rTableHead, .rTableFoot{
   background-color: #a6d8ff;;
   font-weight: bold;
}
.rTableHead1, .rTableFoot{
   background-color: #fac9d4;;;
   font-weight: bold;
}
.rTableCell, .rTableHead {
   border: 0px solid #999999;
   float: left;
   height: 33px;
   overflow: hidden;
   padding: 3px 1.8%;
   width: 25%;
   font-size:12px;
   
}
.rTableCell1, .rTableHead1 {
   border: 0px solid #999999;
   float: left;
   height: 33px;
   overflow: hidden;
   padding: 3px 1.8%;
   width: 25%;
   font-size:12px;
   
}
.rTable:after {
   visibility: hidden;
   display: block;
   font-size: 0;
   content: " ";
   clear: both;
   height: 0;
}
.rTable1:after {
   visibility: hidden;
   display: block;
   font-size: 0;
   content: " ";
   clear: both;
   height: 0;
}
                    </style>
		</div>
		
	</div>
</div>
<script type="text/javascript">
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

</script>

<script>
    <div class="bets-container back" tabselect="false" ng-class="potentialsCtrl.data.betsContainerClass" style="max-height: 66px; overflow: auto;"><!-- ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets || potentialsCtrl.data.marketData.market.marketPosition.hasPotentialLayBets --><span class="current-bets-header ng-binding ng-scope" ng-if="potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets || potentialsCtrl.data.marketData.market.marketPosition.hasPotentialLayBets" ng-bind-template="Current odds bets">Current odds bets</span><!-- end ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets || potentialsCtrl.data.marketData.market.marketPosition.hasPotentialLayBets --><!-- ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets --><div class="bet-header back-bets-header ng-scope" ng-if="potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets"><div class="back-bets-header-wrapper"><div class="back-bet-text-wrapper"><span class="back-bet-text ng-binding" ng-bind-template="Back (Bet For)" title="Back (Bet For)">Back (Bet For)</span></div><div class="back-odds-text-wrapper"><span class="odds-text ng-binding" ng-bind-template="Odds">Odds</span></div><!-- ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><span class="stake-text-wrapper ng-scope" ng-if="!potentialsCtrl.data.marketData.market.isEachWay"><a class="stake-text stake-text-link ng-binding ng-isolate-scope" ng-bind-template="Stake" popup="Total stake" title="Stake" position="TOTAL_STAKE" ng-click="potentialsCtrl.events.updatePayoutLiabilityOptions(potentialsCtrl.data.moduleConfig.popup.profit, false)" payout-option="betslipCtrl.data.betslipContext.states.potentialPayoutOption">Stake</a> <span class="stake-hint-wrapper" ng-click="potentialsCtrl.events.showContextualHelpPopup($event, potentialsCtrl.data.contextualHelpPopup.configs.stake.id)">[<span class="hint-interrogation">?</span>] </span></span><!-- end ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><!-- ngIf: potentialsCtrl.data.marketData.market.isEachWay --><!-- ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><div class="profit-text-wrapper ng-scope" ng-if="!potentialsCtrl.data.marketData.market.isEachWay"><span class="profit-text ng-binding" ng-bind-template="Profit">Profit</span></div><!-- end ngIf: !potentialsCtrl.data.marketData.market.isEachWay --></div></div><!-- end ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets --><!-- ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets --><ul class="bet-wrapper back-bets ng-scope" ng-if="potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets"><!-- ngRepeat: runner in potentialsCtrl.data.marketData.market.runners | orderBy:'state.sortPriority' --><!-- ngIf: runner.runnerPosition.potentialBackBet !== null && runner.runnerPosition.potentialBackBet.isVisible && runner.state.status === potentialsCtrl.data.appConfig.market.runnerStatus.active --><li ng-repeat="runner in potentialsCtrl.data.marketData.market.runners | orderBy:'state.sortPriority'" ng-if="runner.runnerPosition.potentialBackBet !== null &amp;&amp; runner.runnerPosition.potentialBackBet.isVisible &amp;&amp; runner.state.status === potentialsCtrl.data.appConfig.market.runnerStatus.active" class="ng-scope"><div class="bet"><button title="Remove" class="close" ng-click="potentialsCtrl.events.deleteBet(runner.runnerPosition.potentialBackBet, runner.runnerPosition)" tabindex="27"></button> <span class="bet-runner-name ng-binding" title="Wigan Warriors" ng-bind-template="Wigan Warriors">Wigan Warriors</span><div class="bet-values"><oddsladder controller-name="OddsLadderPotentialController" ng-model="runner.runnerPosition.potentialBackBet.price" value="runner.runnerPosition.potentialBackBet.price" visible="true" tabindex="($index + potentialsCtrl.data.moduleConfig.potential.tabOrder.nextElement) * potentialsCtrl.data.moduleConfig.potential.tabOrder.inputsPerRow + potentialsCtrl.data.moduleConfig.potential.tabOrder.previousElement" bet="runner.runnerPosition.potentialBackBet" showerrors="betslipCtrl.data.betslipContext.states.showError" class="ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty"><div class="oddsladder"><div class="odds-ladder-left"><input price-input="price-input" floating-number="" ng-trim="false" type="text" maxlength="6" id="odds-id-p-back-0-23390" class="price-input ng-pristine ng-valid ng-not-empty ng-valid-maxlength ng-touched" ng-model="bet.price" ng-class="{'invalid': bet.hasPriceError}" tabindex="1" ng-blur="events.validatePrice()" ng-change="events.changeBet(bet.price)" ng-disabled="bet.openUnmatchedDisabledPrice || deactivated" ng-readonly="bet.openUnmatchedDisabledPrice"></div><div class="odds-ladder-right"><button class="arrow-btn" ng-disabled="events.isDisabled(data.nudgeDirection.up)" tabindex="-1" ng-mouseup="events.update(data.nudgeDirection.up)"><div class="arrow-up"></div></button><div class="button-separator"></div><button class="arrow-btn" ng-disabled="events.isDisabled(data.nudgeDirection.down)" tabindex="-1" ng-mouseup="events.update(data.nudgeDirection.down)"><div class="arrow-down"></div></button></div></div></oddsladder><stakeinput ng-model="runner.runnerPosition.potentialBackBet.size" class="stake-input-directive ng-pristine ng-untouched ng-valid ng-isolate-scope ng-empty" ng-class="{'invalid':runner.runnerPosition.potentialBackBet.hasStakeError}" tabindex="($index + potentialsCtrl.data.moduleConfig.potential.tabOrder.nextElement) * potentialsCtrl.data.moduleConfig.potential.tabOrder.inputsPerRow" bet="runner.runnerPosition.potentialBackBet" showerrors="betslipCtrl.data.betslipContext.states.showError"><input stake-input="" floating-number="" ng-trim="false" type="text" maxlength="9" id="stake-id-p-back-0-23390" class="size-input ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength" ng-model="bet.size" ng-change="events.updateStake()" ng-class="{'invalid': bet.hasStakeError}" ng-blur="events.validateStake()" tabindex="2" ng-disabled="bet.openUnmatchedDisabledSize || (deactivated || false)"></stakeinput><!-- ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><span class="bet-profit ng-binding ng-scope" ng-if="!potentialsCtrl.data.marketData.market.isEachWay" ng-bind-template="£0.00">£0.00</span><!-- end ngIf: !potentialsCtrl.data.marketData.market.isEachWay --></div><!-- ngIf: ::potentialsCtrl.data.marketData.market.isEachWay --></div></li><!-- end ngIf: runner.runnerPosition.potentialBackBet !== null && runner.runnerPosition.potentialBackBet.isVisible && runner.state.status === potentialsCtrl.data.appConfig.market.runnerStatus.active --><!-- end ngRepeat: runner in potentialsCtrl.data.marketData.market.runners | orderBy:'state.sortPriority' --><!-- ngIf: runner.runnerPosition.potentialBackBet !== null && runner.runnerPosition.potentialBackBet.isVisible && runner.state.status === potentialsCtrl.data.appConfig.market.runnerStatus.active --><!-- end ngRepeat: runner in potentialsCtrl.data.marketData.market.runners | orderBy:'state.sortPriority' --><!-- ngIf: runner.runnerPosition.potentialBackBet !== null && runner.runnerPosition.potentialBackBet.isVisible && runner.state.status === potentialsCtrl.data.appConfig.market.runnerStatus.active --><!-- end ngRepeat: runner in potentialsCtrl.data.marketData.market.runners | orderBy:'state.sortPriority' --></ul><!-- end ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialBackBets --><div class="bet-header lay-bets-header ng-hide" ng-show="potentialsCtrl.data.marketData.market.marketPosition.hasPotentialLayBets"><div class="lay-bets-header-wrapper"><div class="lay-bet-text-wrapper"><span class="lay-bet-text ng-binding" ng-bind-template="Lay (Bet Against)" title="Lay (Bet Against)">Lay (Bet Against)</span></div><div class="backers-odds-text-wrapper"><span class="backers-odds-text contextual-help ng-binding" ng-bind-template="Backer's
 odds">Backer's
 odds</span></div><div class="backers-stake-text-wrapper"><span class="backers-stake-text contextual-help ng-binding" ng-bind-template="Backer's
 stake">Backer's
 stake</span></div><!-- ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><div class="options-wrapper potential" ng-if="!potentialsCtrl.data.marketData.market.isEachWay"><div class="radio-payout-wrapper"><label><input type="radio" value="PAYOUT" class="input-radio-payout ng-pristine ng-untouched ng-valid ng-not-empty" name="input-radio-liability-group" ng-model="potentialsCtrl.data.preferences.liabilityView"> <a class="potential-controller-radio ng-binding ng-isolate-scope" ng-bind-template="Payout" popup="Max payout" title="Payout" position="TOTAL_LIABILITY" ng-click="potentialsCtrl.events.updatePayoutLiabilityOptions(potentialsCtrl.data.moduleConfig.popup.payout, true)" payout-option="betslipCtrl.data.betslipContext.states.potentialPayoutOption">Payout</a></label></div><div class="radio-liability-wrapper"><label><input type="radio" value="LIABILITY" class="input-radio-liability ng-pristine ng-untouched ng-valid ng-not-empty" name="input-radio-liability-group" ng-model="potentialsCtrl.data.preferences.liabilityView"> <a class="potential-controller-radio ng-binding ng-isolate-scope" ng-bind-template="Liability" popup="Max liability" title="Liability" position="TOTAL_LIABILITY" ng-click="potentialsCtrl.events.updatePayoutLiabilityOptions(potentialsCtrl.data.moduleConfig.popup.liability, true)" payout-option="betslipCtrl.data.betslipContext.states.potentialPayoutOption">Liability</a></label></div></div><!-- end ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><!-- ngIf: !potentialsCtrl.data.marketData.market.isEachWay --><div class="hint-wrapper ng-scope" ng-if="!potentialsCtrl.data.marketData.market.isEachWay" ng-click="potentialsCtrl.events.showContextualHelpPopup($event, potentialsCtrl.data.contextualHelpPopup.configs.payoutLiability.id)">[<span class="hint-interrogation">?</span>]</div><!-- end ngIf: !potentialsCtrl.data.marketData.market.isEachWay --></div></div><!-- ngIf: potentialsCtrl.data.marketData.market.marketPosition.hasPotentialLayBets --><!-- ngIf: potentialsCtrl.data.marketData.market.marketPosition.totalPotentialSPBets > 0 --></div>
    
    </script>
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
</body>
</html>
<script>
    $("#table2 td").click(function ()
    {
     $(this).closest('table').find('td').not(this).removeClass('selected');      $(this).toggleClass('selected');
    });
    
    

    </script>
    <script>
    $("#table3 td").click(function ()
    {
     $(this).closest('table').find('td').not(this).removeClass('selected');      $(this).toggleClass('selected');
    });
    
    

    </script>
    <style>
        table, th, td {
    border: 1px solid black;
}

.First {
  background-color: #000;
  color: #fff;
}

.Second {
  background-color: #fff;
  color: #000;
}

.selected {
    background-color: rgba(0,0,0,0.4) !important;
    color: #fff;
}

table {
  border-collapse: collapse;
}
</style>

<script>
    $(document).ready(function() {
        $('#showmenu').click(function() {
                $('.mydiv').slideToggle("fast");
        });
         $('#showmenua').click(function() {
                $('.mydiva').slideToggle("fast");
        });
        $('#showmenub').click(function() {
                $('.mydivb').slideToggle("fast");
        });
        $('#showmenuc').click(function() {
                $('.mydivc').slideToggle("fast");
        });
        $('#showmenud').click(function() {
                $('.mydivd').slideToggle("fast");
        });
        $('#showmenue').click(function() {
                $('.mydive').slideToggle("fast");
        });
    });
    </script>
   
<!--	dropdown footer-->
<script src="js/jquery.dd.min.js"></script>
<style>
    .deleteButton {
background: transparent;
border: 1px solid #f00;
border-radius: 2em;
color: #f00;
display: inline-block;
font-size: 12px;
height: 20px;
line-height: 2px;
margin: 0 0 8px;
padding: 0;
text-align: center;
width: 20px;
}
.button {
  background-color: #FFB80C;
  border: none;
  color: white;
  padding: 5px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>