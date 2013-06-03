<?php

class topController extends AppController {

    public $uses = array("questionary", "question");

    public function index() {

        $data_info = $this->questionary->find("all");
        $this->set("data_info", $data_info);
    }
}
