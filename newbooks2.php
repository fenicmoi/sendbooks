<?
//���¡����èҡ�����
$from = $_POST ['from'];
$sendto = $_POST ['sendto'] ;
$school = $_POST ['school'] ;
If ($sendto  == "�ç���¹" and $school=="") {//����ա�����͡���к��ç���¹������Ҩҡ㹵���� $school
echo "<center><h2>��س��кت����ç���¹</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} elseif ($sendto  == "�ç���¹" and $school<>"") {
	$sendto= "�ç���¹" . $school ;
}
$subject = $_POST ['subject'] ;
$message = $_POST ['message'] ;
$reply = $_POST ['reply'] ;
$sendtimestamp = mktime(date("H"), date("i"),date("s"), date("m") ,date("d"), date("Y"))  ;	//timestamp ���һѨ�غѹ 
$timestamp24 = mktime(date("H"), date("i"),date("s"), date("m") ,date("d")+1, date("Y"))  ;	//timestamp ���һѨ�غѹ 


$bookfile = $_FILES ['bookfile'] ['tmp_name'] ;
$bookfile_name = $_FILES ['bookfile'] ['name'] ;
$bookfile_size = $_FILES ['bookfile'] ['size'] ;
$bookfile_type = $_FILES ['bookfile'] ['type'] ;
$booksizelimit = 500*1024 ;

 //echo"$subject<BR>$message" ;
 //exit() ;
//��Ǩ�ͺ�����ҧ
if ( $sendto=="" or $subject=="" or $message=="" ) {
echo "<center><h2>��سҡ�͡���������ú</h2> <br><input type=\"button\" value=\"&nbsp;���&nbsp;\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 
if ($bookfile_size > $booksizelimit ) { //��Ǩ�ͺ��Ҵ���
	echo "<center><h2>���˹ѧ����բ�Ҵ�Թ 500 Kb ���͹حҵ�����</h2> <br><input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
} 

include "connect.php" ;
$sql = "select * from $tablenewbooks2  Order By id DESC" ;
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

//����ա������� ���Ѵ�͡��ѧ booksfile �������������˹ѧ�������
if ($bookfile <> "") { 
 $array_last = explode("." ,$bookfile_name) ;
 $c =count ($array_last) - 1 ;
 $lastname = strtolower ($array_last [$c] ) ;
 //੾����� doc, pdf, xls, zip, gif, jpg,  ��Ҵ����Թ 500 Kb
 if ($lastname =="doc" or $lastname =="pdf" or $lastname =="xls" or $lastname =="zip" or $lastname =="jpg" or $lastname =="gif" ) {
	 $filename = date("Y").date("m").date("d").date("H").date("i").date("s").".".$lastname ; //�������˹ѧ���

	 copy ($bookfile, "booksfile2/".$filename)  ; 
include "connect.php" ;

 $sql= "INSERT INTO $tablenewbooks2 (`id`,`sendfrom`,`sendto`,`subject`,`message`,`reply`, `sendtimestamp`, `timestamp24`, `bookfile`,`nview`,`nreply`) VALUES ('$id', '$from', '$sendto', '$subject', '$message', '$reply', '$sendtimestamp', '$timestamp24', '$filename','','') ";
$result= mysql_db_query ($dbname, $sql); 
If ($result) {
	echo" <center><h2>�ѹ�֡���������º��������</h2> <br> <input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index2.php'\"></center> ";
} else{
	echo" <center><h2>�������ö�ѹ�֡��������</h2> <br> <input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>";
}
 mysql_close ( );
 unlink ($bookfile) ;
	 }else {
	 echo "<center><h2>੾����� doc, pdf, xls, zip, gif, jpg,  ��Ҵ����Թ 500 Kb ��ҹ��</h2><br><input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>" ;
exit () ;
	 }
	//�������ա������������¹�����������´˹ѧ���
 } else {
	 include "connect.php" ;
	  $sql= "INSERT INTO $tablenewbooks2 (`id`,`sendfrom`,`sendto`,`subject`,`message`,`reply`, `sendtimestamp`, `timestamp24`, `bookfile`,`nview`,`nreply`) VALUES ('$id', '$from', '$sendto', '$subject', '$message', '$reply', '$sendtimestamp', '$timestamp24', '$filename','','') ";
$result= mysql_db_query ($dbname, $sql); 
mysql_close ( );
If ($result) {
	echo" <center><h2>�ѹ�֡���������º��������</h2> <br> <input type=\"button\" value=\"��Ѻ˹����ѡ\" onClick=\"window.location='index.php'\"></center> ";
} else{
	echo" <center><h2>�������ö�ѹ�֡��������</h2> <br> <input type=\"button\" value=\"��䢢�����\" onClick=\"javascript:history.go(-1)\" ></center>";
 }
 }
?>