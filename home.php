<!DOCTYPE html>
<html>
    <head>
        <title>Banking System</title>
        <style type="text/css">
        *{
            margin:0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        body{
            width: 100%;
            height: 100vh;
            background-image: url(https://i.pinimg.com/736x/b4/c4/a3/b4c4a34ec413043d973fa336b7ec264e.jpg);
            background-size: 40%;
            background-position:center ;
            background-repeat: no-repeat;
            background-color: 	#F5F5F5;

        }
    
        nav{ /*this is the navigation bar*/
            width: 100%;
            background-color: teal;
            overflow:hidden;
        }
        nav ul{
            list-style-type: none; /*this is to remove the bullet pts*/
            float: right;
            margin-top:7px;
        }
        nav ul li{
            display:inline-block; /*elements will be shown in a single line*/

        }
        nav ul li a{ /*styling anchors*/
            text-decoration:none;
            padding: 20px 35px;
            text-align:center ;
            color: #fff;
            display:block;
            font-weight: 700;
        }
        nav ul li a:hover{
            color:#FAFA33;
        }
        .logo{
            float: left;
            padding: 10px;
        }
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color:black;
            color: white;
            text-align: center;
            padding: 10px;

        }
       
       
.content {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: linear-gradient(to bottom, white 0%, blue 100%);
  
  
  border: 10px ;
 
 
  background-color: coral;

}
        </style>
    </head>
    <body>
        <nav>
            <div class="logo">
               <a href="home.php"> <img src="logo.png" width="50" height="50"></a>
            </div>
            <ul>
            <li><a href='#'>THE $PARKS BANK OF INDIA</a></li>
                <li><a href="home.php">HOME</a></li>
               
                <li><a href="display.php">View Customers</a></li>
               
                <li><a href="transfermoney.php">Transfer Money </a></li>
                <li><a href="transactionhistory.php">View Transaction History</a></li>
            </ul>
        </nav>
    
            
            
          
        <div class="footer">
             <p>Designed By Shivam Upadhyay. All rights reserved.
            </p>
         </div>   
    </body>
</html>