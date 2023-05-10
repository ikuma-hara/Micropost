@extends('layouts.app')

@section('content')
    <div class="sm:col-span-2 mt-4">
        {{-- タブ --}}
        @include('users.navtabs')
        <div class="mt-4">
            {{-- お気に入り一覧 --}}
            @include('microposts.microposts')
        </div>
    </div>
@endsection