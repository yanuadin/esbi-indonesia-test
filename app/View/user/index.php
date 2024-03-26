<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?php __DIR__ ?>/../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container py-md-3">
    <div class="row mb-md-3">
        <div class="col-md">
            <a href="/logout" class="btn btn-danger float-end"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <a href="/user/create" class="btn btn-primary float-end"><i class="bi bi-plus"></i> Add</a>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach($data as $index => $user): ?>
                            <tr>
                                <th scope="row"><?= $index+1; ?></th>
                                <td><?= $user['name']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td>
                                    <a href="/user/edit/<?= $user['id'] ?>"><i class="bi bi-pencil text-primary d-inline"></i></a>
                                    <form action="/user/delete/<?= $user['id'] ?>" method="POST" class="d-inline">
                                        <a href="javascript:;" onclick="parentNode.submit();"><i class="bi bi-trash text-danger"></i></a>
                                        <input type="hidden"></input>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>