<?php
// Template Name: Custom Registration Page
get_header();

if($_POST){
    $username = $wpdb->escape($_POST['txtUsername']);
    $email = $wpdb->escape($_POST['txtEmail']);
    $password = $wpdb->escape($_POST['txtPassword']);
    $ConfPassword = $wpdb->escape($_POST['txtConfirmPassword']);

    $error = array();

    if(strpos($username,' ') !== FALSE ){
        $error['username_space'] = "Username cant have Space";
    }

    if(empty($username)){
        $error['username_empty'] = "Username can not be empty";
    }

    if(username_exists($username)  ){
        $error['username_exists'] = "Username already exists";
    }
   
    if(!is_email($email)){
        $error['email_valid'] = "Email address is not valid";
    }

    if(email_exists($email)  ){
        $error['email_existence'] = "Email already already exists";
    }
    if(strcmp($password ,$ConfPassword) !== 0 ){
        $error['password'] = "Password mismatch";
    }

    if(count($error) == 0){
        wp_create_user($username, $password , $email);
        echo "user account created successfully"; 
        exit();
    }else{
        print_r($error);
    }

 

}



?>
<div class="hero-section">

<h2> Vendor Registration  </h2>

</div>
</header>
<main>

<div class="container">
    
<form action="" method="post">

<p>
    <label for="">Enter Username</label>
    <div>
        <input type="text" id="txtUsername" name="txtUsername" placeholder="Enter your username">
    </div>
</p>
<p>
    <label for="">Enter Email</label>
    <div>
        <input type="email" id="txtEmail" name="txtEmail" placeholder="Enter your Email">
    </div>
</p>
<p>
    <label for="">Enter Pasword</label>
    <div>
        <input type="password" id="txtPassword" name="txtPassword" placeholder="Enter your password">
    </div>
</p>
<p>
    <label for="">Confirm Pasword</label>
    <div>
        <input type="password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Confirm your password">
    </div>
</p>

<input type="submit" name="btnSubmit">

</form>

</div>
</main>


<?php get_footer() ?>