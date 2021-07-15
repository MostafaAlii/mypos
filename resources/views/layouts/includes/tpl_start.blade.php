<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>ORK Admin Template - Analytics Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard/img/favicon.ico')}}"/>
    <link href="{{asset('dashboard/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('dashboard/js/loader.js')}}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{asset('dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('dashboard/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    @if (App::getLocale() == 'ar')
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="{{URL::asset('dashboard/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{URL::asset('dashboard/ltr/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />-->
    @endif
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->