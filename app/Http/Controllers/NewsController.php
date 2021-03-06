<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $news = News::latest()->paginate(4);
        return view('news.index', ['news' => $news]);
    }

    public function show($id)
    {
        $news = News::with('user', 'teams')->findOrFail($id);
        return view('news.show', ['news' => $news]);
    }
}
