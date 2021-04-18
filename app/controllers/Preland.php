<?php

class Preland extends Controller
{
    public function index($param = '')
    {
        exit(header('location: /preland/landing'));
    }
    public function landing($land = '')
    {
        if($land == 1) exit( require_once 'landing1/index.html' );
        else if($land == 2) exit( require_once 'landing2/index.html' );
        else if($land == 3) exit( require_once 'landing3/index.html' );
        else if($land == 4) exit( require_once 'landing4/index.html' );
        else if($land == 5) exit( require_once 'landing5/index.html' );

        $this->view('preland/index');

    }
}