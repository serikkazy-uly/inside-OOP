<?php
// function dd($data){
//     var_dump($data);
// die;
// };

// $posts =
//     [
//         [
//             "id" => 1,
//             "title" => "lorem"
//         ],
//         [
//             "id" => 2,
//             "title" => "lorem2"
//         ],
//         [ 
//             "id" => 3,
//             "title" => "lorem3"
//         ],

//     ];
    $pdo = new PDO('mysql:host=mysql; dbname=app; charset=utf8;', 'user', 'secret');
    // var_dump($pdo);
    // die;

    $sql = 'SELECT * FROM posts';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // return $posts;

    // echo '<pre>';
    // var_dump($posts);
    // echo '</pre>';
    // die;

    // dd($posts);
    // die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1></h1>
</body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">MainPage</a>
            </li>

        </ul>

    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8-offset-md-2">
            <a href="#" class="btn btn-success">Add Post</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
    
                    <?php foreach ($posts as $post) : ?>
                        <tr>
                            <th scope="row">
                                <?= $post['id'] ?></th>
                            <td><?= $post['title'] ?> </td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


</html>