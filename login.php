<?
include "lang-thai.php" ;
$username1 = $_POST ['username'] ;
$password1 = $_POST ['password'] ;


if ($username1 == "" or $password1 == "" ) {

	
$referer = $_SERVER["HTTP_REFERER"] ; 
	

?>
<html>

<head>
<meta http-equiv="Content-Language" content="th">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="stylesheet" href="include/sujane_style.css" type="text/css">

<title><? echo"�������к��Ѻ��˹ѧ����Ҫ���"._NAME ;?></title>
</head>

<body OnLoad="document.memberLogin.username.focus();">

<script language="JavaScript">
<!--
function check()
{
      var v1 = document.memberLogin.username.value;
      var v2 = document.memberLogin.password.value;
      
        if ( v1.length==0)
           {
           alert("��سҡ�͡ Username");
           document.memberLogin.username.focus();           
           return false;
           }
        else if (v2.length==0)
           {
          alert("��سҡ�͡ Password");
           document.memberLogin.password.focus();    
           return false;
           }
        else
           return true;
}


function open_windows(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

//-->
</script>
<?include "include/comment.php" ;?>
<center>
<? include "include/header.html" ;?>
</center>
<div align="center">
  <center>
  <table border="3" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="747" id="AutoNumber1" bordercolorlight="#6699FF" bordercolordark="#0099CC" height="45" bgcolor="#D5E2FF">
  </table>
  </center>
</div>

<p align="center"><font color="#800080" style="font-size: 14pt"><B>
<SPAN lang="en-us">
</SPAN>��سҾ���� Username
</span>���&nbsp; Password</B></FONT><font color="#800080">
</font></p>
<BR>  <center>
  <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="400" bordercolor="#C0C0C0">
    <form method="POST" autocomplete="off" name="memberLogin" action="login.php" onsubmit="return check()" >
     <tr>
      <td width="228" align="right"><font color="#008080"><b><span lang="en-us">Username</span></b></font></td>
      <td width="343">
      <input type="text" name="username" size="19" style="color: #FF00FF; border: 1px groove #808000; background-color: #D5E2FF"></td>
    </tr>
    <tr>
      <td width="228" align="right"><font color="#008080"><b><span lang="en-us">Password</span></b></font></td>
      <td width="343">
      <input type="password" name="password" size="19" style="color: #FF00FF; border: 1px groove #808000; background-color: #D5E2FF"></td>
    </tr>
    <INPUT TYPE="hidden" name="referer" value="<?=$referer?>">
  </table>
 <br>
    <input type="submit" value="�������к�">
    <input type="reset" value="���������" name="B2">
	  </center>
</form>
 <center>
�����ҹ�ӹǹ&nbsp;<? include "counter/counter.php" ;?>&nbsp;���� 
	</center>
 <center>
<? include "include/footer.html" ;?>
	</center>

		
</body>

</html>

<?

} else {
$referer = $_POST ['referer'] ;
if ($referer=="") {
	$referer = $_SERVER["HTTP_REFERER"] ; 
}


//include "referer/referer.php" ;
include "connect.php" ;
$sql = "select * from $tableuser where username='$username1' and password='$password1' " ;
$result = mysql_db_query ($dbname, $sql) ;
$num = mysql_num_rows ($result) ;
$r = mysql_fetch_array($result) ;
$status = $r [status] ;
mysql_close () ;

if ($num<=0) {
?>
<html>

<head>
<meta http-equiv="Content-Language" content="th">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="stylesheet" href="include/sujane_style.css" type="text/css">
	
<title><? echo"�������к��Ѻ��˹ѧ����Ҫ���"._NAME ;?></title>
</head>

<body OnLoad="document.memberLogin.username.focus();">
<?include "include/comment.php" ;?>

<h3 align="center"><font color="#FF0000"><span lang="en-us">&nbsp;</span></font></h3>

  <DIV align="center">
    <CENTER>
  <table border="3" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="747" id="AutoNumber1" bordercolorlight="#6699FF" bordercolordark="#0099CC" height="45" bgcolor="#D5E2FF">
    <tr>
      <td width="741" height="45">
      <p align="center"><FONT color="#0000FF">
      <SPAN style="font-size: 19pt; font-weight: 700">+:+: 
      <? echo"�к��Ѻ��˹ѧ����Ҫ���"._NAME ;?> :+:+</SPAN></FONT></td>
    </tr>
  </table>
    </CENTER>
</DIV>

<h3 align="center"><font color="#800080" style="font-size: 14pt"><B><SPAN lang="en-us">&nbsp;
<IMG border="0" src="image/new4.gif" width="28" height="11">
</SPAN></B></FONT><font color="#FF0000"><span lang="en-us">Error !!&nbsp; Username
</span>���� <span lang="en-us">Password </span>���١��ͧ<SPAN lang="en-us">
</SPAN>��سҾ��������</font><font color="#800080"><IMG border="0" src="image/i_new2.gif" width="30" height="11"></font></h3>

  <center>
  <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" width="400" bordercolor="#C0C0C0">
    <form method="POST"  name="memberLogin" action="login.php" autocomplete="off" onsubmit="return check()">
     <tr>
      <td width="228" align="right"><font color="#008080"><b><span lang="en-us">Username</span></b></font></td>
      <td width="343">
      <input type="text" name="username" size="19" style="color: #FF00FF; border: 1px groove #808000; background-color: #D5E2FF"></td>
    </tr>
    <tr>
      <td width="228" align="right"><font color="#008080"><b><span lang="en-us">Password</span></b></font></td>
      <td width="343">
      <input type="password" name="password" size="19" style="color: #FF00FF; border: 1px groove #808000; background-color: #D5E2FF"></td>
    </tr>
        <INPUT TYPE="hidden" name="referer" value="<?=$referer?>">

  </table>
 <br>
    <input type="submit" value="�������к�">
    <input type="reset" value="���������" name="B2">
</center>
</form>
	 <center>
�����ҹ�ӹǹ&nbsp;<? include "counter/counter.php" ;?>&nbsp;���� 
	</center>
 <center>
<? include "include/footer.html" ;?>
	</center>
		<script language="JavaScript">
<!--
function check()
{
      var v1 = document.memberLogin.username.value;
      var v2 = document.memberLogin.password.value;
      
        if ( v1.length==0)
           {
           alert("��سҡ�͡ Username");
           document.memberLogin.username.focus();           
           return false;
           }
        else if (v2.length==0)
           {
          alert("��سҡ�͡ Password");
           document.memberLogin.password.focus();    
           return false;
           }
        else
           return true;
}


function open_windows(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

//-->
</script>
</body>

</html>
<?
} else {


	session_start ( ) ;

$_SESSION [sess_userid] = session_id ( ) ;
$_SESSION [sess_username] = $username1 ;
If ($status=="public") {
	header ("Location:index2.php") ;
} else {
	header ("Location:index.php") ;
}
}
}
?>
