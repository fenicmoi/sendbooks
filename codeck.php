<?


include "connect.php" ;
$sql = "update  $tableuser set code='' where code='code' " ;

$result = mysql_db_query ($dbname, $sql) ;
	if ($result) {
		echo "<center><h2>�ѹ�֡���������º��������</h2> <br><input type=\"button\" value=\"�Դ˹�ҵ�ҧ���\" onClick=\"javascript:window.close()\" ></center> ";
	} else {
		echo "<center><h2>�������ö�ѹ�֡��������</h2> <br><input type=\"button\" value=\"�Դ˹�ҵ�ҧ���\" onClick=\"javascript:window.close()\" ></center> ";
	}?>