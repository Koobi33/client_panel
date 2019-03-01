@extends('layouts.app')

@section('content')

<div class="container">

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Список компаний</h6>
            @foreach($companies as $company)
            <div class="media text-muted pt-3">
                <p class="media-body pb-5 mb-0 lh-125 border-bottom border-gray" >
                    <strong class="d-block text-gray-dark" >{{$company->clientName}}</strong>
                    <span> Тел.: {{$company->phoneNumber}}</span> || <span> Добавлен: {{$company->created_at->format('d-m-Y H:i')}}</span>
                </p>
                <div class="btn-group-vertical" role="group" >
                    <a href="{{  route('company', $company->id) }}" class="btn btn-outline-success btn-sm">Просмотр</a>
                    <a href="{{  route('edit', $company->id) }}" class="btn btn-outline-warning btn-sm"> Редактировать</a>
                    <a  href="{{route('delete', $company->id)}}" class="btn btn-outline-danger btn-sm ">Удалить</a>
                </div>
            </div>
        @endforeach


</div>
</div>
    @endsection

    {{--@section('js')--}}
{{--<script>--}}
    {{--$(function(){--}}
        {{--$(".delete").on('click', function () {--}}
            {{--if(confirm("Вы действительно хотите удалить все данные об этом клиенте?")) {--}}
                {{--let id = $(this).attr("rel");--}}
                {{--$.ajax({--}}
                    {{--type: "DELETE",--}}
                    {{--url:  "{!! route('delete') !!}",--}}
                    {{--data: {_token:"{{csrf_token()}}", id:id},--}}
                    {{--complete: function () {--}}
                        {{--alert("Данные клиента удалены!");--}}
                        {{--location.reload()--}}
                    {{--}--}}
                {{--});--}}
            {{--}--}}
            {{--else {--}}
                {{--alertify.error("Удаление отменено");--}}
            {{--}--}}
        {{--})--}}
    {{--});--}}
{{--</script>--}}
{{--</div>--}}
{{--@endsection--}}