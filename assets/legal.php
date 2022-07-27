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
      This is a legally binding document governing the provision of the Mind BuddyBuddy our websitr. 
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
