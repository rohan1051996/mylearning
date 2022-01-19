function MyFunction(){
  var name = document.getElementById('name').value;
  var status =  document.getElementById('status').value;

  if(name == ""){
    alert('Please enter role');
    document.getElementById('name').focus();
    return false;
  }else if(status == ""){
    alert('Please enter status');
    document.getElementById('status').focus();
    return false;
  }else{
    return true;
  }

}

function MyState(){
  var name = document.getElementById('name').value;
  var status =  document.getElementById('status').value;

  if(name == ""){
    alert('Please enter state name');
    document.getElementById('name').focus();
    return false;
  }else if(status == ""){
    alert('Please enter status');
    document.getElementById('status').focus();
    return false;
  }else{
    return true;
  }

}
function my voter id(){
  var name = document.getElementById('name').value;
  var father_name = document.getElementById('father_name').value;
  var Mobile_number = document.getElementById('Mobile_number').value;
  var Address =  document.getElementById('Address').value;
  var State =  document.getElementById('State').value;
  var District =  document.getElementById('District').value;
  var City =  document.getElementById('City').value;
  var Pincode =  document.getElementById('Pincode').value;
  var Age =  document.getElementById('Age').value;
  var Gender =  document.getElementById('Gender').value;
  var Adhar_number =  document.getElementById('Adhar_number').value;
  
  if(name == ""){
    alert('Please enter  your name');
    document.getElementById('name').focus();
    return false;
  }else if(father_name == ""){
    alert('Please enter your father_name');
    document.getElementById('father_name').focus();
    return false;
  }else if(Mobile_number == ""){
    alert('Please enter your Mobile_number');
    document.getElementById('Mobile_number').focus();
    return false;
  }else if(Address == ""){
    alert('Please enter Address');
    document.getElementById('Address').focus();
    return false;
  }else if(State == ""){
    alert('Please enter your State');
    document.getElementById('State').focus();
    return false;
  }else if(District == ""){
    alert('Please enter your District');
    document.getElementById('District').focus();
    return false;
  }else if(City == ""){
    alert('Please enter your City');
    document.getElementById('City').focus();
    return false;
  }else if(Pincode == ""){
    alert('Please enter your Pincode');
    document.getElementById('Pincode').focus();
    return false;
  }else if(Age == ""){
    alert('Please enter your Age');
    document.getElementById('Age').focus();
    return false;
  }else if(Gender == ""){
    alert('Please enter your Gender');
    document.getElementById('Gender').focus();
    return false;
  }else if(Adhar_number == ""){
    alert('Please enter your Adhar_number');
    document.getElementById('Adhar_number').focus();
    return false;
  }else{
    return true;
  }
}