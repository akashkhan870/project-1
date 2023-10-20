<?php include_once 'veiw_query.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="main-deshbord">
    <div class="row">
        <div class="deshbord col-md-2">
            <h1>deshbord</h1>
            <a href="home.php" class="btn btn-primary m-2 w-100">Home</a>
            <a href="add-student.php" class="btn btn-primary m-2 w-100">Add-New Student</a>
            <a href="index.php" class="btn btn-primary m-2 w-100">View All Student</a>
            <a href="view.php" class="btn btn-primary m-2 w-100">view</a>
            
        </div>
        <div class="text-area col-md-10">
            <h1>All Student Information Here...</h1>
            <table class="table table-sm table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Polytechnic_name</th>
                    <th scope="col">Motify</th>
                  </tr>
                </thead>
                <tbody>

                   <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <th scope="row"> <?php echo $row['id'];?> </th>
                    <td> <?php echo $row ['first_name'] . ' '. $row ['last_name'];?> </td>
                    
                    <td><?php echo $row ['phone']; ?> </td>
                    <td><?php echo $row['polytechnic_name']; ?> </td>
                    <td>
                      
                      <a href="#" class="btn btn-success default btn-sm text-light"><i class="fa-solid fa-eye"></i></a>
                      <a href="edit_data.php?id=<?php echo $row ['id'];?>" class="btn btn-primary default btn-sm text-light"><i class="fa-regular fa-pen-to-square"></i></a>
                      <a href="#" class="btn btn-danger default btn-sm text-light"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                    </td>
                  </tr>
                  <?php } ?>

                  
                </tbody>
              </table>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>