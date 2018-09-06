<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        $contact =  Contact::orderBy('created_at', 'DESC')->get();
        return view('backend.page.contact.index', compact('contact'));
    }
    public function sendContact(Request $request)
    {
        $dataRequest = $request->except('_token');
        $contact = new Contact();
        if(isset($dataRequest['hoten'])) {
            $contact->fullname = $dataRequest['hoten'];
        }
        if(isset($dataRequest['diachi'])) {
            $contact->address = $dataRequest['diachi'];
        }
        if(isset($dataRequest['dienthoai'])) {
            $contact->phone = $dataRequest['dienthoai'];
        }
        if(isset($dataRequest['email'])) {
            $contact->email = $dataRequest['email'];
        }
        if(isset($dataRequest['tieude'])) {
            $contact->title = $dataRequest['tieude'];
        }
        if(isset($dataRequest['noidung'])) {
            $contact->content = $dataRequest['noidung'];
        }
        if ($contact->save()) {
            return redirect()->back();
        }  else {
            return redirect()->back();
        }
    }
}
