<html>
    <head>
        <title>Online Banking</title>
         <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../css/styleslider.css">
         <link rel="stylesheet" href="../css/footer.css">
         <link rel="stylesheet" href="../css/bootstrap.css">
         <link rel="stylesheet" href="../css/safe.css">
         <script type="text/javascript">
                function slideshow(){
                  var x=document.getElementById('check-class');
                  if(x.style.display==='none')
                  {
                    x.style.display ='block'
                  }
                  else{
                    x.style.display ='none'
                  }
                }

         </script>
    </head>
    <body>
        <div class="nav">
                 <div class="logo"><p> <span class="col">O</span>nline<span class="col"> B</span>ank <span class="col">S</span>ystem</p></div>
        
                 <div style="margin-top:3.7rem;margin-left:10rem;">
                    <ul class="menu_item menuitemcode1">
                        <li><a href="customerindex.php" class="col1">Home</a></li>
                        <li><a href="customerabout.php" class="col1">About Us</a></li>
                        <li><a href="customerservice.php" class="col1">Service</a></li>
                        <li><a href="customerprivacy.php" class="col1">Privacy</a></li>
                        <li><a  class="col1 colsub" onclick="slideshow()">Accountant</a></li>
                        <li><a href="updatepassword.php" class="col1">Change Password</a></li>
                        <li><a href="customerloginpage.php" class="col1">Logout</a></li>
                    </ul>
                    <ul class="submenu" id="check-class" style="height:110px;">
                    <li><a href="accountbalance.php" class="col1">Account Balance</a></li>
                        <li><a href="transfer.php" class="col1">Transfer funds</a></li>
                        <li><a href="adminloginpage.php" class="col1">Transaction</a></li>
                    </ul>
                 </div>        
        </div>
        <div class="aboutheader">
            <h1 class="aboutheadertitle" style="text-transform:uppercase;">Money Transaction</h1>
        </div>
        

        <div class="detailsprivacy" style="color:#000;background:black;">
        <p class="para1">
        <center>
        <table class="table table-dark" style="margin-top:5rem;overflow-x: auto;">
       <thead>
         <tr>
            <th scope="col">ID</th>
            <th scope="col">BeneficiaryBankName</th>     
            <th scope="col">BeneficiaryAccountNumber</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tbody style="overflow-x:scroll;overflow-y: scroll;">
        <?php
        include 'connection.php';
        session_start();
        $cuname=$_SESSION['cusername'];
        $sql="SELECT * FROM transfer WHERE Username='$cuname'";
        $result=$conn->query($sql);
        
        while($row=$result->fetch_assoc()){
            echo " 
           
            <tr>
                <td scope='col'>".$row['ID']."</td>
              
                <td scope='col'>".$row['BeneficiaryBankName']."</td>
                <td scope='col'>".$row['BeneficiaryAccountNumber']."</td>
                <td scope='col'>Rs.".$row['Amount']."</td>
               </tr>
         
            ";
        }
        ?>
           
  </tbody>
</table>
       

        <center>
        </p>
        </div>
 
     
     <footer style="margin-top:0rem;background-color:#000;">
        <div class="icon">
            <p>Online Banking System</p>
        </div>
        <div class="mission">
            <p>Online banking,also known as internet banking, it is an electronic payment system that enables customers of a bank
or other financial instittion to conduct a range of financial institution's website.</p>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <table>
                <tr>
                    <td class="rat"><img src="../images/placeholder.png" width=20px></td>
                    <td class="rat">XYZ,Colombo,Sri-Lanka</td>
                </tr>

                <tr>
                    <td><img src="../images/call-answer.png" width=20px></td>
                    <td>+94 17 37 38 2</td>
                </tr>

                <tr>
                    <td><img src="../images/At_sign.svg.png" width=20px></td>
                    <td>nipunmadhusanka1250@gmail.com</td>
                </tr>
            </table>
        </div>
        <div class="link">
            <h3>Quick Link</h3>
            <ul type="disc">
                <li class="rat"><a href="index.php"  style="text-decoration:none;color:#ccc;" >Home</a></li>
                <li><a href="aboutus.php" style="text-decoration:none;color:#ccc;" >About Us</a></li>
                <li><a href="services.php" style="text-decoration:none;color:#ccc;" >Service</a></li>
                <li><a href="privacy.php" style="text-decoration:none;color:#ccc;" >Privacy and Policy</a></li>
            </ul>
        </div>
        <div class="Time">
            <h3>Modules</h3>
            <ul type="disc">
                <li class="rat">User Module</li>
                <li>Login Module</li>
                <li>Account Module</li>
                <li>Transaction Module</li>
                <li>Transfer Exachange</li>
            </ul>

        </div>
        <center><hr class="seperateline"></center>
        <div class="developer">
            <h3>Develpoed by: Nipun Madhusanka</h3>

        </div>

        <!--<p><i class="material-icons">view_list</i></p>-->
    </footer>
    </body>

   
</html>