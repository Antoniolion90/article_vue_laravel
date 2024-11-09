<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Inertia\Response;

class IndexController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Article/Index');
    }
}