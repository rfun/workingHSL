<?php
//This is required to get the international text strings dictionary
require_once 'internationalize.php';

//Part 1 for Adding variable

//Process a new variable name

$varname=$_GET['varname'];
$vardef=$_GET['vardef'];

//First check if the same entry exists in the table
require_once 'db_config.php';

$sql="SELECT * FROM `variablenamecv` WHERE Term='$varname'";
$result = @mysql_query($sql,$connect)or die(mysql_error());
$row=mysql_num_rows($result);
if($row>0)
//{echo("The variable name already exists. Cannot Add again. Please select it from the drop down list");}
{echo $VarNameExists;}

else
{	$sql1="INSERT INTO `variablenamecv`(`Term`, `Definition`) VALUES ('$varname','$vardef')	";
	$result1 = @mysql_query($sql1,$connect)or die(mysql_error());
	echo($result1);
	}
?>
