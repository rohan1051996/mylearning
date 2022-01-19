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

<div class="container-xl">
  <div id="addEmployeeModal">
      <div class="modal-content">
      <form action="action.php" method="post">
        <input type="hidden" name="action" value="add">
        <div class="modal-header page-heading">            
          <h2 class="modal-title">Add Role</h2>
        </div>
        <div class="modal-body"> 
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Please enter role" class="form-control" value="">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status" id="status" class="form-control">
              <option value="">Select Status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>            
          </div>                 
        </div>
        <div class="modal-footer">
          <input type="button" onclick="window.location.href='index.php'" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add" onclick="return MyState();">
        </div>
      </form>
    </div>
  </div>
</body>
</html>

