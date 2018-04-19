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

<hr/>

<div>
<h4>Comments</h4>
<form method="POST" action="{{ route('comments-team', ['team_id'=> $team->id]) }}">

    {{ csrf_field() }}
        <div class="form-group">

            <label for="content">Please insert a comment</label>
            <input id = "content" type= "text" name="content" class= "form-control">
            @include('partials.error-message', ['fieldTitle' => 'content'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>

    @if(count($team->comments))
    <hr/>
    <ul class="list-unstyled">
        @foreach($team->comments as $comment)
        <li>
            <p>{{$comment->content}}</p>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endsection