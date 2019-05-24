<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Admin;
use App\Http\Controllers\Controller;

use App\Mailers\AppTicMailer;
use Illuminate\Http\Request;
use App\Models\Ticket\Category;
use App\Models\Ticket\Ticket;
use App\User;
use Illuminate\Support\Facades\Auth;

use App\Models\Ticket\AdminComment;
use Brian2694\Toastr\Facades\Toastr;

class AdminTicketsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id',$ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        $category = $ticket->category;

        return view('backend.Admin.Ticket.show',compact('comments','comments','category','ticket'));
    }

    public function index()
    {

        $tickets = Ticket::paginate(10);
        $categories = Category::all();

        return view('backend.Admin.Ticket.index', compact('tickets', 'categories'));
    }



    public function close($ticket_id, AppTicMailer $mailer)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 'Closed';

        $ticket->save();

        $ticketOwner = $ticket->user;


        Toastr::success('Destek Bileti Kapatılmıştır','BAŞARILI');
        return redirect()->back();
    }

    public function postComment(Request $request, AppTicMailer $mailer)
    {
        $this->validate($request, [
            'comment'   => 'required'
        ]);

        $comment = new AdminComment();

        $comment->ticket_id = request('ticket_id');

        $comment->comment = request('comment');

        $comment->admin_id = auth()->id();

        $comment->save();




        Toastr::success('Yorumunuz Eklendi ','BAŞARILI');
        return redirect()->back();
    }
}
