<?php 
include('navbar.php');
if(isset($_POST['submit'])){
echo"<pre>";
print_r($_POST);
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
                <div class="card-header bg-secondary text-white text-center">
                   AD SIGNUP FORM 
                </div>
                <div class="card-body ">
                    <form  method="post"  class="form-control>
                        <label for="fname">Full Name</label>
                        <input type="text" name="username"  placeholder="John Smith" class="form-control mb-2">
                        <label for="fname">Phone Number</label>
                        <input type="number" name="phone" placeholder="9999999999" class="form-control mb-2">
                        <label for="fname">Email Address</label>
                        <input type="email" name="email"  placeholder="John@adtechnologu.in" class="form-control mb-2">
                        <label for="fname">Password</label>
                        <input type="password" name="password" autocomplete  placeholder="********" class=" password form-control mb-2">
                        <label for="fname">Confirm Password</label>
                        <input type="password" name="cpassword" autocomplete class="form-control mb-2 password">
                        <input type="checkbox" name="checkbox" onclick="showPassword()" class="py-2  mb-2 ">&nbsp;<code id="show">Show Password</code>
                        <br/>
                        <label for="address">Address</label>
                        <textarea placeholder="U.k" name="address" class="form-control mt-0 mb-2" ></textarea>
                         <label for="joiningdate">Joining Date</label>
                            <div class="d-flex  mb-2" >
                              <select  name="Jdate[]" class="form-control m-1">
                                <option>Choose Day</option>
                            </select>          
                            
                            <select class="form-control m-1" name="Jdate[]">
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
                            <select class="form-control m-1" name="Jdate[]">
                                
                            <option>Choose Year</option>
                            </select>          
                            
                        
                        </div>                         






                         <input type="submit" name="submit" value="Signup"
                         class="btn btn-outline-secondary btn-block  form-control col-lg-4 col-12">
                        </form>
                </div>
            </div>

        </div>
</body>
</html>