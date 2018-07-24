@extends('frontend.layout')

@section('css')
    <link rel="stylesheet" href="frontend/dist/css/index.css">
@endsection

@section('content')
    <!-- Pic 1 -->
    <section class="pic" id="pic1">
        <img src="frontend/dist/img/home_1.png">
        <div class="text">VIETNAM'S PIONEERING INBOUND<br>HOSPITALITY GROUP</div>
    </section>
    <!-- /#pic1 -->

    <!-- Pic 2 -->
    <section class="pic" id="pic2">
        <img src="frontend/dist/img/home_2.png">
        <div class="text-1">TRAVEL WITH US</div>
        <div class="link"><a href="/bus"><button>BON BON CITY TOUR</button></a></div>
        <!-- <div class="text-2"><span class="inner">BON BON CITY TOUR</span></div> -->
    </section>
    <!-- /#pic3 -->

    <!-- Pic 3 -->
    <section class="pic" id="pic3">
        <img src="frontend/dist/img/home_3.png">
        <div class="text-1">EXPLORE WITH US</div>
        <div class="link"><a href="/tour"><button>OPENSEA'S HANOI RETREAT</button></a></div>
        <!-- <div class="text-2"><span class="inner">OPENSEA'S HANOI RETREAT</span></div> -->
    </section>
    <!-- /#pic3 -->

    <!-- About us -->
    <section class="about">
        <div class="header_1">ABOUT US</div>
        <div class="underline"></div>
        <div class="content">OPENSEA is a young, dynamic travel company that provide services catering to inbound tourist's (foreign countries to Vietnam) most popular demands: dining, accommodation, transportation, entertainment experiences. Starting with BonBon City Tour and Vietnam Rewind Experiential Tours, we strive to provide a complete tourism value chain for middle to high class foreign customers, as well as an ecosystem for hospitality in Hanoi and further, Vietnam.</div>
        <!-- <div class="content">OPENSEA is a young, dynamic travel company that provide services catering to inbound tourist's<br>(foreign countries to Vietnam) most popular demands: dining, accommodation, transportation,<br>entertainment experiences. Starting with BonBon City Tour and Vietnam Rewind Experiential<br>Tours, we strive to provide a complete tourism value chain for middle to high class foreign<br>customers, as well as an ecosystem for hospitality in Hanoi and further, Vietnam.</div> -->
    </section>
    <!-- /.about -->
@endsection

@section('inline-js')
    <!-- jQuery -->
    <script src="frontend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
    <script src="frontend/dist/js/data.js"></script>
    <script src="frontend/dist/js/main.js"></script>
    <!-- UI -->
    <script src="frontend/dist/js/ui.js"></script>
@endsection