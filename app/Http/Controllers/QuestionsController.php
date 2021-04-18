<?php

namespace App\Http\Controllers;

use App\Models\Question;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = Question::orderBy('created_at', 'desc')->get();
        return view('forum', [
            'questions' => $forum,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required|string'
        ]);

        $q = new Question();
        $q->question = $request->question;
        $q->user_id = Auth::user()->id;
        $q->save();

        return redirect("/forum");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $que = Question::findOrFail($id);
        if (property_exists($request, 'question')) {
            $this->validate($request, [
                'question' => 'required|string'
            ]);
            $que->question = $request->question;
        }  
        if (property_exists($request, 'answer')) {
            $this->validate($request, [
                'answer' => 'required|string'
            ]);
            $que->answer = $request->answer;
        }
        $que->save();
        return redirect('/forum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
