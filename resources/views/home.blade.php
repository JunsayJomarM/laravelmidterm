<html>
<head>
<style>
h1 {
  text-align: center;
}
table {
  border-spacing: 30px;
  margin-left: auto; 
  margin-right: auto;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #D3D3D3;
  
}

.button1:hover {
  background-color: #C0C0C0;
  color: white;
}
.btn {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
}
</style>
</head>
<body>
<h1>Home</h1>
<table style="width:50%">

<colgroup>
    <col span="1" style="background-color: #D6EEEE">
    <col span="1" style="background-color: pink">
    <col span="3" style="background-color: green">
  </colgroup>
  <tr>
    <th>First Name</th>
    <th>Middle Name</th> 
    <th>Last Name</th>
  </tr>
  <tr>
    <th>{{$name['fname']}}</th>
    <th>{{$name['mname']}}</th>
    <th>{{$name['lname']}}</th>
  </tr>
  <tr>
    <th>{{$name['fname2']}}</th>
    <th>{{$name['mname2']}}</th>
    <th>{{$name['lname2']}}</th>
  </tr>
  <tr>
    <th>{{$name['fname3']}}</th>
    <th>{{$name['mname3']}}</th>
    <th>{{$name['lname3']}}</th>
  </tr>
</table>
<br><br><br><br>
<h1>Post</h1>
<div class = "btn">
<a href="{{url('/post')}}"> <button class="button button1">click here.</button></a>
</div>
</body>
</html>
