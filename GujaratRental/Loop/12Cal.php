<?php

$num = "";

if (isset($_REQUEST['btnsubmit'])) 
{
	$num = $_REQUEST['txtnum'];	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		.cal input
		{
			width: 200px;
			height: 100px;
			font-size: 2em;
		}

		p
		{
			margin: 10px 300px;
		}

		.txt input
		{
			width: 800px;
			height: 100px;
			font-size: 2em;
		}
	</style>
</head>
<body>

	<form action="" method="post" onclick="">

		<p class="txt">
			<input type="text" name="txtnum" value="<?php echo $num; ?>">
		</p>

		<p class="cal">
			<input type="button" name="btnsubmit" value="C">
			<input type="button" name="btnsubmit" value="%">
			<input type="button" name="btnsubmit" value="BACK">
			<input type="button" name="btnsubmit" value="/">
		</p>

		<p class="cal">
			<input type="button" name="btnsubmit" value="7">
			<input type="button" name="btnsubmit" value="8">
			<input type="button" name="btnsubmit" value="9">
			<input type="button" name="btnsubmit" value="*">
		</p>

		<p class="cal">
			<input type="button" name="btnsubmit" value="4">
			<input type="button" name="btnsubmit" value="5">
			<input type="button" name="btnsubmit" value="6">
			<input type="button" name="btnsubmit" value="-">
		</p>

		<p class="cal">
			<input type="button" name="btnsubmit" value="1">
			<input type="button" name="btnsubmit" value="2">
			<input type="button" name="btnsubmit" value="3">
			<input type="button" name="btnsubmit" value="+">
		</p>

		<p class="cal">
			<input type="button" name="btnsubmit" value="00">
			<input type="button" name="btnsubmit" value="0">
			<input type="button" name="btnsubmit" value=".">
			<input type="button" name="btnsubmit" value="=">
		</p>
	</form>

<?php
if (isset($_REQUEST['btnsubmit'])) 
{
	
}
?>

</body>
</html>