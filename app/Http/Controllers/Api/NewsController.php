<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
{
    $news = News::all()->map(function ($item) {
        return [
            'id' => $item->id,
            'title_one' => $item->title_one,
            'description' => $item->description,
            'title_two' => $item->title_two,
            'content' => $item->content,
            'image_url' => $item->image_url,
        ];
    });

    return response()->json($news);
}
}