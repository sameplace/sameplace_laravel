    <footer class="clearfix">
    <div class="col-xs-12 footer_content">
    <div class="col-xs-3"></div>
    <div class="col-xs-6">Copyright 2014, Sameplace</div>
    <div class="col-xs-3"></div>
    </div>
    <div class="back_up"><a id="goTop" href="javascript:void(0)">TOP</a></div>
    </footer>

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
    <script>

          $(document).ready(function() {
              $('#goTop').click(function() {
                $('html, body').stop().animate({
                   scrollTop: 0
                }, 1000, function() {
                   $('#goTop').stop().animate({
                     bottom: '-100px'    
                   }, 1000);
                });
              });
            });

        function showme(id, linkid) {
                    var divid = document.getElementById(id);
                    var toggleLink = document.getElementById(linkid);
                    if (divid.style.visibility == 'visible') {
                        toggleLink.innerHTML = 'Log in';
                        divid.style.visibility = 'hidden';
                        divid.style.opacity = '0';
                    }
                    else {
                        toggleLink.innerHTML = 'Close';
                        divid.style.visibility = 'visible';
                        divid.style.opacity = '1';
                    }
                }
                
    </script>
  </body>
</html>