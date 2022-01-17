<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../common/default.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../common/validation.js"></script>
</head>
<body>
<?php 
if(isset($_GET['id'])){
 include('../common/config.php');
 $sql = "SELECT * FROM `user_role` WHERE id = '".$_GET['id']."'";
 $result = $conn->query($sql);
 $resx =  $result->fetch_all(MYSQLI_ASSOC);
?>
<div class="container-xl">
  <div id="addEmployeeModal">
      <div class="modal-content">
      <form action="action.php" method="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <div class="modal-header page-heading">            
          <h2 class="modal-title">Edit Role</h2>
        </div>
        <div class="modal-body"> 
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Please enter role" class="form-control" value="<?php echo $resx[0]['name'];?>">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" id="status" class="form-control">
              <option value="">Select Status</option>
              <option value="1" <?php if($resx[0]['status'] == 1){ echo 'selected';}?>>Active</option>
              <option value="0" <?php if($resx[0]['status'] == 0){ echo 'selected';}?>>Inactive</option>
            </select>            
          </div>                 
        </div>
        <div class="modal-footer">
          <input type="button" onclick="window.location.href='index.php'" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Update" onclick="return MyState();">
        </div>
      </form>
    </div>
  </div>
<?php }?>
</body>
</html>

