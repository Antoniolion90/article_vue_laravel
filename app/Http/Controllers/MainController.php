<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Response;

class MainController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Main', [
            'articles' => Article::query()->latest()->limit(6)->get()
        ]);
    }
}
