<?php include_once 'header.php' ?>
<?php include_once 'config.php' ?>

<!-- <?php include_once 'registration_process.php' ?> -->

<?php 
if(isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    global $connection ;

    if(empty($_POST['email'])){
        echo 'please fill in the email';
    }   else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo 'a doua';
        
            } else {
                $email = filterInput($_POST['email']);
            }

    $query = "INSERT INTO carapp ('firstname', 'lastname', 'email', 'password') " ;
    $query .= " VALUES ('$first_name', '$last_name', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Failed to introduce into database' . mysqli_error($connection));
    }
}


?>




<div class="container">
    <div class="row">
        <div class="col-9 col-sm-8 col-md-7 col-lg-5 mx-auto border border-danger mt-5">
           <h2 class="name_form mb-5" >Registration Form</h2>

           <form action="register.php" method="POST">
               <div class="form-group mb-4">
                   <label class="form_label" for="first_name">Firstname</label>
                   <input type="text" name="firstname" class="form-control" placeholder="First Name">

                   <label class="form_label" for="last_name">Last Name</label>
                   <input type="text" name="lastname" class="form-control" placeholder="Last Name">

                   <label class="form_label" for="email">Email</label>
                   <input type="text" name="email" class="form-control" placeholder="Email">

                   <label class="form_label" for="password">Password</label>
                   <input type="password" name="password" class="form-control" placeholder="Password">


               </div>
             


               <input class="btn btn-success" type="submit" name="submit" value="Submit">

           </form>
        </div>
    </div>
</div>














<?php include_once 'footer.php' ?>