
<!DOCTYPE html>
<html>
    <head>
        <title>View customers</title>
        <style type="text/css">
        *{
            margin:0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }
        body{
          
             width: 100%;
            height: 50vh;
            background-image: none;
            background-size: cover;
            background-position:center ;
            background-repeat: no-repeat;
            
            

        }
        tr:nth-child(odd) {
	background-color:#5bd7d9;	
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
            color: 	white;
            display:block;
            font-weight: 700;
        }
        nav ul li a:hover{
            color:#FAFA33;
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
        .logo{
            float: left;
            padding: 10px;
        }
       
      </style>
    </head>
    <body>
    <nav>
            <div class="logo">
                <img src="logo.png" width="50" height="50">
            </div>
            <ul>
            <li><a href='home.php'>THE $PARKS BANK OF INDIA</a></li>
                <li><a href="home.php">HOME</a></li>
               
                <li><a href="display.php">View Customers</a></li>
               
                <li><a href="transfermoney.php">Transfer Money </a></li>
                <li><a href="transactionhistory.php">View Transaction History</a></li>
            </ul>
        </nav>
         <div class="main-div">
             <h1>CUSTOMER DETAILS </h1>
            <div class="center-div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>BALANCE</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'connection.php';
                            $selectquery = "select * from customer";

                            $query= mysqli_query($con, $selectquery);

                            $nums = mysqli_num_rows($query);

                            

                            while($res= mysqli_fetch_array($query)){

                             ?>

                                <tr>
                                    <td> <?php echo $res['id']; ?></td>
                                <td><?php echo $res['name']; ?></td>
                                <td><?php echo $res['email']; ?></td>
                                <td><?php echo $res['balance']; ?></td>
                               
                         
                            </tr>
                            <?php
                            }

                            ?>

                            
                        </tbody>
                    </table>

                </div>

            </div>
         </div>
         <style>
             .main-div{
    width:100%; height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/* .center-div{
    width: 90%;
    height:80vh;
    background: -webkit-linear-gradient(left,#fff, #ffffff);
    padding: 20px 0 0 0;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
} */

h1{
    font-size: 18px;
    color: #000;
    text-align: center;
    margin-top: -80px;
    margin-bottom: 20px;
}
table{
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    margin:auto;
}
th,td{
    border: 1px solid #f2f2f2;
    padding: 10px 30px;
    text-align: center;
    color: black;

}
th{
    text-transform: uppercase;
    font-weight: 500;
}
   
td{font-size: 13 px;}
         </style>

            
        <div class="footer">
             <p>Designed By Shivam Upadhyay. All rights reserved.
            </p>
         </div> 
    </body>

    </html>