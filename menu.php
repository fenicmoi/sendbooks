<?
include "chksession.php" ;
?>
<?
include "connect.php" ;
$sql = "select * from $tableuser where username='$sess_username' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array($result) ;
$school = $r [school] ;
$id = $r [id] ;
$status = $r [status] ;
mysql_close () ;
if ($status== "public") {
	header ("Location:login.php") ;
	exit () ;
}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="th">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<title>�к������çҹ�ӹѡ�ҹࢵ��鹷�����֡�Ҿѷ�ا</title>
<style fprolloverstyle>A:hover {color: #FF00FF; font-weight: bold}
</style>
</head>

<body>

<DIV align="center">
  <CENTER>
  <TABLE border="3" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#800080" width="80%" id="AutoNumber2" bordercolorlight="#9999FF" bordercolordark="#CF9CFE" bgcolor="#800080" height="43">
    <TR>
      <TD width="100%" height="43">

<p align="center"><font size="5" color="#FFFFFF">
�к������çҹ�ӹѡ�ҹࢵ��鹷�����֡�Ҿѷ�ا</font></p>
      </TD>
    </TR>
  </TABLE>
  </CENTER>
</DIV>

<p align="center"><FONT size="4" color="#808000">+<SPAN lang="en-us">:+:</SPAN></FONT><FONT color="#000080" size="4"> 
�Թ�յ�͹�Ѻ <B><?=$school?></B> ��سҤ�ԡ���͡��¡�÷���ҹ��ͧ�����ҹ</FONT><FONT size="4" color="#808000"><SPAN lang="en-us"> 
:+:+</SPAN></FONT></p>
<DIV align="center">
  <CENTER>
<table border="1" style="border-collapse: collapse" bordercolor="#C0C0C0" width="750" id="AutoNumber1" height="88">
  <tr>
    <td width="33%" align="center" height="47"> 
    <input type=button value='�������к��ҹ��ú�ó����' onClick=window.location='index.php' style="width: 180" ></td>
       <td width="33%" align="center" height="47">
   
    <p align="left">
   
    <B><FONT color="#0000FF">&nbsp;
    <IMG border="0" src="image/anipink02_pulse_back.gif" width="18" height="18">&nbsp; 
    ��ԡ�����������к��ҹ��ú�ó����</FONT></B></td>
  </tr>
 
  <tr>      <form method="POST" action="http://202.143.161.91/standard/check_login.asp">
    <td width="33%" align="center" height="48"><input type="hidden"  name="School_name" value="<?=$sess_username?>"><input type="hidden"  name="status" value="<?=$status?>">
    <input type="submit" value="Visual Control" style="width: 180">    <td width="33%" align="center" height="48">
    <P align="left"><B><FONT color="#0000FF">&nbsp;
    <IMG border="0" src="image/anipink02_pulse_back.gif" width="18" height="18"></FONT></B><FONT class="option" color="#000000"><B>
    </B></FONT><B><FONT color="#0000FF">��ԡ������������§ҹ�š�û�Ժѵ��Ҫ���</FONT></B></td></form>
  </tr>
  <tr>     
    <td width="33%" align="center" height="48">
    <input type=button value='�������к�����ͺ' onClick=window.location='../OfficeBoard/list.php' style="width: 180" ><td width="33%" align="center" height="48">
    <P align="left"><FONT color="#0000FF"><B>&nbsp; </B></FONT><B><FONT color="#0000FF">
    <IMG border="0" src="image/anipink02_pulse_back.gif" width="18" height="18"> 
    ��ԡ�����������к�����ͺ</FONT></B></td>
  </tr>
  <? if ($status=="Yes1") {?>
   <tr>     
    <td width="33%" align="center" height="48">
<input type=button value='��������´��������ҹ ' onClick=window.location='referer/index.php' style="width: 180" >    <td width="33%" align="center" height="48">
    <P align="left"><B><FONT color="#0000FF">&nbsp;
    <IMG border="0" src="image/anipink02_pulse_back.gif" width="18" height="18"> 
    ��ԡ����͵�ͧ��ô���������´��������ҹ </FONT></B></td>
  </tr>
<?}?>
  <tr>     
    <td width="33%" align="center" height="48">
<input type=button value='�͡�ҡ�к�' onClick=window.location='logout.php' style="width: 180" >    <td width="33%" align="center" height="48">
    <P align="left"><B><FONT color="#0000FF">&nbsp;
    <IMG border="0" src="image/anipink02_pulse_back.gif" width="18" height="18"> 
    ��ԡ����͵�ͧ�����ԡ��ҹ</FONT></B></td>
  </tr>
</table>

  </CENTER>
</DIV>

</body>

</html>

 <center>
<? include "include/footer.html" ;?>
	</center>