<footer class="footer">
                <div class="container">
                    <div class="footer__wrapper">
                        <ul>
                            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                        <p>Baloc Road, brgy san Ignacio San Pablo City, Laguna 4000</p>
                        <p>©CREATIVEVISUALDESIGNS 2022</p>
                    </div>
                </div>
             </footer>

             <?php wp_footer()?>

             <script>
                    let tl = gsap.timeline();

                    tl.from('.branding', {opacity: 0, x:'-20px', duration: 1})
                      .from('.header__nav', {opacity: 0, x:'20px', duration: 1})
                      
                    let homeBanner = gsap.timeline();
                    homeBanner.from('.homeBanner__wrapper', {opacity: 0, x:'-20px', duration: 2})
                              .from('.homeBanner__img', {opacity: 0, x:'20px', duration: 2})
                    
                    
                              let service = gsap.timeline();
                    service.from('.services__wrapper', {opacity: 0, y:'20px', duration: 4})
                              
                      


             </script>
    </body>
</html>