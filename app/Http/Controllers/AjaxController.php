<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    public function contactus_send(Request $request)
    {
//        $data = $request->all();
//        $data['ip'] = request()->ip();

        $data = [
            'name'=> Str::title($request->name),
            'email'=> ($request->email),
            'subject'=>Str::ucfirst($request->subject),
            'message'=>($request->message),
            'ip'=> request()->ip(),
        ];
        if (!empty($data['name']) && !empty($data['email']) && !empty($data['message']) && !empty($data['subject']))
        {
            ContactMessage::create($data);
            return redirect()->back()->with('success', 'Teşekkür ederiz. Mesajınız yolda :)');
        }
        else
        {
            return redirect()->back()->with('fail', 'Üzgünüz, bir sorun oluştu. Lütfen tüm alanları doldurduğunuzdan emin olun. :(');
        }
    }
}
