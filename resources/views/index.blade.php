@extends ('layouts.master')

@section ('content')
<div>
    <ul>
@foreach($teams as $team)
    <li><a href="{{route('single-team', ['id'=>$team->id])}}">{{ $team->name }}</a></li>
@endforeach
</ul>
</div>
@endsection