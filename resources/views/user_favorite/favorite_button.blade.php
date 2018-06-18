    @if (Auth::user()->is_favoriting($user->id))
        {!! Form::open(['route' => ['user.unfavorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('UnFavorite', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
