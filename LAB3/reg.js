function validateForm() {
  var x = document.forms["reg"]["fn"].value;
  if (x == "") {
    alert("First Name must be filled out");
    return false;
  }
   var y = document.forms["reg"]["ln"].value;
  if (y == "") {
    alert("Last Name must be filled out");
    return false;
  }
  var z = document.forms["reg"]["email"].value;
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  var c = document.forms["reg"]["cl"].value;
  if (c == "") {
    alert("Collage Name must be filled out");
    return false;
  }
  var n = document.forms["reg"]["phone"].value;
  if (n == ""|| isNaN(n)) {
    alert("Number must be filled out");
    return false;
  }
  if (c == "") {
    alert("Collage Name must be filled out");
    return false;
  }

}