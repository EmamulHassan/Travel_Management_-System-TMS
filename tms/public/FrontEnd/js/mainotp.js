function validateFormotp()
{
  var otp= document.forms["otpconfirm"]["otp"].value;


  if (otp == "" || otp != 123456) {
    alert("Please Enter the TrxID!!!");
    return false;
  }

  else if (otp== 123456) {
    alert("Order Placed Suceesfully!!! You will be Redirected to the Homepage Now.");
 	window.location = "index.php";
  }

 
}
