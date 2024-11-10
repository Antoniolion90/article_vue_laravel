<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Inertia\Response;

class IndexController extends Controller
{
    public function __invoke(): Response
    {
        return inertia('Article/Index', [
            'articles' => Article::query()->paginate(10)
        ]);
    }
}
