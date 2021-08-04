<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.rounded {
			counter-reset: li; 
			list-style: none; 
			font: 14px "Trebuchet MS", "Lucida Sans";
			padding: 0;
			text-shadow: 0 1px 0 rgba(255,255,255,.5);
			}
			.rounded a {
			position: relative;
			display: block;
			padding: .4em .4em .4em 2em;
			margin: .5em 0;
			background: #DAD2CA;
			color: #444;
			text-decoration: none;
			border-radius: .3em;
			transition: .3s ease-out;
			}
			.rounded a:hover {background: #E9E4E0;}
			.rounded a:hover:before {transform: rotate(360deg);}
			.rounded a:before {
			content: counter(li);
			counter-increment: li;
			position: absolute;
			left: -1.3em;
			top: 50%;
			margin-top: -1.3em;
			background: #8FD4C1;
			height: 2em;
			width: 2em;
			line-height: 2em;
			border: .3em solid white;
			text-align: center;
			font-weight: bold;
			border-radius: 2em;
			transition: all .3s ease-out;
		}
		.tutorial {
		    width: 33%;
		    min-width: 280px;
		    margin: 0 auto;
		}
	</style>
</head>
<body>

<div class="tutorial">
	<h1>Домашнее задание</h1>
	<ol class="rounded">
	  <li><a href="http://homework/debi.php">1</a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	</ol>
</div>
</body>
</html>