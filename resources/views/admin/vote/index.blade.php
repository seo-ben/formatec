@extends('base')
@section('title',"detail du candidat")
@section('contenu')
@foreach($candidates as $candidate)
    <div>
        <p>{{ $candidate->nom }} {{ $candidate->prenom }} : 
        @foreach($votesCount as $voteCount)
            @if($voteCount->candidate_id == $candidate->id)
                {{ $voteCount->count }} votes
            @endif
        @endforeach
        </p>
    </div>
@endforeach
@endsection