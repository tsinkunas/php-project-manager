<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbName = "sprint2";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS sprint2";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    // Create Projects table
    $tableProjects = "CREATE TABLE IF NOT EXISTS sprint2.Projects (
        id int AUTO_INCREMENT PRIMARY KEY,
        name varchar(20) NOT NULL,
        UNIQUE (name ASC)) ENGINE=InnoDB";
    
    if ($conn->query($tableProjects) === TRUE) {
        echo "Projects table created successfully";
    } else {
        echo "Error creating Projects table: " . $conn->error;
    }
    // Fill in the data in the Projects table
    $dataProjects = "INSERT INTO sprint2.Projects (name)
    VALUES
    ('Java'),
    ('PHP'),
    ('React')";

    if ($conn->query($dataProjects) === TRUE) {
        echo "Projects table filled successfully";
    } else {
        echo "Error filling the Projects table: " . $conn->error;
    }
    // Create Emloyees table
    $tableEmpl = "CREATE TABLE IF NOT EXISTS sprint2.Employees (
        id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name varchar(30) NOT NULL,
        surname varchar(30) NOT NULL,
        proj_id int,
        CONSTRAINT FOREIGN KEY (proj_id)
        REFERENCES Projects(id)
        ON DELETE SET NULL)";
    
    if ($conn->query($tableEmpl) === TRUE) {
        echo "Employees table created successfully";
    } else {
        echo "Error creating Employees table: " . $conn->error;
    }
    // Fill in the data in the Employees table
    $dataEmpl = "INSERT INTO sprint2.Employees (id,name,surname,proj_id)
    VALUES
    (1,'Ben','Benson',1),
    (2,'David','Davis',2),
    (3,'Dawn','Dawson',3),
    (4,'Evan','Evans',1),
    (5,'Harry','Harris',2),
    (6,'Harry','Harrison',3),
    (7,'Jack','Jackson',1),
    (8,'John','Jones',2)";

    if ($conn->query($dataEmpl) === TRUE) {
        echo "Employees table filled successfully";
    } else {
        echo "Error filling the Employees table: " . $conn->error;
    }
    
    // Create user 
    // Open page

    

    mysqli_close($conn);

    header("Location:./");
?>
