<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>



    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  <body>

    <div class="container">

      <div id="login" style="margin:0 auto;">

          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
  @csrf
          <fieldset class="clearfix"><center>





            <img src="{{asset('images/cc.png')}}" width="300" height="100"  style="margin: 0 auto;" /></center>
            <p><span class="fontawesome-user"></span><input type="text" name="email" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
           <p> <a href="#" class="right">Forget password&nbsp?</a>

            <p><input type="submit" value="Sign In"></p>
<!--<span class="fontawesome-arrow-left"></span> -->
          </fieldset>

        </form>

         <span style="color:gray; text-align: center; ">Powered by:&nbsp&nbsp <a style="color:gray; ">Hadi Technologies</a></span>
      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>
