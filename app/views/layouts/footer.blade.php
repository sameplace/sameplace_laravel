    <footer class="clearfix <% isset($footerBottom) ? $footerBottom : '' %>" @if(isset($home_page) && $home_page==true) style="background-color:#1C1C1C; height: 50px;" @endif >
    <div class="back_up"><a id="goTop" href="javascript:void(0)">^<span>Back to top</span></a></div>
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
        $('#myTab a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        });
    </script>
  </body>
</html>