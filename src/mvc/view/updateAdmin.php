<?php
include '../../processors/session.process.php';
include '../../processors/sessionsec.process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../../../includes/head.php';
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IR-Acer - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php
    include '../../../includes/sidebar.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- navbar -->
            <?php
            include '../../../includes/nav.php';
            ?>
            <!-- End of navbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Change Password</h6>
                    </div>
                    <div class="card-body p-0">

                        <!-- Nested Row within Card Body -->
                        <div class="row" >
                            <div class="col-lg-5 d-none d-lg-block bg-login-image" ></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Change Admin Password</h1>
                                    </div>
                                    <form action="../../processors/updatepw.process.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="currentPassword" name="currentPassword"
                                                   required placeholder="Current Password">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                       id="newPassword" name="newPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                       title="Must contain at least one number, one uppercase letter, one lowercase letter, and at least 8 or more characters"
                                                       required placeholder="New Password" >
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user"
                                                       id="repeatPassword" name="repeatPassword" required placeholder="Repeat New Password">
                                            </div>
                                        </div>
                                        <?php
                                        if (isset($_GET['result'])){
                                            if($_GET['result'] == "success"){
                                                ?>
                                                <a style="color: #28a745">Your password has been successfully updated!</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['result'] == "unsuccessful"){
                                                ?>
                                                <a style="color: #b21d22">Something went wrong, your password was not updated.</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['result'] == "nomatch"){
                                                ?>
                                                <a style="color: #b21d22">The New Passwords do not match! Your Password was not updated.</a> <br>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <?php
                                        if (isset($_GET['error'])){
                                            if($_GET['error'] == "emptyinput"){
                                                ?>
                                                <a style="color: #b21d22">Invalid Input! Do not leave any fields empty!</a> <br>
                                                <?php
                                            }
                                            else if ($_GET['error'] == "wrongpassword"){
                                                ?>
                                                <a style="color: #b21d22">Invalid Current Password. Password was not updated.</a> <br>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <br>
                                        <br>
                                        <button class="btn btn-primary btn-user btn-block" name=updatepw type="submit">Update Password</button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
        include '../../../includes/footer.php'
        ?>
    </div>
</div>

<?php
include '../../../includes/javascriptSrc.php'
?>

</body>

</html>