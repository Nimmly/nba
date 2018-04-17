@extends('layouts.master')

@section ('content')

{{ $player->first_name}}<br>
{{ $player->last_name}}<br>
{{ $player->email}}
<a href="{{ route('single-team', ['id' => $player->team->id]) }}">{{ $player->team->name}}
@endsection