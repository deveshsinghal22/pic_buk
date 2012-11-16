<?php
$con = mysql_connect("localhost", "root", "");
	
	if (!$con) {
	    die('Could not connect: ' . mysql_error());
		}
	else
	    mysql_select_db("pic_book", $con);


	/** list users , 
	*   id , name, email, status and edit/delete options
	*/
		if(isset($_POST) && array_key_exists("userList", $_POST)) {
		$sno = 0;
		$select = mysql_query("select id,first_name,email,isActive from user where  type='n' and isActive= 'a'");
		if(mysql_num_rows($select)){
	?>
	<table border="1">
		<tr>
			<td>#</td>
			<td>id</td>
			<td>name</td>
			<td>email</td>
			<td>status</td>
			<td>Edit/Delete</id>
		</tr>

	<?php
		while($result = mysql_fetch_array($select)){
		$sno++;
		echo "<tr>";
		echo "<td>"; echo $sno; echo"</td>";
		echo "<td>"; echo $result['id']; echo"</td>";
		echo "<td>"; echo $result['first_name']; echo"</td>";
		echo "<td>"; echo $result['email']; echo"</td>";
		echo "<td>"; echo $result['isActive']; echo"</td>";
		echo "<td>"; ?> <a href="javascript:;" setid= <?php echo $result['id'];?> id="admin_edituser">Edit</a> / <a href="javascript:;" setid= <?php echo $result['id'];?>  id="admin_deleteuser">Delete</a><?php  echo"</td>";
		echo "</tr>";
		}
		echo "</table>";
	}
	else
		echo "no record found";
	}

	/** list new users , 
	*   id , name, email and approve/reject options
	*/
	if(isset($_POST) && array_key_exists("userNew", $_POST)) {
		$sno = 0;
		$select = mysql_query("select id,first_name,email from user where  isActive='p' and type='n'");
		if(mysql_num_rows($select)){
	?>
	<table border="1">
		<tr>
			<td>#</td>
			<td>id</td>
			<td>name</td>
			<td>email</td>
			<td>option</id>
		</tr>

	<?php
		while($result = mysql_fetch_array($select)){
			$sno++;
			echo "<tr>";
			echo "<td>"; echo $sno; echo"</td>";
			echo "<td>"; echo $result['id']; echo"</td>";
			echo "<td>"; echo $result['first_name']; echo"</td>";
			echo "<td>"; echo $result['email']; echo"</td>";
			echo "<td>";?> <a href="javascript:;" setid= <?php echo $result['id'];?> id="approve_user">Approve</a> / <a href="javascript:;" id="cancel_user">Cancel</a><?php  echo"</td>";
			echo "</tr>";
			}
			echo "</table>";
		}
		else
			echo "no record found";
	}

	// module for view user's new uploaded pics,  

	if(isset($_POST) && array_key_exists("newPicsList", $_POST)) {
		$sno = 0;
		$select = mysql_query("	SELECT user.first_name,  image.name, image.pid
								FROM image
								INNER JOIN user
								ON image.user_id=user.id
							    where status='p'");
		if(mysql_num_rows($select)){
		?>
			<table border="1">
			<tr>
			<td>#</td>
			<td>id</td>
			<td>pic</td>
			<td>Uploaded By</td>
			<td>option</id>
		</tr>
		<?php
		while($result = mysql_fetch_array($select)){
			$sno++;
			echo "<tr>";
			echo "<td>";echo $sno; echo "</td>";
			echo "<td>";echo $result['pid']; echo "</td>";
			echo "<td>"; ?><img src=../webroot/image/wall/<?php echo $result['name'];?> width="50" height="50"> <?php  echo "</td>";
			echo "<td>";echo $result['first_name']; echo "</td>";
			echo "<td>";?> <a href="javascript:;" id="approve">Approve</a> / <a href="javascript:;" id="cancle">Cancel</a><?php echo"</td>";
			echo "</tr>";
			}
			echo "</table>";
		}
		else{
			echo "NO RECORD FOUND";
		}
		
	}

	//module query for approve new user's request
	if(isset($_POST) && array_key_exists("user_id", $_POST)) {
		$update = " update user set isActive='a' where id='".$_POST['user_id']."'";
		mysql_query($update);
	 }

	//module query for cancel new user's request
	 if(isset($_POST) && array_key_exists("user_id1", $_POST)) {
		$update = " update user set isActive='r' where id='".$_POST['user_id1']."'";
		mysql_query($update);
	 }


	 //module query for edit  user's details
	 if(isset($_POST) && array_key_exists("edit_userid", $_POST)) {
		$select = mysql_query("select * from user where id='".$_POST['edit_userid']."'");
		$result = mysql_fetch_array($select); 
		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/
		?>
		<form name="edit_form" id="edit_form">
		<table class="edit_user_table">
			<tr>
				<td>Id</td>
				<td><?php echo $result['id']; ?></td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" id="edit_firstname" name="edit_firstname" value=<?php echo $result['first_name'] ;?> </td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" id="edit_lastname" name="edit_lastname" value=<?php echo $result['last_name'] ;?>></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					Male<input type ='radio' name = 'edit_gender' class="gender" value='m' id="edit_gender1" <?php if($result['gender'] == 'm') echo "checked";?>/>
             		Female<input type ='radio' name = 'edit_gender' class="gender" value='f' id="edit_gender2" <?php if($result['gender'] == 'f') echo "checked";?>/>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" id="edit_email" name="edit_email" value=<?php echo $result['email']; ?>></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					active<input type ='radio' name = 'edit_status' class="gender" value='a' id="edit_type1" <?php if($result['isActive'] == 'a') echo "checked";?>/>
         			inactive<input type ='radio' name = 'edit_status' class="gender" value='r' id="edit_type2" <?php if($result['isActive'] == 'r') echo "checked";?>/>
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" id="edit_contact" name="edit_contact" value=<?php echo $result['contact'] ;?>></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" id="edit_firstname" name="edit_firstname" value=<?php echo $result['address'] ;?>></td>
			</tr>
			<tr>
				<td>marital Status</td>
				<td>
				Single<input type ='radio' name = 'edit_marital' class="gender" value='m' id="edit_gender1" <?php if($result['marital_status'] == 's') echo "checked";?>/>
             	Married<input type ='radio' name = 'edit_marital' class="gender" value='f' id="edit_gender2" <?php if($result['marital_status'] == 'm') echo "checked";?>/>
				</td>
			</tr>

		</table>
<a href="javascript:;" id="editlink"><img src="./webroot/image/update.jpg" ></a>
	</form>
	<?php }



	 //module query for delete a user's profile 
	 if(isset($_POST) && array_key_exists("user_id1", $_POST)) {
		$update = " update user set isActive='r' where id='".$_POST['user_id1']."'";
		mysql_query($update);
	 }

?>


