@extends('admin.layouts.admin',['title'=>' Home'])
@section('content')

    <?php $routeName='admin.home' ?>
    <div class="container d-flex justify-content-between">

    <div id="calendar">
        <div id="calendar_header">
            <i class="icon-chevron-left" style="cursor: pointer"></i>
            <h1>
            </h1>
            <i class="icon-chevron-right" style="cursor: pointer"></i>
        </div>
        <div id="calendar_weekdays"></div>
        <div id="calendar_content"></div>
    </div>

    <div class="clock">
        <div class="hour-hand"></div>
        <div class="minute-hand"></div>
        <div class="second-hand"></div>
    </div>
    </div>
@endsection
