<html>
	<head>

	</head>
	<body>
		<div class="page">
			<div class="header">
				<div class="navigation">
					<ul>
						<li><a href="index.php"><img src="./webroot/image/home-button.gif" width="150px" height="45px" ></a></li>
						<li><a href="#"><img src="./webroot/image/gallery.jpg" width="150px" height="40px" ></a></li>
						<li><a id="upload" href="javascript:;" ><img src="./webroot/image/upload.jpg" width="150px" height="40px" ></a></li>
						<li><a href="?logout=1" ><img src="./webroot/image/logout.jpg" width="100px" height="42px"></a></li>
						<li class="search"><input type="text" placeholder="seach"></li>
					</ul>
				</div>
			</div>
			<div class="contain">
				<div class="left" id="left">
					<div class="image" id="image">
						<img  src="./webroot/image/profile/<?php echo $_SESSION['image'];?>"  width="220px" height="150px">
						<a href="javascript:;" id="change_profile">change profile image</a>
						
					</div>
					<div class="profile">
						<table>
							<tr> 
								<td>name
								</td>
								<td><?php echo $_SESSION['user']; ?>
								</td>
							</tr>
							<tr> 
								<td>gender
								</td>
								<td><?php echo $_SESSION['gender']; ?>
								</td>
							</tr>
							<tr> 
								<td>email
								</td>
								<td><?php echo $_SESSION['email']; ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id="pic" class="pic">hiiii</div>
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
			session_start();
			session_unset();
			session_destroy();
			header('location:?page=logout');
		}
		?>
	</body>
</html>