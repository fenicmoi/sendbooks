<?
include "chksession.php" ;
include "connect.php";
mysql_query("delete from $ontblname  where session='$sess_userid'");

unset (  $_SESSION ['sess_userid']) ;
unset (  $_SESSION ['sess_username']) ;
session_destroy () ;
?>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="56" background="images/bg.gif">
  <tr>
    <td width="100%" height="56">
<p align="center"><b><font size="5" color="#800080" style="font-size: 16pt">
�͡�ҡ�к����º��������</span></font></b></p>
    </td>
  </tr>
</table><br><center>
 <input type="button" value="�������к��ա����" onClick="window.location='login.php'" > &nbsp;&nbsp;<input type="button" value="�Դ˹�ҵ�ҧ���" onClick="javascript:window.close()" > </CENTER><BR>
     <center>
<? include "include/footer.html" ;?>
	</center>

