<?
include "chksession.php" ;
include "lang-thai.php" ;
?>
<?
include "connect.php" ;
$sql = "select * from $tableuser where username='$sess_username' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array($result) ;
$school = $r [school] ;
$status = $r [status] ;
mysql_close () ;
if ($status=="public") {
header ("Location:login.php") ;
	exit () ;
}
?>

<html>
<head>
<title>��˹ѧ�����ѧ<? echo _NAME ;?></title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="stylesheet" href="include/sujane_style.css" type="text/css">
</head>
<body topmargin="0" marginheight="0" marginwidth="0" bgcolor="#FFFFFF">
<div align="center">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="76" background="images/bg_b2.gif">
    <tr>
      <td width="100%" height="76">
      <p align="center"><font color="#FF00FF" size="4" style="font-size: 19pt"><b>��˹ѧ�����ѧ<? echo _NAME ;?></font><br><BR>
      </b>
<input type=button value='����¹˹ѧ����觨ҡ˹��§ҹ' onClick=window.location='bookfromschool.php' > </span></font>
      <br>
      <b><font color="#0000FF" size="2">
      (��ԡ������ҡ��ͧ��ô���¡��˹ѧ��ͷ��˹��§ҹ����ѧ�ӹѡ�ҹ�ѧ��Ѵ�ѷ�ا )</font></b></td>
    </tr>
  </table>
    <br>
    
  <form action="newbookfromschool.php" method="post" enctype="multipart/form-data" name="form1">
    <input type="hidden" value="upload">
    <table width="796" border="0" cellspacing="0" cellpadding="0">
     
          <td width="796"> 
            
          <div align="center">
            <center> 
            
          <table width="786" border="1" style="border-collapse: collapse" bordercolor="#C0C0C0" cellpadding="0" cellspacing="0">
            <tr> 
              <td width="91" height="40" bgcolor="#D7D7FF" align="center">
              <font face="MS Sans Serif" size="2" color="#0000FF"><b>�ҡ :</b></font></td>
              <td width="692" height="40" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;<?=$school?>
              <font face="MS Sans Serif">
                <input type="hidden" name="fromname" size="25" maxlength="50" value="<?=$school?>">
              </font><font color="#FF0000" face="MS Sans Serif" size="2">
              (����˹��§ҹ����� �к���˹�����ͧ)</font></td>
            </tr>
            <tr> 
              <td width="91" height="40" bgcolor="#D7D7FF" align="center">
              <span lang="th"><font color="#0000FF"><b>�Ţ˹ѧ���</b></font></span></td>
              <td width="692" height="40" bgcolor="#FFFFFF" >
              <font color="#800000">
              <span lang="th">&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;
              <span lang="th">
              <input type="text" name="bookno" size="30" value="��� "></span> </font>
              <span lang="th">
              <font color="#FF0000" face="MS Sans Serif" size="2">
              (�Ţ˹ѧ��ͩ�Ѻ����ͧ����� </font>
              <font color="#800000" face="MS Sans Serif" size="2">�� </font>
              <font color="#000080" face="MS Sans Serif" size="2">��� ȸ. 
              04097.123/20</font><font color="#FF0000" face="MS Sans Serif" size="2">)</font></span></td>
            </tr>
            <tr> 
              <td width="91" height="40" bgcolor="#D7D7FF" align="center">
              <font color="#0000FF"><b>
              ����ͧ</b></font><font face="MS Sans Serif" size="2" color="#0000FF"><b> 
              :</b></font></td>
              <td width="692" height="40" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type="text" name="subject" size="63" maxlength="100">&nbsp;
              <font face="MS Sans Serif" size="2" color="#FF0000">
              (��������ͧ˹ѧ��ͩ�Ѻ����ͧ�����)</font></td>
            </tr>
            <tr> 
              <td width="91" height="40" bgcolor="#D7D7FF" align="center">
              <b><font color="#0000FF">���˹ѧ���</font><font face="MS Sans Serif" size="2" color="#0000FF"> 
              :</font></b></td>
              <td width="692" height="40" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type="file" name="bookfile" size="30"> &nbsp;<font face="MS Sans Serif" size="2" color="#FF0000">(����ԡ������
              <span lang="en-us">Browse </span>
              ����Ṻ���˹ѧ��ͷ����Ѵ���������ŧ�����
              <span lang="en-us">pdf </span>����)</font><font face="MS Sans Serif" size="2" color="#000000"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (<span lang="th">੾�����
              </span>xls, pdf, zip, gif, jpg ��Ҵ����Թ 500 Kb)</font> </td>
            </tr>
            </table>
            </center>
          </div>
          </td>
        </tr>
      </table>
      <br>
      <input type="submit" value="��˹ѧ���" >
      <input type="reset" value="���������">
    </form>
  </div>
<p align="center"><font size="2" face="MS Sans Serif">
  <a href="index.php">��Ѻ˹�ҷ���¹˹ѧ��ͨҡ<? echo _NAME ;?></a></font></p>
<center>
<? include "include/footer.html" ;?>
	</center>
</body>
</html>