@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    @if (count($tests) > 0)
        <ul>
            @foreach ($tests as $test)
                <li>{!! link_to_route('messages.show',$test->id,['id' => $test->id]) !!}:{{ $test->content}}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('messages.create', '新規メッセージの投稿') !!}

@endsection