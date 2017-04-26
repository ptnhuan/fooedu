@extends('front::layout.masterpage')

@section('content')
@include('front::modules.2026.2026-content')
<div class="container">
    <div class="col-md-8">
       @include('front::modules.2031.2031-content')
    </div>
    <div class="col-md-4">

        @include('front::modules.2032.2032-content')

    </div>
</div>
@include('front::modules.2006.2006-content')

@stop
