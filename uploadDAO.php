<?php 
	require_once "uploadclass.php";
	require_once "connection.php";
	
	class uploadDAO{
		
		public function  __construct() {}
		
		//Saves the file in the database
		public function uploadFile($uploadclassObj){
			$fileid = $uploadclassObj->getFileid();
			$upload_filename = $uploadclassObj->getFilename();
			
			$con = new connection();
			$connection  = $con->getConnection();
			$query = "insert into uploads values(null, '$fileid', '$upload_filename')";
			$result = $connection->query($query) or die(mysqli_error($connection));		
		}
		
		//uploads the file in the specified directory
		public function moveToDirectory($fileId, $filename){
			$error="";
			$target_dir = "uploads/";
			
			//creates target directory if doesn't exist
			if (!file_exists($target_dir)) {
				mkdir($target_dir);
			}

			$target_file = $target_dir . $filename;
			
			$FileType = pathinfo($target_file,PATHINFO_EXTENSION);//gets file extension	
			
			$newFilename = $fileId.".pdf";
			$target_file = $target_dir . $newFilename;
			$uploadOk = 1;//uploadOk will be set to 0 if an error occurs			
			 if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				return;
				$uploadOk = 0;
			}
			
			else if($FileType != "pdf")  {
				echo "Sorry, only PDF files are allowed.";
				$uploadOk = 0;
				return;				
			}


			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			}
			// if everything is ok, try to upload file
			 else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					{   
						echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded as ". $newFilename; 
						
					}
					   else {
						   $error.="Sorry, there was an error uploading your file.";
						   $_SESSION["upload_error"]=$error;
						   header("location:index.php");
						   return;
						}
					
				}

			
		}
	}
?>