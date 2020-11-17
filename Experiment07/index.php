<?php
$id = $_POST["id"];
$name = $_POST["name"];
$designation = $_POST["designation"];
$department = $_POST["department"];
$salary = $_POST["salary"];
$query = $_POST["query"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exp7";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($query == "CREATE") {
    $sql = "CREATE TABLE employee (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, designation VARCHAR(30) NOT NULL, department VARCHAR(50) NOT NULL, salary INT(10) NOT NULL)";
    if (mysqli_query($conn, $sql)) {
        echo "New table created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($query == "ADD") {
    $sql = "insert into  Employee (id, name, designation, department, salary)
            values ('$id', '$name', '$designation', '$department', '$salary')";

    if ($id == "" || $name == "" || $designation == "" || $department == "" || $salary == "") {
        echo ("Missing Information!");
    } else if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($query == "UPDATE") {
    $sql = "UPDATE `employee` SET name='$name' WHERE id='$id'";
    if ($id == "" || $name == "") {
        echo ("enter proper id and name to be updated");
    } else if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($query == "DELETE") {
    $sql = "DELETE FROM Employee WHERE id='$id'";
    if ($id == "") {
        echo ("enter proper id");
    } else if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if ($query == "SELECT") {
    $sql = "SELECT * FROM `employee`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            print $row["id"];
            print "\n";
            print $row["name"];
            print "\n";
            print $row["designation"];
            print "\n";
            print $row["department"];
            print "\n";
            print $row["salary"];
            printf("</br>");
        }
    }
}

mysqli_close($conn);
