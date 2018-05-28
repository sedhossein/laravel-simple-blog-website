<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Morilog\Jalali\jDate;
use Morilog\Jalali\jDateTime;

class HomeController extends Controller
{
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    public function home()
    {
        return view('home');
    }

    public function about_me()
    {
        return view('about-me');
    }

    public function contact_me_view()
    {
        return view('contact-me');
    }

    public function contact_action(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|max:125',
            'comment' => 'required',
        ], [
            'email.required' => 'وارد کردن پست الکتریکی اجباریست !',
            'comment.required' => 'مقدار وارد شده غیر مجاز است .',
        ]);

        // if validate done OK ==> here

        $message = new Message();
        $message->comment = $request->comment;
        $message->email = $request->email;
        $message->save();

        return redirect()->back()->with('status', 'we get your message ! thanks .');
    }

}
