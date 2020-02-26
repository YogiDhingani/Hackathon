<html>
<?php include ("header.php");?>
<body>


  <section id ="form" class="clearfix">
    <div class="container" id="populate">
    </div>
  </section>
  <!-- <script type="text/javascript">
  $(document).ready(function(){
  $.ajax({
  url: 'getCom.php',
  type: 'POST',
  dataType: 'text',
  success: function(response){
  alert(response);
}
});
});
</script> -->
<script type="text/javascript">

$(document).ready(function() {
  $.ajax({
    url: 'getCom.php',
    type: 'POST',
    dataType: 'json',
    success: function(res) {
      //alert(res);
      //console.log(res);
      // var data = $.parseJSON(res);
      if(res!=null){
        $.each(res, function(k,v) {
          //console.log(v.title);
          $("#populate").append(`<div id="accordion${v.id}">
          <div class="card border-dark mb-3">
          <div class="card-header" id="heading">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" id="com-tab${v.id}" data-toggle="tab" href="#com${v.id}" role="tab"
          aria-controls="com${v.id}" aria-selected="true">Complaint</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="sol-tab${v.id}" data-toggle="tab" href="#sol${v.id}" role="tab"
          aria-controls="sol${v.id}" aria-selected="false">Sloution</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" id="doc-tab${v.id}" data-toggle="tab" href="#doc${v.id}" role="tab"
          aria-controls="doc${v.id}" aria-selected="false">Attachment</a>
          </li>
          <li class="nav-item disabled">
          <a class="nav-link disabled"><span class="badge badge-primary">${v.status}</span></a>
          </li>
          </ul>
          </div>
          <div class="tab-content">
          <div class="card-body text-dark tab-pane fade show active" id="com${v.id}" role="tabpanel" aria-labelledby="com-tab${v.id}">
          <h6 class="card-title">Subject: ${v.title} <strong>(${v.category})</strong></h6>
          <p class="card-text">${v.desc}</p>
          </div>
          <div class="card-body text-dark text-dark tab-pane fade" id="sol${v.id}" role="tabpanel" aria-labelledby="sol-tab${v.id}">
          <p class="card-text">${v.sol_det}</p>
          </div>
          <div class="card-body text-dark text-dark tab-pane fade" id="doc${v.id}" role="tabpanel" aria-labelledby="doc-tab${v.id}">
          <!-- append Attachment-->
          </div>
          </div>
          <div class="card-footer">
          <small class="text-muted">${v.date}</small>
          <small style="margin-left:10px;">Assigned to: ${v.manager}</small>

          <small class="v-divider" id="getComment${v.id}" onclick="showComment(${v.id})" data-toggle="collapse" data-target="#collapseOne${v.id}" aria-expanded="false"
          aria-controls="collapseOne${v.id}" style="float: right;color: blue;cursor: pointer;">Comments</small>

          <small data-toggle="collapse" data-target="#collapseTwo${v.id}" aria-expanded="false"
          aria-controls="collapseTwo${v.id}" style="float: right;color: blue;cursor: pointer;">Write Comment</small>
          </div>

          <div id="collapseTwo${v.id}" class="collapse" aria-labelledby="heading" data-parent="#accordion${v.id}">
          <div class="card-body">
          <form>
          <div class="form-group row">
          <div class="col-sm-6">
          <textarea type="text" rows="2" class="form-control" id="comment${v.id}" placeholder="Your comment"></textarea>
          </div>
          <div class="col">
          <input type="button" class="btn btn-primary" value="Send" onclick="sendComm(${v.id})">
          </div>
          </div>
          </form>
          </div>
          </div>

          <div id="collapseOne${v.id}" class="collapse" aria-labelledby="heading" data-parent="#accordion${v.id}">
          <!--append comments-->
          </div>
          </div>
          </div>`);
          if(v.comp_file=="No file found" && v.sol_file=="No file found"){
            $('#doc'+v.id).append(`<p class="card-text">No attachment found</p>`);
          }
          if(v.comp_file!="No file found"){
            $('#doc'+v.id).append(`<p class="card-text">Complaint file:<a href="${v.comp_file}"> GetFile</a></p>`);
          }
          if(v.sol_file!="No file found"){
            $('#doc'+v.id).append(`<p class="card-text">Solution file:<a href="${v.sol_file}"> GetFile</a></p>`);
          }
        });
      }
    }
  });
});

function sendComm(id){
  $.ajax({
    type: 'POST',
    url: 'writeComment.php',
    cache: false,
    data: {com: $('#comment'+id).val(), com_id: id},
    success: function(res) {
      if(res==="success"){
        setInterval('location.reload()', 500);
        alert("Comment added");
      }
    },
  });
}

var enabled = true;
function showComment(id){
  if(enabled){
    $.ajax({
      type: 'POST',
      url: 'getComment.php',
      cache: false,
      dataType: 'json',
      data: {com_id: id},
      success: function(res) {
        //console.log(res);
        if(res!=null){
          $.each(res, function(k,v) {
            $("#collapseOne"+id).append(`<div class="card-body">
            ${v.comment}
            <p class="blockquote-footer card-text" style="float:right;">${v.user}</p>
            </div>`);
          });
        }else {
          $("#collapseOne"+id).append(`<div class="card-body">
          No comments yet posted
          </div>`);
        }
      },
    });
    enabled=false;
  }
}

</script>
<?php include("footer.php");?>
</body>
</html>
