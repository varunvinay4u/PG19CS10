<!DOCTYPE html>
<html>
<head>
  t
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body {
      padding-top: 16px;  
      text-align: center;
      font-style: arial;
      letter-spacing: 1.3px;
    }
    .container {
      height: 44rem;
      width: 40rem;
      border: 3px solid #33333399;
      border-radius: 3px;
      font-size: 20px;
      overflow: auto;
      display: inline-block;
  }
  h2{
    margin-top: 39px;
  }
  p{
    margin: 0 13px;
    color: #222;
  }
  #submit{
    padding: 3px 16px;
    font-size: 19px;
    font-weight: 500;
    margin-bottom: 13px;
  }
</style>

</head>
<body>

  <div class="container">
    <h2>Terms And Conditions</h2>
    <p>
      OVERVIEW
      This is a legally binding document governing the provision of the Mind Buddy our website.

 When you sign-up for an Account, You automatically accept the below provisions which constitute the Mind Buddy Terms and Conditions and You are legally bound by them. 
Read this document very carefully and together with our Website Terms and Conditions, Mind Buddy Privacy Policy and Data Processing Agreement.
If you are an Enterprise Client, you accept the provisions herein and any additional documentation tailored to your needs. Get in contact with us to find out more.
If you are rescheduling or cancelling an appointment, you are required to do it before 5 hrs from the scheduled time.
The user agrees, acknowledges and undertakes all the terms and conditions mentioned above
    </p> <br><br>
    <div onload="disableSubmit()">
      <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)">  I Agree Terms & Coditions <br><br>
      <input type="submit" name="submit" id="submit">
    </div>
  </div>


  
  <script>
  function disableSubmit() {
    document.getElementById("submit").disabled = true;
  }

  function activateButton(element) {
    if(element.checked) {
      document.getElementById("submit").disabled = false;
      location.href = "thankyou.html"; 
    }
    else  {
      document.getElementById("submit").disabled = true;
    }
  }
</script>
</body>
</html> 
