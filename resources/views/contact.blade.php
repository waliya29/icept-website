@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<h1>Contact Mee</h1>
<div class="row">
  <div class="col-md-8 col-lg-8 col-xs-4">
    {!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
      {{Form::label('name', 'Name:')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name'])}}

    </div>

    <div class="form-group">
      {{Form::label('email', 'Email:')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Email'])}}

    </div>

    <div class="form-group">
      {{Form::label('message', 'Your Message:')}}
      {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Your message'])}}

    </div>
    {{form::submit('Submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

  </div>
  <div class="col-lg-8 col-md-4 col-sm-8 col-xs-4">
    <h3>Contact Details</h3>
    <div class="row">

      <div class="col-md-2">
      <i class="fa fa-map-marker"></i>
    </div>

    <div class="col-md-10">
      Plot 5, Blah BLah, Sector H-9,
      Islamabad-44000, Pakistan

    </div>

    <div class="col-md-2">
    <i class="fa fa-mobile"></i>
    </div>

    <div class="col-md-10">
    0321-4587965

    </div>

    <div class="col-md-2">
    <i class="fa fa-envelope"></i>
    </div>

    <div class="col-md-10">
  blahblah@hotmail.com

    </div>


  </div>
</div>
@endsection
