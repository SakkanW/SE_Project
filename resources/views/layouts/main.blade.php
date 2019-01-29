<!Doctype html>
<html>
<head>
<title>COUNSELING – @yield('page_title')</title>
{!! HTML::style('template/vendor/bootstrap/css/bootstrap.min.css') !!}
<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #C0E2E1;

}


#mainNav {
  border-bottom: 1px solid rgba(33, 37, 41, 0.1);
  background-color: #fff;
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

#mainNav .navbar-brand {
  font-weight: 700;
  text-transform: uppercase;
  color: #F05F40;
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
}

#mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
  color: #f05f40;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link,
#mainNav .navbar-nav > li.nav-item > a.nav-link:focus {
  font-size: .9rem;
  font-weight: 700;
  text-transform: uppercase;
  color: #212529;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link:hover,
#mainNav .navbar-nav > li.nav-item > a.nav-link:focus:hover {
  color: #F05F40;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link.active,
#mainNav .navbar-nav > li.nav-item > a.nav-link:focus.active {
  color: #F05F40 !important;
  background-color: transparent;
}

#mainNav .navbar-nav > li.nav-item > a.nav-link.active:hover,
#mainNav .navbar-nav > li.nav-item > a.nav-link:focus.active:hover {
  background-color: transparent;
}

@media (min-width: 992px) {
  #mainNav {
    border-color: transparent;
    background-color: transparent;
  }
  #mainNav .navbar-brand {
    color: rgba(255, 255, 255, 0.7);
  }
  #mainNav .navbar-brand:focus, #mainNav .navbar-brand:hover {
    color: #fff;
  }
  #mainNav .navbar-nav > li.nav-item > a.nav-link {
    padding: 0.5rem 1rem;
  }
  #mainNav .navbar-nav > li.nav-item > a.nav-link,
  #mainNav .navbar-nav > li.nav-item > a.nav-link:focus {
    color: rgba(255, 255, 255, 0.7);
  }
  #mainNav .navbar-nav > li.nav-item > a.nav-link:hover,
  #mainNav .navbar-nav > li.nav-item > a.nav-link:focus:hover {
    color: #fff;
  }
  #mainNav.navbar-shrink {
    border-bottom: 1px solid rgba(33, 37, 41, 0.1);
    background-color: #fff;
  }
  #mainNav.navbar-shrink .navbar-brand {
    color: #F05F40;
  }
  #mainNav.navbar-shrink .navbar-brand:focus, #mainNav.navbar-shrink .navbar-brand:hover {
    color: #f05f40;
  }
  #mainNav.navbar-shrink .navbar-nav > li.nav-item > a.nav-link,
  #mainNav.navbar-shrink .navbar-nav > li.nav-item > a.nav-link:focus {
    color: #212529;
  }
  #mainNav.navbar-shrink .navbar-nav > li.nav-item > a.nav-link:hover,
  #mainNav.navbar-shrink .navbar-nav > li.nav-item > a.nav-link:focus:hover {
    color: #F05F40;
  }
}

@font-face {
    font-family: 'FC Lamoon Light ver 1.00'; /*a name to be used later*/
    src: url("{{ url('template/fonts/lamoon1.ttf') }}"); /*URL to font*/
}
#lamoon {
    font-family: 'FC Lamoon Light ver 1.00';
    font-size: 200%;
}
#lamoon_low {
    font-family: 'FC Lamoon Light ver 1.00';
    font-size: 100%;
}
#lamoon_head {
    font-family: 'FC Lamoon Light ver 1.00';
    font-size: 500%;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(" {{ url('template/img/header.jpg') }}");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

.hero-image2 {
  background-image:url(" {{ url('template/img/problem.png') }}");
  height: 70%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  background-attachment: fixed;
}

.section-heading {
  margin-top: 0;
}




.relative {
    position: relative;
    left: 30px;

}

.service-box {
  max-width: 400px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.box {
    float: left;
    width: 50%;
    padding: 50px;
    height: 400px;
}
#service-box1 {
  max-width: 100px;
}


#color1 {
	background-color: #B0DBD9;
	color: #000;

}
#color2 {
	background-color: #B0DBD9;
	color: #000;
}
#color3 {
	background-color: #DFECF4;
	color: #000;
  height: 100%;
}

#home{
  float: left;
}

#home_right{
  float: right;

}
#home_center{
  text-align: center;
}



#text_right{
  text-align: right;
}

#text_center{
    text-align: center;
    color: #4CAF50;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}







</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


@yield('content')


{!! HTML::script('template/vendor/js/jquery.min.js') !!}
{!! HTML::script('template/vendor/bootstrap/js/bootstrap.min.js') !!}
</body>
</html>
