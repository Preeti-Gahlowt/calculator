<html>
	<head>
		<style>
			.outer{
					background-color:gray;
					width:300px;
					height:600px;
					margin-top:10px;
					margin-left:20px;
					}
			.form1{
					margin-left:20px;
					border:5px solid black;
				
			}
		</style>
		
	</head>

	<body>
		<div class="outer">
			<form class="form1" >
				<input type="text" name="num1" placeholder="enter first number"><br><br/><br/>
				<input type="text" name="num2" placeholder="enter second number"><br><br/><br/>
				<label style=border:3px solid black>+
				<input  type="radio" name="operator" value="add"></label>
				<input style="margin-left:20px;" type="radio" name="operator" value="subtract">-
				<input style="margin-left:20px;"type="radio" name="operator" value="multiply">*
				<input style="margin-left:20px;" type="radio" name="operator" value="divide">/<br><br/><br/>
				<input type="submit" name="submit" value="submit">
				<!--<select name="operator"><option>none</option>
						<option>add</option>
						<option>subtract</option>
						<option>multiple</option>
						<option>divide</option></select>
						<input type="submit" name="submit" value="submit">-->
	
			</form>
			<?php
			if(isset($_GET['submit'])){
										$result1= $_GET['num1'];
										$result2= $_GET['num2'];
										$operator=$_GET['operator'];
										

			
			
										
										switch($operator){
											case "none":
											echo"u need 2 select a method";
											break;
											case "add":
											echo $result1+$result2;
											break;
											case "subtract":
											echo $result1-$result2;
											break;
											case "multiply":
											echo $result1*$result2;
											break;
											case "divide" :
											echo $result1/$result2;
											break;
											
										}
										
			}
			
			?>
		</div>
	</body>
</html>
