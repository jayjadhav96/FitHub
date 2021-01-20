<?php
    define("TITLE", "Fithub - Contact");
?>

<?php
    include("includes/header.php");
?>

<section id="feature-contact">

  <div class="container">

    <div class="row">
      <div class="col-lg-4">
        <h2>Let's Talk</h2>
        <ul>
          <li>Any Query</li>
          <li>Any Improvements</li>
          <li>Any Feedback</li>
        </ul>
      </div>

      <div class="col-lg-7 offset-lg-1">
        <div class=" contact-form">
          <form class=" " action="mail.php" method="post">
            <input type="text" class="mb-3" name="name" id="name" placeholder="Name" required><br>
            <input type="email" class="mb-3" name="email" id="email" placeholder="Email" required><br>
            <input type="text" class="mb-3" name="subject" id="subject" placeholder="Subject" required><br>
            <div class="msg-box">
              <textarea name="message" id="message" placeholder="Your Message" rows="6" cols="40" required></textarea>
            </div>
            <button type="submit" name="submit">Send</button>
          </form>
        </div>
      </div>
    </div>


  </div>
</section>




<?php
    include("includes/footer.php");
?>
