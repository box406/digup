<?php

class questionary extends AppModel {

    public $useTable = "questionary";
    public $hasMany = array("question");
/*
    public $validate = array(
        "detail" => array(
            "rule" => array("between", 0, 140),
            "required" => true,
            "allowEmpty" => false,
            "message" => "必須項目です"
        ),
        //"type" => array(),
        //"period" => array()
    );
*/
    public function regist($data) {

        $insert_info = array(
            "questionary" => array(
                "detail" => $data["detail"],
                "type"   => $data["type"],
                "period" => $data["period"],
            )    
        );

        foreach ($data["question"] as $suffix => $value) {

            if (empty($value)) {
                continue;
            }
            $insert_info["question"][] = array("detail" => $value);            
        }

        return $insert_info;
    }
}
