<footer class="w-100">
     <div class="container-fluid p-5">
         <div class="row">
             <div class="col-md-3">
                 <p class="small-og">UNB Design Studio</p>
                 <ul>
                     <li><a href="<?php echo base_url("contact-us"); ?>">CONTACT</a></li>
                     <li><a href="<?php echo base_url("about-us"); ?>">ABOUT US</a></li>
                     <!-- <li><a href="#">PRIVACY POLICY</a></li>
                     <li><a href="#">SHIPPING </a></li>
                     <li><a href="#">TERMS OF SERVICE</a></li> -->
                 </ul>
             </div>
             <div class="col-md-4">
                 <!-- <p class="small-og">SIGN UP AND SAVE</p>
                 <p class="footer-small-paragraph">Subscribe to get special offers, free giveaways, and
                     once-in-a-lifetime deals.</p> -->

                 <input type="email" class="footer-email-box" placeholder="Enter Your Email">
                 <button class="btn footer-btn" ><span class="far fa-envelope"></span></button>

                 <div class="footer-social-links mt-4">
                     <a href="https://www.instagram.com/unb_interio_official/" target="https://www.instagram.com/unb_interio_official/ " class="text-dark"><i class="fa fa-instagram c-2x"></i></a>
                     <a href="https://www.facebook.com/unbdesignstudio.design" target="https://www.facebook.com/unbdesignstudio.design" class="text-dark"><i class="fa fa-facebook-square c-2x"></i></a>
                     <a href="https://twitter.com/home" target="https://twitter.com/home" class="text-dark"><i class="fa fa-twitter c-2x"></i></a>
                     <a href="https://in.pinterest.com/sumitsharma9736410/" target="https://in.pinterest.com/sumitsharma9736410/" class="text-dark"><i class="fa fa-pinterest c-2x"></i></a>
                     <a href="https://twitter.com/home" target="https://twitter.com/home" class="text-dark"><i class="fa fa-linkedin c-2x"></i></a>
                     <a href="#" target="#" class="text-dark"><i class="fa fa-whatsapp c-2x"></i></a>
                 </div>
             </div>
             <div class="col-md-3">
                 <p class="small-og ">CONTACT US</p>
                 <p class="footer-og "><b>CAll US :</b>  +918800242774</p>
                 <p class="footer-og "><b>EMAIL ID :</b> newconcept.unb@gmail.com </p>

             </div>

             <div class="col-md-12 mt-5">
                 <div class="text-center small-og">
                     <p>&copy; 2022 UNB Design Studio All Rights Reserved</p>
                     <p>Powered by Danish</p>
                 </div>
             </div>
         </div>
     </div>
 </footer>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
 </script>
 <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/iscroll.min.js"></script>
 <script src="<?= base_url(); ?>assets/js/drawer.min.js"></script>
 <script>
     $(document).ready(function() {
         $('.drawer').drawer();
     });
        const myCarouselElement = document.querySelector('#carouselExampleControls')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
        interval: 2000
       // wrap: false
    })
 </script>

 </body>

 </html>