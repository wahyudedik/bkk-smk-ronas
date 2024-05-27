<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Career;
use App\Models\Articles;
use App\Models\Perusahaan;
use App\Models\BiodataUser;
use App\Models\CareerLink;
use App\Models\CareerProses;
use App\Models\Contact;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // dashboard
    public function AdminDashboard() 
    {
        $articles = Articles::latest()->limit(5)->get();
        $career = Career::all();
        $careerLink = CareerLink::all();
        $users = User::where('role', 'user')->get(); // Menambahkan model user dengan filter role 'user'
        $timePeriod = now()->format('Y'); // Mengambil tahun dari timestamp saat ini
        return view('admin.dashboard', compact('articles', 'users', 'timePeriod', 'career', 'careerLink'));
    }

    // faq
    public function AdminFaq()
    {
        return view('admin.faq');
    }

    // user admin
    public function AdminUser()
    {
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    //user create
    public function AdminUserCreate()
    {
        return view('admin.userCreate');
    }

    //user store
    public function AdminUserStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.user')->withSuccess('User successfully created!');
    }

    //user edit
    public function AdminUserEdit($id)
    {
        $user = User::find($id);
        return view('admin.userEdit', compact('user'));
    }

    //user update
    public function AdminUserUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect()->route('admin.user')->withSuccess('User successfully updated!');
    }

    //user delete
    public function AdminUserDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    //user report
    public function AdminUserReport()
    {
        $users = User::all();
        return view('admin.userReport', compact('users'));
    }

    //AdminCareerReport
    public function AdminCareerReport()
    {
        $biodataUsers = BiodataUser::all();
        $careers = Career::all();
        $careerLinks = CareerLink::all();
        $careerProses = CareerProses::all();
        $perusahaans = Perusahaan::all();

        return view('admin.careerReport', compact('biodataUsers', 'careers', 'careerLinks', 'careerProses', 'perusahaans'));
    }

    //AdminContact
    public function AdminContact()
    {
        $contacts = Contact::all();
        return view('admin.contact-us', compact('contacts'));
    }

    //AdminContactDelete
    public function AdminContactDelete(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back();
    }

    //AdminNewsletter
    public function AdminNewsletter()
    {
        $newsletter = Newsletter::all();
        return view('admin.newsletter', compact('newsletter'));
    }

    public function AdminNewsletterDelete(Request $request, $id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        return redirect()->back();
    }
}
