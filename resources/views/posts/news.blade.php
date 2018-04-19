@extends ('layouts.master')

@section ('content')
<div>
    <ul>
@foreach($news as $singleNews)
    <li><a href="{{ route('single-news', ['id'=> $singleNews->id]) }}">{{ $singleNews->title }}</a></li>
@endforeach
</ul>
</div>
@endsection