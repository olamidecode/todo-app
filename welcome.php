<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
//collect user details 
//userid
//username
$user_id = $_SESSION["id"];
 $username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/0cd95c0d58.js" crossorigin="anonymous"></script>
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./css/stylewelcome.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> <?php echo $username;?>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="resetpass.php"><i class="fas fa-unlock"></i>&nbsp;Reset Password</a>
                    <a class="dropdown-item" href="logout.php"><i class="fab fa-angellist"></i>&nbsp;Log Out</a>
                    </div>
                </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="text-center text-light my-4">
            <h1 class="mb-4">Welcome <?php echo $username;?>, here is your to do list...</h1>

    </div>

    <div class="container">

        <div class="text-center text-light my-4">
            
            <form class="search" action="">
                <input class="form-control m-auto" type="text" name="search" placeholder="Search Todos">
            </form>
        </div>
        <ul class="list-group todos mx-auto text-light">
            <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Apply for Varsity</span>
                <i class="far fa-trash-alt delete"></i>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Apply for Varsity</span>
                <i class="far fa-trash-alt delete"></i>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>Apply for Varsity</span>&nbsp;<span>29-09-2019</span>
                <i class="far fa-trash-alt delete"></i>
            </li> -->
        </ul>
        <div class="text-center">
            <h3 class="form-header">Add Task</h3>
        </div>
        <!--Add Task Form-->
        <form class=" add form-inline mt-5 d-flex justify-content-between">
        
        <!-- <label class="sr-only" for="taskname">Name</label> -->
        <input type="text" class="form-control mb-2 mr-sm-2" id="taskname" placeholder="Add Task" name="add">

        <!-- <label class="sr-only" for="duedate">Due Date</label> -->
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
            <div class="input-group-text">Date</div>
            </div>
            
            <input type="date" class="form-control" id="duedate" name ="date" placeholder="Enter task due date">
        </div>

        <button type="submit" class="btn btn-primary mb-2" >Add Task</button>
        </form>


        <!-- <form action="" class="add text-center my-4">
            <label for="addToDo" class="text-light">Add a new todo...</label>
            <input type="text" class="form-control m-auto" id="addToDo" name="add">
            <label for="addDate" class="text-light">Due Date...</label>
            <input type="date" class="form-control m-auto" id="addDate" name="Date">
        </form> -->

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="./js/welcome.js"></script>
</body>
</html>