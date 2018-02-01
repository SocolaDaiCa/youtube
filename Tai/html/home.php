<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		body {
		font-family: "Lato", sans-serif;
		}
		.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #f5f5f5;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
		}
		.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s;
		}
		.sidenav a:hover {
		color: #f1f1f1;
		}
		.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
		}
		#main {
		transition: margin-left .5s;
		padding: 16px;
		}
		@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
		}
		</style>
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
			<a href=""><div class="row">
				<i class="glyphicon glyphicon-home"></i> Trang chủ
			</div>
		</a>
		<!--  -->
	</div>
	<div id="main">
		<h2>Sidenav Push Example</h2>
		<p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
		<span style="font-size:30px;cursor:pointer" onclick="open_close()" >&#9776; open</span>
	</div>
	<script>
		var flag=0;
	function open_close() {
		if(flag==0){
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
			flag=1;
		}
		else{
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
			flag=0;
		}
	}
	</script>
	
</body>
</html>