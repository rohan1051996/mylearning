<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="./bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row bg-primary">
			<div class="col-sm-4">
				<p><a href="#" class="text-primary">Primary link</a></p>
				<p><a href="#" class="text-secondary">Secondary link</a></p>
				<p><a href="#" class="text-success">Success link</a></p>
				<p><a href="#" class="text-danger">Danger link</a></p>
				<p><a href="#" class="text-warning">Warning link</a></p>
				<p><a href="#" class="text-info">Info link</a></p>
				<p><a href="#" class="text-light bg-dark">Light link</a></p>
				<p><a href="#" class="text-dark">Dark link</a></p>
				<p><a href="#" class="text-muted">Muted link</a></p>
				<p><a href="#" class="text-white bg-dark">White link</a></p>
			</div>
			<div class="col-sm-4">Rohan</div>
			<div class="col-sm-4">Rohan</div>
		</div>
		<div class="row"><div class="p-3 mb-2 bg-gradient-primary text-white">.bg-gradient-primary</div>
		<div class="p-3 mb-2 bg-gradient-secondary text-white">.bg-gradient-secondary</div>
		<div class="p-3 mb-2 bg-gradient-success text-white">.bg-gradient-success</div>
		<div class="p-3 mb-2 bg-gradient-danger text-white">.bg-gradient-danger</div>
		<div class="p-3 mb-2 bg-gradient-warning text-dark">.bg-gradient-warning</div>
		<div class="p-3 mb-2 bg-gradient-info text-white">.bg-gradient-info</div>
		<div class="p-3 mb-2 bg-gradient-light text-dark">.bg-gradient-light</div>
		<div class="p-3 mb-2 bg-gradient-dark text-white">.bg-gradient-dark</div>
		</div>
		<div class="row"><div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
		<div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
		<div class="p-3 mb-2 bg-success text-white">.bg-success</div>
		<div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
		<div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
		<div class="p-3 mb-2 bg-info text-white">.bg-info</div>
		<div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
		<div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
		<div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
		</div>

		<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  This is a secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  This is a info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  This is a light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  This is a dark alert—check it out!
</div>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<div class="card">
  <div class="card-header">
    Login
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>




</div>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="./bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>