function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var number = document.forms["myForm"]["lNumber"].value;
    var phNumber = document.forms["myForm"]["pNumber"].value;
    if (x == "" || number == "" || phNumber =="") {
        alert("Name must be filled out");
        return false;
    }
    else{
        alert(x + number);
        document.write (x);
        document.write (number);
        document.write (phNumber);
        // window.location.href = ;
    }
}