<?php
if(count($_POST)>0) {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if(!empty($name) && !empty($email) && !empty($school) && !empty($password) && !empty($password2)
    && $password == $password2){
        $conn = mysqli_connect("localhost","haystack","Haystack1!","haystack");
        if (isset($_POST['submit1'])){
            $sql = "INSERT INTO users (username, password, type) VALUES ('$email', '$password', 1)";
            $result = mysqli_query($conn, $sql);
            header('Location: student_home.html');
        } else if (isset($_POST['submit2'])){
            $department = $_POST['department'];
            if(!empty($department)){
                $sql = "INSERT INTO users (username, password, type) VALUES ('$email', '$password', 2)";
                $result = mysqli_query($conn, $sql);
                header('Location: researcher_home.html');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up | Haystack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-light">
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block text-light" href="index.html"><img src="logo.png" alt="HAYSTACK" width="180" height="26"></a>
            <a class="py-2 d-none d-md-inline-block text-light" href="researcher.html">For Researchers</a>
            <a class="py-2 d-none d-md-inline-block text-light" href="student.html">For Students</a>
            <a class="py-2 d-none d-md-inline-block text-light" href="login.php">Login</a>
            <a class="py-2 d-none d-md-inline-block btn btn-dark" href="signup.php">Sign Up</a>
        </div>
    </nav>
    <div class="position-relative overflow-hidden m-md-3 text-center text-dark">
        <div class="col-md-5 p-lg-3 mx-auto">
            <h1 class="display-4 font-weight-normal">Sign Up</h1>
        </div>
    </div>
    <section class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden text-dark">
        <div class="row justify-content-md-center">
            <div class="col-4">
                <h2>Student</h2>
                <div class="col-6 mx-auto">
                    <span style="font-size: 1em;">Sign up with your .EDU email or LinkedIn to find professors at your school looking to take on students.</span>
                </div>
            </div>
            <div class="col-4">
                <h2>Researcher</h2>
                <div class="col-6 mx-auto">
                    <span style="font-size: 1em;">Sign up through your academic institution.</span>
                </div>
            </div>
        </div>
        <br /><br /><br /><br /><br />
    </section>
    <div class="row" style="margin-top: 100px;">
        <div class="col text-center">
            <a href="#one" class="goto-next scrolly">Next</a>
        </div>
    </div>
    <section class="container" id="one">
        <br /><br /><br /><br />
        <div class="login-signup">
            <div class="row">
                <div class="col-sm-6 nav-tab-holder mx-auto">
                    <ul class="nav nav-fill nav-pills">
                        <li class="nav-item active col-sm-6">
                            <a class="nav-link active" href="#student" aria-controls="student" data-toggle="tab">Students Start Here</a>
                        </li>
                        <li class="nav-item col-sm-6">
                            <a class="nav-link" href="#researcher" aria-controls="researcher" data-toggle="tab">Researchers Start Here</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="student">
                    <div class="row">
                        <div class="col-sm-6 mobile-pull mx-auto">
                            <article>
                                <br />
                                <h3 class="text-center"><i class="fa fa-lock"></i> Student </h3>
                                <br />
                                <form class="needs-validation signup" method="post" novalidate>
                                    <div class="form-group">
                                        <input name="full-name" type="text" class="form-control" placeholder="Full Name" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid full name.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.+-]+\.edu$" type="email" class="form-control" placeholder=".EDU Email" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid .EDU email.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="school" type="text" class="form-control" placeholder="Specific School" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid school name.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="password1_1" name="password" type="password" class="form-control" placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid password.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="password1_2" name="password2" type="password" class="form-control" placeholder="Confirm Password" data-match="#password1_1" required>
                                        <div class="invalid-feedback">
                                            The passwords did not match.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit1" class="btn btn-success btn-block"  value="SUBMIT">
                                    </div>
                                </form>
                            </article>
                        </div>
                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of home -->
                <div role="tabpanel" class="tab-pane" id="researcher">
                    <div class="row">
                        <div class="col-sm-6 mobile-pull mx-auto">
                            <article>
                                <br />
                                <h3 class="text-center"><i class="fa fa-lock"></i> Researcher</h3>
                                <br />
                                <form class="needs-validation signup" method="post" novalidate>
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-3">
                                                <select name="title" class="form-control" required>
                                                    <option value = "0">Title</option>
                                                    <option value = "1">Prof.</option>
                                                    <option value = "2">Mr.</option>
                                                    <option value = "3">Mrs.</option>
                                                    <option value = "4">Ms.</option>
                                                    <option value = "5">Dr.</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please select a valid title.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <input name="full-name" type="text" class="form-control" placeholder="Name" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid full name.
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input name="email" type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.+-]+\.edu$" class="form-control" placeholder=".EDU Email" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid .EDU email.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="school" type="text" class="form-control" placeholder="Specific School" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid school name.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="department" type="text" class="form-control" placeholder="Department" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid department.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="password2_1" name="password" type="password" class="form-control" placeholder="Password" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid password.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input id="password2_2" name="password2" type="password" class="form-control" placeholder="Confirm Password" data-match="#password2_1" required>
                                        <div class="invalid-feedback">
                                            The passwords did not match.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit2" class="btn btn-success btn-block"  value="SUBMIT">
                                    </div>
                                </form>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
    </section>
    <br /><br /><br />
    <footer>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script>
        //override bootstrap
          $(document).ready(function() {
            $("#password1_1, #password1_2").change(function() {
              if($("#password1_1").val() === $("#password1_2").val()) {
                $("#password1_2")[0].setCustomValidity('');
              } else {
                $("#password1_2")[0].setCustomValidity('Passwords do not match');
              }
            });
            $("#password2_1, #password2_2").change(function() {
              if($("#password2_1").val() === $("#password2_2").val()) {
                $("#password2_2")[0].setCustomValidity('');
              } else {
                $("#password2_2")[0].setCustomValidity('Passwords do not match');
              }
            });

            $(".scrolly").scrolly({speed: 500});
          });
        </script>
    </footer>
</body>
</html>
