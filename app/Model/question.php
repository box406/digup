<?php

class question extends AppModel {

    public $useTable = "question";
    public $belongsTo = array("questionary");
}
