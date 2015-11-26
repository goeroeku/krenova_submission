@extends('layout')

@section('title', 'Masuk')

@section('content')
    <div class="row">
        <div class="lg-12" align="center" style="margin-top:20%;">
            <a class="btn btn-lg bg-blue btn-social" href="{{url('auth/facebook')}}"><i class="fa fa-facebook"></i> <span>Masuk lewat Facebook</span></a>
            <br/><br/>
            <a class="btn btn-lg bg-light-blue btn-social" href="{{url('auth/twitter')}}"><i class="fa fa-twitter"></i> <span>Masuk lewat Twitter</span></a>
        </div>
    </div>
@endsection