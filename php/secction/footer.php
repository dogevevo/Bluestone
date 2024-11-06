<div class=".container_icons_new">
		<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
	</div>

    <div class="social_icons_news">
        
                 <a href="https://wa.me/+14085914006?text=hello" target="_blank"><img src="img/icons/whatsapp.png" alt="facebook"></a>
                 <br>
                 <a href="https://wa.me/+14083144053?text=hello" target="_blank"><img style=" padding-top: 7px " src="img/icons/whatsapp.png" alt="facebook"></a>
                  
    
    </div>


<style>
	
*{box-sizing:border-box;}

.container_icons_new{
			width:95%;
			max-width:900px;
			padding:32px 64px;
			margin:auto;
			z-index: 2;
}

.social_icons_news{
			/*las imágenes usadas tienen width de 48px*/
			width:40px;
			position:fixed;
			top:50px;
			left: 0;
}

		/* Extra centrado vertical*/

.social_icons_news{
			/*border:1px solid #000;*/
			top:67%;
			height:205px;
			/*para poner height 192 deberíamos haber indicado en el reset de estilos font-size:0;*/
			margin-top:120px;
			z-index: 2;
}

.bg-black{ 
    background-color: black;
}

.secction-terms{

    color: black;
}

.terms-list {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
}

.terms-bg-section{
    padding-top: 50px;
    padding-bottom: 50px;
}
</style>
	







<!--====== Start Footer ======-->
<footer class="footer-area footer-wave pt-100 p-r z-1">
    <div class="wave-shapes">
        <img src="img/shape/wave-shape-1.png" class="w-shape one" alt="wave shape">
        <!-- <img src="img/shape/wave-shape-2.png" class="w-shape two" alt="wave shape"> -->
    </div>
    <div class="footer-wrapper text-white main-bg p-r z-1">
        <!-- <div class="shape shape-one animate-float-y"><span><img src="img/shape/tree.png" alt="Tree Image"></span></div>
        <div class="shape shape-two animate-float-y"><span><img src="img/shape/tree2.png" alt="Tree Image"></span></div> -->
        <div class="container">
            <!--====== Footer Widget ======-->
            <div class="footer-widget-area pt-55 pb-40 p-r z-1">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-about-widget mb-40 pr-lg-70 wow fadeInDown">
                            <div class="widget-content">
                                <div class="footer-logo mb-25">
                                        <a href="index.php"><img src="img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <!-- <p>Quis autem eum reprehenderit volutate 
                                    velit quam molestiae conseuatur </p> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget contact-info-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widget-content">
                                <ul class="info-list">
                                    <li><?php echo $Address?></li>
                                    <li><a href="<?php echo $MailRef?>"><?php echo $Mail?></a></li>
                                    <li><a href="tel: <?php echo $Phone?>"><?php echo $Phone?></a></li>
                                    <li><a href=""> <?php echo $Experience?> </a></li>

                                    <li><a href=""><?php echo $Payment?></a></li>
                                    <li><a href=""><?php echo $Estimates?></a></li>

                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Quick Link</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Covered</h4>
                            <div class="widget-content">
                                <h6>50 miles around</h6>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12690.739693591626!2d-121.8798755!3d37.3262904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcda25f3d06a7%3A0x2f0ce368a0e2ebac!2sBluestone%20Paint%20Inc!5e0!3m2!1ses-419!2sni!4v1712901391656!5m2!1ses-419!2sni" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="terms-bg-section p-r z-1 bg-black p">

        <div class="container">
            <div class="row">
                
                <div class="col-lg-6 col-md-6 col-sm-6 secction-terms">
                    <h3>Bluestone Painting INC.  </h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 secction-terms">
                   <ul class="terms-list ">
                        <li><a href="terms.php">TERMS OF USE PAGE</a></li>
                        <li><a href="">PRIVACY POLICY</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </section><!--====== End Counter Section  ======-->  
                       
    <!--====== Back To Top  ======-->
    <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
    <!--====== Jquery js ======-->
    <script src="vendor/jquery-3.6.0.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="vendor/popper/popper.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--====== Slick js ======-->
    <script src="vendor/slick/slick.min.js"></script>
    <!--====== Magnific js ======-->
    <script src="vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope js ======-->
    <script src="vendor/isotope.min.js"></script>
    <!--====== Imagesloaded js ======-->
    <script src="vendor/imagesloaded.min.js"></script>
    <!--====== Counterup js ======-->
    <script src="vendor/jquery.counterup.min.js"></script>
    <!--====== Waypoints js ======-->
    <script src="vendor/jquery.waypoints.js"></script>
    <!--====== Nice-select js ======-->
    <script src="vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!--====== jquery UI js ======-->
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <!--====== WOW js ======-->
    <script src="vendor/TweenMax.min.js"></script>
    <script src="vendor/jquery.wavify.js"></script>
    <!--====== WOW js ======-->
    <script src="vendor/wow.min.js"></script>
    <!--====== Main js ======-->
    <script src="js/theme.js"></script>
            
    </footer>




</body>
</html>