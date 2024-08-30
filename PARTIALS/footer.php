<footer>
  <div class="row" id="footer-row">
      <div class="col" id="footer-col">
          <h3>GCEK LIBRARY GOOGLE MAP</h3>
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15004.951177114173!2d83.10630481057814!3d19.914381742444927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a24ef3382020aa3%3A0x6720328dfbfd451a!2sGovernment%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1640851692727!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="col" id="footer-col-1">
          <h3>CONTACT US</h3>
          <p>CENTRAL LIBRARY<br>GCE KALAHANDI<br>AT/PO- Bandopala, Bhawanipatna<br>Dist- Kalahandi<br>Odisha<br>Pin- 766003</p>
          <div class="email-id">
              <a href="mailto:librarian@gcekbpatna.ac.in">librarian@gcekbpatna.ac.in</a>
          </div>
          <!-- <div class="email-id">
              <a href="mailto:info@gcekbpatna.ac.in">info@gcekbpatna.ac.in</a>
          </div> -->
          <p>+91 9692383708</p>
      </div>
      <div class="col" id="footer-link">
          <h3>LINKS</h3>
              <a href="index.php">Home</a><br>
              <a href="library-section.php">Library&nbsp;Section</a><br>
              <a href="library-services.php">Library&nbsp;Services</a><br>
              <a href="digital-library.php">Digital Library</a><br>
              <a href="staff-members.php">Staff&nbsp;Members</a><br>
              <a href="opac.php">OPAC</a><br>
              <a href="online-registration.php">Online&nbsp;Registration</a><br>
              <a href="e-newspaper.php">e&nbsp;-&nbsp;newspapers</a><br>
              <a href="Student-repository.php">Student&nbsp;Repository</a><br>
              <a href="request-books.php">Suggest Books</a><br>
      </div>
      <div class="col" id="footer-social">
          <h3>SOCIAL MEDIA</h3>
          <div class="social-icons">
              <i class="fab fa-facebook"></i>
              <a href="https://www.instagram.com/gcek.library/" target="blank"><i class="fab fa-instagram"></i></a>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-google"></i>
              <div class="footer-cookies">

                <?php
                $query = "SELECT * FROM opacmanual";
                $query_run = mysqli_query($con2,$query);
                ?>
                <?php
                if(mysqli_num_rows($query_run)>0){
                  foreach($query_run as $row)
                  {
                    ?>
                    <div class="download-btn"><a href="#" class="download-btn1"><i class="fa fa-download"></i></a><a class="download-btn2" id="download-btn3" href="<?php echo "CMS/src/" . $row['opac_manual_file'];?>">OPAC&nbsp;Manual</a></i></div>
                    <?php
                  }
                }
                ?>
              
              
              
              <div class="privacy"><a class="privacy2" id="privacy3" href="privacy.html">Privacy&nbsp;Policy</a></div>
              <div class="disclaimer"><a class="boat" id="My"><h4 class="disclaimer2" id="disclaimer3" href="#myModal10">Disclaimer</h4></a></div>
              </div>
              <!-- <div class="page-viewers"><div class="visitor"><h6>VIEWERS&nbsp;:</h6></div><div class="visitor-counter"><i class="fa fa-eye" id="visitor-eye"></i></div>
              
              <div id="sfc18a6jq3m3j8gcj2eapyk281d24qt2261"></div>
              <script type="text/javascript" src="https://counter7.optistats.ovh/private/counter.js?c=18a6jq3m3j8gcj2eapyk281d24qt2261&down=async" async></script>
              <noscript><a href="https://www.freecounterstat.com" title="web counter"><img src="https://counter7.optistats.ovh/private/freecounterstat.php?c=18a6jq3m3j8gcj2eapyk281d24qt2261" border="0" title="web counter" alt="web counter"></a></noscript>
              
              <div class="website-counter" id="count"></div></div> -->
              <!-- <script src="JAVASCRIPT/visitors.js"></script> -->

              


          </div>
      </div>
      <div class="modal" id="myModal10">
        <div class="modal-content">
          <div class="modal-body">
           <p class="disclaimer_content">A collection of publicly accessible, institutionally provided, donated, or publisher-managed contents may be found at CENTRAL LIBRARY GCE KALAHANDI. The vast majority of these contents are hosted by and accessed via the appropriate sources. The appropriate organisation is responsible for the authenticity, relevance, completeness, accuracy, reliability, and suitability of these contents; CENTRAL LIBRARY GCE KALAHANDI has no obligation or liability in this regard.</p>
           <span class="close" id="disclaimer_close"><button id="dis_close">OK</button></span>
          </div>
        </div>
        <script src="JAVASCRIPT/lightbox.js"></script>  
      </div>
      <hr class="footer-hr">
  <p class="copyright" id="copy">Copyrights © <script> document.write(new Date().getFullYear());</script> GOVERNMENT COLLEGE OF ENGINEERING KALAHANDI</p>
  <p class="copyright-1" id="copy-1">Website Designed & Developed by <a href="https://elitesurya4.github.io/portfolio/" id="suryanshu" target="blank">Suryanshu Patnaik </a> & <a href="https://s-2001-star.github.io/portfolio/" id="suprita" target="blank">Suprita Panda</a> (ELECTRICAL BATCH OF 2019-23) - All Rights Reserved</p>
  </div>
</footer> 
</body>
</html>