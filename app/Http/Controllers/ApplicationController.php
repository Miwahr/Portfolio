<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function welcome(Request $request){
        if ($request->session()->has('name')) return view('applications.show');
        
        return view('applications.welcome');
    }
    
    public function check_name(Request $request){
        $messages = [
            'name.required' => 'Обязательно введите имя!',
            'name.max' => 'Слишком большое имя',
            'name.alpha_dash' => 'Недопустимые символы'
        ];
        $this->validate($request, [
            'name' => 'required|max:25|alpha_dash',
        ],
            $messages); 
        $request->session()->put('name', $request->name);
        return view('applications.show');
        
    }
    
    
    public function letters() {
        return view('applications.letters');
    }
    
    public function letters_result(Request $request){
        \App\Letter::create([
            'name'=>$request->session()->get('name'),
            'count'=>$request->count,
        ]);
        return redirect(route('letters_results'));
    }
    
    public function letters_results(){
        $res = \App\Letter::orderBy('count', 'desc')
                    ->take(10)
                    ->get();
         return view('applications.letters_result', ['results' => $res]);
    }
    
    
    public function catch_me() {
        return view('applications.catch_me');
    }
    
    public function catch_me_send_result(Request $request) {
        \App\Catch_me::create([
            'name'=>$request->session()->get('name'),
            'count'=>$request->count,
        ]);
        return redirect(route('catch_me_results'));
    }

    public function catch_me_results() {
        $res = \App\Catch_me::orderBy('count', 'desc')
        ->take(10)
        ->get();
        return view('applications.catch_me_results', ['results' => $res]);
    }
}
