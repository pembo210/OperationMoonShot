


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="http://www.operationmoonshot.com/inc/TimeCircles.js"></script>
<link rel="stylesheet" href="http://www.operationmoonshot.com/inc/TimeCircles.css" />
<style type="text/css">
 body{background-color:#222; color:#fff;}
#DateCountdown , #DateCountdown1 , #DateCountdown2 , #DateCountdown3  {color:#fff;text-shadow:0px 1px 2px #000}
#DateCountdown4 {color:#fff;text-shadow:0px 1px 2px #000}
</style>

<?php 


$myfile = fopen("https://dogechain.info/chain/Dogecoin/q/getblockcount", "r") ;
$currentblock = fgets($myfile);
//blocks til 400k
$remainingblocks400 = (400000 - $currentblock) ;
$remainingblocks500 = (500000 - $currentblock) ;
$remainingblocks600 = (600000 - $currentblock) ;
$remainingblocksparty = (378842 - $currentblock) ;
//seconds till 400k
$more4 = $remainingblocks400 * 60;
$more5 = $remainingblocks500 * 60;
$more6 = $remainingblocks600 * 60;
$moreparty = $remainingblocksparty * 60;
//seconds until plus current time
$t = time();
//set future times and offset
$more400 = $more4 - 14400 + time();
$more500 = $more5 - 14400 + time();
$more600 = $more6 - 14400 + time();
$moreparty = $moreparty + time();
?>    
   

        <div align="center">
            <h4><?php echo "Block 400k - Estimated " .(gmdate("F d, Y, h:i:s",$more400))." GMT";?></h4>
            <div id="DateCountdown1" data-date="<?php echo (gmdate("Y-m-d h:i:s",$more400)) ?>" 
            style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: #222">
            </div>
        	</div><br>
<!--birthday-->        	
  	        <div align="center" style="background: url('http://operationmoonshot.com/images/wow_much_coin.png') center repeat #222">
            <div style="width: 500px;padding:1px;background: rgba(34,34,34,0.4); border-radius:0px"><h4><strong><font style="text-shadow:0px 1px 2px #000"><?php echo "Happy Birthday Dogecoin - Dec 8, 2014";?></font></h4></div>
            <div id="DateCountdown4" data-date="2014-12-8 00:00:00" 
            style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background: rgba(34,34,34,0.4); border-radius:0px">
            </div>
        	</div><br>
        
         <div align="center">   
            <h4><?php echo "Block 500k - Estimated " .(gmdate("F d, Y, h:i:s",$more500))." GMT";?></h4>
            <div id="DateCountdown2" data-date="<?php echo (gmdate("Y-m-d h:i:s",$more500)) ?>" 
            style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: #222">
            </div>
        </div>  <br>
         
         <div align="center">
            <h4><?php echo "Block 600k - Estimated " .(gmdate("F d, Y, h:i:s",$more600))." GMT";?></h4>
            <div id="DateCountdown3" data-date="<?php echo (gmdate("Y-m-d h:i:s",$more600)) ?>" 
            style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box; background-color: #222">
            </div>
        </div>       
        
        <script>
            $("#DateCountdown").TimeCircles();
            $("#DateCountdown1").TimeCircles();
            $("#DateCountdown2").TimeCircles();
            $("#DateCountdown3").TimeCircles();
            $("#DateCountdown4").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });

        </script> 

