
function validateForm(){
    //name validation 
    var name=document.forms["myForm"]["name"].value;
    var nameRegex=/^[a-zA-Z]+$/;
    if(name=="" || name.length<6 || !nameRegex.test(name)){
        alert("Please enter a valid name with 6 characters.");
        return false;
    }

        //Email validation
        var email=document.forms["myForm"]["email"].value;
        var emailRegex=/\S+@\S+\.\S+/;
        if(email=="" || !emailRegex.test(email)){
            alert("Please enter a valid email address.");
            return false;
        }
        // Phone Number validation
        var phone=document.forms["myForm"]["phone"].value;
        var phoneRegex=/^[0-9]{11}$/;
        if(phone=="" || !phoneRegex.test(phone)){
            alert("Please enter a valid Phone number with 10 digit.");
            return false;
        }

        // password validation
        var password=document.forms["myForm"]["password"].value;
        if(password=="" || password.length<6){
            alert("Please enter a valid password with length not less than 6 charecter");
            return false;
        }
        alert("Successfully submitted the registration form!")

}