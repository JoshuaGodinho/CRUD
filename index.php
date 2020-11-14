<!DOCTYPE html>
<?php  include 'db.php';

$sql="SELECT * FROM tasks";
$rows= $db->query($sql);
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
            <center><h1>To Do List</h1></center>
                <div class="col-md-10 col-md-offset-1">
                        <table class="table">
                        <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                        <hr><br>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Task</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="add.php">
                                    <div class="form-group">
                                        <label>Task Name</label>
                                        <input type="text" required name="task" class="form-control">
                                    </div>
                                    <input type="submit" name="send" value="Add Task" class="btn btn-success">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                        </div>
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Task</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php while($row=$rows->fetch_assoc()):     ?>   
                            <th scope="row"><?php  echo $row['id']   ?></th>
                            <td class="col-md-10"><?php echo  $row['name']   ?></td>
                            <td><a href="update.php?id=<?php echo $row['id'];    ?>" class="btn btn-success">Edit</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id'];    ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php endwhile;  ?>
                        </tbody>
                        </table>
                </div>
        </div>
    </div>
</body>
</html>