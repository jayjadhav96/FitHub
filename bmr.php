<?php
  define("TITLE", "Fithub - BMR Calculator");
 ?>

 <?php include("includes/header.php") ?>

 <section id="calculator">
       <div class="container">
         <h2>BMR Calculator</h2>

         <div id="bmrinput" class="col-md-3">
               <label for="age">Enter Your Age</label>
               <input type="number" placeholder="age" name="email" class="form-control" id="age" value="" required>
               <br>
               <label for="height">Enter Your Height in cms</label>
               <input type="number" placeholder="height" name="email" class="form-control" id="height" value="" required>
               <br>
               <label for="weight">Enter Your Weight in KGs</label>
               <input type="number" placeholder="weight" name="email" class="form-control" id="weight" value="" required>
               <br>
               <input type="radio" id="male" name="gender" value="male">
               <label for="male">Male</label>
               <br>
               <input type="radio" name="gender" id="female" value="female">
               <label for="female">Female</label>
               <br>
               <br>
               <button type="submit" id="button" class="btn btn-outline-success" name="button">Calculate</button>
               <br>
               <br>
               <span class="bmr_result"></span>
         </div>
       </div>

     </section>





 <?php include("includes/footer.php") ?>
