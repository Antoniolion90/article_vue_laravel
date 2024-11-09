<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Inertia\Response;

class ShowController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Article/Show');
    }
}
