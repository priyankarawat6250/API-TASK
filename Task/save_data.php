<?php
$postData = json_decode(file_get_contents('php://input'), true);
header('Content-type: application/json');
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    if(!empty($postData)){
         
		//$response =  json_decode($postData);

		$data=[];
		foreach($postData as $key => $value) {

		  //To check file on third party server
			if(check_server_file($value)){

		    //To check if file already exists with same name will rename the file.
				$file_target_location = check_local_file($value, $folder);
                
		        //Upload file to folder 
				if(file_put_contents($file_target_location, file_get_contents($value))){
					$data['file'] = $actual_link.$file_target_location;
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
		    $last_id = $conn->insert_id;
		    
		    $data['id'] = $last_id;
		    
		  	$returnRes['status'] = "Success";
		  	$returnRes['statusCode'] = "200";
		  	$returnRes['message'] = "Record added successfully";
		  	$returnRes['data'] = $data;
		}else {
		    $returnRes['status'] = "Failed";
		  	$returnRes['statusCode'] = "404";
		  	$returnRes['message'] = "Please try again later";
		}

    }else{
        $returnRes['status'] = "Invalid";
        $returnRes['statusCode'] = "400";
    	$returnRes['message'] = "Json data not found";
    	
    }

    echo json_encode($returnRes);