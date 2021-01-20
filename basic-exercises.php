<?php
  define("TITLE", "Fithub - Basic Exercises");
 ?>

 <?php include("includes/header.php"); ?>

<section id="basic-one">
  <div class="content">
    <h1>Basic Exercises</h1>

    <div class="basic-body">
      <p>As we know daily exercise is good for optimizing health. But with so many options and limitless information available, it’s easy to get overwhelmed with what works. But not to worry. We’ve got your back.</p>
      <p><em>We're providing some sort of exercises given below. That will help you to achieve great health.</em></p>
      <p>Perform them on daily basis, or 3 to 5 times a week.</p>
    </div>

    <!-- Modal Code -->
    <div class="basic-modal">
      <p>Get more about Basic Exercises.</p>
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
    </div>

    <!-- Exercises -->
    <div class="basic-exc">
      <h3>Let's get Started!</h3>

      <!-- Jumpping Jack -->
      <div class="basic-steps">
        <h2 class="exc-head">Jumpping Jacks</h2>
        <img src="basic/jump.jpg" alt="jumpping">
        <h4>Steps:</h4>
        <ul>
          <li>Stand upright with together arms at your sides.</li>
          <li>Bend your knees slightly and jump into the air. </li>
          <li>As you jump, spread your legs to be about shoulder-width apart.
            Stretch your arms out and over your head.</li>
          <li>Jump back to starting position.</li>
          <li>Repeate 25 times</li>
        </ul>
      </div>

      <!-- Push Ups -->
      <div class="basic-steps">
        <h2 class="exc-head">Push Ups</h2>
        <img src="basic/pushup.jpg" alt="push up">
        <h4>Steps:</h4>
        <ul>
          <li>Get down on all fours, placing your hands slightly wider than your shoulders. </li>
          <li>Straighten your arms and legs. </li>
          <li>Lower your body until your chest nearly touches the floor. </li>
          <li>Pause, then push yourself back up.</li>
          <li>Repeate as per your stamina.</li>
        </ul>
      </div>

      <!-- Burpees -->
      <div class="basic-steps">
        <h2 class="exc-head">Burpees</h2>
        <img src="basic/burpee.png" alt="burpees">
        <h4>Steps:</h4>
        <ul>
          <li>Stand with your feet shoulder-width apart.</li>
          <li>Squat as deeply as you can and place your hands on the floor. Kick back into a push-up position. </li>
          <li>Do one push-up.</li>
          <li>Bring your legs back to a squat and jump up, throwing your hands above your head.</li>
          <li>Land and repeat 12 times.</li>
        </ul>
      </div>

      <!-- High Knees -->
      <div class="basic-steps">
        <h2 class="exc-head">High Knees</h2>
        <img src="basic/highknee.jpg" alt="high knees">
        <h4>Steps:</h4>
        <ul>
          <li>Stand with your feet hip-width apart. Lift up your left knee to your chest.</li>
          <li>Switch to lift your right knee to your chest. Continue the movement, alternating legs and moving at a sprinting or running pace.</li>
          <li>Repeate 30-50 times.</li>
        </ul>
      </div>

      <!-- Squats Jump -->
      <div class="basic-steps">
        <h2 class="exc-head">Squat Jumps</h2>
        <img src="basic/squatjump.jpg" alt="squat jumps">
        <h4>Steps:</h4>
        <ul>
          <li>Begin in a squat position with a step in front of you and arms bent next to your side. </li>
          <li>Jump up onto the step, swinging your arms to help. You should land in a squat position with both feet touching at the same time and keeping weight in your heels.</li>
          <li>Step down and repeat 25 times.</li>
        </ul>
      </div>

      <!-- Sit Ups -->
      <div class="basic-steps">
        <h2 class="exc-head">Sit Ups</h2>
        <img src="basic/situps.jpg" alt="sit ups">
        <h4>Steps:</h4>
        <ul>
          <li>Lie down on your back.</li>
          <li>Bend your legs and stabilize your lower body.</li>
          <li>Cross your hands to opposite shoulders, or place them behind your ears without pulling on your neck.</li>
          <li>Lift your head and shoulder blades from the ground. Exhale as you rise.</li>
          <li>Lower, returning to your starting point. Inhale as you lower</li>
          <li>Repeat 25 times.</li>
        </ul>
      </div>

      <!-- Leg Raises -->
      <div class="basic-steps">
        <h2 class="exc-head">Leg Raises</h2>
        <img src="basic/legraise.jpg" alt="leg raises">
        <h4>Steps:</h4>
        <ul>
          <li>Lie on your back, legs straight and together. </li>
          <li>Keep your legs straight and lift them all the way up to the ceiling until your butt comes off the floor. </li>
          <li>Slowly lower your legs back down till they’re just above the floor. Hold for a moment.</li>
          <li>Raise your legs back up. Repeat 20 times.</li>
        </ul>
      </div>

      <!-- Back Dips -->
      <div class="basic-steps">
        <h2 class="exc-head">Back Dips</h2>
        <img src="basic/backdips.jpg" alt="back dips">
        <h4>Steps:</h4>
        <ul>
          <li>Sit on the edge of the chair and grip the edge next to your hips. </li>
          <li>Your fingers should be pointed at your feet. Your legs are extended and your feet should be about hip-width apart with the heels touching the ground. Look straight ahead with your chin up.</li>
          <li>Press into your palms to lift your body and slide forward just far enough that your behind clears the edge of the chair.</li>
          <li>Lower yourself until your elbows are bent between 45 and 90 degrees.</li>
          <li>Slowly push yourself back up to the start position and repeat. Control the movement throughout the range of motion.</li>
          <li>Begin with 10 repetitions and work up to 25 repetitions over several weeks.</li>
        </ul>
      </div>

      <!-- Plank -->
      <div class="basic-steps">
        <h2 class="exc-head">Plank</h2>
        <img src="basic/plank.jpg" alt="Plank">
        <h4>Steps:</h4>
        <ul>
          <li>Position your elbows directly beneath your shoulders.</li>
          <li>Make and maintain a straight body line from head to heels.</li>
          <li>Squeeze your butt and the fronts of your thighs.</li>
          <li>Brace your abs like you're going to take a punch.</li>
          <li>6.	Keep it for 1 minute.</li>
        </ul>
      </div>

    </div>
  </div>
</section>



 <?php include("includes/footer.php"); ?>
