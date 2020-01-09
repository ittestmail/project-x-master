<?php
// Database details
$db_server   = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name     = 'projectx';

// Get job (and id)
$job = '';
$id  = '';
if (isset($_GET['job'])){
  $job = $_GET['job'];
  if ($job == 'get_companies' ||
      $job == 'get_company'   ||
      $job == 'add_company'   ||
      $job == 'edit_company'  ||
      $job == 'delete_company'){
    if (isset($_GET['id'])){
      $id = $_GET['id'];
      if (!is_numeric($id)){
        $id = '';
      }
    }
  } else {
    $job = '';
  }
}

// Prepare array
$mysql_data = array();

// Valid job found
if ($job != ''){
  
  // Connect to database
  $db_connection = mysqli_connect($db_server, $db_username, $db_password, $db_name);
  if (mysqli_connect_errno()){
    $result  = 'error';
    $message = 'Failed to connect to database: ' . mysqli_connect_error();
    $job     = '';
  }
  
  // Execute job
  if ($job == 'get_companies'){
    
    // Get companies
    $query = "SELECT * FROM users";
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
      while ($company = mysqli_fetch_array($query)){
        $functions  = '<div class="function_buttons"><ul>';
        $functions .= '<li class="function_edit"><a data-id="'   . $company['id'] . '" data-name="' . $company['company'] . '"><span>Edit</span></a></li>';
        $functions .= '<li class="function_delete"><a data-id="' . $company['id'] . '" data-name="' . $company['company'] . '"><span>Delete</span></a></li>';
        $functions .= '</ul></div>';
        $mysql_data[] = array(
          "company"          => $company['company'],
          "firstname"  => $company['firstname'],
          "lastname"    => $company['lastname'],
          "username"       => $company['username'],
          "password"   => $company['password'],
          "email"     => $company['email'],
          "functie"    => $company['functie'],
          "created_at"  => $company['created_at'],
          "functions"     => $functions
        );
      }
    }
    
  } elseif ($job == 'get_company'){
    
    // Get company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "SELECT * FROM users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
        while ($company = mysqli_fetch_array($query)){
          $mysql_data[] = array(
            "company"          => $company['company'],
            "firstname"  => $company['firstname'],
            "lastname"    => $company['lastname'],
            "username"       => $company['username'],
            "password"   => $company['password'],
            "email"     => $company['email'],
            "functie"    => $company['functie'],
            "created_at"  => $company['created_at']
          );
        }
      }
    }
  
  } elseif ($job == 'add_company'){
    
    // Add company
    $query = "INSERT INTO users SET ";
    if (isset($_GET['company']))         { $query .= "company         = '" . mysqli_real_escape_string($db_connection, $_GET['company'])         . "', "; }
    if (isset($_GET['firstname'])) { $query .= "firstname = '" . mysqli_real_escape_string($db_connection, $_GET['firstname']) . "', "; }
    if (isset($_GET['lastname']))   { $query .= "lastname   = '" . mysqli_real_escape_string($db_connection, $_GET['lastname'])   . "', "; }
    if (isset($_GET['username']))      { $query .= "username      = '" . mysqli_real_escape_string($db_connection, $_GET['username'])      . "', "; }
    if (isset($_GET['password']))  { $query .= "password  = '" . mysqli_real_escape_string($db_connection, $_GET['password'])  . "', "; }
    if (isset($_GET['email']))    { $query .= "email    = '" . mysqli_real_escape_string($db_connection, $_GET['email'])    . "', "; }
    if (isset($_GET['functie']))   { $query .= "functie   = '" . mysqli_real_escape_string($db_connection, $_GET['functie'])   . "', "; }
    if (isset($_GET['created_at'])) { $query .= "created_at = '" . mysqli_real_escape_string($db_connection, $_GET['created_at']) . "'";   }
    $query = mysqli_query($db_connection, $query);
    if (!$query){
      $result  = 'error';
      $message = 'query error';
    } else {
      $result  = 'success';
      $message = 'query success';
    }
  
  } elseif ($job == 'edit_company'){
    
    // Edit company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "UPDATE users SET ";
      if (isset($_GET['company']))         { $query .= "company         = '" . mysqli_real_escape_string($db_connection, $_GET['company'])         . "', "; }
      if (isset($_GET['firstname'])) { $query .= "firstname = '" . mysqli_real_escape_string($db_connection, $_GET['firstname']) . "', "; }
      if (isset($_GET['lastname']))   { $query .= "lastname   = '" . mysqli_real_escape_string($db_connection, $_GET['lastname'])   . "', "; }
      if (isset($_GET['username']))      { $query .= "username      = '" . mysqli_real_escape_string($db_connection, $_GET['username'])      . "', "; }
      if (isset($_GET['email']))    { $query .= "email    = '" . mysqli_real_escape_string($db_connection, $_GET['email'])    . "', "; }
      if (isset($_GET['functie']))   { $query .= "functie   = '" . mysqli_real_escape_string($db_connection, $_GET['functie'])   . "', "; }
      
      $query .= "WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query  = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
      }
    }
    
  } elseif ($job == 'delete_company'){
  
    // Delete company
    if ($id == ''){
      $result  = 'error';
      $message = 'id missing';
    } else {
      $query = "DELETE FROM users WHERE id = '" . mysqli_real_escape_string($db_connection, $id) . "'";
      $query = mysqli_query($db_connection, $query);
      if (!$query){
        $result  = 'error';
        $message = 'query error';
      } else {
        $result  = 'success';
        $message = 'query success';
      }
    }
  
  }
  
  // Close database connection
  mysqli_close($db_connection);

}

// Prepare data
$data = array(
  "result"  => $result,
  "message" => $message,
  "data"    => $mysql_data
);

// Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;
?>