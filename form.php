<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
      <link rel="stylesheet" href="form-styling.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <title>form registration</title>
</head>

<body>
      <div class="container">
            <form action="php/apply.php" method="POST" class="registration">
                  <h2>Register with us today!!!<i class="fa-solid fa-highlighter"></i></h2>
                  <p>Enroll now and get to enjoy your studies here at edusoma</p>

                  <h3>Personal Details</h3>
                  <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" name="full_name" id="name" required> <br>
                  </div>

                 



                  <div class="form-group radio-buttons">
                        <h6>Select Gender</h6>
                        <input type="radio" name="gender" id="male"  value="male">
                        <label for="male">Male</label> <br>

                        <input type="radio" name="gender" id="female"  value="female">
                        <label for="female">female</label> <br>

                        <input type="radio" name="gender" id="other" value="other">
                        <label for="other">prefer not to say</label> <br>
                  </div>




                  <div class="form-group">
                        <label for="dob">Date Of birth:</label>
                        <input type="date" name="date_of_birth" id="dob" required>
                  </div>




                  <div class="form-group">
                        <label for="id_number">National Id Number:</label>
                        <input type="text" name="id_number" id="id_number">
                  </div>




                  <div class="form-group">
                        <h6>Marital status(optional)</h6>

                        <label for="Marital">

                              <select name="marital_status" id="Marital">
                                    <option value="">--select status--</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">divorced</option>
                                    <option value="widowed">widowed</option>

                              </select>
                        </label>

                  </div>



<div class="contact-details">
 <h3>Contact Information</h3>
  <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
  </div>


  <div class="form-group">
      <label for="phone-number">phone-number:</label>
      <input type="text" name="phone_number" id="phone">
  </div>


  <div class="form-group">
      <label for="phone-number">Alternative phone number(optional):</label>
      <input type="text" name="alternative_number" id="alt_phone">
  </div>
</div>


<div class="address-details">
      <h3>address-details</h3>
      <div class="form-group">
            <label for="street">street/House Number:</label>
            <input type="text" name="street" id="street">
      </div>

      <div class="form-group">
            <label for="town">Town:</label>
            <input type="text" name="town" id="town">
      </div>

      <div class="form-group">
            <label for="county">State:</label>
            <input type="text" name="state" id="state">
      </div>

      <div class="form-group">
            <label for="country">Country</label>

            <select name="country" id="country">
                  <option value="select">--select country--</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="others">others</option>
            </select>
      </div>
</div>

<div class="location">
      <h3>Location Details</h3>
      <div class="form-group">
              <label for="region">Region:</label>
      <input type="text" name="region">

      <label for="">Nearest landmark:</label>
      <input type="text" name="landmark">
      </div>
    

</div>


<div class="academic-background">
      <h3> academic-background</h3>
      <div class="form-group">
            <label for="academic">Highest Level of Education:</label>
            <select name="education" id="education">
                  <option value="">--select--</option>
                  <option value="High School">High School</option>
                  <option value="degree">degree</option>
                  <option value="diploma">diploma</option>
                  <option value="Certificate">Certificate</option>
                  <option value="others">others</option>
            </select>
 
          


            <label for="year">Year of Completion:</label>
            <select name="year" id="year">
                  <option value="select">select year</option>
                  <option value="2025">2025</option>
                  <option value="2024">2024</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
            </select>

              <label for="">Institution Name:</label>
            <input type="text" name="institution_name" id="institution">


      </div>
</div>

<div class="course-selection">

      <h3>Course Selection</h3>

      <div class="form-group">

            <label for="">Course Category:</label>
            <input type="text" name="course_category" placeholder="e.g., IT, Business, Engineering">


            <label for="course">Course Selection:</label>

            <select name="course" id="course">
                  <option value="">--select--</option>
                  <option value="engineering">degree in engineering</option>
                  <option value="computer science">degree in computer science</option>
                  <option value="nursing">degree in nursing</option>
                  <option value="economics">degree in economics and statistics</option>
            </select>

               <label for="mode">Mode of Study:</label>

      <select name="study_mode" id="study_mode">
            <option value="Online">Online</option>
            <option value="Physical">Physical</option>
            <option value="Hybrid">Hybrid</option>
      </select>


         <label for="">Preferred Start Date:</label>
         <input type="date" name="start_date">
      </div>

   
</div>
    
<div class="policy">
           <input type="checkbox" name="terms" id="policy" value="accepted">

                  <label for="">Accept Terms & Conditions:</label> <br>


                  <input type="checkbox" name="privacy" id="privacy" value="accepted">

                  <label for="">Privacy Policy Agreement</label> <br>
</div>
                   

                  <div class="submit-button">

             <button class="form-button" type="submit">submit</button>

                  </div>

            
            </form>

            

            
      </div>

</body>

</html>