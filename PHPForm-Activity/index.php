<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form>
        <a href="htmlform.php" class="btn btn-primary">Add New Info</a>

        <table class="table table-striped">
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th> 
                <th scope="col">Japanese address</th>
                <th scope="col">About me</th>
                <th scope="col">Gender</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>

            <?php
            include 'dbconnect.php';
        
            try {
                $stmt = $conn->prepare('SELECT * FROM myinfo');
                $stmt->execute();
                $users = $stmt->fetchAll();

                foreach ($users as $user)
                {
                    echo '<tr>';
                    echo '<td>'.$user["name"].'</td>';
                    echo '<td>'.$user["email"].'</td>';
                    echo '<td>'.$user["jpaddress"].'</td>';
                    echo '<td>'.$user["aboutmyself"].'</td>';
                    echo '<td>'.$user["gender"].'</td>';
                    echo '<td>
                    <a href="edithtmlform.php?infoID='.$user["infoID"].'" class="btn btn-primary">Edit</a>
                    </td>';
                    echo '<td>
                    <a href="deletedata.php?infoID='.$user["infoID"].'" class="btn btn-danger">Delete</a>
                    </td>';
                    echo '</tr>';
                }
            }
            catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
            }
            ?>

        </table>
    </div>
    </form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>