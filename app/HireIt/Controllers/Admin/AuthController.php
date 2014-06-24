<?php


namespace HireIt\Controllers\Admin;

use HireIt\Commands\Auth\LoginUserCommand;
use HireIt\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Mrsimonbennett\Transport\Callback;

/**
 * Class AuthController
 * @package HireIt\Controllers\Admin
 */
class AuthController extends BaseController
{
    /**
     * @var Factory
     */
    private $view;

    /**
     * @param Factory $view
     */
    public function __construct(Factory $view)
    {
        $this->view = $view;
        parent::__construct();
    }

    /**
     *
     */
    public function getIndex()
    {
        return $this->view->make('admin.auth.login');
    }

    public function postIndex(Request $request)
    {
        $this->commandBus->setCallback(new Callback($this, 'postIndexSuccess'))->execute(
            new LoginUserCommand($request->input('email'), $request->input('password'))
        );
    }
}