<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Errors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100 bg-info">

    <div class="container-sm border border-2 p-3 bg-white">
        <?php
            
            //declaring empty array for storing errors...
            $errors = [];

            //function for checking if the input field contains digit or not...
            function containsDigits($input)
            {
                //pattern that checks the field must contain charaters...
                if(preg_match("/[^a-zA-Z-]/",$input)) 
                {
                    return false;
                } 
                else
                { 
                    return true;
                }
            }

            //function for checking if the input field contains special charaters or not...
            function containsSpecialCharacters($input)
            {
                //pattern that checks the field contains special charaters or not...
                if(preg_match('/[!@#$%^&*(),.?":{}|<>]/', $input))
                {
                    return false;
                } 
                else
                { 
                    return true;
                }
            }

            //function for cheking if the email is valid or not...
            function validEmail($email)
            {
                //php function for validating email...
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    return true;
                } 
                else 
                {
                    return false;
                }
            }

            //function for checking if the age is more than 18 or not...
            function checkAge($dob)
            {
                //variable for storing todays' date...
                $today = new DateTime();

                //variable that created new date according to date entered by user...
                $birthDate = new DateTime($dob);

                //variable which stores the difference of year from todays' date and date of birth using diff() function...
                $age = $today->diff($birthDate)->y;
                if($age>=18) 
                {
                    return true;
                } 
                else 
                {
                    return false;
                }
            }

            //function for checking mobile number has only digits and must be equal to 10 digits...
            function checkMobileNumber($mobileNumber)
            {
                //pattern that checks mobile number must contain 0 to 9 digits and must of 10 digits length not less than and not more than 10
                if(preg_match('/^[0-9]{10}$/', $mobileNumber))
                {
                    return true;
                } 
                else
                { 
                    return false;
                }
            }

            //function for checking weight or height has only digits and must be less than 3 digits...
            function checkHeightWeight($weightHeight)
            {
                //pattern that checks height or weight must contain 3 or less digits...
                if(preg_match('/^\d{1,3}$/', $weightHeight))
                {
                    return true;
                } 
                else
                { 
                    return false;
                }
            }

            //if submit button is clicked then code inside if() will run...
            if(isset($_POST['submitBtn']))
            {
                //checking if firstname is empty or not...
                if(empty($_POST['firstName']))
                {
                    //if firstname is empty, following error will be displayed...
                    $error[] = "<p>Please enter first name...</p>";
                }
                else
                {
                    //if it is not empty the it will check weather name given by user has digits or special characters in it or not...
                    if(!containsDigits($_POST['firstName']) || !containsSpecialCharacters($_POST['firstName']))
                    {
                        //if there is digits or special characters, following error will be displayed...
                        $error[] = "<p>First Name should not contain speacial characters or digits...</p>";
                    }
                }

                //checking if lastname is empty or not...
                if(empty($_POST['lastName']))
                {
                    //if lastname is empty, following error will be displayed...
                    $error[] = "<p>Please enter last name...</p>";
                }
                else
                {
                    //if it is not empty the it will check weather name given by user has digits or special characters in it or not...
                    if(!containsDigits($_POST['lastName']) || !containsSpecialCharacters($_POST['lastName']))
                    {
                        //if there is digits or special characters, following error will be displayed...
                        $error[] = "<p>Last name should not contain speacial characters or digits...</p>";
                    }
                }

                //checking if email is empty or not...
                if(empty($_POST['email']))
                {
                    //if email is empty, following error will be displayed...
                    $error[] = "<p>Please enter your email address...</p>";
                }
                else
                {
                    //checking if entered email is valid or not using validEmail function defined above...
                    if(!validEmail($_POST['email']))
                    {
                        //if it is invalid email, following error will be displayed...
                        $error[] = "<p>Please enter a valid email address...</p>";
                    }
                }

                //checking if date of birth is empty or not...
                if(empty($_POST['dob']))
                {
                    //if date of birth is empty, following error will be displayed...
                    $error[] = "<p>Please enter your date of birth date...</p>";
                }
                else
                {
                    //checking if age is more than 18 or not using checkAge function defined above...
                    if(!checkAge($_POST['dob']))
                    {
                        //if age is less than 18, following error will be displayed...
                        $error[] = "<p>Your age must be more than 18...</p>";
                    }
                }

                //checking if user has selected either of 2 radio buttons (Male or Female), using isset function...
                if(!isset($_POST['gender']))
                {
                    //if user has not selected anything, following error will be displayed...
                    $error[] = "<p>Please select your gender...</p>";
                }

                //checking if mobile number is empty or not...
                if(empty($_POST['mobileNumber']))
                {
                    //if mobile number is empty, following error will be displayed...
                    $error[] = "<p>Please enter your mobile number...</p>";
                }
                else
                {
                    //checking that user has entered valid mobile or not using checkMobileNumber function defined above...
                    if(!checkMobileNumber($_POST['mobileNumber']))
                    {
                        //if mobile number is invalid, following error will be displayed...
                        $error[] = "<p>Please enter a valid 10 digit mobile number...</p>";
                    }
                }

                //checking if weight is empty or not...
                if(empty($_POST['weight']))
                {
                    //if weight is empty, following error will be displayed...
                    $error[] = "<p>Please enter your Weight...</p>";
                }
                else
                {   
                    //checking if weight contains characters or special symbols in it or not using containsDigit and containsSpecialCharacters function defined above...
                    if(containsDigits($_POST['weight']) || !containsSpecialCharacters($_POST['weight']))
                    {
                        //if weight has characters, following error will be displayed...
                        $error[] = "<p>Weight cannot contain characters or special symbols...</p>";
                    }

                    //checking that user has entered valid weight or not using checkHeightWeight function defined above...
                    if(!checkHeightWeight($_POST['weight']))
                    {
                        //if weight is invalid, following error will be displayed...
                        $error[] = "<p>Weight cannot be more than 3 digits...</p>";
                    }
                }

                //checking if height is empty or not...
                if(empty($_POST['height']))
                {
                    //if height is empty, following error will be displayed...
                    $error[] = "<p>Please enter your Height...</p>";
                }
                else
                {
                    //checking if height contains characters or special symbols in it or not using containsDigit and containsSpecialCharacters function defined above...
                    if(containsDigits($_POST['height']) || !containsSpecialCharacters($_POST['height']))
                    {
                        //if height has characters, following error will be displayed...
                        $error[] = "<p>Height cannot contain characters or special symbols...</p>";
                    }

                    //checking that user has entered valid height or not using checkHeightWeight function defined above...
                    if(!checkHeightWeight($_POST['height']))
                    {
                        //if height is invalid, following error will be displayed...
                        $error[] = "<p>Height cannot be more than 3 digits...</p>";
                    }
                }

                //checking if user has selected a batch or not...
                if($_POST['batch']=='default')
                {
                    //if user has not selected batch, following error will be displayed...
                    $error[] = "<p>Please select your batch...</p>";
                }

                //checking if user has agreed to terms and conditions, using isset function...
                if(!isset($_POST['termsNConditions']))
                {
                    //if user has not agreed to terms and conditions, following error will be displayed...
                    $error[] = "<p>Please agree to Terms And Conditions...</p>";
                }

                //if there are not errors, then user will be redirected to confirmation page...
                if(empty($error))
                {
                    //redirecting using windows.location.href() function...
                    echo "<script>window.location.href='confirmation.php'</script>";
                    exit;
                }
                else
                {
                    //if there are errors, then displaying error using foreeach loops as $error is an array...
                    foreach($error as $singleError)
                    {
                        //displaying each error with red text and font size : 5....
                        echo "<div class='text-danger fs-4'>".$singleError."</div>";
                    }
                    //button which redirects user to previous page i.e. index page using window.history.back() function...
                    echo '<button onclick="window.history.back();" class="btn btn-primary" type="button">Go Back</button>';
                }
            }
            
        ?>
    </div>
</body>
</html>