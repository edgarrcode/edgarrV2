<div class="container">
  <div class="row footer">
    <p>&copy; 2006-2013. Thanks for visiting. <span id="dia"></span>!</p>
  </div><!-- /footer -->
</div>

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="assets/js/respond.js"></script>
    <!-- DateFooter -->
    <script>
        var d = new Date();
        var weekday=new Array(7);
        weekday[0]="Enjoy your Sunday";
        weekday[1]="Happy Monday";
        weekday[2]="Happy Tuesday";
        weekday[3]="Happy Wednesday";
        weekday[4]="Happy Thursday";
        weekday[5]="Happy Friday";
        weekday[6]="Enjoy your weekend";
        document.getElementById("dia").innerHTML=weekday[d.getDay()];
    </script>

    <!-- Remove preload class from body -->
    <script type="text/javascript">
    $(function cleanBody(){
        var body = $('body');
        if ( body.is('.preload') ){
            body.removeClass('preload');
        } else {
            setTimeout(cleanBody, 500);
        }
    });
    </script>
    
    <!-- googleAnalytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-42514686-1', 'edgarr.com');
      ga('send', 'pageview');

    </script>


    </body>
</html>