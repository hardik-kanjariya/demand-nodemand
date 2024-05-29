<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

body{
    font-family: 'Poppins', sans-serif;
    /* background: #36454F; */
    /* margin: 0; */
}
.image{
   width: 200px;
   padding-bottom: 50px;
}
.box-area{
   width: 930px;
}

.right-box{
   padding: 40px 30px 40px 40px;
}

.rounded-5{
    border-radius: 30px;
}
.p{
   font-size: 35px;

}
.p2{
   font-size: 20px;
}

/*------------ For small screens------------*/

@media only screen and (max-width: 768px){

     .box-area{
        margin: 0 10px;

     }
     .left-box{
        height:160px;
        overflow: hidden;
        padding-top: 20px;
     }
     .right-box{
        padding: 20px;
        height: 460px;
     }
     .image {
      width: 80px; 
      height: 90px; 
      padding-top: 10px;
      padding-bottom: 3px;
  }
      .p{
         font-size: 20px;
      }
      .p2{
         font-size: 10px;
      }
}
    </style>
</head>
<body>
    <!-- main --> 
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <!-- login_container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <!-- left_container -->
            <div class="col-md-6 rounded-5 d-flex justify-content-center align-item-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3 ">
                    <img src="img/ongc_logo.jpg" class=" image img-fluid rounded mx-auto d-block" >
                    <p  class="p text-white  text-center" style=" font-weight: 500;  ">Daily Production Report</p>
                    <p  class="p2 text-white  text-center" > Devloped by Infocom , Mehsana</p>
                </div>
            </div>

            <!-- right_container -->
            <div class="col-md-6  right-box">
                <div class="row align-item-center">
                
                <div class="header-text mb-4">
                     <p class="text-black fs-1 text-center" style=" font-weight: 600; ">Hello , Users</p>
                     <p class="text-black fs-3 text-center" >Welcome To ONGC DPR</p>
                </div>
                <div class="form-label"><label for="exinput" class="text-black fs-3">CPF </label></div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6"  placeholder="Enter CPF">
                </div>
                <div class="form-label"><label for="exinput" class="text-black fs-3">Password</label></div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Enter Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary text-black"><small>Remember Me</small></label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-outline-primary w-100 fs-6">Login</button>
                </div>
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>