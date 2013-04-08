<?php

class questionaryController extends AppController {

    public $uses = array("questionary", "question");

    public function index() {
        
    }

    public function create() {

        // insert question data
        $this->questionary->saveAll($this->questionary->regist($this->request->data));

        $this->render("/top/index");
    }
}
