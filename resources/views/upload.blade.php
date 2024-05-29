<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    
    <div class="jumbotron p-2 text-center text-white bg-primary">
        <div class="row">
          <div class="col-xl-2 col-lg-2 pt-2">
            <img src="ongc_logo.png" alt="" style="width: 35%;">
          </div>

          <div class="col">
            <h1>Welcome to IT Asset Management Portal</h1>
            <p>ONGC Mehsana</p>
          </div>

          <div class="col-xl-2 col-lg-2 p-4">
            <a href="./logout.php" class="btn btn-danger" role="button">Log Out</a>
          </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <form id="upload_form" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="font-weight-bold">Upload Details</label>
                        <input class="form-control-file" type="file" name="datacard_file" id="datacard_file" accept=".csv">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="jumbotron fixed-bottom m-2 p-2 text-center bg-dark text-white">
        <p>Design & Developed By: Infocom Service, Mehsana</p>
    </div>
</body>
</html>
