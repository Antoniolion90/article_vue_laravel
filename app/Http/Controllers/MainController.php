<?php

namespace App\Http\Controllers;

use Inertia\Response;

class MainController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Main');
    }
}
