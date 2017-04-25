@extends('front::masterpage')

@section('content')
     @include('front::modules.2026.2026-content')
     <div class="container">
        <div class="col-md-8">
            @include('front::modules.2018.2018-content')
        </div>
        <div class="col-md-4">
            @include('front::modules.2017.2017-content')
            @include('front::modules.2019.2019-content')
            @include('front::modules.2020.2020-content')
            @include('front::modules.2021.2021-content')
        </div>
    </div>


    @include('front::modules.2006.2006-content')

    @stop