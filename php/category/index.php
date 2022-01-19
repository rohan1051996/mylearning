<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../common/default.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php 
 include('../common/config.php');
 $sql = "SELECT * FROM `category`";
 $result = $conn->query($sql);
?>
<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-6">
            <h2>Manage <b>Category</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="add.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Category</span></a>
          </div>
        </div>
      </div>
      <table class="table table-striped table-hover">
        <thead>
          <span style="color:green"><strong><?php if(isset($_GET['mes'])){ echo $_GET['mes'];}?></strong></span>  
          <tr>            
            <th>Id</th>
            <th>Name</th>
            <th>Status</th>
            <th>Created date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php 
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo ($row['status'] == 1)?'Active':'Inactive' ;?></td>
                <td><?php echo $row['created_date'];?></td>
                <td>
              <a href="edit.php?id=<?php echo $row['id'];?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
              <a href="action.php?id=<?php echo $row['id'];?>&action=delete" class="delete"><i class="material-icons" data-toggle="tooltip" onclick="return confirm('Are you sure want to delete?');" title="Delete">&#xE872;</i></a>
            </td>
            </tr>
          <?php }
        }
      ?>         
         
        </tbody>
      </table>
    </div>
  </div>        
</div>
</body>
</html>

