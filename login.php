<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f2f2f2;
            display : grid;
            height: 500px;
            place-items: center;
            padding-top : 50px; 
        }
        div{
            background-color:#b3d1ff;
            border-style: solid;
            border-radius: 15px;
            margin-top: 5px;
            padding-top : 5px; 
            padding-right : 10px;
            padding-left : 10px;
            padding-bottom :10px;
        }
        p{
            padding-top : none; 
            text-align-last: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bold;
        
        }
        input{
            width: 90%;
            border-radius: 4px;
            padding: 5px 10px;
            border-radius: 30px;
            border-style: groove;
         }
         ::placeholder {
          
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            opacity: 0.5;
        }
         label{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 15px;
            padding: 5px 10px;
         }
         button{
            width: 100%;
            background-color:  #ff5050;
            color: white;
            padding: 10px 15px;
            margin: 5px 0;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
         }
            button:hover {
            background-color: #45a049;
         }
         a{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-decoration: none;
            font-size: 15px;
         }
        
    </style>

    <title>Login</title>
</head>
<body>
     <div>
         <table>
            <p>Login</p>
            <form action = "" method = post autocomplete = off>
                <tr>
                    <td><label for ="name">User Name</label></td>
                    <td><input type="text" id ="name" name ="uname"placeholder="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" id ="password" name="password" placeholder="password"required></td>
                </tr>
            
                <tr>
                    <td> <button type = "submit">Log In</button></td>
                   <td>&nbsp;&nbsp;<a href ="register.php">Register</a>&nbsp;&nbsp;
                    <a href ="forgetpassword.php">Forget Password</a></td>
                </tr>
            </form>
        </table>    

    </div>  


</body>
</html>