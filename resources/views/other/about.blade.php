@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<section id="one" class="wrapper style1">

    <div class="image fit flush">
      <!--  <img src="/images/404.png" alt="" />-->
    </div>
    <header class="special">

        <div id="fof" class="clear">
            <div class="positioned">
                <div class="hgroup clear">
                    <h2>Лалала лалал </h2>
                </div>
                <p>For Some Reason The Page You Requested Could Not Be Found On Our Server</p>
            </div>
            <p class="clear"><a class="go-back" href="javascript:history.go(-1)">&laquo; Go Back</a> <a class="go-home" href="#">Go Home &raquo;</a></p>

        </div>
    </header>
</section>



<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            <li><a href="https://www.linkedin.com/" class="icon fa-linkedin"><span class="label">Linkedin</span> </a> </li>
            <li><a href="https://github.com/SarnaKhmel" class="icon fa-github"></a><span class="label">GitHub</span> </li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
    </div>
</footer>

</body>
</html>

<script src="/resources/assets/js/jquery.min.js"></script>
<script src="/resources/assets/js/jquery.poptrox.min.js"></script>
<script src="/resources/assets/js/skel.min.js"></script>
<script src="/resources/assets/js/util.js"></script>
<script src="/resources/assets/js/main.js"></script>

@endsection