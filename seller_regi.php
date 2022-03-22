<?php
 include_once 'header.php';
?>
    <style type="text/css">
    <?php
     include 'css/seller_regi.css';
    ?>
   </style> 
<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner/farmerhands.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1>Seller Registration</h1>
        <p>Be part of our growing vendors.</p>
        
      </div>
    </div>
</div>
   
<!-- END OF CAROUSEL -->


<!-- REGISTRATION -->

<form id="regForm" action="/action_page.php">
  <p class="header_form">Registration</p>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <p><input placeholder="Username" oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Email" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="First name" oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name" oninput="this.className = ''" name="lname"></p>
    <p><input placeholder="Store name" oninput="this.className = ''" name="store_name"></p>
    <p class="small text-muted mb-0"> https://www.ekadiwa.da.gov.ph/shop/[your_store]
  </div>
  <div class="tab">Addresses:
    <p><input placeholder="Address 1" oninput="this.className = ''" name="address_1"></p>
    <p><input placeholder="Address 2" oninput="this.className = ''" name="address_2"></p>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <p><input placeholder="City/Town" oninput="this.className = ''" name="city"></p>
    <p><input placeholder="Postcode/Zip" oninput="this.className = ''" name="post_code"></p>
    <p><input placeholder="Store Phone" oninput="this.className = ''" name="store_phone"></p>
  
  </div>

  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>

<?php
include_once 'footer.php';
?>

<!-- END OF REGISTRATION -->

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
