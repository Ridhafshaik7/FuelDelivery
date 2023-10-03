<html>
<head>
<style>
body {
	background:#222;
}
ul, li {
	list-style:none;
	padding:0;
	margin:0;
}
a {text-decoration:none;}

.profile-wrapper {
	width:200px;
	position:relative;
	margin:50px auto;
}
.profile-wrapper::after {
	content: '';
	position: absolute;
	top: 20px;
	right: 10px;
	border-color: #333 transparent transparent;
	border-width: 6px;
	border-style: solid;
}
.profile-wrapper::before {
	content: '';
	position: absolute;
	top: 20px;
	right: 10px;
	border-color: #eee transparent transparent;
	border-width: 6px;
	border-style: solid;
}
.profile-wrapper:hover::after {
	border-color: #111 transparent transparent;	
}

.profile {
	padding:10px;
	border:1px solid #000;
	border-radius:3px;
	box-shadow:0 1px 0 #555 inset, 0 1px 7px #111;
	background:-webkit-linear-gradient(#222, #111);
}
.profile:hover {
	cursor:pointer;
	background:-webkit-linear-gradient(#1f1f1f, #0a0a0a);
}
.profile .name {
	font-size:12px;
	color:#fff;
	line-height:26px;
	margin-left:10px;
}
.profile .name:hover {
	color:#0088cc;
}
.profile img {
	width:25px;
	display:inline;
	float:left;
	border:1px solid #111;
	border-radius:3px;
	box-shadow:0 0 3px rgba(0, 0, 0, 0.5) inset;
}

/* hide menu */
.menu {
	display:none;
	clear:both;
	margin:20px 0 0 0;
}
.menu li {
	font-size:12px;
	margin:0;
  padding: 10px 4px;
}
.menu li a {
	color:#555;
}
.menu li:hover > a{
	color:#eee;
}

.menu li:hover{
	border-left: 1px solid #111;
  border-right: 1px solid #222;
  border-bottom: 1px solid #222;
  border-top: 1px solid #111;
  border-radius: 3px;
}

/* hover profile show menu */
.profile:hover .menu {
	display:block;
}
</style>
</head>
<body>
<ul class="profile-wrapper">
			<li>
				<!-- user profile -->
				<div class="profile">
					<img src="http://gravatar.com/avatar/0e1e4e5e5c11835d34c0888921e78fd4?s=80" />
					<a href="http://swimbi.com" class="name">swimbi.com</a>
					
					<!-- more menu -->
					<ul class="menu">
						<li><a href="#">Edit</a></li>
						<li><a href="#">Change Password</a></li>
						<li><a href="#">Log out</a></li>
					</ul>
				</div>
			</li>
		</ul>
</body>
</html>