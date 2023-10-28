<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container w-75 h-75 ">
        <div class="card mt-5">
            <div class="card-header bg-secondary text-center text-white">
                Reset Your Password Here 
            </div>
            <div class="card-body ">
                <form  class="form-control">
                    <label for="last_password">Previous Password</label>
                    <input type="password" name="prevpassword"   class="form-control mb-2 py-2 password"/>
                    <label for="new_password">New Password</label>
                    <input type="password" name="newpassword"  class="form-control mb-2 py-2 password">
                    <label for="cnew_password">Confirm New  Password</label>
                    <input type="password" name="cnewpassword"  class="form-control  mb-2 py-2 password">
                    <input type="checkbox" class="mt-2 p-3" onchange="passwordShow()" >
                    &nbsp;<code>Show Password</code>
                    <input type="submit" value="Reset Password" class=" mt-2 btn btn-lg-block btn-outline-secondary form-control">
                </form>
            </div>
        </div>
    </div>
</body>

</html>