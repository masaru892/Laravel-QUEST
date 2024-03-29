@extends('layouts.app')

@section('content')

    <div class="center jumbotron bg-warning">
        <div class="text-center text-white">
            <h1>ねこ動画まとめ × 癒し</h1>
        </div>
    </div>

    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">ログイン</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn btn-primary mt-2']) !!}
            {!! Form::close() !!}

            <p class="mt-3">{!! link_to_route('signup', '新規ユーザ登録する？') !!}</p>
            
        </div>
    </div>
    
@endsection