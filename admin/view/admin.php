<html>
	<head>
	</head>
	<body>
		<div class="page">
			<div class="header">
				<div class="navigation">
					<ul>
						<li><a href=""><img src="./webroot/image/home-button.gif" width="150px" height="50px" title="go to home"></a></li>
						<li><a href="javascript:ajaxpage('view/view_pics.php', 'center');"><img src="./webroot/image/gallery.jpg" width="150px" height="50px50px" title="view all pics" ></a></li>
						<li><a  id="listUser" href="javascript:;"><img src="./webroot/image/list_users.jpg" width="150px" height="50px" title="list all users"></a></li>
						<li><a href="?logout=1" ><img src="./webroot/image/logout.jpg" width="100px" height="50px" title="logout"></a></li>
						<li class="search"><input type="text" placeholder="search"></li>
					</ul>
				</div>
			</div>
			<div class="contain">
				<div class="left">
					<div class="image">
						<img src="./webroot/image/none.jpg"  width="200px" height="150px">

					</div>
					<div class="profile">
						<table>
							<tr> 
								<td>Administration
								</td>
								<td>control Panel
								</td>
							</tr>
							<tr> 
								<td><a id="newUser" href="javascript:;">New User </a>
								</td>
								<td> *
								</td>
							</tr>
							<tr> 
								<td><a href="javascript:;" id="newPics">New Pics</a>
								</td>
								<td> *
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="right" id="center">
					<table bgcolor="grey">
						<tr>
							<td>1</td>
							<td>2</td>
						</tr>
						<tr>
							<td>1</td>
							<td>2</td>
						</tr>
						<tr>
							<td>1</td>
							<td>2</td>
						</tr>
					</table>
					</div>
				</div>
			</div>
			<div class="footer">
				All Right Reserved @Anktech.co.in
			</div>
		</div>
		<?php
		if(!empty($_GET['logout']))
		{
			ob_start();
			session_unset();
			session_destroy();
			header('location:?page=logout');
		}
		?>
	</body>
</html>