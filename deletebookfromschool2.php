<?
include "chksession.php" ;
?>
<?
$id = $_GET ['id'] ;

if ($id=="") {
	header ("Location:deletebook2.php") ;
	exit() ;
}

include "connect.php" ;

$sql = "select * from $tablenewbooksfromschool2  where id='$id' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array ($result) ;
 
 $bookfile = $r [bookfile] ;

 $sql2 = "delete from $tablenewbooksfromschool2 where id='$id' " ;
 $result2 = mysql_db_query ($dbname, $sql2) ;
unlink ("booksfilefromschool2/".$bookfile) ;

mysql_close () ;
if ($result2) {
	echo "<center><h2>ź˹ѧ����͡�ҡ�к����º��������</h2><br> <input type=\"button\" value=\"��Ѻ˹�ҷ���¹˹ѧ����觨ҡ˹��§ҹ\" onClick=\"window.location='bookfromschool2.php'\" > <input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index2.php'\" ></center>";
} else {
	echo"�������öź˹ѧ�����" ;
}
?>