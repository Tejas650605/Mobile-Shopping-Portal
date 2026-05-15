<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial;
    background:linear-gradient(to right,#4facfe,#00f2fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    background:white;
    padding:40px;
    width:350px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:10px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:12px;
    border:none;
    background:#111;
    color:white;
    border-radius:10px;
    font-size:18px;
}

button:hover{
    background:orange;
}

</style>

</head>

<body>

<div class="login-box">

<h1>User Login</h1>

<form>

<input type="email" placeholder="Enter Email">

<input type="password" placeholder="Enter Password">

<button>Login</button>

</form>

</div>

</body>
</html>