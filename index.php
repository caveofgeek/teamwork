<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruk-Com Develop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/onepage-scroll.css" rel="stylesheet">
    <link href="css/dev.css" rel="stylesheet">
    <!--<link rel="stylesheet/less" type="text/css" href="css/dev.less" />-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#s1">SECTION 1</a></li>
            <li><a href="#s2">SECTION 2</a></li>
            <li><a href="#s3">SECTION 3</a></li>
            <li><a href="#s4">SECTION 4</a></li>
            <li><a href="#s5">SECTION 5</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="wrapper">
      <div class="main">
        <section id="s1"></section>
        <section id="s2"></section>
        <section id="s3"></section>
        <section id="s4"></section>
        <section id="s5"></section>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.9.1.min.js" type="text/javascript" ></script>
    <script src="js/jquery.onepage-scroll.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Less compiler  -->
    <script src="js/less.js" type="text/javascript"></script>
    <script>
      $(document).ready(function(){
        var menu = $("nav.navbar ul.nav li a")
        $(".main").onepage_scroll({
          sectionContainer: "section",
          responsiveFallback: 600,
          loop: true,
          afterMove: function(index) {
              if (index == 2) menu.addClass("inverse")
              else menu.removeClass("inverse");
            }
        });

        $('a[href*=#]:not([href=#])').click(function() {
          event.preventDefault();
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              var moveTo = parseInt(target.attr("id").replace('s',''));
              $(".main").moveTo(moveTo);
              $("ul.nav").each(function(){
                $(this).find('li').each(function(){
                  $(this).removeClass("active");
                });
              });
              $(this).parent().addClass("active");
              return false;
            }
          }
        });
      });
    </script>
  </body>
</html>