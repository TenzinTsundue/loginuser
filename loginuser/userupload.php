<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- CSS only -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
</head>
<body>

    <div class="container-fluid">
        <div class="uploadfilearea">
            <div class="row">
            <div class="col-6">
                    <h3>Upload your file here</h3><br>
                    <form enctype="multipart/form-data" action="userupload.php" method="POST">
                        
                        <div>
                            <label for="title"><strong>Title:</strong> </label><br />
                            <input type="text" class="form-control" name="title" required/>
                        </div>
                        <div>
                            <label for="author"><strong>Author:</strong></label><br />
                            <input type="text" class="form-control" name="author" required/>
                        </div>
                        <div>
                            <label for="detail"><strong>Details:</strong></label><br />
                            <textarea rows = "3" cols = "50" name = "detail" class="form-control"></textarea>
                            </textarea>
                        </div>
                        <div>
                            <p><strong>Select your file:</strong></p>
                            <input type="file" name="uploaded_file"></input><br />
                        </div>
                        <div>
                            <label for="file_type"><strong>File type:</strong></label><br />
                            <label class="block"><input class="form-check-inline" type="radio" name="file_type" value="document">Document</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="file_type" value="video">Video</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="file_type" value="audio">Audio</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="file_type" value="image">Image</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="file_type" value="other">Other</label>
                        </div>
                        <div>
                            <label for="department"><strong>Department:</strong></label><br />
                            <input class="form-check-inline" type="radio" name="department" value="Finance">Finance<br>
                            <input class="form-check-inline" type="radio" name="department" value="DIIR">DIIR<br>
                            <input class="form-check-inline" type="radio" name="department" value="Health">Health<br>
                            <input class="form-check-inline" type="radio" name="department" value="">Other <input type="text" name="other_reason" />​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
                        </div>
                        <div>
                            <label for="language"><strong>Language:</strong></label><br />
                            <label class="block"><input class="form-check-inline" type="radio" name="language" value="tibetan">Tibetan</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="language" value="english">Englsih</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="language" value="hindi">Hindi</label>
                            <label class="block"><input class="form-check-inline" type="radio" name="language" value="other">Other</label>
                        </div>
                        <div>
                            <label for="tags"><strong>Tags:</strong></label><br />
                            <input type="text" class="form-control" name="tags" required/>
                        </div>
                        <div>
                            <label for="categry"><strong>Category:</strong></label><br />
                            <input class="form-check-inline" type="radio" name="category" value="report">Report<br>
                            <input class="form-check-inline" type="radio" name="category" value="project">Project<br>
                            <input class="form-check-inline" type="radio" name="category" value="general">General<br>
                        </div>
                        
                        <br />
                        <button type="submit" class="btn btn-primary" name="login_user">UPLOAD</button><br />
                       
                    </form>
            </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>