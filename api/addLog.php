<?php
    require_once('lib/entry.php');
    class addLog extends entry{
        public function __construct(){
            parent::__construct();
        }

        public function run(){
            db::init() -> query("UPDATE yearfinal SET c=c+1");
            $count = db::init() -> query("SELECT * FROM yearfinal;",true);
            ajax(0,'chengg',$count);
        }
    }

    runApp();