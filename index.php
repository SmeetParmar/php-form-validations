<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitness Class Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body class="d-flex justify-content-center bg-info align-items-center vh-100">

    <div class="container-sm bg-white p-4">
        <div class="text-center"><span class="hr fs-1 text-primary">Fitness Class Registration Form</span></div>
        
        <form class="m-3" method="POST" action="validations.php">
            <div class="row mb-3">
                <div class="col">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control border border-dark" id="firstName" name="firstName">
                </div>
                <div class="col">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control border border-dark" id="lastName" name="lastName">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="cellNumber" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control border border-dark" id="mobileNumber" name="mobileNumber">
                </div>
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control border border-dark" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control border border-dark" id="dob" name="dob">
                </div>
                <div class="col">
                    <label class="form-label d-block">Gender</label>
                        <input class="form-check-input border border-dark" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                        <input class="form-check-input border border-dark ms-4" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                        <input class="form-check-input border border-dark ms-4" type="radio" name="gender" id="other" value="other">
                        <label class="form-check-label" for="other">Other</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="height" class="form-label">Height [CM]</label>
                    <input type="text" class="form-control border border-dark" id="height" name="height">
                </div>
                <div class="col">
                    <label for="weight" class="form-label">Weight [KG]</label>
                    <input type="text" class="form-control border border-dark" id="weight" name="weight">
                </div>
            </div>
            <div class="mb-3">
            <label for="batch" class="form-label">Batch</label>
                <select class="form-select border border-dark" id="batch" name="batch">
                    <option value="default">Select your batch</option>
                    <option>Early Morning [06:00 AM - 09:00AM]</option>
                    <option>Morning [09:00 AM - 12:00PM]</option>
                    <option>Afternoon [12:00PM - 03:00PM]</option>
                    <option>Late Afternoon [03:00PM - 06:00PM]</option>
                    <option>Evening [06:00PM - 09:00PM]</option>
                    <option>Night [09:00PM - 11:00PM]</option>
                </select>
            </div>
            <div class="mb-3">
                <input class="form-check-input border border-dark" type="checkbox" name="termsNConditions" value="termsNConditions">
                <label class="form-check-label ms-1" for="termsNConditions">Agree Terms and Conditions</label>
            </div>  
            <button type="submit" class="btn btn-primary mt-2" id="submitBtn" name="submitBtn">Submit</button>
        </form>
    </div>
  </body>
</html>