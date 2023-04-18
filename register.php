<!DOCTYPE html>
<html lang="en">
<head>
<!-- Design by foolishdeveloper.com -->
    <title>Sign Up</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
  
}
body{
    background-color: #080710;
}
.background{
    width: 500px;
    height:auto;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
 
    width: 90%;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,10px);
    top: 10%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 25px 25px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 45px;
    width: 90%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
form select{
    background-color: #8cadf3;
}
::placeholder{
    color: #e5e5e5;
}
.Mob-code,option{
    color: #080710;
}
.city input{
    width: 20%;
    display: inline;
    margin: 10px;
}
.Media-platform{
    width: 75%;
    height: 30px;
    color: #121213;
}
.Media-platform option{
    text-align: center;
}
.influ-plat select{
    display: inline;
    width: 30%;
    margin: 15px;
}

.Media-country{
    width: 30%;
    height: 30px;
    color: #121213;
    margin: 10px;
}
.Media-country option{
    text-align: center;
}
.influ-country{
    display: inline;
    width: 30%;
    margin: 10px;
}
.Content-category{
    width: 30%;
    height: 30px;
    color: #121213;
}
.age input{
    display: inline;
    width: 20px;
    margin:20px;
}
.Monetizing-aud input{
    display: inline-block;
    width: 20px;
}
.Monetizing-aud span{
    display: inline-block;
    width:45%;
    margin-top: 15px;

}
.currency div{
    display: inline-block;
    width: 30%;
}
.currency select{
    width: 80px;
    height: 30px;
    color: #080710;
}
.currency input{
    width: 80px;
    height: 35px;
}

.message{
    color:red;
}
button{
    margin-top: 30px;
    width: 100%;
    background-color: #9e552a;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .signup{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
select option{
    color: black;
}
select{
    color: black;
}

    </style>
</head>


<body>
   
  
<div class="container">
   <form action="registerdetail.php" method="post" enctype="multipart/form-data">
        <h3>Influencer Sign up Here</h3>
        <div class="container">
    <div class="row"> 

    <div class="col-md-6">
        <label for="">FirstName</label>
        <input type="text" class="form-control" placeholder="Enter FirstName" id="fname" name="fname">

       <label >Age</label>
        <input type="text" class="form-control" placeholder="Enter Age" id="age" name="age">

        <label>Password</label>
        <input type="password" class="form-control" placeholder=" Password" id="pass" name="pass">

          <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" id="email" name="email">

        <div class="custom-control custom-radio">
        <label>Gender:</label>
            <div class="form-check-inline" style="margin:-34px 1px 0px 108px;">
            <input type="radio" class="form-check-input-inline" id="male" name="gender" value="male" style="height:15px;width:25px;"> 
             <span class="form-check-label" >Male</span>
            <input type="radio" class="form-check-input-inline" id="female" name="gender" value="female" style="height:15px;width:25px;">   
             <span class="form-check-label" >Female</span>
            </div>
         </div>
        </div>

        <div class="col-md-6">
        <label for="">LastName</label>
        <input type="text" class="form-control" placeholder="Enter LastName" id="lname" name="lname">

        <label for="">DOB</label>
        <input type="date" class="form-control" placeholder="Enter Date" id="date" name="DOB">
       
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" placeholder=" Confirm Password" id="cpass" name="cpass">

        <label for="">Mobile No</label>
        <input type="text" class="form-control" placeholder="Enter Mobile No" id="mob" name="mobile_num">

        <label for="username">Your Blog or Website URL</label>
        <input type="text" class="form-control" placeholder="Enter the url" id="website" name="website">

        </div>


        <div class="col-md-6">

        <div class="city">
        <label for="address">Address</label>
        <input type="text" class="form-control" placeholder="Street Address" id="" name="street" style="width:100%;">
        <input type="text" class="form-control" placeholder="City" id="city" name="city" style="width:40%;">
        <input type="text" class="form-control" placeholder="State" id="state"name="state" style="width:40%;">
        <input type="text" class="form-control" placeholder="Country" id="country" name="country" style="width:40%;">
        <input type="text" class="form-control" placeholder="Pin Code" id="pin_code" name="pin_code" style="width:40%;">
        </div>
         
        </div>


        <div class="col-md-6">

        <label >PlatForm :</label>
        <select class="browser-default custom-select" name="media_plat">
            <option>Instagram</option>
            <option>Facebook</option>
            <option>YouTube</option>
            <option>TikTok</option>
            <option>Other</option>
        </select>
        
        <label >Enter Id:</label>
        <input type="text" class="form-control" placeholder="Enter Your Id" id="Media-id" name="media_id">

        </div>

        <div class="col-md-6">
        
         <label for="username">Primary Platform(s) of Influence?</label>
        <select class="browser-default custom-select"name="primary_media_platform">
           
                <option>Instagram</option>
                <option>Facebook</option>
                <option>YouTube</option>
                <option>TikTok</option>
                <option>Other</option>
            </select>
        
         <label>Primary Region(s) of Influencer?</label>
            <select class="browser-default custom-select" name="primary_country">
                <option>Asia</option>
                <option>Africa</option>
                <option>Australia</option>
                <option>Europe</option>
                <option>USA</option>
                <option>Others</option>
            </select>
        
            <label>My Audience is Mainly :</label>
            <select class="browser-default custom-select" name="audience">
              
                <option>Men</option>
                <option>Women</option>
                <option>Both</option>
            </select>

    
        </div>
        
        <div class="col-md-6">
         <label>Secondary Platform(s) of Influence?</label>
            <select class="browser-default custom-select" name="secondary_media_platform">
           <option>Instagram</option>
                <option>Facebook</option>
                <option>YouTube</option>
                <option>TikTok</option>
                <option>Other</option>
            </select>
       
       <label>Secondary Region(s) of Influencer?</label>
            <select class="browser-default custom-select" name="secondary_country">
                <option>Asia</option>
                <option>Africa</option>
                <option>Australia</option>
                <option>Europe</option>
                <option>USA</option>
                <option>Others</option>
            </select>
            
            <label>Content Category :</label>
            <select class="browser-default custom-select" name="content">
               <option>Business</option>
                <option>Fashion</option>
                <option>Fitness</option>
                <option>Music</option>
                <option>Life Style</option>
            </select>
        </div>
        
      
    <div class="col-md-6">
    <label class="checkbox">Audience’s Ages :</label>  
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="aud_age[]" value="age_18">
  <label class="form-check-label" for="inlineCheckbox1">Under 18</label>
   
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="aud_age[]" value="age_25">
  <label class="form-check-label" for="inlineCheckbox2">18-25</label>
    
  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="aud_age[]" value="age_30">
  <label class="form-check-label" for="inlineCheckbox3">25-30</label>
    
  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="aud_age[]" value="age_40">
  <label class="form-check-label" for="inlineCheckbox3">Above 30</label>
    </div>
    </div>
    
  <div class="col-md-6">
   <label class="checkbox">Monetizing Your Audience (Apply All or Any):</label>
     <div class="form-check form-check-inline">
          <input type="checkbox" class="form-check-input" id="Blog_Posts" name="aud_monetize[]" value="Blog_Posts" >
         Blog
            <input type="checkbox" class="form-check-input" id="Media_Posts" name="aud_monetize[]" value="Media Posts">
            Social Media
            <input type="checkbox" class="form-check-input" id="Click_ads" name="aud_monetize[]" value="Click Ads">
            CPC Ads
            <input type="checkbox" class="form-check-input" id="Affiliate" name="aud_monetize[]" value="Affiliate">
            Affiliate  
    </div>
     </div>
    
     <div class="col-md-6">
            <label>Estimate Monthly Earnings :</label>
         <input type="text" class="form-control" id="currency" name="currency" style="width:20%;">
         </div>
         <div class="col-md-6">
         <label>Image</label>
        <input type ="file" name="image" id="image" class="img-fluid" value="" />
      </div>
         
        

        <div class="col-md-12">
        <label for="select">Models:</label>
   <select id="test" name="select_models" onchange="showDiv('hidden_div', this)" class="form-control" >
        <option value="">Select</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
   </select>
   <div id="hidden_div" style="display: none">

   <div class="row">
            <div class="col-md-12">
                <label>Height :</label>
            <input type="text" name="height"  class="form-control" placeholder="Enter Your Height"> 

            <lable>Shirt</label>
            <input type="text" class="form-control" placeholder="Enter Shirt Size" id="shirt" name="shirt">
            <lable>Jeans</label>
            <input type="text" class="form-control" placeholder="Enter Jeans Size" id="jeans" name="jeans">
            <label>FootWear</label>
            <input type="text" class="form-control" placeholder="Enter FootWear Size" id="footwear" name="footwear">
            <label>Hair Color</label>
            <input type="text" class="form-control" placeholder="Enter Hair Color" id="haircolor" name="haircolor"><br>
            </div>
<div class="col-md-12">
        <label>Weight :</label>
        <input type="text" name="weight"  class="form-control" placeholder="Enter Your Weight"> 
        <label>T-Shirt</label>
            <input type="text" class="form-control" placeholder="Enter T-Shirt Size" id="t-shirt" name="t_shirt">
            <label>Top</label>
            <input type="text" class="form-control" placeholder="Enter Top Size" id="top" name="top_dress_size">
            <label>Skin Color</label>
        <input type="text" class="form-control" placeholder="Enter Skin Color" id="skincolor" name="skincolor">

        <label>Eye Color</label>
        <input type="text" class="form-control" placeholder="Enter Eye Color" id="eyecolor" name="eyecolor"><br>
        </div>
    </div>

         <div class="col-md-12 age">
            <label>What Kind Of Model You Want To Apply :</label>
            <input type="checkbox" class="form-control" id="runway" name="apply[]" value="runway"><span>Runway</span>
            <input type="checkbox" class="form-control" id="commercial" name="apply[]" value="commercial"><span for="">Commercial</span>
            <input type="checkbox" class="form-control" id="fashion" name="apply[]" value="Fashion"><span for="">Fashion</span>
            <input type="checkbox" class="form-control" id="paint" name="apply[]" value="Paint"><span for="">Paint</span>
        </div>

        <div class="col-md-12">
        <label> Select Platform :</label>
        <select name="select_platform" class="form-control">
        <option value="Facebook">Facebook</option>
        <option value="Instagram">Instagram</option>
        <option value="Twitter">Twitter</option>
        <option value="Linkedin">Linkedin</option>
        </select>
       
        <label>Fashion District NW events before? :</label> 
        <select name="event" class="form-control">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        </select>
        </div>
        
        <div class="col-md-12">
        <label>Previous Model Experience :</label>
        <input type="text" name="previous_modelexperience" placeholder="Model Experience" class="form-control">
        </div>
        
      <div class="col-md-12">
        <label>Modeling opportunity interest?  (Click all that apply)</label>
        
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" name="modeling_opportunity[]" value="Fashion Show" class="custom-control-input" id="defaultInline1">
          <label class="custom-control-label" for="defaultInline1">Fashion Show Model </label>
        </div>
        
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" name="modeling_opportunity[]" value="Fashion is ART "class="custom-control-input" id="defaultInline2">
          <label class="custom-control-label" for="defaultInline2">Fashion is ART Model </label>
        </div>
        
        <div class="custom-control custom-checkbox custom-control-inline">
          <input type="checkbox" name="modeling_opportunity[]" value="Fashion District" class="custom-control-input" id="defaultInline3">
          <label class="custom-control-label" for="defaultInline3">Modeling  outside of Fashion </label>
        </div> 
        </div>
 
      </div>
          
        <button type="submit" name="save" value="save">Submit Application</button>
</div>
        
</form>
</div>
    </div>

    <script>
      function showDiv(divId, element) {
         document.getElementById(divId).style.display = element.value == '1' ? 'block' : 'none';
      }
      
   </script>
</body>

</html>