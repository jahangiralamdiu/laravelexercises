<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HelloController
 *
 * @author jahangiralamdiu
 */
class HelloController extends BaseController {
    //put your code here
    public function sayhello()
    {
        return View::make('testview', array('heading' => 'Hello Laravel',
        'body' => 'This is totally awesome'));
    }
}
