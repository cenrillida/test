<?php
global $DB, $_CONFIG;

$pp = new Publications();

$otdel = (int)$_TPL_REPLACMENT['OTDEL'];

$query = "SELECT id FROM `persons` AS pers WHERE pers.otdel=?d OR pers.otdel2=?d OR pers.otdel3=?d";
$result = $DB->select($query, $otdel, $otdel, $otdel);

$autors=" 1=1";
$people=" 1=1";
$yearSql = "";
$yearSqlArticle = "";

if(!empty($_GET['year'])) {
    $yearSql = " AND `publ`.`year`=".(int)$_GET['year'];
    $yearSqlArticle = " AND aa.year =".(int)$_GET['year'];
}

$first = true;

foreach($result as $row)
{
    if($first) {
        $autors = "(avtor LIKE '" . $row[id] . "<br>%' OR avtor LIKE '%<br>" . $row[id] . "<br>%' OR avtor LIKE '%<br>" . $row[id] . "')";
        $people = "(aa.people LIKE '" . $row[id] . "<br>%' OR aa.people LIKE '%<br>" . $row[id] . "<br>%' OR aa.people LIKE '%<br>" . $row[id] . "')";
        $first=false;
    }
    else {
        $autors .= " OR (avtor LIKE '" . $row[id] . "<br>%' OR avtor LIKE '%<br>" . $row[id] . "<br>%' OR avtor LIKE '%<br>" . $row[id] . "')";
        $people .= " OR (aa.people LIKE '" . $row[id] . "<br>%' OR aa.people LIKE '%<br>" . $row[id] . "<br>%' OR aa.people LIKE '%<br>" . $row[id] . "')";
    }
}

if($_SESSION[lang]!="/en") {
    $rows = $DB->select("SELECT id,name COLLATE cp1251_general_ci AS name,STR_TO_DATE(date, '%d.%m.%y') AS date, picbig COLLATE cp1251_general_ci AS logo, picmain COLLATE cp1251_general_ci AS logo_slider, CONCAT('/index.php?page_id=645&id=',id) AS link, avtor COLLATE cp1251_general_ci AS avtor, hide_autor COLLATE cp1251_general_ci AS hide_autor, link COLLATE cp1251_general_ci AS pdf_link, 'publ' COLLATE cp1251_general_ci AS `mod`, `year` COLLATE cp1251_general_ci AS `year` 
FROM `publ`
WHERE status=1 AND (".$autors.")".$yearSql."
UNION
SELECT aa.page_id AS id, CONCAT(aa.name, '. ', am.page_name, '. ���: ', aa.year) COLLATE cp1251_general_ci AS name, STR_TO_DATE(aa.`date`, '%Y%m%d') AS date, logo.cv_text COLLATE cp1251_general_ci AS logo, logo_slider.cv_text COLLATE cp1251_general_ci AS logo_slider, CONCAT('/index.php?page_id=',IF(sl.cv_text<>'' AND sl.cv_text IS NOT NULL,CONCAT(sl.cv_text,'&article_id=',aa.page_id),am.page_id)) AS link, aa.people COLLATE cp1251_general_ci AS avtor, '' COLLATE cp1251_general_ci AS hide_autor, aa.link COLLATE cp1251_general_ci AS pdf_link, 'article' COLLATE cp1251_general_ci as `mod`, `year` COLLATE cp1251_general_ci AS `year`   
FROM `adm_article` AS aa
LEFT JOIN adm_article_content AS ac ON aa.page_id=ac.page_id AND ac.cv_name='DATE_PUBLIC'
LEFT JOIN adm_article_content AS so ON aa.page_id=so.page_id AND so.cv_name='SLIDER_OFF'
INNER JOIN adm_pages AS am ON aa.journal_new=am.page_id
INNER JOIN adm_pages_content AS logo ON am.page_id=logo.page_id AND logo.cv_name='LOGO'
INNER JOIN adm_pages_content AS logo_slider ON am.page_id=logo_slider.page_id AND logo_slider.cv_name='LOGO_SLIDER'
INNER JOIN adm_pages_content AS sl ON sl.page_id=am.page_id AND sl.cv_name='ARCHIVE_ID'
WHERE aa.page_template='jarticle' AND aa.page_status=1 AND (so.cv_text IS NULL OR so.cv_text = 0) AND (".$people.")".$yearSqlArticle."
ORDER BY year DESC, date DESC
LIMIT 6");
}
else {
    $rows = $DB->select("SELECT id,name2 COLLATE cp1251_general_ci AS name,STR_TO_DATE(date, '%d.%m.%y') AS date, picbig COLLATE cp1251_general_ci AS logo, picmain COLLATE cp1251_general_ci AS logo_slider, CONCAT('/index.php?page_id=645&id=',id) AS link, avtor COLLATE cp1251_general_ci AS avtor, hide_autor COLLATE cp1251_general_ci AS hide_autor, link COLLATE cp1251_general_ci AS pdf_link, 'publ' COLLATE cp1251_general_ci as `mod` 
FROM `publ`
WHERE status=1 AND (".$autors.")".$yearSql."
UNION
SELECT aa.page_id AS id, CONCAT(aa.name_en, '. ', am.page_name, '. Year: ', aa.year) COLLATE cp1251_general_ci AS name, STR_TO_DATE(aa.date, '%Y%m%d') AS date, logo.cv_text COLLATE cp1251_general_ci AS logo, logo_slider.cv_text COLLATE cp1251_general_ci AS logo_slider, CONCAT('/index.php?page_id=',IF(sl.cv_text<>'' AND sl.cv_text IS NOT NULL,CONCAT(sl.cv_text,'&article_id=',aa.page_id),am.page_id)) AS link, aa.people COLLATE cp1251_general_ci AS avtor, '' COLLATE cp1251_general_ci AS hide_autor, aa.link COLLATE cp1251_general_ci AS pdf_link, 'article' COLLATE cp1251_general_ci as `mod` 
FROM `adm_article` AS aa
LEFT JOIN adm_article_content AS ac ON aa.page_id=ac.page_id AND ac.cv_name='DATE_PUBLIC'
LEFT JOIN adm_article_content AS so ON aa.page_id=so.page_id AND so.cv_name='SLIDER_OFF'
INNER JOIN adm_pages AS am ON aa.journal_new=am.page_id
INNER JOIN adm_pages_content AS logo ON am.page_id=logo.page_id AND logo.cv_name='LOGO'
INNER JOIN adm_pages_content AS logo_slider ON am.page_id=logo_slider.page_id AND logo_slider.cv_name='LOGO_SLIDER'
INNER JOIN adm_pages_content AS sl ON sl.page_id=am.page_id AND sl.cv_name='ARCHIVE_ID'
WHERE aa.page_template='jarticle' AND aa.page_status=1 AND (so.cv_text IS NULL OR so.cv_text = 0) AND (".$people.")".$yearSqlArticle."
ORDER BY year DESC, date DESC
LIMIT 6");
}

$years = $DB->select("SELECT `year` COLLATE cp1251_general_ci AS `year` 
FROM `publ`
WHERE status=1 AND (".$autors.")
UNION
SELECT `year` COLLATE cp1251_general_ci AS `year`   
FROM `adm_article` AS aa
LEFT JOIN adm_article_content AS ac ON aa.page_id=ac.page_id AND ac.cv_name='DATE_PUBLIC'
LEFT JOIN adm_article_content AS so ON aa.page_id=so.page_id AND so.cv_name='SLIDER_OFF'
INNER JOIN adm_pages AS am ON aa.journal_new=am.page_id
INNER JOIN adm_pages_content AS logo ON am.page_id=logo.page_id AND logo.cv_name='LOGO'
INNER JOIN adm_pages_content AS logo_slider ON am.page_id=logo_slider.page_id AND logo_slider.cv_name='LOGO_SLIDER'
INNER JOIN adm_pages_content AS sl ON sl.page_id=am.page_id AND sl.cv_name='ARCHIVE_ID'
WHERE aa.page_template='jarticle' AND aa.page_status=1 AND (so.cv_text IS NULL OR so.cv_text = 0) AND (".$people.")
GROUP BY `year` ORDER BY `year` DESC");

if($_SESSION[lang]!="/en") {
    $allText = "���";
} else {
    $allText = "All";
}

if(!empty($rows))
{
    ?>
    <div class="container-fluid cerpubls-container">
        <div class="row mb-3">
            <div class="col-12">
                <?php if(!empty($_GET['year'])) echo '<a href="'.$_SESSION[lang].'/index.php?page_id='.$_REQUEST[page_id].'">'.$allText.'</a>'; else echo '<b>'.$allText.'</b>';?>
                <?php foreach ($years as $year):?>
                    | <?php if($_GET['year']!=$year['year']) echo '<a href="'.$_SESSION[lang].'/index.php?page_id='.$_REQUEST[page_id].'&year='.$year['year'].'">'.$year['year'].'</a>'; else echo '<b>'.$year['year'].'</b>';?>
                <?php endforeach;?>
            </div>
        </div>
        <div class="row cerpubls-row">
            <?php
            foreach ($rows as $k => $v) {
                preg_match_all( '@src="([^"]+)"@' , $v['logo_slider'], $imgSrc );
                $imgSrc = array_pop($imgSrc);
                if(empty($imgSrc)) {
                    preg_match_all( '@src="([^"]+)"@' , $v['logo'], $imgSrc );
                    $imgSrc = array_pop($imgSrc);
                    if(empty($imgSrc)) {
                        if (empty($v['logo'])) {
                            $image_url = '/dreamedit/pfoto/e_logo_slider.jpg';
                        } else
                            $image_url = '/dreamedit/pfoto/'.$v['logo'];
                    } else
                        $image_url = $imgSrc[0];
                } else
                    $image_url = $imgSrc[0];

                $avtors = explode("<br>",$v[avtor]);
                $avtor_str="";
                $first_avtor=true;
                if($v['hide_autor']!='on') {
//                    foreach ($avtors as $key => $value) {
//                        if (empty($value))
//                            continue;
//                        if ($first_avtor) {
//                            $first_avtor = false;
//                        } else
//                            $avtor_str .= ", ";
//                        if (is_numeric($value)) {
//                            $row_avtor = $DB->selectRow("SELECT id,CONCAT(surname,' ', if(name is null or name = '', '', CONCAT(SUBSTRING(name,1,1), '. ')), if(fname is null or fname = '', '', CONCAT(SUBSTRING(fname,1,1), '. '))) AS full_name FROM persons WHERE id=?d", $value);
//                            if (!empty($row_avtor)) {
//                                $avtor_str .= "<a href=\"/index.php?page_id=555&amp;id=" . $row_avtor[id] . $yearRequest . "\" title=\"�� ������ ���������\"><em>" . $row_avtor[full_name] . "</em></a>";
//                            }
//                        } else
//                            $avtor_str .= "<em>" . $value . "</em>";
//                    }
                    $avt=$pp->getAuthors($v["avtor"],$_TPL_REPLACMENT["PERSONA_PAGE"]);
                    $avtor_str.= $avt[0];
                }

                $v['pdf_link'] = str_replace("\"/files","\"https://imemo.ru/files",$v['pdf_link']);

                $filter="/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?= ()~_|!:,.;]*[A-Z0-9+&@#\/%=~_|]\.pdf/i";

                preg_match_all($filter,$v['pdf_link'],$res);

                for($i=0;$i<=count($res);$i++)
                {
                    $v['pdf_link']=str_replace($res[0][$i],"/index.php?page_id=647&module=".$v['mod']."&id=".$v[id]."&param=".str_replace(' ','^',$res[0][$i]),$v['pdf_link']);
                }
                if($v['mod']=="article") {
                    $checkClosed = $DB->selectRow("SELECT * FROM adm_article WHERE page_id=?d",$v[id]);
                    if($checkClosed['journal_new']==1614 && $checkClosed['fulltext_open']==0) {
                        $v['pdf_link'] = "";
                    } else {
                        $v['pdf_link'] = str_replace("<a","<i class=\"far fa-file-pdf text-danger\"></i> <a",$v['pdf_link']);
                    }
                }

                $v['pdf_link'] = preg_replace("/<img[^>]+src=\"(https?:\/\/(www\.)?imemo\.ru)?\/files\/Image\/pdf\.gif\"[^>]*\/? ?> ?(&nbsp;)?/i","<i class=\"far fa-file-pdf text-danger\"></i> ",$v['pdf_link']);
                $v['pdf_link'] = preg_replace("/<img[^>]+src=\"(https?:\/\/(www\.)?imemo\.ru)?\/files\/Image\/internet_explorer\.png\"[^>]*\/? ?> ?(&nbsp;)?/i","<i class=\"fab fa-internet-explorer text-info\"></i> ",$v['pdf_link']);


                $tpl = new Templater();
                $tpl->appendValues(array("EL_ID" => $v[el_id]));
                $tpl->appendValues(array("LINK" => $v["link"]));
                $tpl->appendValues(array("PDF" => $v["pdf_link"]));
                $tpl->appendValues(array("NAME" => $v["name"]));
                $tpl->appendValues(array("IMAGE" => $image_url));
                $tpl->appendValues(array("AUTHORS" => $avtor_str));
                $tpl->displayResultFromPath($_CONFIG["global"]["paths"]["template_path"] . "tpl.cerpubls_element.html");
            }
            ?>
        </div>
        <div class="d-flex justify-content-center cerpubls-loader-main">
            <div class="spinner-border cerpubls-loader mt-5" role="status" style="display: none">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <script>
        events_page = 6;
        lockAjax = 0;

        function scrollCerPublsAjax(e) {
            if($('.cerpubls-container')[0].getBoundingClientRect().bottom<1500) {
                if (lockAjax == 0) {
                    lockAjax = 1;
                    jQuery.ajax({
                        type: 'GET',
                        url: '<?=$_SESSION[lang]?>/index.php?page_id=<?=$_REQUEST[page_id]?>&ajax_mode=1<?php if(!empty($_GET['year'])) echo '&ajax_cerpubls_year='.(int)$_GET['year'];?>&ajax_cerpubls_otdel=<?=$otdel?>&ajax_cerpubls=' + events_page,
                        success: function (data) {
                            events_page += 6;
                            var new_div = $(data).hide();
                            new_div.css("top","50px");
                            $('.cerpubls-row').append(new_div);
                            new_div.fadeIn({queue: false, duration: 700});
                            new_div.animate({top: 0, display: "block"},700);
                            if (data == "") {
                                lockAjax = 2;
                            }
                        },
                        complete: function (data) {
                            $('.cerpubls-loader').hide();
                            if (lockAjax == 2) {
                                lockAjax = 1;
                            } else {
                                lockAjax = 0;
                            }
                        },
                        beforeSend: function () {
                            $('.cerpubls-loader').show();
                        }
                    })
                }
            }
        }

        window.onresize = scrollCerPublsAjax;
        document.addEventListener('scroll', scrollCerPublsAjax, false);

    </script>
    <script src="/newsite/js/holder.min.js"></script>
    <?php
}
