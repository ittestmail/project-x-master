<?php
include 'config.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchByName = $_POST['searchByName'];
$searchByGender = $_POST['searchByGender'];

## Search 
$searchQuery = " ";
if($searchByName != ''){
    $searchQuery .= " and (company like '%".$searchByName."%' ) ";
}
if($searchByGender != ''){
    $searchQuery .= " and (functie='".$searchByGender."') ";
}
if($searchValue != ''){
	$searchQuery .= " and (company like '%".$searchValue."%' or 
        firstname like '%".$searchValue."%' or lastname like '%".$searchValue."%'
          ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from users");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from users WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from users WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"company"=>$row['company'],
    		"firstname"=>$row['firstname'],
    		"lastname"=>$row['lastname'],
    		"username"=>$row['username'],
            "password"=>$row['password'],
            "email"=>$row['email'],
            "functie"=>$row['functie'],
            "created_at"=>$row['created_at']
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
