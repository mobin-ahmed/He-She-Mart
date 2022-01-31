@extends('backend.master')
@section('body')
    <div class="col-sm-8 d-flex justify-content-center bg-primary ">
        <div><img src="{{url("$admin->image")}}" alt="" height="250" width="250"></div>
        <div class="m-5">
            <h3>{{$admin->user_name}}</h3>
            <p>Woner of He-Mart-Mart</p>
            <p>gmail: {{$admin->email}}</p>
            <p>mobile: {{$admin->mobile}}</p>
        </div>
    </div>

@endsection