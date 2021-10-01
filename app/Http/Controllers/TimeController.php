<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TimeController extends Controller
{
    public function __invoke()
    {
        return new JsonResponse([
            'time' => time(),
        ]);
    }
}
