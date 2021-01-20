<?php
  define("TITLE", "Fithub - Yoga");
 ?>

 <?php include("includes/header.php"); ?>

<section id="basic-one">
  <div class="content">
    <h1>Yoga</h1>

    <div class="basic-body">
      <p>The most obvious benefit is, of course, physical. Yoga postures can help increase:
        <ul>
          <li>Flexibility</li>
          <li>Strenght</li>
          <li>Mobility</li>
          <li>Balance</li>
        </ul>
       </p>
       <p>Another key benefit of yoga is that it helps with stress. Accumulation of stress can cause your nervous system to be constantly in overdrive, making it difficult to unwind, focus, and sleep.</p>
       <p>&ldquo;Perform all the postures slowly and with control. You are not in competition    with anyone, not even yourself. You'll progress faster when you take things slowly.&rdquo;</p>
    </div>

    <!-- Modal Code -->
    <div class="basic-modal">
      <p>Get more Yoga Exercises. And more information.</p>
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

     <!-- Exercises -->
     <div class="basic-exc">
       <h3>Let's get Started!</h3>

       <div class="basic-steps">
         <h2 class="exc-head">Bridge ( Bandha Sarvangasana)</h2>
         <img class="yoga-img" src="yoga/yoga1.png" alt="yoga1">
         <h4>Steps:</h4>
         <ul>
           <li>At first, lie down on your back.</li>
           <li>After that bend or Fold your knees and keep your feet and hip distance apart on the floor. </li>
           <li>Distance should be10-12 inches from your pelvis. Along with knees and ankles in a straight line.</li>
           <li>Take your arms beside your body, and your palms should facing down.</li>
         </ul>
       </div>


     <div class="basic-steps">
       <h2 class="exc-head">Downward Dog ( Adho Mukha Svanasana)</h2>
       <img class="yoga-img" src="yoga/yoga2.png" alt="yoga2">
       <h4>Steps:</h4>
       <ul>
         <li>Stand on four limbs, such that your body forms a table-like structure.</li>
         <li>Exhale and gently lift your hips and straighten your elbows and knees. You need to ensure your body forms an inverted ‘V’.</li>
         <li>Your hands should be in line with your shoulders, and your feet in line with your hips. Make sure that your toes point outwards.</li>
         <li>Now, press your hands into the ground and lengthen your neck. Your ears should touch your inner arms, and you should turn your gaze to your navel.</li>
         <li>Hold for a few seconds, and then, bend your knees and return to the table position.</li>
       </ul>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Child Pose (Balasana)</h2>
       <img class="yoga-img" src="yoga/yoga3.png" alt="yoga3">
       <h4>Steps:</h4>
       <ul>
         <li>To start the asana first sit on knees with buttocks touching on your heels.</li>
         <li>Place your hand on thighs and palms down. </li>
         <li>While exhaling slowly bring your chest between your knees and swinging hands forward as shown in the above image.</li>
         <li>Breathe gently and hold the posture for 2 to 3 minutes.</li>
       </ul>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Easy Pose (Sukhasana)</h2>
       <img class="yoga-img" src="yoga/yoga4.png" alt="yoga4">
       <h4>Steps:</h4>
       <ul>
         <li>Sit straight with the legs stretched out in front of the body.</li>
         <li>Bend the left leg and place the left foot beneath right thigh.</li>
         <li>Similarly, bend the right leg and place the right foot beneath left thigh.</li>
         <li>Rest the outer edge of your feet on the floor.</li>
       </ul>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Warrior 1 (Virabhadrasana I)</h2>
       <img class="yoga-img" src="yoga/yoga5.png" alt="yoga5">
       <h4>Steps:</h4>
       <ul>
         <li>Take a deep breath and step your legs 4-5 feet apart.</li>
         <li>Raise your arms upwards to join both the palms right over your head.</li>
         <li>Exhale and turn the right foot outwards 90 degree to the right.</li>
         <li>Slightly turn the left foot inwards 45-60 degree to the right.</li>
       </ul>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Warrior 2 (Virabhadrasana II)</h2>
       <img class="yoga-img" src="yoga/yoga6.png" alt="yoga6">
       <h4>Steps:</h4>
       <ul>
         <li>Step your right foot to the top of your mat, and your left foot 3-4 feet behind you. Point your right toes straight forward, and your left foot about parallel to the back of your mat. Draw an imaginary line from your right toes, to right heel, to left arch.</li>
         <li>Bend your right knee so it stacks right over your right ankle. Press equally into your feet.</li>
         <li>Square your shoulders to the left side of your mat and extend your arms out wide, parallel to the ground, palms face down.</li>
         <li>Keep your torso upright, shoulders stacked on your hips.</li>
         <li>Keep your gaze straight ahead, or turn your gaze to the fingertips of your right hand. Keep your breath even as you hold for up to 60 seconds. Inhale to straighten your front leg and release the posture.</li>
       </ul>
       <p>Repeat on the other side.</p>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Triangle ( Trikonasana)</h2>
       <img class="yoga-img" src="yoga/yoga7.png" alt="yoga7">
       <h4>Steps:</h4>
       <ul>
         <li>Stand erect.</li>
         <li>Extend your arms at the shoulder level.</li>
         <li>Inhale and raises your right arm by the side of your head.</li>
         <li>Now, bend your right arms with exhaling towards the left side by keeping your body weight equally on both the feet.</li>
       </ul>
     </div>

     <div class="basic-steps">
       <h2 class="exc-head">Four Limbed Staff (Chaturanga)</h2>
       <img class="yoga-img" src="yoga/yoga8.png" alt="yoga8">
       <h4>Steps:</h4>
       <ul>
         <li>From Standing Forward Fold, step or jump both feet back 4-5 feet into a push-up   position.</li>
         <li>Spread the fingers wide apart with the middle finger pointing forward, press into the palms with the arms are straight. Tuck the tailbone under so the legs, hips and torso are one straight line. Press the crown of the head forward and with the toes tucked, press the heels back.</li>
         <li>Exhale and keep the body in a straight line as you lower down towards the floor,   holding 4-6 inches above the floor. Have a 90 degree bend in the elbows and keep the shoulders at the same height as the elbows.</li>
         <li>Breathe and hold for 1-4 breaths.</li>
         <li>To release: either inhale up to plank pose or exhale all the way down to the floor.</li>
       </ul>
     </div>

    </div>


  </div>
</section>



 <?php include("includes/footer.php"); ?>
