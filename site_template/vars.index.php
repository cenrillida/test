<?

$tpl_vars = array(
	"label"     => array(
		"class"  => "base::header",
		"name" => "index",
		"value" => "������ ������� ��������",
	),

	"title"      => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("Title"),
		"size" => "51",
		"field" => "title",
		"buttons" => "quot",
	),
	"title_en"      => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("Title (English)"),
		"size" => "51",
		"field" => "title_en",
		"buttons" => "quot",
	),
	"description"   => array(
		"class" => "base::textarea",
		"prompt" => Dreamedit::translate("Description"),
		"field" => "description",
		"cols" => "51",
		"rows" => "5",
	),
	"keywords"   => array(
		"class" => "base::textarea",
		"prompt" => Dreamedit::translate("Keywords"),
		"field" => "keywords",
		"cols" => "51",
		"rows" => "5",
	),
	"slogan"     => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("������"),
		"size" => "51",
		"field" => "slogan",
		"buttons" => "quot",
	),
	"bank"    => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("���������� ���������"),
		"field" => "bank",
	),
	"contact"    => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("���������� ����������"),
		"field" => "contact",
		"type" => "Basic",
	),

	"publ_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ����� ���������� "),
		"size" => "10",
		"field" => "publ_page",
		"buttons" => "page_id",
	),
	"iline_spisok" => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("������ id �������� �������� "),
		"size" => "10",
		"field" => "iline_spisok",
	),
	"news_block_line" => array(
		"class" => "base::selectIline",
		"prompt" => Dreamedit::translate("�������������� ����� ������� ���������"),
		"field" => "news_block_line",
	),
	"news_block_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������� �������� ��������"),
		"size" => "10",
		"field" => "news_block_page",
		"buttons" => "page_id",
	),
	"full_smi_id" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������� �������� ���������� ���"),
		"size" => "10",
		"field" => "full_smi_id",
		"buttons" => "page_id",
	),
	"disser_full_id" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ���������� � ������ �����������"),
		"size" => "10",
		"field" => "disser_full_id",
		"buttons" => "page_id",
	),
	"rec_com_full_id" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� �������� ����������� �����������"),
		"size" => "10",
		"field" => "rec_com_full_id",
		"buttons" => "page_id",
	),
	"news_block_count" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("��������� � ����� ��������"),
		"size" => "10",
		"field" => "news_block_count",
	),
	"news_biblio_line" => array(
		"class" => "base::selectIline",
		"prompt" => Dreamedit::translate("�������������� ����� �������� ����������"),
		"field" => "news_biblio_line",
	),
	"news_biblio_count" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("��������� � ����� �������� ����������"),
		"size" => "10",
		"field" => "news_biblio_count",
	),
	"news_seminar_line" => array(
		"class" => "base::selectIline",
		"prompt" => Dreamedit::translate("�������������� ����� �������� ���������"),
		"field" => "news_seminar_line",
	),
	"news_seminar_count" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("��������� � ����� �������� ���������"),
		"size" => "10",
		"field" => "news_seminar_count",
	),
	"publ_spisok" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ ���������� "),
		"size" => "10",
		"field" => "publ_spisok",
		"buttons" => "page_id",
	),
	"persona__page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ����� ������� "),
		"size" => "10",
		"field" => "persona_page",
		"buttons" => "page_id",
	),
	"pers_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ ������ "),
		"size" => "10",
		"field" => "pers_page",
		"buttons" => "page_id",
	),
	"center_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ ������ <br />������ �������������"),
		"size" => "10",
		"field" => "center_page",
		"buttons" => "page_id",
	),
	"feedback__page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� �������� ����� "),
		"size" => "10",
		"field" => "feedback_page",
		"buttons" => "page_id",
	),
	"sitemap__page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ����� ����� "),
		"size" => "10",
		"field" => "sitemap_page",
		"buttons" => "page_id",
	),

	"search_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ �� ����� "),
		"size" => "10",
		"field" => "search_page",
		"buttons" => "page_id",
	),
	"usluga_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ���������� �� ������ "),
		"size" => "10",
		"field" => "usluga_page",
		"buttons" => "page_id",
	),
	"usluga_list" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ ����� "),
		"size" => "10",
		"field" => "usluga_list",
		"buttons" => "page_id",
	),
	"poll_page" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("�������� ������ ������� "),
		"size" => "10",
		"field" => "poll_page",
		"buttons" => "page_id",
	),
	"magazines_list" => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("������ ID ������� ������� �������� "),
		"size" => "50",
		"field" => "magazines_list",

	),
    "last_num" => array(
		"class" => "base::integer",
		"prompt" => Dreamedit::translate("���������� ���� � ��������"),
		"size" => "10",
		"field" => "last_num",

	),



	"contact_mail"     => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("���������� e-mail"),
		"size" => "51",
		"field" => "contact_mail",
	),
	"copyright"    => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("��������"),
		"field" => "copyright",
		"type" => "Basic",
	),
	"copyright_en"    => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("�������� (English)"),
		"field" => "copyright_en",
		"type" => "Basic",
	),
	"counter"    => array(
		"class" => "base::textarea",
		"prompt" => Dreamedit::translate("��������"),
		"cols" => "51",
		"rows" => "5",
		"field" => "counter",
	),
    "fc_first"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ �������"),
        "field" => "fc_first",
        "type" => "Default",
    ),
    "fc_second"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ �������"),
        "field" => "fc_second",
        "type" => "Default",
    ),
    "fc_third"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ �������"),
        "field" => "fc_third",
        "type" => "Default",
    ),
    "footer_copyright"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ��������"),
        "field" => "footer_copyright",
        "type" => "Default",
    ),
    "fc_first_en"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ ������� (En)"),
        "field" => "fc_first_en",
        "type" => "Default",
    ),
    "fc_second_en"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ ������� (En)"),
        "field" => "fc_second_en",
        "type" => "Default",
    ),
    "fc_third_en"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ ������ ������� (En)"),
        "field" => "fc_third_en",
        "type" => "Default",
    ),
    "footer_copyright_en"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("������ �������� (En)"),
        "field" => "footer_copyright_en",
        "type" => "Default",
    ),
	"og_image_common" => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("Open Graph �������� �����"),
		"type" => "Basic",
		"field" => "og_image_common",
	),
	"og_image_common_en" => array(
		"class" => "base::editor",
		"prompt" => Dreamedit::translate("Open Graph �������� ����� English"),
		"type" => "Basic",
		"field" => "og_image_common_en",
	),
);

?>
