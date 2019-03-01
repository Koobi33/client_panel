@extends('layouts.app')

@section('content')
    <div class="container">
        <h1  style="text-align: center">Информация о {{$company->clientName}}</h1>
        <table class="table table-borderless" style="margin-top: 2em">
            <tbody>
            @if($company->clientName)
            <tr>
                <th scope="row">Название компании</th>
                <td>{{$company->clientName}}</td>
            </tr>
            @endif
            <tr>
                <th scope="row">Тип юр.лица</th>
                <td>{{$company->lawTypeSelect}}</td>
            </tr>
            @if($company->lawName)
            <tr>
                <th scope="row">Название юр.лица</th>
                <td>{{$company->lawName}}</td>
            </tr>
            @endif
            @if($company->generalName)
            <tr>
                <th scope="row">ФИО генерального директора</th>
                <td>{{$company->generalName}}</td>
            </tr>
            @endif
            @if($company->factAddr)
            <tr>
                <th scope="row">Фактический адрес</th>
                <td>{{$company->factAddr}}</td>
            </tr>
            @endif
            @if($company->lawAddr)
            <tr>
                <th scope="row">Юридический адрес</th>
                <td>{{$company->lawAddr}}</td>
            </tr>
            @endif
            @if($company->INN)
            <tr>
                <th scope="row">ИНН</th>
                <td>{{$company->INN}}</td>
            </tr>
            @endif
            @if($company->KPP)
            <tr>
                <th scope="row">КПП</th>
                <td>{{$company->KPP}}</td>
            </tr>
            @endif
            @if($company->ORGN)
            <tr>
                <th scope="row">ОРГН или ОРГНИП</th>
                <td>{{$company->ORGN}}</td>
            </tr>
            @endif
            @if($company->chechAcc)
            <tr>
                <th scope="row">Рассчетный счет</th>
                <td>{{$company->chechAcc}}</td>
            </tr>
            @endif
            @if($company->corrAcc)
            <tr>
                <th scope="row">Корреспондентский счет</th>
                <td>{{$company->corrAcc}}</td>
            </tr>
            @endif
            @if($company->BIK)
            <tr>
                <th scope="row">БИК</th>
                <td>{{$company->BIK}}</td>
            </tr>
            @endif
            @if($company->bankName)
            <tr>
                <th scope="row">Название банка</th>
                <td>{{$company->bankName}}</td>
            </tr>
            @endif
            @if($company->phoneNumber)
            <tr>
                <th scope="row">Телефон</th>
                <td>{{$company->phoneNumber}}</td>
            </tr>
            @endif
            @if($company->email)
            <tr>
                <th scope="row">E-mail</th>
                <td>{{$company->email}}</td>
            </tr>
            @endif
            @if($company->vk)
            <tr>
                <th scope="row">VKontakte</th>
                <td>Да</td>
            </tr>
            @endif
            @if($company->inst)
                <tr>
                    <th scope="row">Instagram</th>
                    <td>Да</td>
                </tr>
            @endif
            @if($company->fb)
                <tr>
                    <th scope="row">Facebook</th>
                    <td>Да</td>
                </tr>
            @endif
        </table>
        <a href="{{  route('edit', $company->id) }}" class="btn btn-outline-warning btn-sm"> Редактировать</a>
        <a href="{{  route('delete', $company->id) }}" class="btn btn-outline-danger btn-sm">Удалить</a>
        <a href="{{ route('convert', $company->id) }}" class="btn btn-outline-info btn-sm">Превратить в PDF</a>
</div>
@endsection