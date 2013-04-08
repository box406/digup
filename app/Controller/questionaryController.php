<?php

class questionaryController extends AppController {

    public $uses = array("questionary", "question");

    public function index() {
        $this->render("index");
    }

    public function create() {

        // insert question data
        $return = $this->questionary->saveAll($this->questionary->regist($this->request->data));

        // check
        if ($return === false) {
            //var_dump($this->questionary->validationErrors);
            // error is questionary page
            $this->render("index");
            return;
        }

        $this->render("/top/index");
    }
}
