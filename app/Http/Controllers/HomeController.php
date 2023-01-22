<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class HomeController extends Controller
{

    public function register(Request $request)
    {
        DB::table('user')->insert([
            'Name_user' => $request->username,
            'Email_user' => $request->email,
            'Pass_user' => md5($request->password),
            'id_role' => $request->role
        ]);

        return redirect('/login');
    }


    public function login(Request $request)
    {
        $tes = $request->all();

        $user = DB::table('user')
                    ->join('role', 'role.id', '=', 'user.Id_role')
                    ->where('Email_user', $request->email)
                    ->where('Pass_user', md5($request->password))
                    ->get();

        if(count($user)) {
            session(['name' => $user->first()->Name_user, 'role' => $user->first()->Name_roles]);
            return redirect('/');
        } else {
            $message = 'Wrong Credential';
            return view('login', compact('message'));
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}