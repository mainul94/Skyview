<?php
/**
 * Created by PhpStorm.
 * User: mainul
 * Date: 10/15/17
 * Time: 5:10 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class Boot extends Controller
{

    public function get_bootinfo()
    {
        return response()->json([
           "top_menu"=> [
               [
                   "name" => "login",
                   "label" => "Login"
               ],
               [
                   "name" => "logout",
                   "label" => "Logout"
               ]
           ]
        ]);
    }

}