
<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b29f0890a17ad7";
$password = "4a61b4e1";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$data = json_decode(file_get_contents('php://input'), true);
error_log(print_r($data,true));

var_dump(  $result = $conn->query("SELECT * FROM menu"));

echo $data;

if ($data['queryResult']['intent']['displayName']=="Default Welcome Intent"){
    var_dump($result,true);




   /* $output = [
        "fulfillmentText" => "set developer channel",
        "fulfillmentMessages" => [
            [
                "text" => 
                [
                    "text" => 
                    [
                       "โกโก้".$result[0]->name
                    ]
                ]
            ]
        ]
    ];


   // echo json_encode($output);
}else{
   */
}




?> 