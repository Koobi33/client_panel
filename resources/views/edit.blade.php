@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">МЕНЮ РЕДАКТИРОВАНИЯ</h1>

    <div class="container" style="margin-top: 2em">
        <form method="post">
            @csrf
            <div class="form-group row">
                <label for="clientName" class="col-sm-2 col-form-label" >Название заведения</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="clientName" name="clientName" value="{{$company->clientName}}" placeholder="Название заведения" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lawTypeSelect" class="col-sm-2 col-form-label">Тип юр.лица</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="lawTypeSelect" name="lawTypeSelect" value="{{$company->lawTypeSelect}}">
                        <option value= ИП selected>ИП</option>
                        <option value= ООО >ООО</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lawName" class="col-sm-2 col-form-label">Название юр.лица</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lawName" name="lawName" value="{{$company->lawName}}" placeholder="Название юр.лица" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="generalName" class="col-sm-2 col-form-label">фио генерального директора</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="generalName" name="generalName" value="{{$company->generalName}}" placeholder="фио генерального директора если это ооо">
                </div>
            </div>
            <div class="form-group row">
                <label for="factAddr" class="col-sm-2 col-form-label">Фактический адрес</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="factAddr" name="factAddr" value="{{$company->factAddr}}" placeholder="Фактический адрес" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="lawAddr" class="col-sm-2 col-form-label">Юридический адрес</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lawAddr" name="lawAddr" value="{{$company->lawAddr}}" placeholder="Юридический адрес">
                </div>
            </div>
            <div class="form-group row">
                <label for="INN" class="col-sm-2 col-form-label">ИНН</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="INN" name="INN" value="{{$company->INN}}" placeholder="ИНН">
                </div>
            </div>
            <div class="form-group row">
                <label for="KPP" class="col-sm-2 col-form-label">КПП</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="KPP" name="KPP" value="{{$company->KPP}}" placeholder="КПП">
                </div>
            </div>
            <div class="form-group row">
                <label for="ORGN" class="col-sm-2 col-form-label">ОГРН или ОГРНИП</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ORGN" name="ORGN" value="{{$company->ORGN}}" placeholder="ОГРН (для ооо) или ОГРНИП (для ИП)">
                </div>
            </div>
            <div class="form-group row">
                <label for="checkAcc" class="col-sm-2 col-form-label">Расчетный счет</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="checkAcc" name="checkAcc" value="{{$company->chechAcc}}" placeholder="Расчетный счет">
                </div>
            </div>
            <div class="form-group row">
                <label for="corrAcc" class="col-sm-2 col-form-label">Корреспондентский счет</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="corrAcc" name="corrAcc" value="{{$company->corrAcc}}" placeholder="Кореспондетский счет">
                </div>
            </div>
            <div class="form-group row">
                <label for="BIK" class="col-sm-2 col-form-label">БИК</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="BIK" name="BIK" value="{{$company->BIK}}" placeholder="БИК">
                </div>
            </div>
            <div class="form-group row">
                <label for="bankName" class="col-sm-2 col-form-label">Название банка</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="bankName" name="bankName" value="{{$company->bankName}}" placeholder="Название банка">
                </div>
            </div>
            <div class="form-group row">
                <label for="phoneNumber" class="col-sm-2 col-form-label">Телефон</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="{{$company->phoneNumber}}" placeholder="Телефон" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}" placeholder="E-mail" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Социальные сети</div>
                <div class="col-sm-10">
                    @if($company->vk)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vk" value="1" name="vk" checked>
                        <label class="form-check-label" for="vk">
                            Вконтакте
                        </label>
                    </div>
                    @else
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="vk"  name="vk">
                            <label class="form-check-label" for="vk">
                                Вконтакте
                            </label>
                        </div>
                    @endif
                    @if($company->inst)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inst" value="1" name="inst" checked>
                        <label class="form-check-label" for="inst">
                            Инстаграмм
                        </label>
                    </div>
                        @else
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inst" name="inst">
                                <label class="form-check-label" for="inst">
                                    Инстаграмм
                                </label>
                            </div>
                                @endif
                        @if($company->fb)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="fb" value="1" name="fb" checked>
                                <label class="form-check-label" for="fb">
                                    Фейсбук
                                </label>
                            </div>
                        @else
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fb" name="fb">
                        <label class="form-check-label" for="fb">
                            Фейсбук
                        </label>
                    </div>
                        @endif
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Редактировать</button>
                </div>
            </div>
        </form>
    </div>
@endsection