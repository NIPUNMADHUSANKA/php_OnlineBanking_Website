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
    

    <div class="wrap">
    <div class="arrow" id="arrow-left"></div>
    <div id="slider">

      <div class="slide slide1">
        <div class="slide-content">
            <span>Image One</span>
        </div>
      </div>

      <div class="slide slide2">
        <div class="slide-content">
            <span>Image Two</span>
        </div>
      </div>

      <div class="slide slide3">
        <div class="slide-content">
            <span>Image Three</span>
        </div>
      </div>

    </div>

    <div class="arrow" id="arrow-right"></div>
</div>
  <div class="main-text">
        <p class="main-text part">WELECOME TO ONLINE BANKING SYSTEM </p>
  </div>
  <div class="imagebar">
   
        <img src="../images/euro-870757_1920.jpg" alt="" class="imagebar imagerbar1">
        <img src="../images/hand-4401240_1920.jpg" alt="" class="imagebar imagerbar2">
         <img src="../images/iphone-624709_1920.jpg" alt="" class="imagebar imagerbar3">
  </div>
     <div class="details">
     
      <h2 class="detailheading">About Online Banking System</h2>
     <p class="paracol"> 
       <span style="font-size:1.8rem;">O</span>nline bancking, also known as internet banking, it is an electronic payment system that 
      enables customers of a bank or other financial institution to conduct a rang of financial
      transactions through the financial institution's website. The online banking system will
      typically connect to or be part of the core banking system operated by a bank and is in
      contrast to branch banking which was the traditional way customers accessed banking 
      services.
      <br>
      Today, many banks ae internet-ony institutions. These "virtual banks" have lower
      overhead costs than their brick-and-mortar counterparts.In the United States, many online
      banks are insured by the Federal Deposit Insurance Corporation(FDIC) and can offer the 
      same level of protection for the customers' funds as traditional bank.
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

    <script>
        let sliderImages = document.querySelectorAll('.slide'),
      arrowLeft = document.querySelector('#arrow-left'),
      arrowRight = document.querySelector('#arrow-right'),
      current=0;
    function reset(){
      for(let i=0; i < sliderImages.length; i++){
        sliderImages[i].style.display='none';
      }

    }
    function startSlide(){
      reset();
      sliderImages[0].style.display='block';
    }

    function slideLeft(){
      reset();
      sliderImages[current - 1].style.display='block';
      current--;
    }

    function slideRight(){
      reset();
      sliderImages[current + 1].style.display='block';
      current++;
    }

    arrowLeft.addEventListener('click',function(){
      if(current===0){
        current=sliderImages.length;
      }
      slideLeft();
    });

    arrowRight.addEventListener('click',function(){
      if(current===sliderImages.length - 1){
        current=-1
      }
      slideRight();
    });

    startSlide();
    
    </script>
</html>