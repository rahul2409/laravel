@extends('index')

@section('body')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center ">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 dark"></h5>
        </div>
        <div class="row center">
          <a href="/gallery" id="download-button" class="btn-large scale-transition">Go to Gallery</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/portfolio/AutocarBKC/5.jpg') }}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/portfolio/AutocarBKC/5.jpg') }}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container ">
    <div class="section ">
            <div class="row">
                <div class="col s5">
                    <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                </div>
                <div class="col s7">
                    <div class="gallery-wrapper">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                      <img class="materialboxed responsive-img" width="100%" src="{{ asset('images/gallery//full/portfolio-1.jpg') }}">
                    </div>
                </div>
            </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/portfolio/AutocarBKC/5.jpg') }}" alt="Unsplashed background img 3"></div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/materialize.js') }}"></script>
  <script src="{{ asset('js/init.js') }}"></script>
    <script>  
        $(document).ready(function(){
            $('.materialboxed').materialbox();
    });
    </script>
  @endsection
