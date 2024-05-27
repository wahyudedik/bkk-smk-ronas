<?php

namespace App\Http\Controllers;

use App\Career;
use App\CareerLink;
use App\Models\Career as ModelsCareer;
use App\Models\CareerLink as ModelsCareerLink;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = ModelsCareer::latest()->take(3)->get();
        $careerLinks = ModelsCareerLink::latest()->take(3)->get();
        return view('welcome', compact('careers', 'careerLinks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // create contact data and store it to database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->withInput()->with('success', 'Thanks for contacting us!')
            ->with('swal', [
                'title' => 'Mengirim Pesan',
                'icon' => 'success',
                'timer' => 3000,
                'showConfirmButton' => false,
                'allowOutsideClick' => false,
                'showCloseButton' => true,
            ]);
    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // create newsletter data and store it to database
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect()->back()->withInput()
            ->with(['success' => 'Thanks for subscribing!', 'swal' => [
                'title' => 'Berlangganan',
                'icon' => 'success',
                'timer' => 3000,
                'showConfirmButton' => false,
                'allowOutsideClick' => false,
                'showCloseButton' => true,
            ]]);
    }
}
