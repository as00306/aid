<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phattarachai\LineNotify\Facade\Line;

class AidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\App\Services\AidService $service)
    {
        $service->rate();
    }
}
