<?php

class AspLoginFormPageBuilder implements AspPageBuilder {
    /** @var AspModule */
    private $aspModule;
    /** @var Pages */
    private $pages;

    public function __construct($aspModule,$pages)
    {
        $this->aspModule = $aspModule;
        $this->pages = $pages;
    }

    public function build()
    {
        global $DB,$_CONFIG,$site_templater;

        if($_SESSION[lang]!="/en") {
            $formBuilder = new AspLoginFormBuilder("�������� �����������.","","/files/File/graduate_school/","�����");

            $formBuilder->registerField(new FormField("email", "email", true, "E-mail", "�� ������ e-mail"));
            $formBuilder->registerField(new FormField("password", "password", true, "������", "�� ������ ������"));
            $posError = $formBuilder->processPostBuild();

            $currentUser = $this->aspModule->getCurrentUser();
            if($posError=="1" && !empty($currentUser)) {
                $_SESSION['asp_login'] = $currentUser->getId();
                $_SESSION['asp_email'] = $currentUser->getEmail();
                $_SESSION['asp_password'] = $currentUser->getPassword();


                $personalPageId = $this->pages->getFirstPageIdByTemplate("asp_lk");
                if(!empty($personalPageId)) {
                    Dreamedit::sendHeaderByCode(301);
                    Dreamedit::sendLocationHeader("https://" . $_SERVER["SERVER_NAME"] . $_SESSION[lang]."/index.php?page_id=".$personalPageId);
                    return;
                }
            }

        } else {
            $formBuilder = new AspLoginFormBuilder("","","/files/File/graduate_school/","Enter");
        }

        $site_templater->displayResultFromPath($_CONFIG["global"]["paths"]["template_path"]."top.text.html");

        ?>
        <div class="container-fluid">
            <div class="row justify-content-end mb-3">
                <div class="ml-3 mt-3">
                    <a class="btn btn-lg imemo-button text-uppercase" href="/index.php?page_id=<?=$this->pages->getFirstPageIdByTemplate("asp_lk_password_reset")?>" role="button">������������ ������</a>
                </div>
                <div class="ml-3 mt-3">
                    <a class="btn btn-lg imemo-button text-uppercase" href="/index.php?page_id=<?=$this->pages->getFirstPageIdByTemplate("asp_lk_register")?>" role="button">�����������</a>
                </div>
            </div>
        </div>


        <?php

        if(!empty($posError)) {
            ?>
            <div class="alert alert-danger" role="alert">
                <?=$posError?>
            </div>
            <?php
        }

        $formBuilder->build();

        $site_templater->displayResultFromPath($_CONFIG["global"]["paths"]["template_path"]."bottom.text.html");
    }

}