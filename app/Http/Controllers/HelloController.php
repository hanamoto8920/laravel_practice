<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use App\Models\Person;

use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();

        $sort = $request->sort;
        
        // $items = DB::table('people')->orderBy('age','asc')->simplePaginate(2);
        $items = Person::orderBy('sort', 'asc')->simplePaginate(3);
        $param = ['items' => $items, 'sort'=>$sort, 'user'=> $user];
        return view('hello.index',$param);
    }
    
    public function rest(Request $request) {
        return view('hello.rest');
    }
    
    public function ses_get(Request $request) {
        $ses_data = $request->session()->get('msg');
        return view('hello.session', ['session_data' =>$ses_data]);
    }

    public function ses_put(Request $request) {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }

    public function getAuth(Request $request) {
        $param = ['message' => 'ログインして下さい。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request) {
        $email = $request->email;
        $password  = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $msg = 'ログインしました。('. Auth::user()->name .')';
        } else {
            $msg ='ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }
}
