<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3 mt-10">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Edit Profile</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Pilih foto profile:</label>
                            <input type="file" autocomplete="off" class="form-control" id="img" required name="gambar" />
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" placeholder="Nama" autocomplete="off" class="form-control" id="nama" required name="nama" />
                        </div class="form-group">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" placeholder="email" autocomplete="off" class="form-control" id="email" required name=email" />
                        </div>
                        <div class="form-group">
                            <label for="tlp">No Telphone:</label>
                            <input type="text" placeholder="Telphone" autocomplete="off" class="form-control" id="tlp" required name="tlp" />
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" style="margin-right:10px;">Edit</button>
                    </form>
                </div>
                <div class="panel-footer text-right">
                    <a href="index.php"><small>
                            <<<< </small></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>