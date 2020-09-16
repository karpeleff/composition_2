<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \PhpOffice\PhpWord\TemplateProcessor;

use App\Models\WorkTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function des()
    {
        return view('des');
    }

    public  function add_time(Request $request)
    {

       // dd($request);

        $data = WorkTime::create($request->all());
        return $data;
    }


    public  function  Dump($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre>';

    }
}
