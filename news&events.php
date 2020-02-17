<?php
    include "header.php"
?>

<div class="container">
    <h2>ADMIN</h2>
    <button type="button" class="btn btn-default btn-lg" id="myBtn">MODAL</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 20x;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding:20px 30px;">
            <div id="modal">
                <form id="post-event">
                <input type="file">
                <textarea placeholder="DISCRIPTION:"></textarea>
                <input type="submit" value="Post">
                </form>
            </div>
        </div>
        <div class="modal-footer" style="width:40px;">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div> 
</div>


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>



    <!-- <div class="banner news-events">
        <h1 class="main-heading">News & Events</h1>
    </div>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ADMIN UPLOAD</button>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">UPLOAD PHOTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form id="post-event">
                        <input type="file">
                        <textarea placeholder="DESCRIPTION:"></textarea>
                        <input type="submit" value="Post">
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div> -->
        <!-- <h2 class="page-head-title">News & Events</h2>
        <div class="page-inner-wrap two-col-wrap">
            <img class="image col-one" src="images/binagol.jpg" alt="">
            <div class="col-two">
                <div class="page-content-title">
                    <h3>Binagol</h3>
                </div>
                <div class="page-content-text">
                    <p>The town of Dagami is famous for its local delicacies called "Binagol" (made with sweetened mashed giant taro called talian and packed in half of a leaf-covered coconut shell)</p>
                </div>
            </div>     
        </div>

        <div class="action-wrap">
                <div class="like action-hover">Like</div>
                <div class="comment action-hover">Comment</div>
        </div>

        <div class="page-inner-wrap two-col-wrap">
            <img class="image col-one" src="images/moron-2.jpg" alt="">
            <div class="col-two">
                <div class="page-content-title">
                    <h3>Moron</h3>
                </div>
                <div class="page-content-text">
                    <p>sweetened sticky rice stick with peanuts and chocolate</p>
                </div>
            </div>
        </div>

        <div class="action-wrap">
            <div class="like action-hover">Like</div>
            <div class="comment action-hover">Comment</div>
        
        </div> -->  <!-- container bg-white" -->

<?php
    include "footer.php"
?>