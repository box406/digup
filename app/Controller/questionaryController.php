<?php

class questionaryController extends AppController {

    public $uses = array("questionary", "question");

    public function index() {
        $this->render("index");
    }

    public function create() {

        // check
        if ($this->questionary->validates() === false || $this->question->validates() === false) {

            // error is questionary page
            $this->render("index");
        } else {
    
            // insert question data
            $this->questionary->saveAll($this->questionary->regist($this->request->data), array("validate" => false));
            $this->render("/top/index");
        }

    }
}
