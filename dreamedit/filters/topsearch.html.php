<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?=@$_TPL_REPLACMENT["TITLE"]?></title>
<link rel="stylesheet" type="text/css" href="/img/style.css"> 
<head>

<body link=#0690b7 alink=#0690b7 vlink=#0690b7 bgcolor="white" text="#64647d" leftmargin="0" rightmargin="0" marginwidth="0" topmargin="0" marginheight="0">

<table width=100% height=100% border="0" cellspacing="0" cellpadding="0">
<tr><td>
<table cellspacing="0" cellpadding="0" border="0" width=100%>

<tr valign=top>
<td>

<table cellspacing="0" cellpadding="0" border="0" width=208>
<tr valign=top><td>
<table cellspacing="0" cellpadding="0" border="0" width=198>
<tr height=55><td align=left width=198 background="/img/menubg.png">
<img src="/img/menutop.png" height=55 width=198/>
</td>

</tr>
<tr valign="top"><td background="/img/menubg.png" align="right">

<table width=190 border="0" cellspacing="0" cellpadding="0">
<tr>
		<td class="menu">
			<div id="menu">
<?=@$_TPL_REPLACMENT["MENU"]?>
</td>
</tr></table>


</td>
</tr>
<tr height=36><td background="/img/menu_end.png">
&nbsp;
</td></tr>
</table>				
</td>
<td>

<table width=10 height=81 border=0 cellspacing="0" cellpadding="0">
<tr valign=top height=95>
<td width=10>
<img src="/img/menutop2.png" width=10 height=95/>
</td>
</tr>
</table>

</td>
</tr>
</table>

<br><br><br>

<table border=0 cellspacing="0" cellpadding="0">
<tr valign="top"><td background="/img/publicbg.png" align="center">

<img src="/img/public.png"/>
<table cellspacing="0" cellpadding="0" border="0" width=160>
<tr valign=top><td align="left">
<font face=Arial size=2 color=white><b>����</b></font>
<font face=Arial size=4 color=white>
<BR>
����������
<BR>
� ���
</font>
<br>

<table width=100% border=0><tr><td>
<font face=Arial size=2 color=white >
<?

mysql_connect('localhost', 'root', 'cc250');
mysql_select_db('isras2008');

$result = mysql_query("select icont_text, el_id from adm_ilines_content where icont_var = 'frontpage_text' order by el_id desc");

while($row = mysql_fetch_array($result)) {

$result2= mysql_query("
SELECT c.el_id, cdn.icont_text AS title, c.icont_text AS frontpage_text
FROM adm_ilines_element e
INNER JOIN adm_ilines_content c ON e.el_id = c.el_id
AND c.icont_var = 'frontpage_text'
INNER JOIN adm_ilines_content cdn ON cdn.el_id = e.el_id
AND cdn.icont_var = 'title'
WHERE e.itype_id =3
AND e.el_id = $row[1]
ORDER BY cdn.icont_text, c.el_id
LIMIT 0 , 10000
");

$spego=false;

while($row2 = mysql_fetch_array($result2)) {

$result3 = mysql_query("select icont_text from adm_ilines_content where  icont_var = 'status' and el_id=$row2[0]");
//echo "select icont_text from adm_ilines_content where icont_var = 'status' and el_id=$row2[0]";

//$spego=false;

while($row3 = mysql_fetch_array($result3)) {
if ($row3[0] == 1) $spego=true; 
}

if ($spego) {
echo '<br><b>'.$row2[1].'</b>'.str_replace('<a', '<a class=smi', $row2[2]);

}
}


$row[0] = str_replace('<a', '<a class=smi', $row[0]);
if($spego)
break;
}

mysql_close();


?>
</font>
</td></tr></table>
<br><br>

</td></tr>
</table>
</td></tr>
</table>

</td>
<td align="left" width=100%>

<table align=left cellspacing="0" cellpadding="0" border="0">
<tr valign=top><td>

<table width=100% cellspacing="0" cellpadding="0" border="0">
<tr valign=top>
<td width=50>

<script language=javascript>
if (screen.width >= 1280) {
document.write("<table border=0 cellspacing=0 cellpadding=0 width=350><tr valign=top height=89><td background=/img/search2.png >");
 }
if (screen.width < 1280) {
document.write("<table border=0 cellspacing=0 cellpadding=0 width=200><tr valign=top height=89><td background=/img/search.png >");  }
</script>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr valign=bottom height=20><td align=right>
<font face=Arial size=2 color=#64647d>
<a href=/ font style='text-decoration: none; color: #64647d;'>�� �������</a>&nbsp;|&nbsp;�����&nbsp;&nbsp;
</font>
</td></tr>

<tr><td>
&nbsp;&nbsp;&nbsp;<font face=Arial size=2 color=#0690b7><b>�����</b></font><br>

<script language=javascript>

if (screen.width >= 1280) {
document.write("<table width=350><tr><td>&nbsp;&nbsp;<input size=20/>&nbsp;<a><img src=/img/arrow.gif /></a></td></tr></table>");
}

if (screen.width < 1280) {
document.write("<table width=200><tr><td>&nbsp;&nbsp;<input size=20/>&nbsp;<a><img src=/img/arrow.gif /></a></td></tr></table>"); } </script>

</table>

</td></tr>

<tr valign=top><td>
<table cellspacing="0" cellpadding="0" border="0" width=100% height=100%><tr valign=bottom><td width=1>
<br><br><br><br><br>
</td><td>
</td></tr></table>
</td></tr>

</td></tr></table>
</td>
<td width="100%">
<table cellspacing="0" cellpadding="0" border="0" width=100% height=200>
<tr>
<td width=624>
<script language=javascript>
if (screen.width >= 1280) {
document.write("<a href=/ ><img width=623 height=200 src=/img/caption.png border=0 /></a>");
}
if (screen.width < 1280) {
document.write("<a href=/ ><img width=560 height=200 src=/img/caption2.png border=0 /></a>");
}
</script>

</td>
<td width=100% background="/img/addon.png"></td>
</tr>
</table>


&nbsp;
</td></tr>
</table>

</td></tr>
<tr><td>

<table cellspacing="0" cellpadding="0" border="0" width=100% height=100%>
<tr valign=top>
<td>

<table cellspacing="0" cellpadding="0" border="0" width=100% height=100%>
<tr valign=top>

<td>


<table cellspacing="0" cellpadding="0" border="0" width=100% height=100%>
<tr>
<td>
<table cellspacing="0" cellpadding="0" border="0" width=100% height=100%>
	<TR><td valign=top>
	<table border="0" width=100% cellspacing="0" cellpadding="0" height=100%>
	<tr valign="top">
		</td>
		<td>
<table cellspacing="0" cellpadding="0" border=0 width=100% height=100%>
<tr valign=center>
<td colspan=4>
<font face=Arial color="#0690b7" size=4><? if ($_GET['page_id']) include '/home/www/2008/html/site_template/src/kroski.php';
?></font>


</td>
</tr>
	<tr valign=top><td width="1">
                                <img src="/img/vl.png" width=1 height="100%"/>
                        </td>
			<td width=5><img src=/img/punct.png width=5 height=30></td> 

		<td width=5>&nbsp;</td>
		<td width=10000><a name="goup"></a>

<?

if (!$_GET['page_id']) 
	echo "<font size=3 color=#0690b7><b>�������� ���������� ���</b></font>";
else
	echo "<font size=3 color=#0690b7><b>".$podr[$_GET['page_id']][page_name]."</b></font>";

include "/home/www/2008/html/site_template/src/podr2.php";

if($podr[$_GET['page_id']]['page_template']=='publ')
	include "/home/www/2008/html/site_template/src/publ.php";
if($podr[$_GET['page_id']]['page_template']=='1publ')
	include "/home/www/2008/html/site_template/src/1publ.php"; 
if($podr[$_GET['page_id']]['page_template']=='pers')
	include "/home/www/2008/html/site_template/src/pers.php";
if($podr[$_GET['page_id']]['page_template']=='1pers')
	include "/home/www/2008/html/site_template/src/1pers.php";

?>


