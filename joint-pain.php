<?php
  define("TITLE", "Fithub - Joint Pain Exercises");
 ?>

 <?php include("includes/header.php"); ?>

<section id="basic-one">
  <div class="content">
    <h1>Joint Pain</h1>

    <div class="basic-body">
      <p>Joint Pain is the major problem in our society. Mostly it founding in older people and it is least curable, so we tried to solve the problem of joint pain with doing different exercises. The exercises will not get more than 15 minutes each. You have to perform it on daily basis.
        for further information click the link given below.</p>
      <p>Joint pain can be caused by injury affecting any of the ligaments, bursae, or tendons surrounding the joint. Injury can also affect the ligaments, cartilage, and bones within the joint.</p>
      <br>
      <p> <strong>We're providing different exercises for following Joint Pains : </strong>
        <ul>
          <li>Back Pain (Lower Back)</li>
          <li>Elbow Pain</li>
          <li>Knee Pain</li>
        </ul>
      </p>
    </div>

    <!-- Modal Code -->
    <div class="basic-modal basic-exc-modal">
      <p>Get more Stretching Exercises for Joint Pains. And more information.</p>
      <p>Or, Want it offline, In the form of pdf? </p>

      <div class="modal-form">
        <button type="button" class="info-button" data-toggle="modal" data-target="#staticBackdrop2">Get Ebook</button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop2" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Surya Namaskar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <p>Fill Following details to get Ebook</p>
              <div class="modal-body offset-lg-2">

                <form  action="ebooks/surya-namaskar.php" method="post">
                  <label for="name">Enter Your Name</label><br>
                  <input type="text" class="mb-4" name="name" id="name" placeholder="Name" required><br>
                  <label for="email">Enter Your Valid Email Address</label>
                  <input type="email" class="mb-5" name="email" id="email" placeholder="Email" required>
                  <div class="modal-footer">
                    <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="get-btn">Get Ebook</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
     </div> <!-- End Modal code -->

  </div>
</section>



 <?php include("includes/footer.php"); ?>
