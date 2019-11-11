<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {

  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
</style>
</head>
<body>

<h2>User Information</h2>

<div class="card">
  <br><br>

    <img src="{{public_path().'/images/users/'.$image->image}}"  alt="...">
    <div class="container">
    <h4><b>Name :{{$user->name}}</b></h4>
    <p>Email :{{$user->email}}</p>
  
  </div>
</div>

</body>
</html>
