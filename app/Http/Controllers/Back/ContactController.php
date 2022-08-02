<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        return view('admin.contact.index', compact('contacts'));
    }


    public function update(Request $request)
    {
        request()->validate([
            'deskripsi_contact' => 'required',
            'alamat_contact' => 'required',
            'email_contact' => 'required',
            'call_contact' => 'required',
        ]);

        Contact::where('id', 1)->update([
            'deskripsi_contact' => $request->deskripsi_contact,
            'alamat_contact' => $request->alamat_contact,
            'email_contact' => $request->email_contact,
            'call_contact' => $request->call_contact,
        ]);

        toast('Data Berhasil diupdate','success');

        return redirect()->route('contact.index')->with('success', 'Data berhasil diubah');
    }
}
