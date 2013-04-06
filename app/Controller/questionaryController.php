<?php

class questionaryController extends AppController {

    public $uses = array("questionary", "question");

    public function create() {

        // get request data
        $data = $this->request->data;

        // create insert data
        $insert_info = array("questionary" => 
            array("detail" => $data["detail"],
                  "type" => $data["type"],
                  "period" => $data["period"]
            )
        );

        foreach ($data["question"] as $suffix => $value) {

            if (empty($value)) {
                continue;
            }

            $insert_info["question"][] = array("questionary_id" => 1, "detail" => $value);
        }

        $this->questionary->saveAssociated($insert_info, array("atomic" => true));

        // create questionary save 
        //$this->questionary->save($this->questionary->regist($data));

        // get questionary insert id
        //$questionary_id = $this->questionary->getLastInsertID();

        // chenge model        
        //$this->question->setSource("question");
        
        // question data insert
        //var_dump($this->question->getRegisData());
        //$this->question->saveMany($this->question->regist($data, $questionary_id), array("atomic" => true));

        $this->render("/top/index");
        //$this->redirect("/");
    }
}
