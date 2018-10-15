@extends("layouts.base")
@section('styles')
@parent
<link rel="stylesheet" type="text/css" href="{{asset('media/css/page.css')}}">
@endsection
@section("content")       
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{!!$obj->name!!}</div>
                 

                <div class="card-body">
                   {!!$obj->body!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection