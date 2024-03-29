<?php
include 'Board.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
    <title>My Memo System | Boards</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>

    <!-- table -->
    <div class="container">
        <div class="row">
            <h1 class="col-sm-3">Table</h1>
            <div class="col-sm-7"></div>
            <div class="col-sm-2"><a href="createNewBoard.php">Create New Boards</a></div>
        </div>
            
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">BoardName</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <!-- tbody -->
            <tbody>
            <?php
                $boards = Board::getAllBoard();

                foreach ($boards as $board) {
                    $id = $board["id"];
                    $boardName = $board["boardName"];
                    $description = $board["description"];
            ?>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $boardName; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><a class="btn btn-primary" href="editBoards.php?id=<?php echo $id; ?>">Edit</a></td>
                    <td>
                    <form action="BoardController.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-danger" name="deleteBoard">Delete</button>
                    </form>
                    </td>
                </tr>


            <?php } ?>
            </tbody>
        </table>
    </div>
<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>