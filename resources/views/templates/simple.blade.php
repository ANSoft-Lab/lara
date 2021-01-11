@extends('base')

@section('content')
    <div class="main">
        @pageblocks($page->content)
    </div>
@endsection
