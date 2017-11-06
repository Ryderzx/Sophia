<footer class="site-footer">
          <div class="text-center">
              2017 - Ing Jonny Tovar
              <a href="#" class="go-top">
                  <i class="icon icon-level-up"></i>
              </a>
          </div>
      </footer>

 <!-- js placed at the end of the document so the pages load faster -->
 	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/bootstrap.js"></script>
    <script src="views/js/jquery-1.8.3.min.js"></script>
    <script class="include" type="text/javascript" src="views/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="views/js/jquery.scrollTo.min.js"></script>
    <script src="views/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="views/js/jquery.sparkline.js"></script>

    <script src="views/js/fancybox/jquery.fancybox.js"></script>  

    <!--common script for all pages-->
    <!--<script src="views/js/common-scripts.js"></script>-->
    
    <script type="text/javascript" src="views/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="views/js/gritter-conf.js"></script>

     <!--script for this page-->
    <script src="views/js/sparkline-chart.js"></script>    
	<script src="views/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bienvenido a Sophia!',
            // (string | mandatory) the text inside the notification
            text: 'Te damos la Bienvenida a nuestra tienda virtual Sophia',
            // (string | optional) the image to display on the left
            image: 'views/img/sophia.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
      
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


     <!--script for this page-->
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>
  
  <script>
      //custom select box


  </script>
</body>
</html>