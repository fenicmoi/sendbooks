<?
include "chksession.php" ;
?>
<?
$id = $_GET ['id'] ;
if ($id=="") {
	header ("Location:login.php") ;
	exit () ;
}

include "connect.php" ;
$sql = "select * from $tableuser where username='$sess_username' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array($result) ;
$school = $r [school] ;
$status = $r [status] ;
mysql_close () ;

if ($status=="No" or $status=="public") {
	header ("Location:login.php") ;
	exit () ;
}

include "connect.php" ;
$sql = "SELECT *  from $tablenewbooks where id='$id' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array ($result) ;
		$id = $r [id] ;
		$from = $r [sendfrom] ;
		$sendto = $r [sendto] ;
		$subject = $r [subject] ;
		$sendtimestamp = $r [sendtimestamp] ;
		$vbookid=sprintf("%06d", $id) ;
	mysql_close () ;
	
	$send_d = date ("j", $sendtimestamp) ;
$send_m = date ("n", $sendtimestamp) ;
	if ($send_m == 1) {
		$send_m = "�.�." ;
	} elseif ($send_m == 2) {
		$send_m = "�.�." ;
	} elseif ($send_m == 3) {
		$send_m = "��.�." ;
	} elseif ($send_m == 4) {
		$send_m = "��.�." ;
	} elseif ($send_m == 5) {
		$send_m ="�.�." ;
	}elseif ($send_m == 6) {
		$send_m="��.�." ;
	}elseif ($send_m == 7) {
		$send_m="�.�." ;
	}elseif ($send_m == 8) {
		$send_m="�.�." ;
	}elseif ($send_m == 9) {
		$send_m="�.�." ;
	}elseif ($send_m == 10) {
		$send_m="�.�." ;
	}elseif ($send_m == 11) {
		$send_m="�.�." ;
	}elseif ($send_m == 12) {
		$send_m="�.�." ;
	}
$send_y = date ("Y", $sendtimestamp) + 543 ;
$send_t = date ("G.i.s", $sendtimestamp) ;

//timestamp of now
$nowtimestamp = mktime(date("H"), date("i"),date("s"), date("m") ,date("d"), date("Y"))  ;	//timestamp ���һѨ�غѹ 
$timepass=  $nowtimestamp-$sendtimestamp ;
$h_pass1=$timepass/3600 ;
 $hour = explode("." ,$h_pass1) ;
 $h_pass= $hour[0] ;


//echo"$timepass" ;
//exit() ;
$now_m = date ("n") ;
	if ($now_m == 1) {
		$now_m = "�.�." ;
	} elseif ($now_m == 2) {
		$now_m = "�.�." ;
	} elseif ($now_m == 3) {
		$now_m = "��.�." ;
	} elseif ($now_m == 4) {
		$now_m = "��.�." ;
	} elseif ($now_m == 5) {
		$now_m ="�.�." ;
	}elseif ($now_m == 6) {
		$now_m="��.�." ;
	}elseif ($now_m == 7) {
		$now_m="�.�." ;
	}elseif ($now_m == 8) {
		$now_m="�.�." ;
	}elseif ($now_m == 9) {
		$now_m="�.�." ;
	}elseif ($now_m == 10) {
		$now_m="�.�." ;
	}elseif ($now_m == 11) {
		$now_m="�.�." ;
	}elseif ($now_m == 12) {
		$now_m="�.�." ;
	}


?>
<html>
<head><title>��ª���˹��§ҹ����ѧ���ͺ�Ѻ˹ѧ���</title>
<link rel="stylesheet" href="include/pat_style.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<meta http-equiv="Content-Language" content="th">
</head>
<body>
<P align="center">
<SPAN lang="th"><FONT size="4" color="#800000" style="font-size: 14pt">
��ª���˹��§ҹ����ѧ���ͺ�Ѻ˹ѧ��� </FONT> </SPAN></P>
<DIV align="center">
  <CENTER>
  <TABLE border="1" cellpadding="2" style="border-collapse: collapse" bordercolor="#CF9CFE" width="600" id="AutoNumber1">
    <TR>
      <TD width="22%" align="center"><FONT color="#000080">
<SPAN lang="th">�ӴѺ��� </SPAN></FONT></TD>
      <TD width="78%">&nbsp;<FONT SIZE="" COLOR="#CC00CC">#<?=$vbookid?></FONT></TD>
    </TR>
    <TR>
      <TD width="22%" align="center"><FONT color="#000080"><SPAN lang="th">
      ����ͧ</SPAN></FONT></TD>
      <TD width="78%">&nbsp;<FONT SIZE="" COLOR="#CC0066"><?=$subject?></FONT></TD>
    </TR>
    <TR>
      <TD width="22%" align="center"><FONT color="#000080"><SPAN lang="th">
      �觶֧</SPAN></FONT></TD>
      <TD width="78%">&nbsp;<FONT SIZE="" COLOR="#3366FF"><?=$sendto?></FONT></TD>
    </TR>
    <TR>
      <TD width="22%" align="center"><FONT color="#000080"><SPAN lang="th">
      �ҡ�����</SPAN></FONT></TD>
      <TD width="78%">&nbsp;<FONT SIZE="" COLOR="#660066"><?=$from?></FONT>&nbsp;&nbsp;<FONT SIZE="" COLOR="#CC3366">������� &nbsp;<?=$send_d?>&nbsp;<?=$send_m?><?=$send_y?>&nbsp;����&nbsp;<?=$send_t?>&nbsp;�.</FONT></TD>
    </TR>
  </TABLE>
 
  </CENTER>
 
</DIV><br>
<DIV align="center">
  <CENTER>
  <?
  include "connect.php" ; //��Ǩ�ͺ�ӹǹ�ӵͺ
		$sql3 = "select * from $tableanswer where bookid='$id' " ;
		$result3 = mysql_db_query ($dbname, $sql3) ;
		$no_of_answer = mysql_num_rows($result3) ;
		
include "connect.php" ; //��Ǩ�ͺ�ӹǹ User
$sql4 = "select * from $tableuser where status='No' " ;
$result4 = mysql_db_query ($dbname, $sql4) ;
$no_of_user = mysql_num_rows($result4) ;

$unreply = $no_of_user- $no_of_answer ;
		
		?>
		<FONT SIZE="" COLOR="#3366FF" style="font-size: 12pt" >�ӹǹ˹��§ҹ����ѧ���ͺ�Ѻ˹ѧ��ͩ�Ѻ��� <FONT SIZE="" COLOR="#996633">(� �ѹ��� <?=date("j")?>&nbsp;<?=$now_m?>&nbsp;<?=date("Y")+543?>&nbsp;����&nbsp;<?=date ("G:i:s") ?>�.)</FONT> �ӹǹ</FONT>&nbsp;<B><FONT SIZE="" style="font-size: 12pt" COLOR="#FF0033"><?=$unreply?></FONT></B>&nbsp;<FONT SIZE="" COLOR="#3366FF" style="font-size: 12pt" >˹��§ҹ</FONT><BR><BR><CENTER><FONT SIZE="" COLOR="#FF0033"><B>��觼�ҹ�����&nbsp;<?=$h_pass?>&nbsp;�������</B></FONT></CENTER><BR>
  <TABLE border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="790" id="AutoNumber2">
     <TR>   
	 <?
 
include "connect.php" ;
$sql = "select * from $tableuser where status='No'" ;
$result = mysql_db_query ($dbname, $sql) ;
$totalrecord = mysql_num_rows($result) ;
$mlist =0 ;
$list=1 ;
$check=1;
while ($list<=$totalrecord && $r = mysql_fetch_array($result)) {

		$school = $r [school] ;
		include "connect.php" ;
		$sql2 = "select * from $tableanswer where bookid='$id' and name='$school' " ;
		$result2 = mysql_db_query ($dbname, $sql2) ;
		$answer = mysql_num_rows($result2) ;
	


				if ($answer<=0) {
$mlist = $mlist+1;

				?>
 
      <TD >&nbsp;<FONT SIZE="" COLOR="#660099"><?=$mlist?></FONT>.&nbsp;<FONT SIZE="" COLOR="#0000FF"><?=$school?></FONT></TD>
   
    <?if($check%4==0)
{
echo "</tr><tr>";
}
$check++;

    	}

$list++;
}
mysql_close() ;

?> </TR>
  </TABLE>
  </CENTER>
</DIV>
<center>
<? include "include/footer.html" ;
?>
	</center>

</body>
</html>