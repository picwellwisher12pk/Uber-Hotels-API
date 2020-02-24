<?php
    $servername = "localhost";
	$username = "amirhame_uberforhotels";
	$password = "R9g{c3r,yrzP";
	$dbname = "amirhame_uberforhotels";

	//buidling the connection between page and DB. 
	$conn = new mysqli($servername, $username, $password, $dbname);

	//checking the connection for any error, if error exists then 
	if($conn->connect_error)
	{
		die("CONNECTION FAILED " . $conn->connect_error . "<br />");
	}
	
    // 	Get All hotels APi
	if(isset($_GET['getHotels'])){
	    $jsonObj = $data = [];
	    $sql = "SELECT * FROM hotels";
	    $result = mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result) > 0){
	        // $jsonObj['status'] = true;
	        while($row = mysqli_fetch_assoc($result)){
	            array_push($data,$row);
	        }
	        $jsonObj = $data;
	    }else{
	        $jsonObj['data'] = "No recoed Found!!";
	        
	    }
	    echo json_encode($jsonObj);
	}
	// 	Get All hotels APi End
	
	// 	Get Single hotel APi
	if(isset($_GET['hotel_id'])){
	    $jsonObj  = [];
	    $id = $_GET['hotel_id'];
	    $sql = "SELECT * FROM hotels WHERE id = '$id'";
	    $result = mysqli_query($conn,$sql);
	    if(mysqli_num_rows($result) > 0){
	        // $jsonObj['status'] = true;
	        $jsonObj = mysqli_fetch_assoc($result);
	    }else{
	        $jsonObj['data'] = "No recoed Found!!";
	        
	    }
	    echo json_encode($jsonObj);
	}
	// 	Get Single hotel APi End
	
	// 	Add Hotel APi
// 	if(isset($_POST['hotel_email'])){
// 	    $jsonObj  = [];
// 	    $name = $_POST['hotel_name'];
// 	    $email = $_POST['hotel_email'];
// 	    $phone = $_POST['hotel_phone'];
// 	    $address = $_POST['address'];
// 	    $longitude = $_POST['longitude'];
// 	    $latitude = $_POST['latitude'];
// 	    $sql = "SELECT * FROM hotels WHERE id = '$id'";
// 	    $result = mysqli_query($conn,$sql);
// 	    if(mysqli_num_rows($result) > 0){
// 	        // $jsonObj['status'] = true;
// 	        $jsonObj = mysqli_fetch_assoc($result);
// 	    }else{
// 	        $jsonObj['data'] = "No recoed Found!!";
	        
// 	    }
// 	    echo json_encode($jsonObj);
// 	}
	// 	Add hotel APi End
	
	
?>