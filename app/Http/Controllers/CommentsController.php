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


    public function store($categoryId, Catalog $catalog)
    {
        $this->validate(request(), ['body' => 'required']);

        $catalog->addComments([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
