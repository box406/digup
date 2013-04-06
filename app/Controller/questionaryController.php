<?php

class questionaryController extends AppController {

    public $uses = array("questionary", "question");

    public function create() {

        // get request data
        $data = $this->request->data;

        // create questionary save 
        //$this->questionary->save($this->questionary->regist($data));
        if ($this->questionary->save($this->questionary->regist($data))) {
            

        // get questionary insert id
        $questionary_id = $this->questionary->getLastInsertID();

        // chenge model        
        $this->question->setSource("question");
        
        // question data insert
        $this->question->saveMany($this->question->getRegistData($data, $questionary_id), array("atomic" => true));

        } else {
            echo "error";
        }

        $this->render("/top/index");
    }
}
