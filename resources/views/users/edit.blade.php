@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="edit/{{ $user->id }}">
        @method('PATCH')
        @csrf
    
        <input type="text" name="namapanjang"  value="{{ $user->namapanjang }}" />
    
        <button type="submit">Send</button>
    </form>
</div>
@endsection