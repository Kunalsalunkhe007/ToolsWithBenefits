<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
    body,
html {
  height: 100%;
  margin: 0;
  padding: 0;
  font-family: "Helvetica", sans-serif;
  background: #1abc9c;
  background: linear-gradient(135deg, #1abc9c 0%, #8e44ad 100%);
}

h1 {
  font-size: 24px;
  margin: 10px 0 0 0;
  font-weight: lighter;
  text-transform: uppercase;
  color: #eeeeee;
}
h2 {
    color: #FF0000;
}

p {
  font-size: 12px;
  font-weight: light;
  color: #333333;
}

span a {
  font-size: 18px;
  color: #cccccc;
  text-decoration: none;
  margin: 0 10px;
  transition: all 0.4s ease-in-out;
}
span a:hover {
  color: #ffffff;
}

@-webkit-keyframes float {
  0% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
  50% {
    box-shadow: 0 25px 15px 0px rgba(0, 0, 0, 0.2);
    transform: translatey(-20px);
  }
  100% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
}

@keyframes float {
  0% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
  50% {
    box-shadow: 0 25px 15px 0px rgba(0, 0, 0, 0.2);
    transform: translatey(-20px);
  }
  100% {
    box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
    transform: translatey(0px);
  }
}
.container {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.avatar {
  width: 350px;
  height: 350px;
  box-sizing: border-box;
  border: 5px white solid;
  border-radius: 20%;
  overflow: hidden;
  box-shadow: 0 5px 15px 0px rgba(0, 0, 0, 0.6);
  transform: translatey(0px);
  -webkit-animation: float 6s ease-in-out infinite;
          animation: float 6s ease-in-out infinite;
}
.avatar img {
  width: 100%;
  height: auto;
}

.content {
  width: 100%;
  max-width: 600px;
  padding: 20px 40px;
  box-sizing: border-box;
  text-align: center;
}

.suppoprt-me {
  display: inline-block;
  position: fixed;
  bottom: 10px;
  left: 10px;
  width: 20vw;
  max-width: 250px;
  min-width: 200px;
  z-index: 9;
}
.suppoprt-me img {
  width: 100%;
  height: auto;
}
    </style>
</head>
<body>
	<div class="container">
	<div class="avatar">
		<a href="#">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png" alt="Skytsunami" />
		</a>
	</div>
	<div class="content">
		<h1>ThankYou <3</h1>
        <br>
		<h2>Under Developement</h2>
		</p>
	</div>
</div>
</body>
</html>