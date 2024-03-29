<header class="mb-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">NekoTube</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
                @if (Auth::check())
                
                    <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('users.show','マイページ',['id'=>Auth::id()],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('movies.create','動画を登録する',['id'=>Auth::id()],['class'=>'nav-link']) !!}</li>
                        <!--↑追記-->
                @else
                
                    <li class="nav-item">{!! link_to_route('signup', '新規ユーザ登録', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                
                @endif
                
            </ul>
        </div>

    </nav>

</header>