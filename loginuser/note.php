



// login user

if (isset($_POST['login_user'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM user WHERE email='$email' AND password ='$password'";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows(@results)) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Logged in successfully";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong username/password combimantion. please try again.");
        }
    }
}

?>