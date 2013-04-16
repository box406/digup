<?php

class question extends AppModel {

    public $useTable = "question";
    public $belongsTo = array("questionary");
    public $validate = array(
        "detail" => array(
            "rule" => array("between", 0, 100),
            "required" => true,
            "allowEmpty" => true,
            "message" => "質問を100文字で入力して下さい"
        )
    );
}
