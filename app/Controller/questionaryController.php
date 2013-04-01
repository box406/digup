<?php

class questionaryController extends AppController {

    public function regist() {

        var_dump($this->request->data);

        $this->questionary->regist();

        $this->render("/top/index");        
    }
}