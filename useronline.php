<?
include "connect.php" ;
$session=session_id ( ) ;
$time=time();
$time_check=$time-1200; //��˹�����㹷�������˹� 10 �ҷ�
$session_db = mysql_query("select count(*) from $ontblname where session='$session'");
$session_check = mysql_result($session_db,0);
if ($session_check == "0") {
mysql_query("insert into $ontblname values ('$session','$time','$school')"); 
} else { 
mysql_query("update $ontblname set time='$time' where session='$session'"); 
} 
$count_user = mysql_query("select count(*) from $ontblname");
$user_online = mysql_result($count_user,0); 
echo "���ѧ��ҹ���� : $user_online ��"; //���ͺ����ʴ��� ��ҹ�������Դ ����ź��÷Ѵ����͡�
mysql_query("delete from $ontblname where time<$time_check");
?> 
