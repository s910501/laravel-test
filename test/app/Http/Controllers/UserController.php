<?php
/**
 * Created by PhpStorm.
 * User: shenzm
 * Date: 2017/10/19
 * Time: 18:37
 */
namespace App\Http\Controllers;

class UserController extends Controller
{
    public function info($id){
        return 'user'.$id;
        //return route('userinfo');
    }
}