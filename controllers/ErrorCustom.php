<?php

class ErrorCustom extends controller
{
    public function __construct()
    {
        $this->view('404');
    }
}
