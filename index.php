<?php
include('./db_config.php');
$sql="select * from todo_list";
$result=$conn->query($sql);
?>

<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
        <h3 class="text-center">TODO LIST</h3>
   <form action="action-todo.php" method="post" class="form-control p-3">
   <input type="text" class="form-control" name="id" id="" placeholder="Write Your Id Here">
    <input type="text" class="form-control" name="todo" id="" placeholder="Write Your List Here">
    <button type="submit" name="save" class="btn btn-primary mt-2">ADD TODO</button>
    <button type="submit" name='update' class="btn btn-success mt-2">UPDATE</button>
    <button type="submit" name='remove' class="btn btn-danger mt-2">Delete</button>

   </form>
    <h2 class="text-center">Record</h2>
   <table class="table table-striped  table-bordered">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
     <tr>
      <?php 
      while($row =$result->fetch_assoc()){ ?>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["name"]?></td>
      </tr>
    <?php
      }
      ?>
  </tbody>
</table>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>