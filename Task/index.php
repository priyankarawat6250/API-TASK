<?php
include "connection.php";
include "functions.php";

$folder = "files/"; //Folder name Where Files store

$ch = curl_init('http://13.126.21.122:8080/api/get_api_data'); // Create a new cURL resource with URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //CURLOPT_RETURNTRANSFER to read output
curl_setopt($ch, CURLOPT_POSTFIELDS, []); // To pass POST data
$response = curl_exec($ch); // To execute our request
curl_close($ch); //cURL close
$response = json_decode($response); //get output in a $response variable

$data=[];
foreach($response as $key => $value) {  

  //To check file on third party server
	if(check_server_file($value)){

    //To check if file already exists with same name will rename the file.
		$file_target_location = check_local_file($value, $folder);

    //Upload file to folder 
		if(file_put_contents($file_target_location, file_get_contents($value))){
			$data['file'] = $file_target_location;
		}
    
	}else{
		$data[$key] = $value;
	}
}

//Convert data to Json to save response in DB
$insertData = json_encode($data);

//Insert Response into table
$sql = "INSERT INTO info (response) VALUES ('".$insertData."')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();







