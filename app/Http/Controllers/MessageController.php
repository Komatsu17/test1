<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Mensagens';
        $message = Message::all();
        return view('message.index', compact('message', 'title'));
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
        $data = $request->input();
        $message = new Message();

        $message->first_name = $data['first_name'];
        $message->last_name = $data['last_name'];
        $message->email = $data['email'];
        $message->content = $data['content'];
        $message->save();

        return redirect('contact')->with('status', 'Mensagem enviada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {

        $data = $request->input();

        $message->first_name = $data['first_name'];
        $message->last_name = $data['last_name'];
        $message->email = $data['email'];
        $message->content = $data['content'];
        $message->save();

        return redirect()->route('message.index')->with('status', 'Mensagem Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()
            ->route('message.index')
            ->with('status', 'Mensagem Deletada');
    }
}
