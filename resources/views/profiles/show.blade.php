@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>
                {{ $profileUser->name }}
                <small>Since {{ $profileUser->created_at->diffForHumans() }}</small>
            </h1>
        </div>

        @foreach ($catalogs as $catalog)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="level">
                       <span class="flex">
                            <a href="{{ route('profile', $catalog->creator) }}">{{ $catalog->creator->name }}</a> posted:
                            <a href="{{ $catalog->path() }}">
                                {{ $catalog->title }}</a>
                       </span>

                        <span>{{ $catalog->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <div class="panel-body">
                    {{ $catalog->description }}
                </div>
            </div>
        @endforeach

        {{ $catalogs->links() }}
    </div>
@endsection