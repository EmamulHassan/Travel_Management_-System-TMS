function validateForm()
{
  var name= document.forms["orderInfo"]["name"].value;
  var phone= document.forms["orderInfo"]["phone"].value;
  var email= document.forms["orderInfo"]["email"].value;
  var dateorder= document.forms["orderInfo"]["dateorder"].value;
  var checkinTime= document.forms["orderInfo"]["checkinTime"].value;
  var room= document.forms["orderInfo"]["room"].value;

  if (name== "") {
    alert("Please Enter your Name!!!");
    return false;
  }

  if (!isNaN(name)) {
    alert("Name Cannot be Only Numbers!!!");
    return false;
  }


  if (phone.length!=11) {
    alert("Enter a Correct Phone Number!!!");
    return false;
  }
  

  // if (email== "") {
  //   alert("Please Enter your Email!!!");
  //   return false;
  // }


  if (dateorder== "") {
    alert("Please Enter the Date!!!");
    return false;
  }

  if (checkinTime== "selectcheckinTime") {
    alert("Please Select a Time Slot!!!");
    return false;
  }

  if (room== "selectroom") {
    alert("Please Select a Room!!!");
    return false;
  }

}

