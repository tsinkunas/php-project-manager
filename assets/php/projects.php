<?php
    require_once './assets/php/connect.php';
    $selectProjects = "SELECT sprint2.projects.id, 
        sprint2.projects.name,
        GROUP_CONCAT(CONCAT_WS(' ', sprint2.employees.name, sprint2.employees.surname) SEPARATOR ', ') AS 'fullname'
        FROM sprint2.Projects
        LEFT JOIN sprint2.employees
        ON sprint2.projects.id = sprint2.employees.proj_id
        GROUP BY sprint2.projects.id";
    $result = mysqli_query($conn, $selectProjects);
    if (mysqli_num_rows($result) > 0) {
        echo ('<table>');
        echo ('<tr><th>Project</th><th>Employees</th><th>Action</th></tr>');
        while ($row = mysqli_fetch_assoc($result)) {
            echo ('<tr>
            <td>' . $row['name'] . '</td>
            <td>' . $row['fullname'] . '</td>
            <td>' . "<button><a href='./assets/php/deletep.php?id=".$row['id']."'>Delete</a></button>" . 
            '</td></tr>');
        }
    } else {
        echo '0 results';
    }
    mysqli_close($conn);
?>
