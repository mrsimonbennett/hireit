<?php


namespace HireIt\Controllers\Home;

use Carbon\Carbon;
use HireIt\Commands\Search\SearchForBookingsCommand;
use HireIt\Controllers\BaseController;
use Mrsimonbennett\Transport\Callback;
use Illuminate\Http\Request;

class SearchController extends BaseController
{
    public function postIndex(Request $request)
    {
        $callback = new Callback($this, 'postIndexSuccess', 'postIndexFail');
        $date = new Carbon($request->input('date'));
        $command = new SearchForBookingsCommand($date);

        $this->commandBus->setCallback($callback)->execute($command);
    }

    public function postIndexSuccess()
    {
        var_dump(func_get_args());
    }
} 