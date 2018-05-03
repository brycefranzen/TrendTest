@extends('main')

@section('title')
  Home
@stop

@section('bodyClass')
  home-page
@stop

@section('header')
  <header>
    <img src="{{ asset('images/logo.png') }}" alt="Logo">
  </header>
@stop

@section('content')
  <div class="container">
    <section class="hero">
      <h1>
        <small>Hi, My Name Is</small>
        Robert Mayer
      </h1>
      <p>
        I'm a freelance web designer based on Earth. I have a passion for design and love to create for web and mobile devices. I consider every aspect of a project to achieve not just something that looks beautiful, but actually works and achieves its purpose.
      </p>
      <img src="{{ asset('images/scroll.png') }}" class="scroll-image" alt="scroll image">
    </section>
    <section class="consultant clearfix">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-push-1">
            <div class="number left">01</div>
            <h2>
              Design consultant
              <span>& web superhero</span>
            </h2>
            <p>
              The Pacific Railroad is, however, really divided into two distinct lines: the Central Pacific, between San Francisco and Ogden, and the Union Pacific, between Ogden and Omaha. Five main lines connect Omaha with New York.
            </p>
          </div>
          <div class="col-xs-12 col-sm-5 col-sm-push-1">
            <img src="{{ asset('images/design.png') }}" class="img-responsive" alt="Design Consultant Image">
          </div>
        </div>
      </div>
    </section>
    <section class="co-founder clearfix">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-5">
            <img src="{{ asset('images/co-founder.png') }}" class="img-responsive" alt="Design Consultant Image">
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="number right">02</div>
            <h2>
              Co-founder of the
              <span>Apple Insider</span>
            </h2>
            <p>
              The Pacific Railroad is, however, really divided into two distinct lines: the Central Pacific, between San Francisco and Ogden, and the Union Pacific, between Ogden and Omaha. Five main lines connect Omaha with New York.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
@stop

@section('scripts')
  <script>

  </script>
@stop