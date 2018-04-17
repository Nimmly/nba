@extends ('layouts.master')

@section ('content')

@foreach($teams as $team)
    <a href="{{route('single-team', ['id'=>$team->id])}}">{{ $team->name }}</a>
@endforeach
@endsection