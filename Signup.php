<!DOCTYPE html>
<html>
<head>
    <title>Sign-up Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-style: solid;
            border-radius: 25px;
            width: 50%;
            padding: 20px;
        }
        .input {
            margin: 10px;
            padding: 5px;
            width: 300px;
            border-style: solid;
            border-radius: 5px;
            height: 25px;
        }
        .submit {
            margin: 10px;
            padding: 10px;
            width: 320px;
            border-style: solid;
            border-radius: 5px;
            height: 35px;
            background-color: black;
            color: aliceblue;
            cursor: pointer;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <script>
        function validateForm() {
            var firstName = document.forms["signupForm"]["firstName"].value;
            var secondName = document.forms["signupForm"]["secondName"].value;
            var userName = document.forms["signupForm"]["userName"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;

            if (firstName == "" || secondName == "" || userName == "" || email == "" || password == "") {
                if (firstName == "") {
                    document.getElementById("firstNameError").innerHTML = "First Name is required";
                } else {
                    document.getElementById("firstNameError").innerHTML = "";
                }
                if (secondName == "") {
                    document.getElementById("secondNameError").innerHTML = "Second Name is required";
                } else {
                    document.getElementById("secondNameError").innerHTML = "";
                }
                if (userName == "") {
                    document.getElementById("userNameError").innerHTML = "User Name is required";
                } else {
                    document.getElementById("userNameError").innerHTML = "";
                }
                if (email == "") {
                    document.getElementById("emailError").innerHTML = "Email is required";
                } else {
                    document.getElementById("emailError").innerHTML = "";
                }
                if (password == "") {
                    document.getElementById("passwordError").innerHTML = "Password is required";
                } else {
                    document.getElementById("passwordError").innerHTML = "";
                }
                return false; 
            }
        }
    </script>
</head>
<body>
    <div>
        <h1>Sign-Up</h1>
        <p>To sign up fill in the required fields below:</p>
        <form name="signupForm" method="POST" action="sendtodb.php" onsubmit="return validateForm()">
            <input class="input" name="firstName" type="text" placeholder="First Name">
            <span id="firstNameError" class="error-message"></span>
            <input class="input" name="secondName" type="text" placeholder="Second Name">
            <span id="secondNameError" class="error-message"></span>
            <input class="input" name="userName" type="text" placeholder="User Name">
            <span id="userNameError" class="error-message"></span>
            <input class="input" name="email" type="email" placeholder="Email">
            <span id="emailError" class="error-message"></span>
            <input class="input" name="password" type="password" placeholder="Password">
            <span id="passwordError" class="error-message"></span>
            <input class="submit" type="submit">
        </form>
    </div>
</body>
</html>
