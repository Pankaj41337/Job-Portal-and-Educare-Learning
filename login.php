<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        body{
            margin: 0px;
            padding: 0px;
            background-image: url('images/login1.jpg');
            background-size: cover;
        }
        form{
           background-color: #fff;
            margin-top: 8em;
            margin-left: 30em;
            margin-right: 12em;
            padding: 40px;
            box-shadow: 10px 10px 8px 10px #888888;
        }

        .form-label {
          font-weight: bold;
      }

    </style>
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" placeholder="Enter Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" placeholder="Enter Password" class="form-control" id="exampleInputPassword1">
             </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
        </form>

    </div>
</body>
</html>