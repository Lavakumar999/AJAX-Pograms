<?php 
if($_POST){
	$name=$_POST['name'];
	$content=$_POST['commentContent'];
	if($name && $content)
	{
	$handle=fopen("coment_cinema.html","a");
	fwrite($handle,"<b>" . $name . "</b>:<br/>" . $content ."<br/>");
	fclose($handle);
	}	
}
?>
<!Doctype html>
<html>
<head>
<title>Online Poll on tollywood prestigious Films</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="csspoll.css" type="text/css"/>
<script type="text/javascript">
function getVote(str){
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(this.readyState==4 && this.status==200){
			document.getElementById("poll").innerHTML=this.responseText;
		}
	}
	xmlhttp.open("GET","publicpoll.php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>
<img id="head" src="headvote.jpg"/>
<div id="balaya">
	<center><img id="photo" src="nbk.jpeg"/></center>
	<p> Gautamiputra Satakarni (English: Satakarni, son of Gauthami) is a 2017 Telugu epic historical action film produced by Saibabu Jagarlamudi , Y. Rajeev Reddy on First Frame Entertainment banner and directed by Krish. Starring Nandamuri Balakrishna in title role marking his 100th film as an actor, and Shriya Saran as the female lead, Hema Malini in a crucial role and music composed by Chirantan Bhatt. The film is based on the life of 2nd century AD Satavahana ruler Gautamiputra Satakarni. The film is Nandamuri Balakrishna's 100th film </p>
	<p>Balakrishna One Man Show about a great king Satakarni</p>
	Watch Here:<a href="https://www.youtube.com/watch?v=tAlp0ybcRoA">REAL STORY ABOUT "Gautamiputra Satakarni"</a><img src="you.jpeg" width="20" height="20">
</div>
<div id="chiru">
	<center><img id="photo" src="khaidi.jpeg"/></center>
	<p>Khaidi No 150 is probably one of the most awaited films in the recent times. One can easily say that no film has created such a buzz as Khaidi as it is Chiranjeevi comeback film after nine long years. </p>
	<center><h4>STORY</h4></center>
	<p>Kaththi Seenu (Chiranjeevi) is a happy go lucky crook who escapes from jail and plans to leave the country for good. One fine day, he comes across an accident and helps the man who gets affected by it.

The twist in the tale arises when Seenu finds out that the man(Shankar) he saved is the exact look a like of him. He cleverly sends back Shankar to jail in his place and silently enters his life to earn more money.

There, he comes to know that Shankar’s life is miserable as he is the only man who is helping the downtrodden farmers of his village. Upset by this, Seenu decides to own Shankars problems and launches a huge fight against the corporate companies who are behind all this. How does he solve all these problems forms the rest of the story?</p>
</div>
<div id="hero">
<center><h3>whose going to be a hero of Sanktanthi 2017</h3></center>
</div>
<div id="content">
<div id="bc">
	<center><img id="imgpoll" src="bcpoll.jpg"/></center>
</div>
<div id="poll">
	<font id="vote">Vote</font>
	<form id="formstyle">
	<table>
	<tr>
	<td>
	gautamiputra satakarni<input type="radio" name="vote" value="0" onclick="getVote(this.value)"/>
	</td>
	</tr>
	<tr>
	<td>
	khaidi no 150<input type="radio" name="vote" value="1" onclick="getVote(this.value)"/>
	</td>
	</tr>
	</table>
	</form>	
</div>
</div>
<div id="views">
		<font  id="viewfont" face="Times New Roman, Times, serif" size="+2">My Views</font>
		<center><img src="http://hitwebcounter.com/counter/counter.php?page=6545488&style=0011&nbdigits=5&type=page&initCount=0" title="free hits"  border="0" ></center>
</div>
<div id="users">
		<font  id="viewfont" face="Times New Roman, Times, serif" size="+2">Unique users</font>
		<center><img src="http://hitwebcounter.com/counter/counter.php?page=6545491&style=0011&nbdigits=5&type=ip&initCount=0" title="free hits" Alt="free hits"   border="0" ></center>
</div>
<div id="comments">
		<img  id="smile" src="smile.png" width="20" height="20"/><font  id="fonthead" face="Times New Roman, Times, serif" size="+3">Your comments On movies</font><img src="smile.png" width="20" height="20"/>
		<div id="commentSeperate">
		<form action="" method="post">
			<b>Comments:</b><textarea  id="textarea" rows="5" cols="10" name="commentContent"></textarea>
			<b>Name:</b><input  id="textarea" type="text" name="name"/><br/>
				 <input id="submitComment" type="submit" value="submit"  onClick="verify();"/>
		</form>
		</div>
		<?php include "coment_cinema.html"; ?>
</div>
</body>
</html>