<?php 
include('navbar.php');
include('conn.php');
if(isset($_POST['submit'])){
$conn=new Connection();
$con=$conn->conn();
$data=array(
    "name"=>$_POST['username'],
    "email"=>$_POST['email'],
    "phone"=>$_POST['phone'],
    "address"=>$_POST['address'],
    "JoiningDate"=>$_POST['Jdate']
);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
        <div class="container m-auto py-2 px-3 mt-5">
            <div class="card m-auto px-3">
                <div class="card-header  text-white text-center">
                   AD SIGNUP FORM 
                </div>
                <div class="card-body ">
                    <form  method="post"  class="form-control">
                        <label>Full Name</label>
                        <input type="text" name="username"  placeholder="John Smith" class="form-control mb-2">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" placeholder="9999999999" class="form-control mb-2">
                        <label for="email">Email Address</label>
                        <input type="email" name="email"  placeholder="John@adtechnologu.in" class="form-control mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" autocomplete  placeholder="********" class=" password form-control mb-2">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" name="cpassword"  id="validation"
                          placeholder="********"  autocomplete class="form-control mb-2 password">
                        <input type="checkbox" name="checkbox" onclick="showPassword()" class="py-2  mb-2 ">&nbsp;<code id="show">Show Password</code>
                        <br/>
                        <span id="errspan"></span>
                        <label for="address">Address</label>
                        <textarea placeholder="U.k" name="address" class="form-control mt-0 mb-2" ></textarea>
                         <label for="joiningdate">Joining Date</label>
                            <div class="d-flex  mb-2" >
                            <input type="text" name="jdate[]" placeholder="Date" 
                            maxlength="2"
                            class="form-control m-1 w-50">      
         
                            
                            <select class="form-control m-1 w-50" name="Jdate[]" >
                                <script>
                                let month=["Choose Your Month","January","February","March","May","June","July","August","September","October","November","December"];
                                  month=month.map(item=>{
                                    return item;
                                  });
                                  for(let i=0;i<month.length;i++){
                                  document.write("<option value="+month[i]+">"+month[i]+"</option>");
                                  } 
                                  </script>
                            </select>          
                            <input type="text" placeholder="Year"  name="jdate[]"  
                            maxlength="4"    
                            class="form-control m-1 w-50">      
                        </div>                         
                         <input type="submit" name="submit" value="Signup"
                         class="btn btn-outline-secondary btn-block  form-control col-lg-4 col-12">
                        </form>
                </div>
            </div>

        </div>
</body>
</html>
<script>
    let errr='';
    let passValidation=document.getElementById('validation');
    let ele=document.getElementById('errspan');
    passValidation.addEventListener('keyup',function(){
        let passValue=document.getElementsByClassName('password');
        let pass1=passValue[0].value;
        let pass2=passValue[1].value;
        if(pass1===pass2){
            (pass1!=' ' && pass2!='')?
            ele.innerHTML='Passwrod match successfully':ele.innerHTML='';
        }
        else{
            (pass1!=' ' && pass2!='')?
            ele.innerHTML='Passwrod  not match successfully':ele.innerHTML='';
        }
             
        
    });
 </script>