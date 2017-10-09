<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function homepage()
    {
        return view('UserPage.homepage');
    }

    public function contact()
    {
        return view('UserPage.contactpage');
    }

    public function about()
    {
        return view('UserPage.aboutpage');
    }

    public function pizzamenu()
    {
        return view('UserPage.pizzaMenuPage');
    }
    public function burgermenu()
    {
        return view('UserPage.BurgerMenuPage');
    }
    public function drinkmenu()
    {
        return view('UserPage.drinkMenuPage');
    }
    public function desertmenu()
    {
        return view('UserPage.desertMenuPage');
    }
}
