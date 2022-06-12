<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my app / dashboard</title>
</head>
<style>
    .wrapper{
        border: 3px solid red;
    }

</style>
<body>
    <div class="wrapper">
        <nav>
            <div>
                <a href="example15.php?id=profile">profile</a>
                <a href="example15.php?id=courses">coursres</a>
                <a href="example15.php?id=exam results">exam results</a>
                <a href="example15.php?id=fees">fees</a>
                <a href="example15.php?id=logout">logout</a>
            </div>
        </nav>
    </div> 

    
    
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    switch ($id) {
                        case 'profile':
                            echo "Your profile";
                            break;
                        case 'courses':
                            echo "Available courses.";
                            break;
                        case 'exam results':
                            echo "<table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>result</th>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>PHP</td>
                                        <td>24</td>
                                    </tr>
                                </table>";
                            break;
                        case 'fees':
                            echo "Your Fees";
                            break;
                        case 'logout':
                            echo "Your Logout";
                            break;
                        default:
                            echo "Invalid option";
                            break;
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>