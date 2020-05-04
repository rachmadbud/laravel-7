@extends('layouts.app')


@section('content')
<form method="post" action="/users/tambah">
    @csrf

    <select name="id_saudara" id="" class="form-control select2">
        <option value="{{$user->id}}">{{$user->namapanjang}}</option>
    </select>
    
    <input type="text" name="namasaudara" placeholder="nama saudara" />

    <button type="submit">Send</button>
</form>
@endsection