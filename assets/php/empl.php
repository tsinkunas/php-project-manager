<?php
    require_once './assets/php/connect.php';
    $selectEmpl = "SELECT sprint2.employees.id,
        CONCAT_WS(' ', sprint2.employees.name, surname) as 'fullname',
        projects.name as project 
        FROM sprint2.Employees
        LEFT JOIN sprint2.projects
        ON sprint2.employees.proj_id = sprint2.projects.id
        ORDER BY sprint2.employees.id";
    $result = mysqli_query($conn, $selectEmpl);
    if (mysqli_num_rows($result) > 0) {
        echo ('<table>');
        echo ('<tr><th>Employee</th><th>Project</th><th>Action</th></tr>');
        while($row = mysqli_fetch_assoc($result)) {
            echo ('<tr>
            <td>' . $row['fullname']. '</td>
            <td>' . $row['project']. '</td>
            <td>');
            echo("<button><a href='./assets/php/deletee.php?id=".$row['id']."'>Delete</a></button>" . 
            '</td></tr>');
        }
    } else {
        echo '0 results';
    }

    mysqli_close($conn);
?>
