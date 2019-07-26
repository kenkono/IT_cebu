<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;

class SuggestionController extends Controller
{
    public function index() {
        $suggestions = Suggestion::all();

        return view('index', compact('suggestions'));
    }

    public function store(Request $request) {
        
        $suggestion = Suggestion::create([
            'author' => request()->author,
            'content' => request()->content,
        ]);

        return redirect('/');
    }

    public function create() {
        return view('create');
    }

    public function delete ($id)
    {
        Suggestion::find($id)->delete();
        return redirect('/');
    }

    public function update($id)
    {
        $suggestion = Suggestion::find($id);
        return view('update', ['suggestion' => $suggestion]);
    }

    public function saveUpdate($id)
    {
        $suggestion = Suggestion::find($id);
        $suggestion->author = request()->author;
        $suggestion->content = request()->content;
        $suggestion->save();

        return redirect('/');
    }

    public function upVote($id)
    {
        $suggestion = Suggestion::find($id);

        $suggestion->votes()->create([]);

        return back();
    }

    public function downVote($id)
    {
        $suggestion = Suggestion::find($id);

        $vote = $suggestion->votes()->first();
        $vote->delete();

        return back();
    }
}
