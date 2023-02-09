<?php
require_once 'header.php';
require_once 'navigation.php';
?>

<!-- Contact start  -->
<main class="mt-5">
  <div class="container">
    <h2 class="h2-responsive fw-bold text-center my-2">Contact Us</h2>
    <p class="text-center w-responsive mx-auto mb-1">Welcome to the Contact List for the Students of Earth Uni College</p>
  
    <!--Section: Contact v.2-->
<section class="mb-4">

  <div class="row mt-5">

      <!--Grid column-->
      <div class="col-md-6 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

              <!--Grid row-->
              <div class="row mt-2">

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                        <label for="name" class="">Your name</label>
                          <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
                      </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->
                  <div class="col-md-6">
                      <div class="md-form mb-0">
                        <label for="email" class="">Your email</label>
                          <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
                      </div>
                  </div>
                  <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row mt-2">
                  <div class="col-md-12">
                      <div class="md-form mb-0">
                        <label for="subject" class="">Subject</label>
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row mt-2">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form">
                        <label for="message">Your message</label>
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-center text-md-left mt-2">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
          </div>
          <div class="status"></div>
      </div>

      <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.750472150854!2d79.86961761406819!3d6.920405394999753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2590ad7eeb5ef%3A0x3cc4075b5c5bfb1!2sEarth%20University%20College!5e0!3m2!1sen!2slk!4v1666943175362!5m2!1sen!2slk" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>

</section>
</div>
</main>
<!-- Contact end -->
<?php
require_once 'footer.php';
?>