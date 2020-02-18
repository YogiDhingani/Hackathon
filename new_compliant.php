<html>
<!-- <head>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<title>Complaint management System</title>-->
<body>
  <?php include ("header.php");?>
  <section id="form" class="clearfix">
    <div class="container">
      <div class="intro-img">
        <form>
          <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputTitle" placeholder="Title">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputCategory" placeholder="Category">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSubCategory" class="col-sm-2 col-form-label">Sub Category</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputSubCategory" placeholder="Sub Category">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-4">
              <textarea type="email" rows="5" class="form-control" id="inputDescription" placeholder="Description"></textarea>
            </div>
          </div>
            <div class="form-group row">
            <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputLocation" placeholder="Location">
            </div>
          </div>
           <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="exampleInputFile">Upload File</label>
              <div class="col-sm-4">
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
           </div>
            </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button style="background:#00428a" type="submit" class="btn btn-primary">Complaint</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include("footer.php");?>
  </body>
</html>
