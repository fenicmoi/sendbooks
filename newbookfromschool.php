<?
//���¡����èҡ�����
$fromname = $_POST ['fromname'];
$subject = $_POST ['subject'] ;
$bookno = $_POST ['bookno'] ;
$sendtimestamp = mktime(date("H"), date("i"),date("s"), date("m") ,date("d"), date("Y"))  ;	//timestamp ���һѨ�غѹ 

$bookfile = $_FILES ['bookfile'] ['tmp_name'] ;
$bookfile_name = $_FILES ['bookfile'] ['name'] ;
$bookfile_size = $_FILES ['bookfile'] ['size'] ;
$bookfile_type = $_FILES ['bookfile'] ['type'] ;
$booksizelimit = 500*1024 ;

 //echo"$subject<BR>$message" ;
 //exit() ;
//��Ǩ�ͺ�����ҧ
if ( $fromname=="" or $subject=="" or $bookno=="" or $bookfile == "") {
echo "<center><h2>��سҡ�͡���������ú</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 
if ($bookfile_size > $booksizelimit ) { //��Ǩ�ͺ��Ҵ���
	echo "<center><h2>���˹ѧ����բ�Ҵ�Թ 500 Kb ���͹حҵ�����</h2> <br><input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 

include "connect.php" ;
$sql = "select * from $tablenewbooksfromschool  Order By id DESC" ;
$result= mysql_db_query ($dbname, $sql) ;
$num = mysql_num_rows ($result) ;
$r = mysql_fetch_array ($result) ;
If ($num==0) {
	$id = 0 ;
} else {
	$id = $r [id] ;
}
$id = $id + 1 ;

mysql_close () ;

 $array_last = explode("." ,$bookfile_name) ;
 $c =count ($array_last) - 1 ;
 $lastname = strtolower ($array_last [$c] ) ;
 //੾�����  pdf, xls, zip, gif, jpg,  ��Ҵ����Թ 500 Kb
 if ($lastname =="pdf" or $lastname =="xls" or $lastname =="zip" or $lastname =="jpg" or $lastname =="gif" ) {
	 $filename = date("Y").date("m").date("d").date("H").date("i").date("s").".".$lastname ; //�������˹ѧ���

	 copy ($bookfile, "booksfilefromschool/".$filename)  ; 
include "connect.php" ;

 $sql= "INSERT INTO $tablenewbooksfromschool (`id`,`fromname`,`subject`, `sendtimestamp`, `bookno`,`bookfile`, `nreply`) VALUES ('$id', '$fromname', '$subject', '$sendtimestamp', '$bookno' , '$filename', '') ";
$result1= mysql_db_query ($dbname, $sql); 

	echo" <center><h2>�ѹ�֡���������º��������</h2> <br> <input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index.php'\">&nbsp;<input type=\"button\" value=\"��˹ѧ����ա\" onClick=\"window.location='form_bookfromschool.php'\">&nbsp;<input type=\"button\" value=\"�ټš����\" onClick=\"window.location='bookfromschool.php'\"></center> ";

 mysql_close ( );
 unlink ($bookfile) ;
	 }else {
	 echo "<center><h2>੾����� pdf, xls, zip, gif, jpg,  ��Ҵ����Թ 500 Kb ��ҹ��</h2><br><input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
	
 }
?>