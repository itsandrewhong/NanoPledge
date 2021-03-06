<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NanoPledge</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

      <script src="https://brainblocks.io/brainblocks.min.js"></script>
  </head>

  <body>

    <?php

    	 $campaign_name = $_POST['campaign_name'];
       $funding_goal = $_POST['funding_goal'];
    	 $nano_address = $_POST['nano_address'];
    	 $campaign_desc = $_POST['campaign_desc'];


    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">NanoPledge</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <div class = "row">
            <div class = "col-md-1">
            <h1 class="mt-4"><img src = "campPic.png"></h1>
            </div>
            <div class = "col-md-11">
              <h1 class="mt-4">&nbsp;<?php echo ucfirst($campaign_name); ?></h1>
            </div>
          </div>

          <hr>

          <!-- Date/Time -->

          <p>Posted on <?php echo date("m/d/Y") ?></p>

          <hr>

          <!-- Post Content -->
          <p class="lead">
            <b>Description of Cause:</b><br>
            <?php echo $campaign_desc; ?>
          </p>

          <p class="lead">
            <b>Goal:</b><br>
            <?php echo $funding_goal; ?> Nano
          </p>

          <p class="lead">
            <b>Amount raised:</b>
            <div id = "amount">0</div><br>
          </p>

          <p class="lead">
            <b># of Pledgers:</b>
             <div id = "pledges">0</div>
          </p>

          <hr>

          <!-- Comments Form
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        -->

          <!-- Single Comment -->
          <div class="media mb-4">
            <div class="media-body">
              <h5 class="mt-0">Supporters</h5>
              Thanks to supporters like you we can keep pushing forward!
            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">



          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search For Campaigns</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <div class="card my-4">
        <h5 class="card-header">Donate with Nano cryptocurrency</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12">
              <ul class="list-unstyled mb-0">

                <div class="text-center">

                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-success btn-send" data-toggle="modal" data-target="#myModal">Help this Cause!</button>


                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">Donate to this Cause!</h4> -->
                      </div>
                      <div class="modal-body">
                         <center>
                          <div class="form-group">
                            <label>Enter Nano Amount: </label>
                            <input type="number" id="donation" onchange="myFunction()" placeholder="Enter amount: " ></input>
                          </div>
                          <div id="nano-button"></div>
                        </center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>


                </div>





              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <!-- <br> -->
                      <!-- <br> -->
                      <!-- <br> -->
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget
      <div class="card my-4">
        <h5 class="card-header">You May Also Like</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div> -->
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




<script>
         function myFunction() {
             // Pull Selected Value
             var value = document.getElementById("donation").value * 1000000;
             var curr = "rai";

             if (value == "...") {
                 return;
             }

             if (value == "1") {
                 value = 1000;
                 curr = "rai";
             }

             // Pull destination
             var dest = 'xrb_1urzqm8pt8z45wgez9jpnipttbsjpjrmkbx46ofytz6b48yjh3xru986gpd4';

             // Remove old button
             document.querySelector('#nano-button').innerHTML = ''

             // Render the RaiBlocks button
             brainblocks.Button.render({

                 // Pass in payment options
                 style: {
                     expanded: true
                 },

                 payment: {
                     destination: dest,
                     currency:    curr,
                     amount:      value
                 },

                 onToken: function(data) {
                     console.log('Started', data.token);
                 },

                 // Handle successful payments
                         onPayment: function (data) {

                     console.log('Payment successful!', data.token);

                     var rawAmount  = document.getElementById("amount").innerHTML;
                     var rawPledges = document.getElementById('pledges').innerHTML;

                     var newAmount  = parseInt(rawAmount)  + (value/1000000);
                     var newPledges = parseInt(rawPledges) + 1;

                     document.getElementById("amount").innerHTML = newAmount;
                     document.getElementById("pledges").innerHTML = newPledges;

                 }

             }, '#nano-button');
         }
         </script>

</body>

</html>
