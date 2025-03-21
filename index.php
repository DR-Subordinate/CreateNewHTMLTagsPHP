<!DOCTYPE html>
<html>
<head>
	<title>タグ作成ツール</title>
	<meta charset="UTF-8">
</head>
<style>

table {

	border-collapse:	collapse;
}


td,th{
	border:				1px solid #333333;
	padding:			5px 10px;
}

tr:nth-of-type(2n) {
	background-color:	#dddddd;
}

</style>
<body>
<form action="tag.php" method="POST">
	<table>
		<tr><th>管理番号</th><td><textarea cols="50" rows="10" name="url"></textarea></td></tr>
		<tr><th>商品名</th><td><textarea cols="50" rows="10" name="name"></textarea></td></tr>
	</table><br>
<input type="submit" value="タグ作成">

</form>

</body>
</html>
