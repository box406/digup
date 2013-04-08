<?php

class questionary extends AppModel {

    public $useTable = "questionary";
    public $hasMany = array("question");

    public $validate = array(
        "detail" => array(
            "rule" => array("between", 0, 100),
            "required" => true,
            "allowEmpty" => false,
            "message" => "アンケートの内容を100文字で入力して下さい"
        ),
        "type" => array(
            "rule" => array("alphaNumeric"),
            "required" => true,
            "allowEmpty" => false,
            "message" => "アンケートのタイプを選んで下さい"
        ),
        "period" => array(
            "rule" => array("alphaNumeric"),
            "required" => true,
            "allowEmpty" => false,
            "message" => "アンケートの期間を選んで下さい"
        )
    );

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
