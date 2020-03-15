@extends('layout')

@section('words_list')
    <table class="table">
        <thead class="thead-dark"  >
            <tr>
                <th>#</th>
                <th>Лакский</th>
                <th>Русский</th>
                <th>Категория</th>
                <th>Изображение</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($words_list as $item)        
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->lac}}</td>
            <td>{{$item->ru}}</td>
            <td>{{$item->category}}</td>
            <td><img src="{{$item->picture}}" alt="..." class="img-thumbnail"></td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection