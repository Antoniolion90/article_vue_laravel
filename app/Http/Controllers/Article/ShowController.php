<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Inertia\Response;

class ShowController extends Controller
{
    public function __invoke($slug): Response
    {
        return inertia('Article/Show', [
            'article' => Article::query()->where('slug', $slug)->firstOrFail()
        ]);
    }
}
