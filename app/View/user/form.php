<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?php __DIR__ ?>/../css/bootstrap.min.css">
</head>
<body>
    <div class="container my-md-3">
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <form action="<?= empty($data) ? '/user/create' : '/user/edit/' . $data['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" <?= (!empty($data)) ? 'value="'. $data['name'] .'"' : '' ?>>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" <?= (!empty($data)) ? 'value="'. $data['email'] .'"' : '' ?>>
                    </div>
                    <?php if(empty($data)) : ?>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                    <?php endif ?>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>