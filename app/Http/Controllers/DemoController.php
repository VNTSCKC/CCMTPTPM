<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller 
{
    function showWelcome()
    {
        return view('welcome');
    }
    function sayHello($ten)
    {
        return view('hello',['ten'=>$ten]);
    }
    function tinhtong($a,$b)
    {
        return view('tinhtong',['a'=>$a,'b'=>$b]);
    }
}