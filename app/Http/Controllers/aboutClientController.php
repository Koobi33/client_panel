<?php

namespace App\Http\Controllers;

use App\Entities\aboutClient;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class aboutClientController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('about');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'clientName' => 'required',
            'lawName' => 'required']);
        $client = new aboutClient([
                'clientName' => $request->get('clientName'),
                'lawTypeSelect' => $request->get('lawTypeSelect'),
                'lawName' => $request->get('lawName'),
                'generalName' => $request->get('generalName'),
                'factAddr' => $request->get('factAddr'),
                'lawAddr' => $request->get('lawAddr'),
                'INN' => $request->get('INN'),
                'KPP' => $request->get('KPP'),
                'ORGN' => $request->get('ORGN'),
                'checkAcc' => $request->get('checkAcc'),
                'corrAcc' => $request->get('corrAcc'),
                'BIK' => $request->get('BIK'),
                'bankName' => $request->get('bankName'),
                'phoneNumber' => $request->get('phoneNumber'),
                'email' => $request->get('email'),
                'vk' => (bool)$request->get('vk', false),
                'inst' => (bool)$request->get('inst', false),
                'fb' => (bool)$request->get('fb', false)
        ]);
        $client->save();
        return view('about');
    }
}

