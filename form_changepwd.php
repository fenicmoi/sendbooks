<?
include "chksession.php" ;
?>
<?
include "lang-thai.php";
include "connect.php" ;
$sql = "select * from $tableuser where username='$sess_username' " ;
$result = mysql_db_query ($dbname, $sql) ;
$r = mysql_fetch_array($result) ;
$school = $r [school] ;
$status = $r [status] ;
$code = $r [code] ;
$name = $r [admin_name] ;
$position = $r [position] ;
$privateno = $r [pri_no] ;
$officenumber = $r [off_no] ;
mysql_close () ;

//echo "$status" ;
//exit ();
 if ($status=="public") {
	 $goback = "index2.php" ;
 } else {
	 $goback = "index.php" ;
 }

if ($code=="") {
?>
<p align="center"><b><font color="#008080">+:+: </font><font color="#800080">
����¹ <span lang="en-us">Password </span>�к��ҹ��ú�ó
<font color="#008080">:+:+</font></font></b></p>
</h2>


<div align="center">
  <center>
  <table border="1" cellpadding="6" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" height="64">
    <tr>
      <td width="100%" valign="top" height="20"><u><b>
      <font face="MS Sans Serif" color="#FF0000">��͵�ŧ㹡������¹���ʼ�ҹ �����á</font></b></u></td>
    </tr>
    <tr>
      <td width="100%" valign="top" height="19">
      <ol>
        <li><font face="MS Sans Serif" color="#800080" size="2">��� �ӹѡ�ҹ�ѧ��Ѵ�ѷ�ا 
        �繼���˹����ʼ�ҹ�ҹ��ú�ó���Ѻ˹��§ҹ�ͧ��ҹ 
        ���ͤ�����ʹ���㹡����ҹ��ҹ��÷ӡ������¹���ʼ�ҹ�繢ͧ���ͧ</font></li>
        <li>
        <font face="MS Sans Serif" color="#008080" size="2">
        �������¹���ʼ�ҹ��á�з������˹�ҷ����ú�ó���ͼ�������Ѻ�ͺ���§ҹ��ú�ó��ҹ�� (��觵��仹���ҹ���<B><FONT SIZE="" COLOR="red"> �������к��ҹ��ú�ó</FONT></B>)</font></li>
        <li><font face="MS Sans Serif" color="#008080" size="2">㹡������¹���ʼ�ҹ�����á ��ҹ�е�ͧ��˹������Ѻ 
        ����Ѻ˹��§ҹ�ͧ��ҹ��͹ (�����Ѻ��������Ţ 0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��)&nbsp; 
        �ҡ��鹨֧��˹����ʼ�ҹ���� (�����Ţ�����ѡ�������ѧ����蹡ѹ)</font></li>
        <li>
        <font face="MS Sans Serif" color="#800080" size="2">�������˹������Ѻ�ըش���ʧ�����ͻ�ͧ�ѹ�����ؤ�ŷ���������Ǣ�ͧ���������¹���ʼ�ҹ�ͧ�к��ҹ��ú�ó 
        ����Ҩ�觼����µ�ͷҧ�Ҫ���</font></li>
        <li><font face="MS Sans Serif" color="#008080" size="2">��ѧ�ҡ��˹������Ѻ������ʼ�ҹ��������Ѻ˹��§�¢ͧ��ҹ���� 
        ������˹�ҷ����ú�ó�͡���ʼ�ҹ�Ѻ���˹�ҷ�褹��� � �˹��§ҹ�ͧ��ҹ 
        ���͡�������ҹ��ú�ó �������������Ѻ����繤����Ѻ</font></li>
        <li><font face="MS Sans Serif" color="#800080" size="2">�ҡ�դ������繵�ͧ����¹���ʼ�ҹ㹤��駵�� � � 
        �к��ж�������Ѻ��͹</font></li>
        <li><font face="MS Sans Serif" color="#008080" size="2">㹡������¹���ʼ�ҹ�����á 
        ��ҹ��ͧ����������ǹ��Ǣͧ��ҹ���Ẻ���������ҡ�</font></li>
        <li><font face="MS Sans Serif" color="#800080" size="2">�к� �Ѻ��˹ѧ����Ҫ��� <span lang="en-us">(</span>�ҹ��ú�ó) 
        ʧǹ�Է��� ����Ѻ˹��§ҹ�ѧ�Ѵ<? echo _NAME ;?>��ҹ��</font></li>
      </ol>
      </td>
    </tr>
  </table>
  </center>
  <p><font color="#800000"><b>��سҡ�͡��������ǹ��Ǣͧ�������к��ҹ��ú�ó ��С�˹� 
  �����Ѻ/���ʼ�ҹ����<br>
&nbsp;</b></font></div>
<div align="center">
  <center>
  <table border="0" cellpadding="3" style="border-collapse: collapse" bordercolor="#111111" width="800">
    <tr>
      <td width="244" align="right"><b><font color="#000080">����-ʡ��</font></b></td>
      <td width="556">
      <form method="POST" action="changepwd.php">
   
<input type="text" name="name" size="40"></td>
    </tr>
    <tr>
      <td width="244" align="right"><b><font color="#000080">���˹�</font></b></td>
      <td width="556"><input type="text" name="position" size="40"></td>
    </tr>
       <tr>
      <td width="244" align="right"><b><font color="#000080">�����Ţ���Ѿ�� 
      ��Ͷ��/��ҹ</font></b></td>
      <td width="556"><input type="text" name="privateno" size="31"><span lang="en-us">
      </span></td>
    </tr>
    <tr>
      <td width="244" align="right"><b><font color="#000080">�����Ţ���Ѿ�� 
      ���ӧҹ</font></b></td>
      <td width="556"><input type="text" name="officenumber" size="31"></td>
    </tr>
    <tr>
      <td width="244" align="right"><b><font color="#000080">�����Ѻ</font></b></td>
      <td width="556"><input type="text" name="code" size="31"><span lang="en-us">
      </span><font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��)</font></td>
    </tr>
    <tr>
      <td width="244" align="right">
      <p align="right"><b><font color="#000080"><span lang="en-us">Password
      </span>����</font></b></td>
      <td width="556"><input type="text" name="newpass" size="31">
      <font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��)</font></td>
    </tr>
    <tr>
      <td width="244" align="right">
      <p align="right"><b><font color="#000080">��͡<span lang="en-us"> Password
      </span>���� �ա����</font></b></td>
      <td width="556"><input type="text" name="newpass2" size="31">
      <font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��) </font><b>
      <font face="MS Sans Serif" size="2">����͹�Ѻ�����á</font></b></td>
    </tr>
  </table>
  <br>
  <input type="submit" value="�觢�����" >&nbsp;<input type="reset" value="��駤������" >&nbsp;  <input type="button" value="��Ѻ˹����ѡ" onClick="window.location='<?=$goback?>'">
     </form></center>
</div>
 <center>
<? include "include/footer.html" ;?>
	</center>
<? } else {
?>
<center><h2><font color="#800000">����¹���ʼ�ҹ���� ����Ѻ�ҹ��ú�ó</font></h2></center>
&nbsp;</b></font></div>
<div align="center">
  <center>
  <table border="0" cellpadding="3" style="border-collapse: collapse" bordercolor="#111111" width="800">
    <tr>
      <td width="242" align="right">&nbsp;</td>
      <td width="558">
      <form method="POST" action="changepwd.php" autocomplete="off">
   
<input type="hidden" name="name" size="40" value="<?=$name?>"><input type="hidden" name="officenumber" size="31" value="<?=$officenumber?>"><input type="hidden" name="position" size="40" value="<?=$position?>"><input type="hidden" name="privateno" size="31" value="<?=$privateno?>"></td>
    </tr>
    <tr>
      <td width="242" align="right"><b><font color="#000080">����������Ѻ����µ�����</font></b></td>
      <td width="558"><input type="text" name="code" size="31"><span lang="en-us">
      </span><font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��)</font></td>
    </tr>
    <tr>
      <td width="242" align="right">
      <p align="right"><b><font color="#000080"><span lang="en-us">Password
      </span>����</font></b></td>
      <td width="558"><input type="text" name="newpass" size="31">
      <font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��)</font></td>
    </tr>
    <tr>
      <td width="242" align="right">
      <p align="right"><b><font color="#000080">��͡<span lang="en-us"> Password
      </span>���� �ա����</font></b></td>
      <td width="558"><input type="text" name="newpass2" size="31">
      <font color="#FF0000">(</font><font face="MS Sans Serif" color="#FF0000" size="2">�����Ţ 
      0-9 �����ѡ�������ѧ���
        <span lang="en-us">a-z </span>��ҹ��) </font><b>
      <font face="MS Sans Serif" size="2">����͹�Ѻ�����á</font></b></td>
    </tr>
  </table>
  <br>
  <input type="submit" value="�觢�����" >&nbsp;<input type="reset" value="��駤������" >&nbsp; <input type="button" value="��Ѻ˹����ѡ" onClick="window.location='<?=$goback?>'">
     </form></center>
</div>

 <center>
<? include "include/footer.html" ;?>
	</center>

<?
}
?>