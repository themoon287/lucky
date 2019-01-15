<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
<!-- 	<link href="http://fonts.googleapis.com/css?family=Gravitas+One&amp;text=1234567" rel="stylesheet" type="text/css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script src="/js/jquery.easing.1.3.js" charset="utf-8"></script>
	<script src="/js/jquery.jSlots.min.js" charset="utf-8"></script>
	
  
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
	
	<?php echo $this->Html->scriptBlock('var jsVars = '.$this->Js->object($jsVars).';'); ?>
	
	<style>
	li.list-group-item {
		font-size: 12pt !important;
	}

	.container--mid {
    max-width: 800px;
}
		.btn-reset {
			float:right;
		    margin-right: 100px;
		}
		.btn-result {
			float:right;
		    margin-right: 10px;
		}
		.btn-result, .btn-reset {
			background-color : black;
			color : white
		}
		.btn-result:hover, .btn-reset:hover {
			background-color : white;
			color:black;
		}
		
		
			h1.tit {
/* 			margin-top: 250px; */
				text-align: center;
				margin-bottom: 50px;
				font-size : 30pt;
				color: cyan;
			}
			h2.tit {
				margin-top: 50px;
				text-align: center;
				margin-bottom: 50px;
				font-size : 20pt;
				color: darkgoldenrod;
			}
			.tit-de {
				text-align: center;
				margin-bottom: 50px;
				font-size : 30pt;
				color: cyan;
			}
			.list-group-item{
			font-size: 24pt;
			text-align: center;
			}
			.list-group-item:hover {
				    z-index: 2;
			    color: #fff;
			    background-color: #428bca !important;
			    border-color: #428bca;
			}
			
			.list-group {
				width: 50%;
			    margin: 0 auto;
		/* 	    margin-top: 300px; */
				margin-top: 20px;
			}
			
			
			.btn_turn {
/* 				width:30%; */
				margin: 0 auto; 
				width:250px;
				margin-top: 20px;
			}
			.text {
				text-align:center;
				font-size: 20pt;
				font-weight:bold;
				margin-top: 30px;
				margin-bottom: 30px;
				color: antiquewhite;
			}
			body {
   				background-image: url("/img/background2019.jpg");
    			background-repeat: no-repeat;

   				background-size:cover;
/*    				background-position: center center; */
/* 			background-attachment: fixed; */
			width: 100%;
    height: 100%;
			}
			#content {
				margin-top: 350px;
				margin-left: 200px;
			}
		</style>
</head>
<body>
	<div id="container">
		<div id="header">
			
		</div>
		<div id="content">
			<audio controls autoplay style="display: none;">
<!-- 			  <source src="horse.ogg" type="audio/ogg"> -->
			  <source src="/img/Melodia-dla-Zuzi-Nhac-xo-so-Marek-i-Wacek.mp3"  type="audio/mpeg">
			</audio>

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>
