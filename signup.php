<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page </title>
    <link rel="stylesheet" href="./css/signup.css">
</head>

<body>

    <div class="container">
        <h2>Sign Up</h2>

        <form action="" method="get" name="regform" onsubmit="return validate()">
        <div class="transparent">
            <div class="form-item-username">
                <input type="text" name="rfirstName" id="rfirstName" placeholder="First Name">
                <span class="error-msg" id="rfirstnameError"></span>
                <input type="text" name="rlastName" id="rlastName" placeholder="Last Name">
                <span class="error-msg" id="rlastnameError"></span>
            </div>

            <div class="form-item">
                <input type="email" name="remail" id="remail" placeholder="Email">
                <span class="error-msg" id="remailError"></span>
            </div>

            <div class="form-item">
                <!-- add a password format display -->
                <span class="pwd-format">
                    8-15 AlphaNumeric Characters
                </span>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <!-- <span class="error-msg" id="rpasswordError"></span> -->
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password">
            </div>

            <div class="accept-box">
                <input type="checkbox" name="accept" id="accept">
                <p>I accept the <a href="#">Terms & Conditions</a></p>
            </div>

            <div class="form-btns">
                <button class="signup" type="submit" disabled><a href="./index.php">Submit</a></button>
                <div class="options">
                    Already have an account? <a href="../login.php">Login here</a>
                </div>
            </div>

        </form>
        <p>Copyright &copy; vegetable Delivery System</p>
    </div>
    </div>

  

    

</body>
<script type="text/javascript">

    

        const signup = document.querySelector(".signup");
        const termCond = document.querySelector("#accept");
        const password = document.querySelector("#password");
        const confirmPassword = document.querySelector("#confirmPassword");
        const pwd_format = document.querySelector(".pwd-format");
        // lets define a password format
        // The password should contain around 8-15 alhpanumeric character

        const passwordPattern = /^[a-zA-Z0-9]{8,15}$/

        password.addEventListener('focusin', () => {
            pwd_format.style.display = 'block';

            // now lets check the password entered by the user
            password.addEventListener('keyup', () => {
                if (passwordPattern.test(password.value)) {
                    password.style.borderColor = 'green' // if password pattern matches the border of password input will be green
                    pwd_format.style.color = 'green'
                } else {
                    password.style.borderColor = 'red'
                    pwd_format.style.color = 'red'
                }
            })
        })

        password.addEventListener('focusout', () => {
            pwd_format.style.display = 'none';
        })

        confirmPassword.addEventListener('focusin', () => {
            pwd_format.style.display = 'block';
            confirmPassword.addEventListener('keyup', () => {
                if (passwordPattern.test(confirmPassword.value) && password.value === confirmPassword.value) {
                    confirmPassword.style.borderColor = 'green' // if password pattern matches the border of password input will be green
                    pwd_format.style.color = 'green'
                } else {
                    confirmPassword.style.borderColor = 'red'
                    pwd_format.style.color = 'red'
                }
            })
        })

        confirmPassword.addEventListener('focusout', () => {
            pwd_format.style.display = 'none';
        })

        termCond.addEventListener('change', () => {
            if (termCond.checked === true) {
                signup.disabled = false;
            } else if (termCond.checked === false) {
                signup.disabled = true;
            }
        });

        // function validate(){
        //     var fname = document.regform.rfirstname.value.trim();
        //     var lname = document.regform.rlastname.value.trim();
        //     var email = document.regform.remail.value.trim();

        //     const namePattern = /^[a-z\sA-z]+$/;
        //     const emailPattern = /^([a-zA-Z0-9_.-]+@{1}([a-zA-Z]{2,4}))$/;

        //     //name validation
        //     if(fname == ""){
        //         document.getElementById("rfirstnameError").innerHTML="*enter first name";
        //         return false;
        //     }
        //     if(lname == ""){
        //         document.getElementById("rlastnameError").innerHTML="*enter last name";
        //         return false;
        //     }
        //     if(!namePattern.test(fname)){
        //         document.getElementById("rfirstnameError").innerHTML="*it is not a name";
        //         return false;
        //     }
        //     if(!namePattern.test(lname)){
        //         document.getElementById("rlastnameError").innerHTML="*it is not a name";
        //         return false;
        //     }
        

        //     //email validation
        //     if(email == ""){
        //         document.getElementById("remailError").innerHTML = "*enter your email";
        //         return false;
        //     }
        //     if(email.length<9){
        //         document.getElementById("remailError").innerHTML="*give proper email address";
        //         return false;
        //     }
        //     if(!emailPattern.test(email)){
        //         document.getElementById("remailError").innerHTML="*not a proper mail";
        //         return false;
        //     }
        //     return true;
        // }
    </script>    

</html>