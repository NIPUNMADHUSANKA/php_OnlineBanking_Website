<html>
    <head>
        <title>Online Banking</title>
         <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../css/styleslider.css">
         <link rel="stylesheet" href="../css/footer.css">
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
        
                 <div class="menu">
                    <ul class="menu_item">
                        <li><a href="index.php" class="col1">Home</a></li>
                        <li><a href="aboutus.php" class="col1">About Us</a></li>
                        <li><a href="services.php" class="col1">Service</a></li>
                        <li><a href="privacy.php" class="col1">Privacy</a></li>
                        <li><a  class="col1 colsub" onclick="slideshow()">Accountant</a></li>
                    </ul>
                    <ul class="submenu" id="check-class">
                        
                        <li><a href="customerloginpage.php" class="col1">Customer Login</a></li>
                        <li><a href="adminloginpage.php" class="col1">Admin Login</a></li>
                    </ul>
                 </div>        
        </div>
        <div class="aboutheader">
            <h1 class="aboutheadertitle">ABOUT</h1>
        </div>
        <div class="imagebody">
            <img src="../images/bitcoin-3024279_1920.jpg" alt="" class="imagebody">
        </div>

        <div class="detailsabout">
        
        <h2> Online Banking System</h2>
        <p class="para1">
        <p>
        The term "Swiss bank" has for ever been synonymous with a guarantee for reliable, confidential and 
        sophisticated services for customers. Theses features have been developed over the years because we
        operate in a modern, liberal and politically very stable nation with a strong economy. It is therefore no 
        coincidence that Swiss bank are the first choice for global wealth management.

        <br>
        Above all, we are a bank designed with our customers in mind. Having tackled a variety of private
        requirements, we decided to forge this path for our business. Over time such requirements have defined
        our mission: discussing and acting alongside our customers in order to offer them our banking services.We
        are a bank with an extensive international culture and a high intellectual profile. Our managers have held
        prestigious roles with international banking groups and have attained a very high cultural and professional
        level. Over the years we have grown thanks to innovative projects and as a result we are able to help our
        customers achieve ambitious goals. Last but not least, we are a successful bank for our customers,our 
        shareholders and our employees.
        <br>

        We interpret the notion of Swiss quality services in your favor through:
        <br>
        <ol>
        <li>Safeguarding confidentiality</li>
        <li>Highly personalized realationships</li>
        <li>Offering individual solutions for investment</li>
        <li>Risk management skills</li>
        <li>Prompt response</li>
        </ol>
        </p>
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
            <h4>All Rights Reserved</h4>

        </div>

        <!--<p><i class="material-icons">view_list</i></p>-->
    </footer>
    </body>

   
</html>