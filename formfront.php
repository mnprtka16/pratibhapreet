<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Query</title>
    <style>
        
    form{
        margin-top: 20px;
        justify-content: center;
    }
    #icon:hover
{
  transform: rotate(360deg);
  transition: 1s ease all;
}
#icon1:hover
{
  transform: rotate(360deg);
  transition: 1s ease all;
}
#icon2:hover
{
  transform: rotate(360deg);
  transition: 1s ease all;
}
#icon3:hover
{
  transform: rotate(360deg);
  transition: 1s ease all;
}
    </style>
</head>
<body>
    <!---------Nav Start---->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <div class="container-fluid">
      <img src="pics/logo1.jpg" height="70px">
      <a class="navbar-brand" href="#" style="font-weight: 700; color:blue;">World Computers Service</a>
     
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
          <li class="nav-item" style="margin-left: 500px;">
            <b><a class="nav-link active" aria-current="page" href="index.html" style="color: blue;"id="home">Home</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link" href="index.html" style="color: blue;" id="about1">About Us</a></b>
          </li>
          <li class="nav-item">
            <b><a class="nav-link" href="index.html" style="color: blue;" id="services1">Our services</a></b>
          </li>
          <li class="nav-item">
           <b><a class="nav-link" href="index.html" style="color: blue;" id="contact1">Contact Us</a></b>
          </li>
          <li class="nav-item">
           <b><a class="nav-link" href="formfront.php" style="color: blue;" id="query">Query?</a></b>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col-12">
        <img src="pics/shop1.jpg" style="height:400px; width:1520px;">
    </div>
  </div>
  <!--------Form Start------>
        <div class="row">
            <div class="col-4">

            </div> 
            <div class="col-4" style="background:white;">
     <form action="formback.php" method="POST">
     <center>  <p style="height:100px; margin-top:10px; font-size:30px"><b>Fill The Form And Submit your Query</b></p></center>
        <input type="text" id="txt1" name="txt1" placeholder="Enter your name here" class="form-control" ><br><br>
        
        <input type="text" id="txt2" name="txt2" placeholder="Enter Phone number here" class="form-control" ><br><br>
        
        <input type="text" id="txt3" name="txt3" placeholder="Enter Email here" class="form-control" ><br><br>
        
        <input type="text" id="txt4" name="txt4" placeholder="Enter Address here" class="form-control" ><br><br>
        
        <textarea type="text" id="txt5" name="txt5" placeholder="Any Query ?"></textarea><br><br>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
            </div>
            <div class="col-4">
                
            </div>
        </div>
        <!----Contact Us---->
        <div class="container" style="margin-top: 50px;" >
            <div class="row" style="border:6px solid rgb(234, 12, 27); border-top: 0px; border-bottom: 2px solid rgb(234, 12, 27);">
             <div class="col-12">
                <h1 style="text-align: center;margin-top:10px;border:2px solid rgb(234, 15, 15); border-radius: 5px;" id="contact">Contact Us</h1>
              </div>
            
              <div class="row">
            <div class="col-md-4" style="font-size: 50px; border:6px solid rgb(7, 236, 61);margin-left: 40px; width: 600px; border-radius: 5px; border-top:2px solid rgb(11, 233, 93);margin-bottom: 20px; margin-top: 15px;border-bottom: 2px solid rgb(11, 233, 93);">
              <div class="row">
                <div class="col-12">
                 <p style="margin-top: 10px;text-align: center; font-size: 20px; font-weight: 700; border: 3px solid rgb(0, 246, 33);  border-radius: 5px; height: 60px;">Reach us</p>
                 <p style="font-size: 20px; text-align: center; ">Patel Nagar, Street no. 2,<br> Opp. Shivalik School (Malout).<br>Pin: 152107<br>Shop Name:<b>World Computers Service</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <p style="font-size: 20px; text-align: center; font-weight: 700; border: 3px solid rgb(0, 246, 33); margin-top: 50px; border-radius: 5px; height: 60px;"> Connect With Us</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12" style="margin-top: 30px; border: 2px solid green; background: green;">
               <a href="https://api.whatsapp.com/send/?phone=" target="blank" style="color: white; margin-left: 100px;"><i class="fa fa-whatsapp" aria-hidden="true" id="icon"></i></a> 
               <a href="https://www.facebook.com/" target="blank" style="color: white; margin-left: 50px;"><i class="fa fa-facebook" aria-hidden="true" id="icon1"></i></a>
               <a href="mailto:happysingla0099@gmail.com" target="blank" style="color: white; margin-left: 50px;"><i class="fa fa-envelope" aria-hidden="true" id="icon2"></i></a>
               <a href="tel:+917707821075" target="blank" style="color: white; margin-left: 50px;"><i class="fa fa-phone" aria-hidden="true" id="icon3"></i></a> 
               </div>
               </div>
               </div>
            <div class="col-md-4" style="border:6px solid rgb(176, 193, 24); margin-left: 20px; width: 600px; border-radius: 5px; border-top: 2px solid rgb(191, 191, 41); margin-bottom: 20px; border-bottom: 2px solid rgb(191, 191, 41); margin-top: 15px;">
              <div class="row">
                <div class="col-12">
              <b><p style="font-size:20px; margin-top: 10px; border:3px solid  rgb(191, 191, 41); text-align: center; height: 60px; border-radius: 5px;">On Map</p></b>
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.664486366898!2d74.48831641507292!3d30.189576781829736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39171174e0b2bdbd%3A0x180cc5dbcbbc940c!2sworld%20computer%20service!5e0!3m2!1sen!2sin!4v1681175764369!5m2!1sen!2sin" width="576" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="Mframe"></iframe>
              </div>
            </div>
            </div>
          </div>
            </div>
          </div>
<marquee style="color:black">copyright@2023 World Computers Service. All Rights Reserved </marquee>
              
    

</body>
</html>
