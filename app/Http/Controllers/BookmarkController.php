<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bookmark;

class BookmarkController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index(Request $request)
    {
    	$bookmarks = Bookmark::where('user_id', $request->user()->id)->get();
    	return view('bookmarks.index', ['bookmarks' => $bookmarks]);
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required|max:255',
        ]);

        $request->user()->bookmarks()->create([
            'title' => $request->title,
            'url' => $request->url,
        ]);

        return redirect('/bookmarks');
    }

    public function create()
    {
    	return view('bookmarks.create');
    }

    public function destroy()
    {
    	
    }
}
