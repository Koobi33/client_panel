<?php
/**
 * Created by PhpStorm.
 * User: Koobi
 * Date: 15.02.2019
 * Time: 22:28
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('companies');
    }
}