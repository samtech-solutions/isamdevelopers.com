
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ebook payment</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" media="all" />


  <style>
    #container {
      width: 100%;
      height: auto;
      margin-left:10px;
      margin-right:10px;
    }

    #exampleModalLabel,
    #exampleModalLongTitle,
    #exampleModalCenter {
      color: blue;
    }

    .container {
      border: none !important;
      background-color: white;
    }

    .wrapper {
      margin-top: 25px !important;
      background-color: #ffffff;
      height: 70px;
      padding: 0px 0px;
      display: flex;
      border-radius: 8px;

    }

    .modal-body p {
      text-align: left;
      color: purple;
    }

    .modal-body .fa-times-circle {
      margin-right: 20px;
      color: red;
      font-size: 25px;
    }

    .modal-body .fa-check-circle {
      margin-right: 20px;
      color: green;
      font-size: 25px;
    }

    .modal-body h4 {
      text-align: center;
      color: green !important;
    }

    .words {
      overflow: hidden;

    }

    span {
      display: block;
      height: 100%;
      padding-left: 10px;
      color: #0e6ffc;
      animation: spin_words 10s infinite;
    }

    @keyframes spin_words {
      0% {
        transform: translateY(-60%);
      }

      50% {
        transform: translateY(100%);
      }

      100% {
        transform: translateY(-170%);
      }

    }

    .footer {
      width: 100%;
      height: 30px;
      margin-left: 10px;
      background-color: black;
    }

    .plan {
      width: 400px;
      height: 350px;
      background-color: white;
      margin: 20px;
    }

    img {
      width: 310px;
      height: 200px;
      padding:5px;
    }


    h6 {
      margin-left: 10px;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      flex-direction: rows;
      width: auto;
    
    }

    a {
      text-decoration: none;
      ;
    }

    .login {
      width: 80px;
      height: 40px;
      background-color: rgb(43, 201, 12);
      border-radius: 10px;
      border: none;
      color: white;
    }

    .more {
      position: relative;
      color: blue;
      border: none;
      display: inline-block;
      background-color: white;
      cursor: pointer;
      font-size: 16px;
    }

    .logo {
      margin-top: -30px;
      width: auto;
      height: 100px;
    }
  
    /*===============SIGN IN PAGE==========*/

    .form_control {
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
    }

    .form_control.inline {
      flex-direction: row;
      align-items: center;
    }

    input,
    textarea,
    select {
      padding: 0.6rem 0.9rem;
      background-color: rgb(79, 78, 80);
      border-radius: .4rem;
      resize: none;
      color: white;
    }

    /*-----------------Viewport less than or equal to 520px----------------*/

    @media (max-width: 520px) {
      #container {
        width: 90%;
        height: auto;
        overflow: scroll;
      }

      .container {
        border: none !important;
      }

      .buttons {
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        width: 90%;
        height:300px;
        margin-left:-10px;
        overflow:scroll;
      }

      img {
        width: 250px;
        height: 150px;
      }

      .plan {
        width: 90%;
        height: 500px;
        background-color: white;
        margin-left: 50px;
      }

      a {
        margin-left: 20px;
      }

      .logo {
        margin-top: -30px;
        width: auto;
        height: 100px;
      }

      .footer {
        width: 95%;
        height: 40px;
        margin-left: 15px;
        font-size: 13px;
        background-color: black;
      }

      .plan .btn {
        width: 100px !important;
        margin-bottom:5px !important;
        margin-left:40px !important;
      }
    }
  </style>
</head>

<body>
  <div id="container" style="background-color:rgb(246, 239, 239);width:100%">

    <div class="buttons">
     
      <div class="plan">
       <!-- <h4 style="text-align:center">Starter Package Version</h4>-->
        <a style="text-decoration: none; color: rgb(56, 46, 192)" href="pay.php">

          <img src="../assets/business.jpg"></img>

          <div class="wrapper">
          
            <div class="words">
              <span>Price <b>200 KSH</b> or <b>2 USD</b> </span>
             
            </div>
          </div>
          <button class="btn btn-primary" name="pay" style="margin-left:40px;margin-bottom:-20px">Buy Now</button>
          <button class="more tooltip-test" title="Read More Information" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" style="margin-left:80px;margin-bottom:-20px"><i class="fa fa-stream" aria-hidden="true"></i></button>

        </a>
      </div>
     
    </div>
  
  </div>


  <!-- Modal for Starter Package Version -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Starter Package Version</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="payment/starter_package.php" method="POST">
          <div class="modal-body">
            <h4 style="color:red">Payment Plan</h4>
            <p>Please choose your plan!!</p>

            <input type="radio" id="monthly" name="starter" value="Monthly" required> <label for="monthly"> Monthly(100Ksh/1Usd)</label>

            <br>
            <br>
            <input type="radio" id="yearly" name="starter" value="Yearly" required> <label for="yearly"> Yearly(1200Ksh/12Usd)</label>

            <br>
            <br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>
            <button type="submit" name="save" id="save" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-save" aria-hidden="true"></i> Save </button>
          </div>

        </form>

      </div>
    </div>
  </div>
  <!-- end modal-->

  <!-- Modal for more button Starter Version -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialong-centered role=" document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLongTitle">Starter Version More Info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="payment/trial_package.php" method="POST">
          <div class="modal-body">
            <h6 style="color:purple">This is a Starter Version of the CV PLUS SYSTEM that gives our users the full access to our System.</h6>
            <h6 style="color:purple">It has Unlimited access and one enjoy the full services</h6>
            <h4 style="text-align:left">Services</h4>

            <p> <i class="fa fa-check-circle" aria-hidden="true"></i>Paid Plan</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Create login account</p>
            <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Add data to process CV</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Generate Pdf</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> 6 Pdf Designs</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Create a Job Application letter</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Create User</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Add Profile</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Edit Data</p>
            <p><i class="fa fa-check-circle" aria-hidden="true"></i> Delete Data</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>
          </div>

        </form>

      </div>
    </div>
  </div>
  <!-- end more button starter modal-->


  <script src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>