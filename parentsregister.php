

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    
    <style>
    
        body{
            
            background-image: url(assets1/images/b.jfif);
            background-size:cover;
            background-attachment: fixed;
        }
        fieldset{
            width: 300px;
            margin-left: 100px;
            margin-top: 100px;
            background-image: url(assets1/images/login.jpg);
            opacity: 1.2;
            background-size: contain;
            background-attachment: fixed;
            height: 500px;
            
            color: white;
            
        }
        .btn {
              display: inline-block;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              vertical-align: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              border: 1px solid transparent;
              padding: 0.375rem 0.75rem;
              font-size: 1rem;
              line-height: 1.5;
              border-radius: 0.25rem;
              transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }
        .btn-success {
              color: #fff;
              background-color: #dece1b;
              border-color: #dece1b;
            }

            .btn-success:hover {
              color: #fff;
              background-color:#b9ae35;
              border-color: #b9ae35;
            }
        .fieldset-container{
            border: 0px solid;
            -webkit-box-shadow: 2px 3px 14px 11px rgba(156,145,156,1);
            -moz-box-shadow: 2px 3px 14px 11px rgba(156,145,156,1);
            box-shadow: 2px 3px 14px 11px rgba(156,145,156,1);
        }
        .form-container{
            border: 0px solid; padding: 10px 20px;
            -webkit-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            -moz-box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
            box-shadow: 2px 5px 21px 10px rgba(0,0,0,0.75);
        }
        
        .submit{
            width:100px;
            margin-left: 200px;
        }
        marquee{
            margin-left: 100px;
            margin-right: 50px;
            shape-margin: 100px;
            color:whitesmoke;
            font-size: 25px;
            font-family:monospace;
            font-style: italic;
            
        }
        
        
body, html {
  width: 100%;
  height: 100%;
  margin: 0;
}

.container {
  width: 100%;
  height: 100%;
}

.leftpane {
    width: 30%;
    height: 80%;
    float: left;
    
    border-collapse: collapse;
}


.rightpane {
  width: 70%;
  height: 80%;
  position: relative;
  float: right;
 
  border-collapse: collapse;
}

        .msg{
        color: aliceblue;
        }
    </style>
</head>
<body>
  <div class="container">
  
 
   <a href="index.html"><h3 class="btn btn-success">HOME</h3></a>
   <?php
        include("conn.php");
        //error_reporting(0);
        if(isset($_POST['submit']))
        {
            $uname = $_POST['userid'];
            $pass = $_POST['password'];
            $query1 = "insert into parentslogin values('$uname','$pass') "; 
            $data1 = mysqli_query($con,$query1);
            if($data1)
            {
                //echo "<font color='white'><br><br>Registered Successfully. <a href='login.php'><font color='yellow'><br>Click Here to LogIN</a></font>";
                header('location:parentslogin.php');
            }
        }
        else
        {
            echo "<h3><font color='white'>All Fields are required</font></h3>";
        }
    ?>

    <h1><fieldset class="form-container">
       <legend> Register Here </legend>
       <br/>
      
      <br/>
      
      <br/>
      <br/><br><br>
      <form action="" method="post">
       Name : <input type="text" name="userid" placeholder="your user id here" value="" >
      
       ID : <input type="password" name="password" placeholder="your password here" value="">
      
      <input type="submit" class="submit btn btn-success" value= "Register" name="submit">
      </form>
      
   </fieldset></h1></div>


</body>
</html>


