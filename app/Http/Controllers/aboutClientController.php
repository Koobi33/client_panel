<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Entities\aboutClient;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Barryvdh\DomPDF\PDF;


class aboutClientController extends Controller
{
    public function index()
    {
        $objClient = new aboutClient();
        $companies = $objClient->orderBy('created_at', 'desc')->paginate(10);
        return view('companies', ['companies' => $companies]);
    }

    public function create()
    {
        return view('about');
    }

    public function viewClient($id){
        $objClient = aboutClient::find($id);
        if(!$objClient)
        {
            return abort(404);
        }
        return view('client', ['company' => $objClient]);
    }

    public function editClient($id){
        $objClient = aboutClient::find($id);
        if(!$objClient)
        {
            return abort(404);
        }
        return view('edit', ['company' => $objClient]);
    }
    public function editRequestClient($id, Request $request)
    {
        $objClient = aboutClient::find($id);
        if (!$objClient) {
            return abort(404);
        }
        $objClient->clientName = $request->get('clientName');
        $objClient->lawTypeSelect = $request->get('lawTypeSelect');
        $objClient->lawName = $request->get('lawName');
        $objClient->generalName = $request->get('generalName');
        $objClient->factAddr = $request->get('factAddr');
        $objClient->lawAddr = $request->get('lawAddr');
        $objClient->INN = $request->get('INN');
        $objClient->KPP = $request->get('KPP');
        $objClient->ORGN = $request->get('ORGN');
        $objClient->checkAcc = $request->get('checkAcc');
        $objClient->corrAcc = $request->get('corrAcc');
        $objClient->BIK = $request->get('BIK');
        $objClient->bankName = $request->get('bankName');
        $objClient->phoneNumber = $request->get('phoneNumber');
        $objClient->email = $request->get('email');
        $objClient->vk = (bool)$request->get('vk', false);
        $objClient->inst = (bool)$request->get('inst', false);
        $objClient->fb = (bool)$request->get('fb', false);

        if ($objClient->save()) {
            return redirect(route('companies'))->with('success', trans('Данные клиента успешно изменены!'));
        }
        return back()->with('error', trans('Что-то пошло не так! Повторите попытку!'));
    }

    public function deleteClient($id){
        $objClient = aboutClient::find($id);
        if(!$objClient)
        {
            return redirect(route('companies'))->with('error', trans('Что-то пошло не так!'));
        }
        $objClient->delete();
    return redirect(route('companies'))->with('success', trans('Данные клиента успешно удалены!'));
    }

    public function store(Request $request)
    {
        try{
        $this->validate($request, [
            'clientName' => 'required|min:3|max:255',
            'lawName' => 'required|min:3|max:255',
            'factAddr' => 'required|min:3|max:255',
            'email' => 'email',
            'phoneNumber' => 'required|min:11|max:11'
            ]);
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
        return redirect(route('companies'))->with('success', trans('Клиент успешно добавлен!'));
    }
    catch (ValidationException $e){
        \Log::error($e->getMessage());
        return back()->with('error', trans('Обязательные поля не заполнены или заполнены неверно!'));}
    }
}

