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

        $this->validate($request, [
            'email' => 'required|max:255',
            'comment' => 'required',
        ], [
            'email' => 'وارد کردن پست الکتریکی اجباریست !',
            'comment' => 'مقدار وارد شده غیر مجاز است .',
        ]);
/*
 *             'user_id.required' => 'فیلد نام صاحب تراکنش را وارد نمایید.',
            'log_type.required' => 'نوع تراکنش را انتخاب نمایید.',
            'log_action.required' => 'نوع تراکنش را انتخاب نمایید.',
            'price.required' => 'مبلغ تراکنش را وارد نمایید.',
            'price.integer' => 'مبلغ تراکنش را عدد نمایید.',
 * */
        // if validate done OK ==> here

        $message = new Message();
        $message->comment = $request->comment;
        $message->email = $request->email;
        $message->save();

        return redirect()->back()->with('status', 'we get your message ! thanks .');
    }

}
