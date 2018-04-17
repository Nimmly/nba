@extends ('layouts.master')

@section ('content')
{{ $team->name}}<br>
{{ $team->email}}<br>
{{ $team->address}}<br>
{{ $team->city}}

@if(count($team->players))
        <hr/>
        <h4>Players</h4>
        <ul class="list-unstyled">
            @foreach($team->players as $player)
                <li>
                    <p><a href="{{ route('single-player', ['id' => $player->id]) }}">{{ $player->first_name }}</a></p>
                </li>
            @endforeach
        </ul>
    @endif
@endsection