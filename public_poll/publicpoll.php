<?php
$vote=$_GET['q'];
$filename="results.txt";
$content=file($filename);

$array=explode("||",$content[0]);
$gpsk=$array[0];
$khadhi=$array[1];
if($vote==0){
	$gpsk=$gpsk+1;
}
else 
	$khadhi=$khadhi+1;

$insertvote=$gpsk."||".$khadhi;

$fp=fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<?php $nbk=(100*round($gpsk/($gpsk+$khadhi),2));
		$chiru=(100*round($khadhi/($gpsk+$khadhi),2));
?>
<style type="text/css">
table{
font-size:25px;
color:#340ecc;
}
font{
	margin-top:2%;
	color:#f7ed2a;
	text-align:center;
	font-size:25px;
	background-color:#706c2a;
	display:block;
	border-radius:5px;
	font-weight:bold;
}
</style>
<center><font>Results</font></center>
<table>
	<tr>
	<td>gautamiputra satakarni:</td>
	<?php if($nbk>$chiru){ ?>
		<td><img src="green.jpeg" width="<?php echo(100*round($gpsk/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($gpsk/($gpsk+$khadhi),2));?>%</td>
	<?php } else if($nbk==$chiru){ ?>
		<td><img src="green.jpeg" width="<?php echo(100*round($gpsk/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($gpsk/($gpsk+$khadhi),2));?>%</td>	
	<?php }else{ ?>
		<td><img src="red.jpeg" width="<?php echo(100*round($gpsk/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($gpsk/($gpsk+$khadhi),2));?>%</td>
	<?php } ?>
	</tr>
	
	<tr>
	<td>khaidi no 150</td>
	<?php if($nbk<$chiru){ ?>
		<td><img src="green.jpeg" width="<?php echo(100*round($khadhi/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($khadhi/($gpsk+$khadhi),2));?>%</td>
	<?php } else if($nbk==$chiru){ ?>
		<td><img src="green.jpeg" width="<?php echo(100*round($gpsk/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($gpsk/($gpsk+$khadhi),2));?>%</td>
	<?php }else{ ?>
		<td><img src="red.jpeg" width="<?php echo(100*round($khadhi/($gpsk+$khadhi),2)); ?>" height="25" >
		<?php echo(100*round($khadhi/($gpsk+$khadhi),2));?>%</td>
	<?php } ?>
	</tr>
</table>
