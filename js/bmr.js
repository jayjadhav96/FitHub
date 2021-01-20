$(document).ready(
  $("#button").on("click", calculateBMR)
);

function calculateBMR(){
var height = parseFloat($("#height").val());
var weight = parseFloat($("#weight").val());
var age = parseFloat($("#age").val());
var gender = $("input[name='gender']:checked").val();
var BMRCalculation = 0;
if (gender == "male"){
  BMRCalculation = 10*weight + 6.25*height - 5*age + 5;
}
else{
  BMRCalculation = 10*weight + 6.25*height - 5*age -161;
}
var string = "BMR: "  + BMRCalculation + " Calories per day";
document.querySelector(".bmr_result").innerHTML = string;
}
