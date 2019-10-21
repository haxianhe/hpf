<?php

/**
 * Desc: action层的基类
 * User: haxianhe
 * Date: 2019/2/2
 * Time: 2:03 PM
 */
abstract class HpLib_Base_ActionBase
{
    abstract public function myExecute($arrRequest);

    protected function beforeExec($arrRequest)
    {
        return $arrRequest;
    }

    protected function afterExec($res)
    {
        return $res;
    }

    public function execute($arrRequest)
    {
        $arrRequest = $this->beforeExec($arrRequest);
        $res = $this->myExecute($arrRequest);
        $res = $this->afterExec($res);
        header('Content-type: text/json');
        echo json_encode($res);
    }
}