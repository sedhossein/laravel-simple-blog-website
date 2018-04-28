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
        $this->validate($request,[
            'email' => 'required|max:255',
            'password' => 'required|max:5',
        ],[
            'email'    => 'وارد کردن پست الکتریکی اجباریست !',
            'password' => 'مقدار وارد شده غیر مجاز است .',
        ]);
        // if validate done OK ==> here

            return jDate::forge('now - 10 minutes')->ago(); // 1395-02-19

        $message = new Message();
        $message->password = $request->password;
        $message->email = $request->email;
        $message->time = time();
        $message->save();



    }

}
