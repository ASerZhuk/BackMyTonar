<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
                 'date' => $item->created_at = Carbon::parse($item->created_at)->format('d F Y'),
             ];
         });

        

        if (!$news) {
            return response()->json(['message' => 'Not found'], 404);
        };

        return response()->json($news);
    }

    public function newsDetail(Request $request) {

        $request->validate([
            'id' => 'required|integer'
        ]);

       $news = News::find($request->id);
            return [
                'id' => $news->id,
                'title_one' => $news->title_one,
                'description' => $news->description,
                'title_two' => $news->title_two,
                'content' => $news->content,
                'image_url' => $news->image_url,
                'date' => $news->created_at = Carbon::parse($news->created_at)->format('d F Y'),
            ];

        if (!$news) {
            return response()->json(['message' => 'Новость не найдена'], 404);
        }

        return response()->json($news);
    }
}