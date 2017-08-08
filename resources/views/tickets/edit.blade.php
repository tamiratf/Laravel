@extends('master')

@section('title', 'Edit a Ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form method="post" class="form-horizontal">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">
                        {{$error}}
                    </p>
                @endforeach

                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend> Edit ticket </legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label"> Title </label>
                        <div class="col-lg-10">
                            <input type="text" id="title" class="form-control" name="title" value="{!! $ticket->title !!}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea type="text" id="title" class="form-control text-justify" name="content" rows="3" >
                                {!! $ticket->content !!}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-lg-offset-4">
                        <label>
                            <input type="checkbox" name="status" checked = "{!! !$ticket->status?"":"checked"!!}" > Close this ticket?
                        </label>
                    </div
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="{!! action('TicketsController@show', $ticket->slug) !!}" class="btn btn-info">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection