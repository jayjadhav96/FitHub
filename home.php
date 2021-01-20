<?php
  define("TITLE", "Fithub - Home");
 ?>

 <?php include("includes/header.php"); ?>

<section id="stage">

  <img src="img/stage-fithub.jpg" alt="cover">

</section>

<section id="kudo-caption">
  <div class="content">
    <h3>KUDOS</h3>
    <p>&ldquo;All you need fitness for Healthy and Great Life&rdquo;</p>
  </div>
</section>

<section id="home-body">
  <div class="container">
    <h3 class="subhead">What we serve</h3>
    <div class="home-body-info col-lg-9 offset-lg-1">
      <h3>BMR Calculator</h3>
      <p>
        Basal Metabolic Rate is the number of calories required to keep your body functioning at rest. BMR is also known as your body's metabolism;
        therefore, any increase to your metabolic weight, such as exercise, will increase your BMR. To get your BMR, simply input your height, gender, age and weight below.
      </p>
      <a class="info-button" href="bmr.php">Calculate</a>
    </div>

    <hr>


    <!-- Basic Exercises  -->
    <div class="home-body-info col-lg-9 offset-lg-1">
      <h3>Basic Exercises</h3>
      <p>
        We're providing different basic exercises that you should do on daily basis. That will help you for incraesing the strenght of your body.
        <br> For further information get our eBooks by clicking the button given below.
      </p>
      <a class="info-button" href="basic-exercises.php">Get More</a>
      <div class="modal-form">
        <!-- <button type="button" class="info-button" data-toggle="modal" data-target="#staticBackdrop1">Get Ebook</button> -->


        <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Basic Exercises</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <p>Fill Following details to get Ebook</p>
              <div class="modal-body offset-lg-2">

                <form  action="ebooks/basic-exercise.php" method="post">
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


    </div>
    <hr>

    <!-- Surya Namaskar -->
    <div class="home-body-info col-lg-9 offset-lg-1">
      <h3>Surya Namaskar</h3>
      <p>
        Surya Namaskar is the exercise which includes some sort of 12 exercises, Which tends to you for fit body and health. We are providing some information about steps whith some precautions. We think you will like it.
        For getting Ebook by clicking the button below.
      </p>
      <a class="info-button" href="surya-namaskar.php">Get More</a>
      <div class="modal-form">
        <!-- <button type="button" class="info-button" data-toggle="modal" data-target="#staticBackdrop2">Get Ebook</button> -->

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
    </div>

    <hr>


    <!-- Yoga -->
    <div class="home-body-info col-lg-9 offset-lg-1">
      <h3>Yoga</h3>
      <p>
        As you know exercise is so important to our health. Yoga is the thing you can perform in your home as well without lifting any extenal weight. We're providing some information for different yoga types.
        <br> For further information download our eBooks by clicking the links given below.
      </p>
      <a class="info-button" href="yoga.php">Get More</a>
      <div class="modal-form">
        <!-- <button type="button" class="info-button" data-toggle="modal" data-target="#staticBackdrop3">Get Ebook</button> -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop3" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yoga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <p>Fill Following details to get Ebook</p>
              <div class="modal-body offset-lg-2">

                <form  action="ebooks/yoga.php" method="post">
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
    </div>
    <hr>

    <!-- Joint Pains -->
    <div class="home-body-info col-lg-9 offset-lg-1">
      <h3>Joint Pains</h3>
      <p>
        Joint Pain is the major problem in our society. Mostly it founding in older people and it is least curable, so we tried to solve the problem of joint pain with doing different exercises. The exercises will not get more than 15 minutes each. You have to perform it on daily basis. <br>
              for further information click the link given below.
      </p>
      <a class="info-button" href="joint-pain.php">Get More</a>
      <div class="modal-form">
        <!-- <button type="button" class="info-button" data-toggle="modal" data-target="#staticBackdrop4">Get Ebook</button> -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop4" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Joint Pains</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>
              <p>Fill Following details to get Ebook</p>
              <div class="modal-body offset-lg-2">

                <form  action="ebooks/joint-pain.php" method="post">
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
    </div>
  </div>
</section>







<?php include("includes/footer.php"); ?>
