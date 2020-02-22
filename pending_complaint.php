<html>
<!-- <head>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<title>Complaint management System</title>-->
<body>
  <?php include ("header.php");?>

  <section id ="form" class="clearfix">
    <div class="container">
      <div id="accordion">
        <div class="card border-dark mb-3">
          <div class="card-header" id="heading">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="com-tab" data-toggle="tab" href="#com" role="tab"
                aria-controls="com" aria-selected="true">Complaint</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="sol-tab" data-toggle="tab" href="#sol" role="tab"
                aria-controls="sol" aria-selected="false">Sloution</a>
              </li>
              <li class="nav-item disabled">
                <a class="nav-link disabled"><span class="badge badge-primary">In progress</span></a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="card-body text-dark tab-pane fade show active" id="com" role="tabpanel" aria-labelledby="com-tab">
              <h6 class="card-title">Subcategory</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body text-dark text-dark tab-pane fade" id="sol" role="tabpanel" aria-labelledby="sol-tab">
              <h6 class="card-title">Subcategory</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            <small class="v-divider" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
            aria-controls="collapseOne" style="float: right;color: blue;cursor: pointer;">Comments</small>
            <small data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
            aria-controls="collapseOne" style="float: right;color: blue;cursor: pointer;">Write Comment</small>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <div class="card-body">
              <form>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <textarea type="text" rows="2" class="form-control" id="inputTitle" placeholder="Your comment"></textarea>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="heading" data-parent="#accordion">
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
              <p class="blockquote-footer card-text" style="float:right;">jubin</p>
            </div>
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
              <p class="blockquote-footer card-text" style="float:right;">jubin</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include("footer.php");?>
</body>
</html>
