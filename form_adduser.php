<?
include "chksession.php" ;
?>
<?
include "connect.php" ;
$sql1 = "select * from $tableuser where username='$sess_username' " ;
$result1 = mysql_db_query ($dbname, $sql1) ;
$r1 = mysql_fetch_array($result1) ;
$status1 = $r1 [status] ;
mysql_close () ;

if ($status1 <> "Yes1") {
header ("Location:login.php") ;
	exit () ;
}


?>
<html>

<head>
<meta http-equiv="Content-Language" content="th">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>���������ҹ�к���ú�ó</title>
</head>

<body>

<h3 align="center"><font color="#800080">���������ҹ�к���ú�ó</font></h3>
<div align="center">
  <center>  <form method="POST" action="adduser.php">
  <table border="1" cellpadding="3" style="border-collapse: collapse" bordercolor="#111111" width="822">
    <tr>
      <td width="167" align="right"><font color="#9966FF"><b><span lang="en-us">
      &nbsp;</span></b></font><span lang="en-us">* </span><font color="#9966FF"><b><span lang="en-us">Username</span></b></font></td>
      <td width="789">
    
       <input type="text" name="username" size="29" ><span lang="en-us"> </span></td>
    </tr>
    <tr>
      <td width="167" align="right"><font color="#9966FF"><b><span lang="en-us">
      &nbsp;</span></b></font><span lang="en-us">* </span><font color="#9966FF"><b><span lang="en-us">
      Password</span></b></font></td>
      <td width="789">
      <input type="text" name="password" size="29" >&nbsp;</td>
    </tr>
    
    <tr>
      <td width="167" align="right"><font color="#9966FF"><b><span lang="en-us">&nbsp;</span></b></font><span lang="en-us">*</span><font color="#9966FF"><b>˹��§ҹ</b></font></td>
      <td width="789">
      <input type="text" name="school" size="29" >&nbsp;</td>
    </tr>
    <tr>
      <td width="167" align="right"><font color="#9966FF"><b><span lang="en-us">&nbsp;</span></b></font><span lang="en-us">*
      </span><font color="#9966FF"><b>ʶҹС����ҹ</b></font></td>
      <td width="789">   <select size="1" name="status">
	  	<option value="">�ô���͡</option>
	<option value="Yes1">�������к�</option>
	<option value="Yes" >������ҹ��ӹѡ�ҹ�ѧ��Ѵ</option>
	<option value="No">˹��§ҹ��ѧ�Ѵ</option>
	<option value="public">˹��§ҹ����</option>
	</select>&nbsp;</td>
    </tr>
   
  </table>      
  </center>
</div>
<p align="center">
           <input type="submit" value="���������ҹ" > </p></form>
 <center>
<? include "include/footer.html" ;?>
	</center>
</body>

</html>