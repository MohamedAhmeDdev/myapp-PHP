<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my app / dashboard</title>
</head>
<style>
    .wrapper a{
        text-decoration:none;
        font-size:20px;
        padding: 30px;
        text-align:center;
    }

    table{
        border:1px solid black;
        width:100%;
    }
    table,tr,th,td{
        border:1px solid black;
    }
    
   
</style>
<body>
    <div class="wrapper">
        <nav>
            <div>
                <a href="example15,0.php?id=profile">profile</a>
                <a href="example15,0.php?id=courses">coursres</a>
                <a href="example15,0.php?id=exam results">results</a>
                <a href="example15,0.php?id=fees">fees</a>
                <a href="example15,0.php?id=logout">logout</a>
            </div>
        </nav>
    </div>

    
    
            <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    switch ($id) {
                        case 'profile':
                           include "profile.php";
                            break;
                        case 'courses':
                            echo "<table>
                         <thead>

                            <tr>
                            <th>courses</th>
                            </tr>

                         </thead>
                         

                         <tbody>
                         <tr>
                         <td>java</td>
                         </tr>

                         <tr>
                         <td>html&css</td>
                         <tr>

                         <tr>
                         <td>database</td>
                         </tr>

                         <tr>
                         <td>php</td>
                         </tr>
                         </tbody>
                         
                            </table>";
                            break;
                        case 'exam results':
                            echo "<table>
                              <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>marks</th>
                                        <th>result</th>
                                    </tr>
                                </thead>
                                   <tbody>
                                    <tr>
                                        <td>PHP</td>
                                        <td>70/100</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>css</td>
                                        <td>50/100</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>java</td>
                                        <td>100/100</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>PHP</td>
                                        <td>90/100</td>
                                        <td>A</td>
                                    </tr>

                                    </tbody>
                                </table>";
                            break;
                        case 'fees':
                            echo "<table>
                            <thead>
                                  <tr>
                                      <th>simisters</th>
                                      <th>fees</th>
                                  </tr>
                              </thead>
                                 <tbody>
                                  <tr>
                                      <td>simister 1</td>
                                      <td>60,000</td>
                                  </tr>
                                  <tr>
                                      <td>simister 2</td>
                                      <td>40,000</td>
                                  </tr>
                                  <tr>
                                      <td>simister 3</td>
                                      <td>70,000</td>
                                  </tr>
                                  
                                  </tbody>
                              </table>";
                            break;
                        case 'logout':
                            echo " Logout";
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