<?php
include 'connection.php';
session_start();
if (isset($_POST['customerlogin'])) {
    $username=$_POST['customerloginusername'];
    $password=$_POST['customerloginpassword'];
    $_SESSION['cusername']=$username;
   

    $sql="SELECT * FROM userdetails WHERE Username='$username'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    if($row['Password']==$password)
    {
        echo"<script>alert('Welcome')</script>";
        echo"<script>window.open('customerhome.php','_self')</script>";
    }
    else
    {
        echo"<script>alert('Your Username and Password are not matched')</script>";
        echo"<script>window.open('customerloginpage.php','_self')</script>";
    }
}

if (isset($_POST['adminlogin'])) {
    $username=$_POST['adminusername'];
    $password=$_POST['adminpassword'];
    $_SESSION['adminname']=$username;
    $sql="SELECT * FROM admin WHERE Username='$username'";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    if($row['Password']==$password)
    {
        echo"<script>alert('Welcome')</script>";
        echo"<script>window.open('adminhome.php','_self')</script>";
    }
    else
    {
        echo"<script>alert('Your Username and Password are not matched')</script>";
        echo"<script>window.open('adminloginpage.php','_self')</script>";
    }
}


if(isset($_POST["addadmindeatails"]))
{
   
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $LName=$_POST['LName'];
    $Address=$_POST['Address'];
    $Mobile=$_POST['Mobile'];
    $Email=$_POST['Email'];
    
    
    $sql="INSERT INTO admin(Username,Password,LName,Address,Mobile,Email) values('$Username','$Password','$LName','$Address','$Mobile','$Email')";
    $result=$conn->query($sql);
    
    echo"<script>alert('Your Admin Account was Created Successully')</script>";
    
    echo"<script>window.open('adminloginpage.php','_self')</script>";
   
}
if(isset($_POST["adddeatails"]))
{
    $accounttype=$_POST['Accounttype'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Sir=$_POST['Sir'];
    $AccountName=$_POST['AccountName'];
    $FName=$_POST['FName'];
    $LName=$_POST['LName'];
    $Gender=$_POST['Gender'];
    $Married=$_POST['Married'];
    $DOB=$_POST['DOB'];
    $Occupation=$_POST['Occupation'];
    $Address=$_POST['Address'];
    $City=$_POST['City'];
    $Status=$_POST['Status'];
    $Country=$_POST['Country'];
    $Telephone=$_POST['Telephone'];
    $Mobile=$_POST['Mobile'];
    $Email=$_POST['Email'];
    $Nationality=$_POST['Nationality'];
    
    $sql="INSERT INTO userdetails(TypeOfAccount,Username,Password,Dear,AccountName,FirstName,LastName,Gender,MarriedStatus,DateOfBirth,Occupation,Address,City,State,Country,Telephone,Mobile,Email,Nationality) values('$accounttype','$Username','$Password','$Sir','$AccountName','$FName','$LName','$Gender','$Married','$DOB','$Occupation','$Address','$City','$Status','$Country','$Telephone','$Mobile','$Email','$Nationality')";
    $result=$conn->query($sql);
    $sql2="SELECT ID FROM userdetails WHERE Username='$Username'";
    $result2=$conn->query($sql2);
    $row2=$result2->fetch_assoc();
    echo"<script>alert('Your Account Number Is ".$row2['ID']."')</script>";
    $sql1="INSERT INTO depositandtranfer values('$Username','0.0') ";
    $result1=$conn->query($sql1);
    echo"<script>window.open('customerloginpage.php','_self')</script>";
   
}


if(isset($_POST["depositpayments"]))
{
    $benfibankname=$_POST['benfibankname'];
    $benfibankaccountno=$_POST['benfibankaccountno'];
    $ammount=$_POST['ammount'];
    $cuname=$_SESSION['cusername'];
    $sql0="SELECT * FROM depositandtranfer WHERE Username='$cuname'";
    $result0=$conn->query($sql0);
    $row0=$result0->fetch_assoc();
    if($row0['Balances']>$ammount)
    {
    $total=$row0['Balances']-$ammount;
    
    $sql1="UPDATE depositandtranfer SET Balances='$total' WHERE Username='$cuname'";
    $result1=$conn->query($sql1);
    $sql="INSERT INTO transfer(Username,BeneficiaryBankName,BeneficiaryAccountNumber,Amount) values('$cuname','$benfibankname','$benfibankaccountno','$ammount')";
    $result=$conn->query($sql);
    echo"<script>alert('Your Transfer Is Successfulled.')</script>";
    echo"<script>window.open('customerindex.php','_self')</script>";
    }
    else{
        echo"<script>alert('Your Account Balance Is Not Enought.')</script>";
        echo"<script>window.open('transfer.php','_self')</script>";
    }
}

if(isset($_POST["updatepassword"]))
{
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$cnewpassword=$_POST['cnewpassword'];
$cuname=$_SESSION['cusername'];
    $sql0="SELECT * FROM userdetails WHERE Username='$cuname'";
    $result0=$conn->query($sql0);
    $row0=$result0->fetch_assoc();

    if ($row0['Password']==$oldpassword) {
        if($newpassword==$cnewpassword)
        {
        $sql1="UPDATE userdetails SET Password='$cnewpassword' WHERE Username='$cuname'";
        $result1=$conn->query($sql1);
        echo"<script>alert('Your Are Successfulled.')</script>";
        echo"<script>window.open('customerloginpage.php','_self')</script>";
        }
        else
        {
        echo"<script>alert('Your New Password And Confirm Password Are Not Matched.')</script>";
        echo"<script>window.open('updatepassword.php','_self')</script>";
        }

    }
    else{
        echo"<script>alert('Your Password Is Wrong.')</script>";
        echo"<script>window.open('updatepassword.php','_self')</script>";
    }
}

if(isset($_POST["updateadminpassword"]))
{
$oldpassword=$_POST['oldadminpassword'];
$newpassword=$_POST['newadminpassword'];
$cnewpassword=$_POST['cnewadminpassword'];
$adminuname=$_SESSION['adminname'];
    $sql0="SELECT * FROM admin WHERE Username='$adminuname'";
    $result0=$conn->query($sql0);
    $row0=$result0->fetch_assoc();

    if ($row0['Password']==$oldpassword) {
        if($newpassword==$cnewpassword)
        {
        $sql1="UPDATE admin SET Password='$cnewpassword' WHERE Username='$adminuname'";
        $result1=$conn->query($sql1);
        echo"<script>alert('Your Are Successfulled.')</script>";
        echo"<script>window.open('adminloginpage.php','_self')</script>";
        }
        else
        {
        echo"<script>alert('Your New Password And Confirm Password Are Not Matched.')</script>";
        echo"<script>window.open('adminupdatepassword.php','_self')</script>";
        }

    }
    else{
        echo"<script>alert('Your Password Is Wrong.')</script>";
        echo"<script>window.open('adminupdatepassword.php','_self')</script>";
    }
}
?>