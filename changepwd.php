<?
include "chksession.php" ;
?>
<?
 $name = $_POST ['name'] ;
 $position = $_POST ['position'] ;
 $privateno = $_POST ['privateno'] ;
 $officenumber = $_POST ['officenumber'] ;
 $code = $_POST ['code'] ;
 $newpass = $_POST ['newpass'] ;
 $newpass2 = $_POST ['newpass2'] ;

//echo"$newpass<BR>$newpass2" ;
//exit () ;
if ($name=="" or $code == "" or $position == "" or $privateno == "" or $officenumber == ""  or $code == "" or $newpass == "" or $newpass2 =="") {
	echo "<center><h2>��سҡ�͡���������ú</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 

if ($newpass<>$newpass2) {
	echo "<center><h2>�س��͡���ʼ�ҹ������ 2  ���� ���ç�ѹ</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 


include "connect.php" ;
$sql = "select * from $tableuser where username='$sess_username' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array($result) ;
$oldcode = $r [code] ;
mysql_close () ;

if ($oldcode =="") {

include "connect.php" ;
$sql = "update  $tableuser set admin_name='$name', position='$position', pri_no='$privateno', off_no='$officenumber', code='$code', password='$newpass' where username='$sess_username' " ;

$result = mysql_db_query ($dbname, $sql) ;
	if ($result) {
		echo "<center><h2>�ѹ�֡���������º���������ô�ѹ�֡����������ҹ��������</h2> <BR>�����Ѻ�ͧ��ҹ��� : <B>$code</b> (��㹡������¹���ʼ�ҹ���駵���)<BR>���ʼ�ҹ����ͧ��ҹ��� : <B>$newpass</B> (��㹡���������к����駵���<BR><BR><input type=\"button\" value=\"�������к������ա����\" onClick=\"window.location='logout.php'\"></center> ";
	} else {
		echo "<center><h2>�������ö�ѹ�֡��������</h2> <br><input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index.php'\"></center> ";
	}

} elseif ($oldcode<>"") {

				if ($oldcode<>$code) {
	echo "<center><h2>�����Ѻ���ç�Ѻ�������� �������ö����¹���ʼ�ҹ��</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;

} else {

include "connect.php" ;
$sql = "update  $tableuser set admin_name='$name', position='$position', pri_no='$privateno', off_no='$officenumber', code='$code', password='$newpass' where username='$sess_username' " ;

$result = mysql_db_query ($dbname, $sql) ;
	if ($result) {
		echo "<center><h2>�ѹ�֡���������º��������</h2> <br><input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index.php'\"></center> ";
	} else {
		echo "<center><h2>�������ö�ѹ�֡��������</h2> <br><input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index.php'\"></center> ";
	}

}

}
?>