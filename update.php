<!DOCTYPE html>
<?php  include 'db.php';
$id=$_GET['id'];
$sql="SELECT * FROM tasks WHERE id='$id';";
$rows= $db->query($sql);
$row=$rows->fetch_assoc();
if(isset($_POST['send'])){

    $task=$_POST['task'];
    $sql2="UPDATE tasks set name='$task' WHERE id='$id'";
    $db->query($sql2);
    header('location:index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>CRUD APP</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:70px">
            <center><h1>Update To Do List</h1></center>
                <div class="col-md-10 col-md-offset-1">
                        <table class="table">
                        <hr><br>
                                <form method="post">
                                    <div class="form-group">
                                        <label>Task Name</label>
                                        <input type="text" value="<?php echo $row['name']   ?>" required name="task" class="form-control">
                                    </div>
                                    <input type="submit" name="send" value="Add Task" class="btn btn-success">
                                </form>
                </sdiv>
        </div>
    </div>
</body>
</html>