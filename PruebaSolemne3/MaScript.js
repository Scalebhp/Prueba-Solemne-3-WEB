function myFunction() {
  var x, text;

  // Get the value of the input field with id="numb"
  x = document.getElementById("numb").value;

  // If x is Not a Number or less than one or greater than 10
  if (x=""|| x.length!==9){
      window.alert("Rut no es Valida,debe entrar 9 caracteres ejemplo:\\232114117");
      return false;
  } else{
         window.alert("RUT Valido OK");  
      return true;
  }
  
}
 

