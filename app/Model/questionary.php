<?php

class questionary extends AppModel {

    public $name = "questionary";
    public $useTable = "questionary";

    public function validate($data) {

    }

    public function regist($data) {

        $insert_info = array(
            "questionary" => array(
                "detail" => $data["detail"],
                "type"   => $data["type"],
                "period" => $data["period"],
            )    
        );

        return $insert_info;
    }

}
