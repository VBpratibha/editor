<?php

namespace LaravelContent\Contents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ContentController extends Controller
{
    public function index()
    {
    	return view('Contents::editor');
    }
    public function store(Request $request)
    {
        // Validate the request...
        $data = $request->all(); 
        $contents = new Content;
        $contents->title = $request->title;
        $contents->slug = $request->slug;
        $contents->text = $request->contentText;
        $contents->save();
    }
    public function display()
    {
    	//$content = DB::table('contents')->get();
    	return view('Contents::userDetail');
    	//return view('Contents::Index',compact('content'));
    }
}
