@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">

        <div class="text-center text-white">
            <h1>ねこ動画まとめ × 癒し</h1>
        </div>

    </div>
    
    <div class="text-right">

        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif

    </div>
    
        @include('users.users', ['users'=>$users])

@endsection