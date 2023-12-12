<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::where('status', 'Approve')->latest()->get();
        return view('Comment.index', compact('comments'));
    }

    public function create()
    {
        return view('Comment.create');
    }

    public function store(Request $request)
    {

        $validator = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:comments,email',
            'current_position' => 'required',
            'current_company' => 'required',
            'comment' => 'required',
            'photo' => 'required',
        ]);
        $data = $request->all();
        $photo = $request->file('photo');

        $orgFileName = $request->file('photo')->getClientOriginalName();
        $cover_name = str_replace(" ", "", $orgFileName);
        $new_photo = time() . $cover_name;

        // return $cover_name;
        $destinationPathCover = public_path() . '/images/users/';

        if (!file_exists($destinationPathCover)) {
            mkdir($destinationPathCover, 0755, true);
        }
        $data['photo'] = $new_photo;
        $photo->move($destinationPathCover, $new_photo);

        // $payment = Payment::create($data);

        if ($validator) {
            Comment::create($data);
            return redirect('/')->with('success', 'Thank You For Your Support!');
        }
    }
}