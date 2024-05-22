

        <?php 
        session_start();
        include './partials/functions.php';

        $email ='';
        $errorMessage ='';

        if (isset($_POST['email'])) {
            $email = $_POST["email"];
            if(isset($_POST['email'])) {
                $email = $_POST["email"];

                if(check_email($email)) {
                    $_SESSION['email'] = $email;
                    header('Location: thankyou.php');
                    exit();
                } else {
                    $errorMessage = "L'email non è corretta. L'email deve contenere questi caratteri (.) e (@)";
                }
            }
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Email Validation Form</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email address: </label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <?php if ($errorMessage): ?>
            <div class="alert alert-danger mt-3"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        


    </div>
</body>
</html>