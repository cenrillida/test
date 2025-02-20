<?php

namespace AspModule\FormBuilders\Templates;

use AspModule\AspModule;

class ApplyForEntryUploadFormBuilder extends \FormBuilder {

    public function processPostBuild()
    {
        global $DB;
        if(parent::processPostBuild()) {

            $result = $this->fillFieldsForUpload();
            if($result=="") {

                $aspModule = AspModule::getInstance();
                if ($aspModule->getApplyForEntryUploadService()->sendData($this->sendFields)) {
                    $this->result = true;
                    return "";
                } else {
                    return "������.";
                }
            } else {
                return $result;
            }

        }
        return "";
    }
}