@extends('layouts.app')



@section('title', $ticket->title)

@section('content')
    <div class="row text-white">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading h2">
                    <p>#{{ $ticket->ticket_id }} - {{ $ticket->title }}</p>
                </div>

                <div class="panel-body">
                    @include('includes.flash')

                    <div class="ticket-info">
                        <p><b>Užklausos tekstas:</b>  {{ $ticket->message }}</p>
                        <p><b>Kategorija:</b> {{ $category->name }}</p>
                        <p>
                        @if ($ticket->status === 'Atidaryta')
                            <b>Būsena:</b> <span class="label label-success">{{ $ticket->status }}</span>
                        @else
                            <b>Būsena:</b> <span class="label label-danger">{{ $ticket->status }}</span>
                        @endif
                        </p>
                        <p><b>Sukurta:</b> {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>

                    <hr>

                    <div class="comments">
                        @foreach ($comments as $comment)
                            <div class="panel panel-body">
                            @if($ticket->user->id === $comment->user_id)
                                {{"default"}}
                            @else
                                {{"success"}}
                            @endif
                                <div class="panel panel-heading">
                                    {{ $comment->user->name }}
                                    <span class="pull-right">{{ $comment->created_at->format('Y-m-d') }}</span>
                                </div>

                                <div class="panel panel-body">
                                    {{ $comment->comment }}        
                                </div>
                            </div>
                        @endforeach
                    </div>
                

                    <div class="comment-form">
                        <p><b>Pridėti komentarą:</b></p>
                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Išsaugoti</button>
                                @if (Auth::user()->admin)
                                    <a class="btn btn-primary" href="{{url('tickets')}}">Atgal</a>
                                @else
                                <a class="btn btn-primary" href="{{url('my_tickets')}}">Atgal</a>
                                @endif
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection