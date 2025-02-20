<?

$tpl_vars = array(
	"label"     => array(
		"class"  => "base::header",
		"name" => "blocks",
		"value" => "������ �������� ��� ����������� �� ������",
	),

	"title"      => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("Title Russian"),
		"size" => "51",
		"field" => "title",
		"buttons" => "quot",
	),
	"title_en"      => array(
		"class" => "base::textbox",
		"prompt" => Dreamedit::translate("Title English"),
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
		"cols" => "51",
		"rows" => "5",
		"field" => "keywords",
	),
    "left_collumn"      => array(
        "class" => "base::selectHeader",
        "prompt" => Dreamedit::translate("����� �������"),
        "field" => "left_collumn",
    ),
    "right_collumn"      => array(
        "class" => "base::selectHeader",
        "prompt" => Dreamedit::translate("������ �������"),
        "field" => "right_collumn",
    ),
    "wide_sections" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("����������� �����"),
        "value" => "0",
        "options" => "",
        "field" => "wide_sections",
    ),
    "no_menu" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("��������� ����"),
        "value" => "0",
        "options" => "",
        "field" => "no_menu",
    ),
    "no_gray_menu" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("��������� ����� ����"),
        "value" => "0",
        "options" => "",
        "field" => "no_gray_menu",
    ),
    "right_block_back_off" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("��������� �������� � ������ ������"),
        "help" => '���� �������� � ������� ��������, �� ��� �� ����� ��������� ����� ��������',
        "value" => "0",
        "options" => "",
        "field" => "right_block_back_off",
    ),
    "like_main" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("����� ��� �� �������"),
        "help" => '����� ������� �� ����� �������',
        "value" => "0",
        "options" => "",
        "field" => "like_main",
    ),
    "left_block_custom_size"     => array(
        "class" => "base::selectbox",
        "prompt" => Dreamedit::translate("������ ������ �����"),
        "options" => array('' => '', '2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'),
        "field" => "left_block_custom_size",
    ),
    "mag_header" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("����� � ��������� ����"),
        "value" => "1",
        "options" => "",
        "field" => "mag_header",
    ),
    "add_menu_on" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("�������� ���. ����"),
        "value" => "0",
        "options" => "",
        "field" => "add_menu_on",
    ),
    "add_menu_size_w"      => array(
        "class" => "base::textbox",
        "prompt" => Dreamedit::translate("������ �������"),
        "size" => "5",
        "field" => "add_menu_size_w",
    ),
    "add_menu_left_size_w"      => array(
        "class" => "base::textbox",
        "prompt" => Dreamedit::translate("������ ����� ������� �������"),
        "size" => "5",
        "field" => "add_menu_left_size_w",
    ),
    "english_off" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("��������� ������� �� ���������� ������"),
        "options" => "",
        "field" => "english_off",
    ),
    "custom_logo"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("��������� �������"),
        "field" => "custom_logo",
    ),
    "custom_logo_s"    => array(
        "class" => "base::editor",
        "prompt" => Dreamedit::translate("��������� ������� ��� ���������"),
        "field" => "custom_logo_s",
    ),
    "custom_logo_w"     => array(
        "class" => "base::integer",
        "prompt" => Dreamedit::translate("������ ���������� ��������"),
        "size" => "5",
        "field" => "custom_logo_w",
    ),
    "custom_logo_s_w"     => array(
        "class" => "base::integer",
        "prompt" => Dreamedit::translate("������ ���������� �������� ��� ���������"),
        "size" => "5",
        "field" => "custom_logo_s_w",
    ),
    "bottom_id_link"     => array(
        "class" => "base::integer",
        "prompt" => Dreamedit::translate("���� ������� �� ��������"),
        "size" => "10",
        "field" => "bottom_id_link",
        "buttons" => "page_id",
        "help" => "���� ������� ��������(�������� ������� � ������ �������) �� ������ ����� � ���� ��������",
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
    "main_menu_id"     => array(
        "class" => "base::integer",
        "prompt" => Dreamedit::translate("ID �������� ����"),
        "size" => "10",
        "field" => "main_menu_id",
        "buttons" => "page_id",
    ),
    "gray_menu_id"     => array(
        "class" => "base::integer",
        "prompt" => Dreamedit::translate("ID ������ ����"),
        "size" => "10",
        "field" => "gray_menu_id",
        "buttons" => "page_id",
    ),
    "footer_slider_off" => array(
        "class" => "base::checkbox",
        "prompt" => Dreamedit::translate("��������� ������� � �������"),
        "value" => "0",
        "options" => "",
        "field" => "footer_slider_off",
    ),
    "person"      => array(
        "class" => "base::textbox",
        "prompt" => Dreamedit::translate("�������� ������� ��� ��������� (ID)"),
        "help" => "���� �����, �� � ������ ������ �� ����� ����������� �� �������(��������� ��� ��������)",
        "size" => "51",
        "field" => "person",
        "buttons" => "quot",
    ),
);

?>