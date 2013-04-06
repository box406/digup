<?php

class question extends AppModel {

    public $useTable = "question";

    public function validata($data) {

    }

    public function getRegistData($data, $questionary_id) {

        foreach ($data["question"] as $suffix => $value) {

            if (empty($value)) {
                continue;
            }
            
            $insert_info[] = array(
                "questionary_id" => $questionary_id,
                "detail" => $value,
            );
        }
        return $insert_info;
    }
}
