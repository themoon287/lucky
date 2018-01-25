<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>jSlots Slot Machine - Matthew Lein</title>


<link href='http://fonts.googleapis.com/css?family=Gravitas+One&text=1234567' rel='stylesheet' type='text/css'>

<style type="text/css">


ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.jSlots-wrapper {
    overflow: hidden;
    height: 20px;
    display: inline-block; /* to size correctly, can use float too, or width*/
    border: 1px solid #999;
}

.slot {
    float: left;
}



/* ---------------------------------------------------------------------
   FANCY EXAMPLE
--------------------------------------------------------------------- */
.fancy .jSlots-wrapper {
    overflow: hidden;
    height: 100px;
    display: inline-block; /* to size correctly, can use float too, or width*/
    border: 1px solid #999;
}

.fancy .slot li {
/*     width: 100px; */
	width: 200px;
    line-height: 100px;
    text-align: center;
    font-size: 70px;
    font-weight: bold;
    color: darkorange;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
/*     font-family: 'Gravitas One', serif; */
    border-left: 1px solid #999;
    background-color: white;
}

.fancy .slot:first-child li {
    border-left: none;
}

.slot-sub {
    height: 100px;
    display: inline-block;
    border: 1px solid #999;
    width: 202px;
    line-height: 100px;
    text-align: center;
    font-size: 70px;
    font-weight: bold;
    color: darkorange;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.8);
    /* font-family: 'Gravitas One', serif; */
    /* border-left: 1px solid #999; */
    background-color: white;
    position: absolute;
    z-index: 999;
}
/* .jSlots-wrapper:first-child { */
/* 	position:absolute; */
/* 	z-index:999; */
/* } */

/* .fancy .slot li:nth-child(7), { */
/*     background-color: #FFCE29; */
/* } */
/* .fancy .slot li:nth-child(6),.fancy .slot li:nth-child(0) { */
/*     background-color: #FFA22B; */
/* } */
/* .fancy .slot li:nth-child(5),.fancy .slot li:nth-child(12) { */
/*     background-color: #FF8645; */
/* } */
/* .fancy .slot li:nth-child(4),.fancy .slot li:nth-child(11) { */
/*     background-color: #FF6D3F; */
/* } */
/* .fancy .slot li:nth-child(3),.fancy .slot li:nth-child(10) { */
/*     background-color: #FF494C; */
/* } */
/* .fancy .slot li:nth-child(2), .fancy .slot li:nth-child(9){ */
/*     background-color: #FF3333; */
/* } */
/* .fancy .slot li:nth-child(1), */
/* .fancy .slot li:nth-child(8) { */
/*     background-color: #FF0000; */
/* } */

.fancy .slot li span {
    display: block;
}

/* ---------------------------------------------------------------------
   ANIMATIONS
--------------------------------------------------------------------- */

@-webkit-keyframes winner {
        0%, 50%, 100% {
            -webkit-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -webkit-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -webkit-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-moz-keyframes winner {
        0%, 50%, 100% {
            -moz-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -moz-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -moz-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}
@-ms-keyframes winner {
        0%, 50%, 100% {
            -ms-transform: rotate(0deg);
            font-size:70px;
            color: #fff;
        }
        25% {
            -ms-transform: rotate(20deg);
            font-size:90px;
            color: #FF16D8;
        }
        75% {
            -ms-transform: rotate(-20deg);
            font-size:90px;
            color: #FF16D8;
        }
}


@-webkit-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-moz-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}
@-ms-keyframes winnerBox {
        0%, 50%, 100% {
            box-shadow: inset 0 0  0px yellow;
            background-color: #FF0000;
        }
        25%, 75% {
            box-shadow: inset 0 0 30px yellow;
            background-color: aqua;
        }
}



.winner li {
    -webkit-animation: winnerBox 2s infinite linear;
       -moz-animation: winnerBox 2s infinite linear;
        -ms-animation: winnerBox 2s infinite linear;
}
.winner li span {
     -webkit-animation: winner 2s infinite linear;
        -moz-animation: winner 2s infinite linear;
         -ms-animation: winner 2s infinite linear;
}
.mid {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

</style>



</head>
<body>
	<div style="height: 70px;">
	<button type="button" onclick="window.location.href='/home/index';" class="btn btn-lg btn-reset">Back</button>
	</div>
    <h1 class="tit"><?php echo $tittle?></h1> 
    <div class= "mid">
	    <div class="fancy" style="position: relative">
	    	<div class="slot slot-sub">****</div>
	        <ul class="slot slot-main">
	            <!-- In reverse order so the 7s show on load -->
	            <?php 
	            	foreach ($list as $user) {
	            		echo "<li><span>".$user['code']."</span></li>";
	            	}
	            ?>
	            
	        </ul>
	        
	    </div>
	    
    </div>
    <div class="row">
	    <div class="col-xs-4"></div>
	    <div class="col-xs-4"><button type="button" id="playFancy" class="btn btn-primary btn-lg btn-block btn btn-info btn_turn">Quay</button></div>
	    <div class="col-xs-4"></div>
	</div>
<div class="text-center"></div>
<p class="text prize">Ai?</p>

    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> -->
    <script src="/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/jquery.jSlots.min.js" type="text/javascript" charset="utf-8"></script>


  
    <script type="text/javascript" charset="utf-8">
    var pathname = window.location.protocol + "//" + window.location.host;
    $(".prize").css('visibility','hidden');
        
        // fancy example
        $('.fancy .slot-main').jSlots({
            number : 1,
            winnerNumber : 1,
            spinner : '#playFancy',
            easing : 'easeOutSine',
            time : 7000,
            loops : 6,
            onStart : function() {
                $('.slot').removeClass('winner');
                $(".prize").text();
                $(".prize").css('visibility','hidden');
                $(".slot-sub").css('z-index','0');
            },
            onEnd : function(finalNumbers) {
//             	console.log(finalNumbers);
            	console.log(jsVars.list[finalNumbers-1]);
            	$(".prize").text(jsVars.list[finalNumbers-1].name);
            	$(".prize").css('visibility','visible');
             	$('ul.slot').addClass('winner');

				//ajax

             	$.ajax({
                    url: pathname + "/home/prize/",
                    method: "POST",
                    dataType: "json",
                    data: {user:jsVars.list[finalNumbers-1], id : jsVars.id },
                    success: function(response){
                        console.log(response);
                        if (response == 0) {
							alert ( "Error");
                         }
                    }
                });
             	
               },
            onWin : function(winCount, winners) {
            }
        });
        
        
    </script>
    
</body>
</html>
