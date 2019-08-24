 <?php 

	/*$servername = "";
	$username = "";
	$password = "";
	$database_name = "";
	$id = 0;*/

	//connect to database

	$db = mysqli_connect('localhost','root','','Form');

	if ($db->connect_error) 
	{
		die("Connection failed: " . $db->connect_error);
	}
	else 
	{
		echo '"connection ok"';
	}
		 



	//if save button is clicked
	if(isset($_POST['save']))
		{
			$Username= $_POST['uname'];
			$Email_Address = $_POST['email'];
			$Password = $_POST['pwd'];
			$Confirm_Password = $_POST['c_pwd'];
			$First_Name = $_POST['fname'];
			$Last_Name = $_POST['lname'];
			$DOB = $_POST['dob'];
			$Phone_Number=$_POST['ph_Number'];
			$Discribe_you =$_POST['describe'];
			$Yourself =$_POST['yourself'];
			$Hobbies =$_POST['hobbies'];
			$About_Programming =$_POST['about'];
			$Gender =$_POST['gender'];
			$Skills = implode(',',$_POST['skill']);
			$Country =$_POST['country'];
			$Marital_Status =$_POST['status'];
			$Address =$_POST['add'];

			$query = "INSERT INTO registration (Name, Email, Password, CPassword, First_Name, Last_Name, DOB, Phone_Number, Discribe_you, Yourself, Hobbies, About_Programming, Gender, Skills, Country, Marital_Status, Address) VALUES ('$Username', '$Email_Address', '$Password', '$Confirm_Password', '$First_Name', '$Last_Name', '$DOB', '$Phone_Number', '$Discribe_you', '$Yourself', '$Hobbies', '$About_Programming','$Gender','$Skills', '$Country', '$Marital_Status', '$Address')";
			
			mysqli_query($db,$query);
			header('location: index.php'); //redirect to index page after inserting
		}
		$results = mysqli_query($db,"SELECT * FROM subscribe");
?>