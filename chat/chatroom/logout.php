<?php
ob_start();
session_start();
require '../libs/config.inc.php';
require '../libs/ajax.php'; 
require '../libs/mysql.php';
require '../libs/function.php';
require '../funcs/func_chat.php';

logout();


ob_end_flush();
?><BR><CENTER><FONT SIZE="4" COLOR="#FF00CC">�س���͡�ҡ�к���ͧʹ������º�������Ǥ�Ѻ �ͺ�س����������ҹ</FONT></CENTER><BR>
<CENTER><input type="button" value="�Դ˹�ҵ�ҧ���" onClick="javascript:window.close()" ></CENTER>