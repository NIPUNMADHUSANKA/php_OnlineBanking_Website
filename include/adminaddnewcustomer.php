<html>
    <head>
        <title>Online Banking</title>
         <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../css/styleslider.css">
         <link rel="stylesheet" href="../css/footer.css">
         <link rel="stylesheet" href="../css/safe.css">
         <script type="text/javascript">
                function slideshow(){
                  var x=document.getElementById('check-class');
                  if(x.style.display==='none')
                  {
                    x.style.display ='block'
                    y.style.display ='none'
                  }
                  else{
                    x.style.display ='none'
                    y.style.display ='block'
                  }
                }
                function slideshow1(){
                  var y=document.getElementById('check-class1');
                  if(y.style.display==='none')
                  {
                    y.style.display ='block'
                    x.style.display ='none'
                  }
                  else{
                    y.style.display ='none'
                    x.style.display ='block'
                  }
                }

         </script>
    </head>
    <body>
        <div class="nav">
                 <div class="logo"><p> <span class="col">O</span>nline<span class="col"> B</span>ank <span class="col">S</span>ystem</p></div>
        
                 <div class="menu">
                    <ul class="menu_item">
                    <li><a href="adminindex.php" class="col1">Home</a></li>
                    <li><a  class="col1 colsub" onclick="slideshow()">Administration</a></li>
                    <li><a href="adminupdatepassword.php" class="col1">Change Password</a></li>
                   
                    <li><a href="adminloginpage.php" class="col1">Logout</a></li>
                    </ul>
                    <ul class="submenu1" id="check-class" style="height:110px;">
                    <li><a href="adminaddnewcustomer.php" class="col1">Add New Customer</a></li>
                    <li><a href="adminaddnewadmin.php" class="col1">Add New Admin</a></li>
                    <li><a href="adminaddtransaction.php" class="col1">Add Transaction</a></li>
                    </ul>
                   
                 </div>          
        </div>
        <div class="aboutheader">
            <h1 class="aboutheadertitle" style="text-transform:uppercase;">user registration form</h1>
        </div>
        

        <div class="detailsprivacy">
        <p class="para1">
        <center>
        <form action="allcontrollpanel.php" method="post">
        <h2 class="userregisterform">user registration form</h2>
            <label class="lbl">Account, Login and Password Details</label>
            <br>
                <hr style="width:20rem;color:#ccc;">
        
            <select class="ent" name="Accounttype">
                <option>Type of Account</option>
                <option>Saving Account</option>
            </select>
            <br>
            <input type="text" name="Username" id="" class="ent" placeholder="Your Username Or UserId" autocomplete="false" required>
            <br>
            <input type="password" name="Password" id="" class="ent" placeholder="Password" autocomplete="false" required>
        
            <br>
        
        <label class="lbl">Personal Details</label>
        <br>
        <hr style="width:20rem;color:#ccc;">
        
        <select class="ent" name="Sir">
            <option>Mr.</option>
            <option>Mrs.</option>
            <option>Miss.</option>
        </select>
        <br>
        <input type="text" name="AccountName" id="" class="ent" placeholder="Account Name" autocomplete="false" required>
        <br>
        <input type="text" name="FName" id=""  class="ent" placeholder="First Name" autocomplete="false" required>
        <br>
        <input type="text" name="LName" id="" class="ent" placeholder="Last Name" autocomplete="false" required>
        <br>
        <select class="ent" name="Gender">
            <option>Please Select Your Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <br>
        <select class="ent" name="Married">
            <option>Married Status</option>
            <option>Married</option>
            <option>Unmarried</option>
        </select>
        <br>
        
        <input type="text" name="DOB" id="" class="ent" placeholder="Date Of Bith" autocomplete="false" required>
        <br>

        <input type="text" name="Occupation" id="" class="ent" placeholder="Occupation" autocomplete="false" required>
        <br>
        <label class="lbl">Address Details</label>
        <br>
        <hr style="width:20rem;color:#ccc;">
        <br>

        <input type="text" name="Address" id="" class="ent" placeholder="Address" autocomplete="false" required>
        <br>

        <input type="text" name="City" id="" class="ent" placeholder="City" autocomplete="false" required>

        <br>

        <input type="text" name="Status" id="" class="ent" placeholder="State" autocomplete="false" required>
        
        <br>
       <select class="ent" name="Country">
            <option>Country</option>
            <option>Sri-Lanka</option>
            <option>India</option>
        </select>
        <br>
         
        <label class="lbl">Contact Details</label>
        <br>
        <hr style="width:20rem;color:#ccc;">
        
        <br>
        <input type="tel" name="Telephone" id="" class="ent" placeholder="Telephone" autocomplete="false" required>
        
        <br>
        <input type="tel" name="Mobile" id="" class="ent" placeholder="Mobile No" autocomplete="false" required>
        
        <br>
        <input type="email" name="Email" id="" class="ent" placeholder="Email" autocomplete="false" required>
        
        <br>
        <input type="text" name="Nationality" id="" class="ent" placeholder="Nationality" autocomplete="false" required>

        <br>
        <label class="lbl">User Picture</label>
        <br>
        <hr style="width:20rem;color:#ccc;">
        <input type="file" name="" id="" class="ent" value="Choise a picture" autocomplete="false" required>
        <br>
        <button name="adddeatails"  class="btn btn_save">SUBMIT</button>
        </form>
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