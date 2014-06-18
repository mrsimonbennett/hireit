<?php
namespace HireIt\Controllers;


use HireIt\Actions\Home\LoadHomePage;
use Illuminate\Http\Request;
use Mrsimonbennett\Transport\Callback;

class HomeController extends BaseController  {
    public function getIndex(Request $request,LoadHomePage $loadHomePage)
    {
        $loadHomePage->setCallBack(new Callback($this,'getIndexSuccess','getIndexFailure'));
        return $loadHomePage->fire();

    }
    public function getIndexSuccess()
    {
        return 'hello';
    }
    public function getIndexFailure()
    {
        return 'test';
    }
} 