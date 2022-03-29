
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
<h1>Post</h1>
<table style="width:50%">

<colgroup>
    <col span="1" style="background-color: #D6EEEE">
    <col span="1" style="background-color: pink">
    <col span="3" style="background-color: green">
  </colgroup>
  <tr>
    <th>Gloc</th>
    <th>Juan</th> 
    <th>Justine</th>
  </tr>
  <tr>
    <th>{{$info['gender']}}</th>
    <th>{{$info['gender1']}}</th>
    <th>{{$info['gender2']}}</th>
  </tr>
  <tr>
    <th>{{$info['age']}}</th>
    <th>{{$info['age1']}}</th>
    <th>{{$info['age2']}}</th>
  </tr>
  <tr>
    <th>{{$info['sports']}}</th>
    <th>{{$info['sports1']}}</th>
    <th>{{$info['sports2']}}</th>
  </tr>
</table>
<br><br><br><br>
<h1>Home</h1>
<div class = "btn">
<a href="{{url('/home')}}"> <button class="button button1">click here.</button></a>
</div>
</body>
</html>