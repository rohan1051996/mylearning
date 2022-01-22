function studentregistration(){
  var mobile = document.getElementById('mobile').value;
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var dob =  document.getElementById('dob').value;
  var Gender =  document.getElementById('gender').value;
  var address =  document.getElementById('address').value;
  var password =  document.getElementById('password').value;
  var status =  document.getElementById('status').value;
  
  
  
  if(mobile == ""){
    alert('Please enter  mobile number');
    document.getElementById('mobile').focus();
    return false;
  }else if(name == ""){
    alert('Please enter your name');
    document.getElementById('name').focus();
    return false;
  }else if(email == ""){
    alert('Please enter email address');
    document.getElementById('email').focus();
    return false;
  }else if(dob == ""){
    alert('Please enter date of birth');
    document.getElementById('dob').focus();
    return false;
  }else if(Gender == ""){
    alert('Please enter Gender');
    document.getElementById('gender').focus();
    return false;
  }else if(address == ""){
    alert('Please enter your address');
    document.getElementById('address').focus();
    return false;
  }else if(password == ""){
    alert('Please enter password');
    document.getElementById('password').focus();
    return false;
  }else if(status == ""){
    alert('Please enter status');
    document.getElementById('status').focus();
    return false;
  }else{
    return true;
    //document.getElementById("regForm").submit();
  }
}
