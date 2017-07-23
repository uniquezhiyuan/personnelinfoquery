<html>
<body>
<center>
<h2>人员信息查询系统</h2>
查询人员：<?php echo $_POST["name"]; ?><br><br>
结果如下：<br><br>

<?php
$link=mysql_connect("localhost","root","zhiyuan");
mysql_select_db("info",$link);
$sql="select * from info where name='".$_POST["name"]."'";
mysql_query("set character set 'utf8';");
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result,MYSQL_NUM)){
	$name=$row[0];
	$unit=$row[1];
	$nation=$row[2];
	$family=$row[3];
	$hometown=$row[4];
	$political=$row[5];
	$degree=$row[6];
	$rank=$row[7];
	$id=$row[8];
	$gender=$row[9];
	$birthday=$row[10];
	$enlisttime=$row[11];
	$ccytime=$row[12];
	$address=$row[13];
	$code=$row[14];
	$tel=$row[15];
	$honor=$row[16];
}
?>

<table border=1>

<tr><td>姓名</td><td><?php echo $name; ?></td></tr>
<tr><td>单位</td><td><?php echo $unit; ?></td></tr>
<tr><td>民族</td><td><?php echo $nation; ?></td></tr>
<tr><td>家庭出身</td><td><?php echo $family; ?></td></tr>
<tr><td>籍贯</td><td><?php echo $hometown; ?></td></tr>
<tr><td>政治面貌</td><td><?php echo $political; ?></td></tr>
<tr><td>学历</td><td><?php echo $degree; ?></td></tr>
<tr><td>峻险</td><td><?php echo $rank; ?></td></tr>
<tr><td>身份证号码</td><td><?php echo $id; ?></td></tr>
<tr><td>性别</td><td><?php echo $gender; ?></td></tr>
<tr><td>生日</td><td><?php echo $birthday; ?></td></tr>
<tr><td>入屋时间</td><td><?php echo $enlisttime; ?></td></tr>
<tr><td>党团时间</td><td><?php echo $ccytime; ?></td></tr>
<tr><td>家庭住址</td><td><?php echo $address; ?></td></tr>
<tr><td>邮政编码</td><td><?php echo $code; ?></td></tr>
<tr><td>电话</td><td><?php echo $tel; ?></td></tr>
<tr><td>所获荣誉</td><td><?php echo $honor; ?></td></tr>

</table>
</center>
</body>
</html>
