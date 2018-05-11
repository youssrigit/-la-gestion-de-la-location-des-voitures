
<!-- header -->
    <div class="banner">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
            </div>
        </div> 
            <div class="header-bottom">
                <div class="container">
                    <div class="head-nav">
                        <span class="menu"> </span>

                            <ul>
                                <li ><a href="index.html">Home</a></li>
                                <li><a href="about.html"><?php wp_nav_menu( $args );?></a></li>
                                <div class="clearfix"> </div>
                        </ul>
                </div>
             
                <!-- script-for-nav -->
                    <script>
                        $( "span.menu" ).click(function() {
                          $( ".head-nav ul" ).slideToggle(300, function() {
                            // Animation complete.
                          });
                        });
                    </script>
                <!-- script-for-nav -->     
                    <div class="search-box">
                        <form>
                            <input type="text" name="s" class="textbox" value="search something" onfocus="this.value = '';" onblur="if
                                    (this.value == '') {this.value = 'search something';}">
                            <input type="submit" value>
                        </form>
                    </div>
                        <div class="clearfix"> </div>
                </div>
            </div>
    </div>
<!-- header -->
