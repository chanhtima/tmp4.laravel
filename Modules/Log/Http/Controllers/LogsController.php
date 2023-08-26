<?php

namespace Modules\Log\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogsController extends Controller
{
    public function log($logName,$log,$causedBy,$performedOn,$event)
    {   
        activity($logName)
        ->causedBy($causedBy)
        ->performedOn($performedOn)
        ->withProperties($log)
        ->event($event)
        ->log($event);

    }
}
