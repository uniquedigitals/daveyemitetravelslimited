
@extends('layouts.app')
@section('content')

<livewire:breadcrumb title="404 Error"  image="https://img.freepik.com/free-vector/404-error-with-landscape-concept-illustration_114360-7898.jpg"/>

        <!--====== Start Gallery Section ======-->
        <section class="gallery-area pt-100 pb-70">
            <div class="container" style="text-align: center" >
                <div class="row" >
                   <h2 style="font-size: 30vw; color: rgb(204, 21, 21)">404</h2>
                    <p>The resources is currently unavailable on the website</p>
                </div>
                <a href="/" class="main-btn secondary-btn">Return Home<i class="fas fa-paper-plane"></i></a>
            </div>
        </section><!--====== End Gallery Section ======-->
        @endsection
