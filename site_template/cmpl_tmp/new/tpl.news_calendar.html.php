<?
$pg = new Pages();
if ($_SESSION[lang]=='/en') $txt="more...";
else $txt="���������...";
//print_r($_TPL_REPLACMENT);
if (!empty($_TPL_REPLACMENT["DATE2"])) $_TPL_REPLACMENT["DATE"]=$_TPL_REPLACMENT["DATE2"];
echo '<span class="date"><b>'.$_TPL_REPLACMENT["DATE"].'</b><br /></span>';
if ($_TPL_REPLACMENT[ITYPE_ID]!=6)
	echo "<h4>".$_TPL_REPLACMENT["TITLE"]."</h4>";

if ($_TPL_REPLACMENT[ITYPE_ID]==6)
{
    if(empty($_TPL_REPLACMENT['COMMON_TEXT'])) {

        echo "<h4>���������� � ������ �����������</h4>";
        if ($_TPL_REPLACMENT['DATE'] != $_TPL_REPLACMENT['DATE2']) {
            echo " ����������� ����������� ����������� �� ��������� ������ ������� ";
            echo $_TPL_REPLACMENT["RANG_TEXT"] . "<br />";
            echo "<b>" . $_TPL_REPLACMENT["TITLE"] . "</b>";
            echo str_replace("<p>", "", str_replace("</p>", "", $_TPL_REPLACMENT["PREV_TEXT"])) . "<br />";
            echo "����������c�� " . $_TPL_REPLACMENT["SPEC_TEXT"] . "<br />";
            echo "������ ����������� ��������� � <a href=/index.php?page_id=43>����� ���</a> <b>" . $_TPL_REPLACMENT["DATE2"] . "</b>";
            echo "� " . $_TPL_REPLACMENT["TIME"];
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.01 ') {
                echo " � <a href=/index.php?page_id=554>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.02 ') {
                echo " � <a href=/index.php?page_id=629>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }

            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.03 ') {
                echo " � <a href=/index.php?page_id=630>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '��� 002.010.01') {
                echo " � <a href=/index.php?page_id=552>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }


        } else {
            echo "������ ����������� �� ��������� ������ ������� ";
            echo $_TPL_REPLACMENT["RANG_TEXT"] . "<br />";
            echo "<b>" . $_TPL_REPLACMENT["TITLE"] . "</b> ";
            echo str_replace("<p>", "", str_replace("</p>", "", $_TPL_REPLACMENT["PREV_TEXT"])) . "<br />";
            echo "����������c�� " . $_TPL_REPLACMENT["SPEC_TEXT"] . "<br />";
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.01 ') {
                echo " � <a href=/index.php?page_id=554>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.02 ') {
                echo " � <a href=/index.php?page_id=629>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }

            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '� 002.003.03 ') {
                echo " � <a href=/index.php?page_id=630>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }
            if ($_TPL_REPLACMENT["SOVET_TEXT"] == '��� 002.010.01') {
                echo " � <a href=/index.php?page_id=552>��������������� ������  " . $_TPL_REPLACMENT["SOVET_TEXT"] . "</a>";
            }

        }
    }
    else {
        echo "<h4>����������</h4>";
        ?><b><?= @$_TPL_REPLACMENT["TITLE"] ?></b><br/><?php
        echo $_TPL_REPLACMENT['COMMON_TEXT'];
    }
}
else
{
 
 //echo substr(substr($_TPL_REPLACMENT["PREV_TEXT"],0,-4),3);
 echo str_replace("<p>","",str_replace("</p>","",$_TPL_REPLACMENT["PREV_TEXT"]));
}
if($_TPL_REPLACMENT["GO"])
{
if ($_SESSION[lang]=='/en') $en='&en'; else $en='';
?>
<div><a href=<?=@$_SESSION[lang]?>/index.php?page_id=<?=@$_TPL_REPLACMENT["FULL_ID"]?>&id=<?=@$_TPL_REPLACMENT["ID"]?>><?=@$txt?></a></div>

<?
}?>
<div class="sep"> </div>
<br clear="all" />
