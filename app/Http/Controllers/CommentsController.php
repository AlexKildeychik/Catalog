<?php

namespace App\Http\Controllers;
use App\Catalog;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Catalog $catalog)
    {
        $catalog->addComments([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
