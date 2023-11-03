<?php
    $con=mysqli_connect("localhost","root","","program03");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];

        $sql=" INSERT INTO personal(name, e-mail, phone,password, gender) values('$name','$email','$phone','$password','$gender')";

        $result=mysqli_query($con,$sql);
        if($result==True){
            echo '<div class="alert alert-success" role="alert">
            <strong>Success </strong> Data  inserted Succesfully
         </div>';
        }else{
            echo "Not inserted";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Personal Details</title>
    <style>
        *{
            box-sizing: border-box;
        }
body{
    min-height: 100vh;
}
        .container{
            background-color: #fff;
            width:40%;
            height: 300px;
            margin: auto;
            padding: 20px;
            margin-top: 20px;

        }
        label,input{
            margin: 5px;
        }
        .form-control{
            background-color: aquamarine;
        }


    </style>
</head>
<body>
    <div class="container" >
        <h3>Personal Details</h3>
            <div class="form-control">
                <form action="" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email:</label>
                    <input type="emial" name="email" id="email" required><br>
                    <label for="phone">Phone Number:</label>
                    <input type="tel" name="phone" id="phone" required><br>
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" required><br>
                    <label for="gender">Gender:</label>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="male">Female</label><br>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
    </div>
</body>
</html>