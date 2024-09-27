<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smst1yv.io - Admin Panel</title>
    {{--    <script src="/public/assets/vendor/ckeditor/ckeditor.js"></script>--}}
    {{--    <script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icomoon@1.0.0/style.min.css">

    <link href="{{asset('_assets/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('_assets/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->
    @stack('css')



    <!-- Core JS files -->

    <script src="{{asset('_assets/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('_assets/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('_assets/js/app.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
    <!-- /theme JS files -->
    <script src="{{asset('_assets/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>

    <script src="{{asset('_assets/js/app.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('_assets/global_assets/js/demo_pages/form_select2.js')}}"></script>


    <script src="{{asset('_assets/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
    <!-- /theme JS files -->


    <!--    custom-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{asset('js/deleteform.js')}}"></script>
    <script src="{{asset('js/checkbox.js')}}"></script>
    <meta name="csrf" content="{{csrf_token()}}">


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    @stack('js')

</head>
<style>
    #calendar{
        margin-left: 15px;
        margin-right: auto;
        margin-top: 15px;
        width: 320px;
        font-family: 'Lato', sans-serif;
    }
    #calendar_weekdays div{
        display:inline-block;
        vertical-align:top;
    }
    #calendar_content, #calendar_weekdays, #calendar_header{
        position: relative;
        width: 320px;
        overflow: hidden;
        float: left;
        z-index: 10;
    }
    #calendar_weekdays div, #calendar_content div{
        width:40px;
        height: 40px;
        overflow: hidden;
        text-align: center;
        background-color: #FFFFFF;
        color: #787878;
    }
    #calendar_content{
        -webkit-border-radius: 0px 0px 12px 12px;
        -moz-border-radius: 0px 0px 12px 12px;
        border-radius: 0px 0px 12px 12px;
    }
    #calendar_content div{
        float: left;
    }
    #calendar_content div:hover{
        background-color: #F8F8F8;
    }
    #calendar_content div.blank{
        background-color: #E8E8E8;
    }
    #calendar_header, #calendar_content div.today{
        zoom: 1;
        filter: alpha(opacity=70);
        opacity: 0.7;
    }
    #calendar_content div.today{
        color: #FFFFFF;
    }
    #calendar_header{
        width: 100%;
        height: 37px;
        text-align: center;
        background-color: #FF6860;
        padding: 18px 0;
        -webkit-border-radius: 12px 12px 0px 0px;
        -moz-border-radius: 12px 12px 0px 0px;
        border-radius: 12px 12px 0px 0px;
    }
    #calendar_header h1{
        font-size: 1.5em;
        color: #FFFFFF;
        float:left;
        width:70%;
    }
    i[class^=icon-chevron]{
        color: #FFFFFF;
        float: left;
        width:15%;
        border-radius: 50%;
    }

    .clock {
        position: absolute;
        margin: auto;
        top: 1rem;
        left: 33rem;
        right: 0;
        bottom: 0;
        height: 400px;
        width: 400px;
        background-color: #fff;
        border-radius: 50%;
        border: 24px solid #DF554C;
        background-image:
            radial-gradient(circle at center, #507D9C 8px, transparent 8px),
            radial-gradient(circle at center, white 50%, transparent 50%, transparent 65%, white 65%),
            linear-gradient(to right, transparent 50%, #507D9C 50%, transparent 51%),
            linear-gradient(to bottom, transparent 50%, #507D9C 50%, transparent 51%),
            linear-gradient(-30deg, transparent 50%, #507D9C 50%, transparent 51%),
            linear-gradient(30deg, transparent 50%, #507D9C 50%, transparent 51%),
            linear-gradient(60deg, transparent 50%, #507D9C 50%, transparent 51%),
            linear-gradient(-60deg, transparent 50%, #507D9C 50%, transparent 51%);
    }

    .hour-hand {
        position: absolute;
        height: 80px;
        width: 8px;
        margin: auto;
        top: -20%;
        left: 0;
        bottom: 0;
        right: 0;
        border-radius: 4px;
        background-color: #507D9C;
        transform-origin: bottom;
        transform: rotate(0deg);
    }

    .minute-hand {
        position: absolute;
        height: 120px;
        width: 8px;
        margin: auto;
        top: -30%;
        left: 0;
        bottom: 0;
        right: 0;
        border-radius: 4px;
        background-color: #507D9C;
        transform-origin: bottom;
        transform: rotate(90deg);
    }

    .second-hand {
        position: absolute;
        height: 120px;
        width: 2px;
        margin: auto;
        top: -30%;
        left: 0;
        bottom: 0;
        right: 0;
        border-radius: 4px;
        background-color: #507D9C;
        transform-origin: bottom;
        transform: rotate(180deg);
    }


</style>

<body>

<!-- Main navbar -->

<!-- /main navbar -->






<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

        <!-- Sidebar content -->
        <div class="sidebar-content" style="box-shadow: 3px -1px 10px 0px rgba(0,0,0,0.75);
-webkit-box-shadow: 3px -1px 10px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 3px -1px 10px 0px rgba(0,0,0,0.75);">

            <!-- User menu -->
            @include('admin.includes.user-menu')
            <!-- /user menu -->


            <!-- Main navigation -->
            <div class="sidebar-section">
                <ul class="nav nav-sidebar" data-nav-type="accordion">


                    <!-- Layout -->
                    @include('admin.includes.menu')
                    <!-- /layout -->

                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Content area -->
            <div class="content">

                @include('admin.includes.page-header',['title'=>$title ?? ''])

                @yield('content')


                <!-- //content bura -->
            </div>
            <!-- /content area -->


            <!-- Footer -->
            @include('admin.includes.footer')

            <!-- /footer -->

        </div>
        <!-- /inner content -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
<script>
    $(function(){function c(){p();var e=h();var r=0;var u=false;l.empty();while(!u){if(s[r]==e[0].weekday){u=true}else{l.append('<div class="blank"></div>');r++}}for(var c=0;c<42-r;c++){if(c>=e.length){l.append('<div class="blank"></div>')}else{var v=e[c].day;var m=g(new Date(t,n-1,v))?'<div class="today">':"<div>";l.append(m+""+v+"</div>")}}var y=o[n-1];a.css("background-color",y).find("h1").text(i[n-1]+" "+t);f.find("div").css("color",y);l.find(".today").css("background-color",y);d()}function h(){var e=[];for(var r=1;r<v(t,n)+1;r++){e.push({day:r,weekday:s[m(t,n,r)]})}return e}function p(){f.empty();for(var e=0;e<7;e++){f.append("<div>"+s[e].substring(0,3)+"</div>")}}function d(){var t;var n=$("#calendar").css("width",e+"px");n.find(t="#calendar_weekdays, #calendar_content").css("width",e+"px").find("div").css({width:e/7+"px",height:e/7+"px","line-height":e/7+"px"});n.find("#calendar_header").css({height:e*(1/7)+"px"}).find('i[class^="icon-chevron"]').css("line-height",e*(1/7)+"px")}function v(e,t){return(new Date(e,t,0)).getDate()}function m(e,t,n){return(new Date(e,t-1,n)).getDay()}function g(e){return y(new Date)==y(e)}function y(e){return e.getFullYear()+"/"+(e.getMonth()+1)+"/"+e.getDate()}function b(){var e=new Date;t=e.getFullYear();n=e.getMonth()+1}var e=480;var t=2013;var n=9;var r=[];var i=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var o=["#16a085","#1abc9c","#c0392b","#27ae60","#FF6860","#f39c12","#f1c40f","#e67e22","#2ecc71","#e74c3c","#d35400","#2c3e50"];var u=$("#calendar");var a=u.find("#calendar_header");var f=u.find("#calendar_weekdays");var l=u.find("#calendar_content");b();c();a.find('i[class^="icon-chevron"]').on("click",function(){var e=$(this);var r=function(e){n=e=="next"?n+1:n-1;if(n<1){n=12;t--}else if(n>12){n=1;t++}c()};if(e.attr("class").indexOf("left")!=-1){r("previous")}else{r("next")}})})
</script>
<script>
    function updateClock(hours, minutes, seconds) {
        var hourDegrees = (hours % 12) * 30 + (minutes / 60) * 30;
        var minuteDegrees = minutes * 6 + (seconds / 60) * 6;
        var secondDegrees = seconds * 6;

        $('.hour-hand').css({
            'transform': `rotate(${hourDegrees}deg)`
        });

        $('.minute-hand').css({
            'transform': `rotate(${minuteDegrees}deg)`
        });

        $('.second-hand').css({
            'transform': `rotate(${secondDegrees}deg)`
        });
    }

    function setClockWithCurrentTime() {
        var date = new Date();

        var hours = date.getHours();
        var minutes = date.getMinutes();
        var seconds = date.getSeconds();

        updateClock(hours, minutes, seconds);
    }

    setClockWithCurrentTime();
    setInterval(setClockWithCurrentTime, 1000);
</script>


</body>
</html>
