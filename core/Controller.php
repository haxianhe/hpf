<?php
/**
 * Created by PhpStorm.
 * User: haxianhe
 * Date: 2018/10/9
 * Time: 下午5:38
 */

namespace core;

class Controller
{
    public function __construct()
    {
        //$this->model = new Model();
    }

    public function execute($action)
    {
        $this->$action();
    }
}