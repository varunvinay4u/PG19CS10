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
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae consectetur tenetur porro minus accusamus? Illo error ipsa ipsam id doloremque velit quae laudantium, debitis dicta vel est omnis modi quaerat?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, esse delectus? Debitis quidem atque repellat, iusto accusantium aperiam vel dolorum suscipit minus quam incidunt tempora commodi est doloremque necessitatibus delectus.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam consectetur laborum dolore culpa eius veniam maiores esse amet ipsam, earum expedita similique porro, omnis officia. Quidem voluptate libero error perferendis.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis nemo amet mollitia est adipisci dolore at? Et repudiandae repellat necessitatibus nihil molestiae quia facere? Quos numquam tempora facere impedit unde?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ex vel, cumque earum ipsa ullam architecto ab dolore totam facilis accusamus laudantium, officia facere enim! Veniam quod sed totam omnis?
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti harum fuga, saepe animi ullam soluta vel praesentium. Asperiores reiciendis eaque ab. Molestias eveniet nostrum exercitationem assumenda recusandae ratione voluptates itaque.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam enim suscipit molestias soluta itaque magnam quasi ducimus, ex similique earum laudantium eos, neque repellat? Nemo facere quis porro! Ut, earum.
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
