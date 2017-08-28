<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use MongoDB\BSON\Timestamp;
use Carbon\Carbon;


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
     * @return \Illuminate\Http\Response
     */

//    admin homepage
    public function index()
    {

        $data = DB::table('insert_food') -> get();
        return view('AdminPage.home')->with('data',$data);
    }



    public function insert()
    {
        return view('AdminPage.insert');

    }

//show id on url
    public function show($id)
    {
        $post = DB::table('insert_food')->find($id);
        return view('AdminPage.food')->with('post',$post);
    }

    //update
    public function update()
    {
        $food_name = Input::get('name');
        $food_description = Input::get('description');
        $food_price = Input::get('price');
        $updated = Carbon::now()->toDateString();

        DB::table('insert_food')
            ->where('id',Input::get('id'))
            ->update(['name' => $food_name, 'description' => $food_description, 'price' => $food_price, 'updated_at' => $updated]);

        Session::flash('update','Update Item Successful!');
        return redirect(route('AdminPage.home'));
    }

//    delete
    public function delete(Request $request)
    {
        $id = $request->input('id');
        DB::table('insert_food')->delete($id);

        Session::flash('delete','Delete Item Successful!');
        return redirect(route('AdminPage.home'));
    }

//    insert new item
    public function store(Request $request)
    {
        $food_name = Input::get('name');
        $food_description = Input::get('description');
        $food_price = Input::get('price');
        $created = Carbon::now()->toDateString();
        $updated = Carbon::now()->toDateString();

        $data = ['created_at' => $created, 'updated_at' => $updated, 'name' => $food_name,'description' => $food_description,'price' => $food_price];
        DB::table('insert_food') -> insert($data);

        Session::flash('success','Insert New Item Successful!');

      return redirect(route('AdminPage.home'));
    }
}
