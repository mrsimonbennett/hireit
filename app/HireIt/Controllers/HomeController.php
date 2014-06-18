<?php
namespace HireIt\Controllers;


use HireIt\Actions\Home\LoadHomePage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Mrsimonbennett\Transport\Callback;

class HomeController extends BaseController  {
    /**
     * @var \Illuminate\View\Factory
     */
    private $view;

    /**
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->view = $factory;
    }
    public function getIndex(Request $request,LoadHomePage $loadHomePage)
    {
        return $loadHomePage->setCallBack(new Callback($this,'getIndexSuccess','getIndexFailure'))->fire();

    }
    public function getIndexSuccess(Collection $collection)
    {
       return $this->view->make('layout.master');
        return $collection;

    }
    public function getIndexFailure()
    {
        return 'test';
    }
} 