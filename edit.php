<?
include "chksession.php" ;
?>
<?
 $username = $_POST ['username'] ;
 $password = $_POST ['password'] ;
 $id_smis = $_POST ['id_smis'] ;
 $school = $_POST ['school'] ;
 $status = $_POST ['status'] ;
  $code = $_POST ['code'] ;
 $name = $_POST ['name'] ;
 $position = $_POST ['position'] ;
 $privateno = $_POST ['privateno'] ;
 $officenumber = $_POST ['officenumber'] ;


//echo"$newpass<BR>$newpass2" ;
//exit () ;
if ($username=="" or $password==""  or $status==""  ) {
	echo "<center><h2>��سҡ�͡�����ŷ��������ͧ���� * ���ú</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 

include "connect.php" ;
$sql = "update  $tableuser set id_smis='$id_smis', school='$school', admin_name='$name', position='$position', pri_no='$privateno', off_no='$officenumber', code='$code', password='$password' , status='$status' where username='$username' " ;

$result = mysql_db_query ($dbname, $sql) ;
	if ($result) {
		echo "<center><h2>�ѹ�֡���������º��������</h2> <br><input type=\"button\" value=\"�Դ˹�ҵ�ҧ���\" onClick=\"javascript:window.close()\" ></center> ";
	} else {
		echo "<center><h2>�������ö�ѹ�֡��������</h2> <br><input type=\"button\" value=\"�Դ˹�ҵ�ҧ���\" onClick=\"javascript:window.close()\" ></center> ";
	}?>