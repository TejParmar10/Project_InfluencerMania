
<?php
include 'connect.php';
$sql="select * from brand_login";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);
?>
<?php
include 'header.php';
?>
    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Let's Connect!</h1>
            <p class="text-lg text-grey mb-5">We Connect Innovative Brands with Influencers & Content Creators around the world..</p>
            <!-- <a href="#" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a> -->
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="../assets/img/slider-icon.png" alt="" width="450px">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Get Paid to Do What You Love</h5>
              <p>Profit from your passions by collaborating on stories that are closely aligned with your interests.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Develop Relationships with Brands</h5>
              <p>We help you define your SEO objective & develop a realistic strategy with you</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="../assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">View Your Performance</h5>
              <p>Easily follow your stats and performance results on all your social media channels.Register with InfluencerMania to get started.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <span class="subhead">About us</span>
          <h2 class="title-section">The number #1 Influencer Marketing Website</h2>
          <div class="divider"></div>

          <h5>100% Transparency</h5>
          <p>Being transparent is something we take pride in. You have the influencer rates upfront. You get what you see, and you pay what you see..</p>
          <h5>Data-backed Recommendations.</h5>
          <p>You get influencers recommended based on relevant performance data. They're all in for fresh concept and content in their influential categories.</p>
          <h5>Network of 10,000+ influencers</h5>
          <p>Be it beauty, lifestyle or sports niche influencers, we have them. Tech, gaming and finance too. Have the need for other creators?</p>
          <a href="about.php" class="btn btn-primary mt-3">Read More</a>
        </div>
        <div class="col-lg-6 py-3 wow fadeInRight">
          <div class="img-fluid py-3 text-center">
            <img src="../assets/img/home2.png" alt="about image" width="450px">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead"></div>
        <h2 class="title-section">Our Clients</h2>
        <div class="divider mx-auto"></div>
      </div>
        <div class="row">
          <?php
             include 'connect.php';
             $query = "select * from brand_login LIMIT 12";
             $query_run=mysqli_query($conn,$query);
             $check_brand=mysqli_num_rows($query_run)>0;
             if($check_brand)
             {
                 while($row=mysqli_fetch_assoc($query_run)){
          ?>
          <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
            <div class="features">
              <div class="header mb-3">
              <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['brand_logo'] ).'"alt="brand logo" style="width:100px; height:100px;">';?>
              </div>
              <br>
              <br>
              <br>
              <h5><?php echo $row['Name']?></h5>
            </div>
          </div>
          <?php
            }
        }
                ?>
                <!-- All Influencers -->
        </div>
        <div class="Influencer">
          <h1>All Influencers</h1>
  <table class="table">
  <?php
        include 'connect.php';
        $results_per_page=9;
          $query = "select * from login";
        $query_run=mysqli_query($conn,$query);
        $check_influencer=mysqli_num_rows($query_run)>0;
        $number_of_result=mysqli_num_rows($query_run);
  ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
      <th scope="col">Instagram Followers</th>
      <th scope="col">Twitter Followers</th>
    </tr>
  </thead>
  <tbody>
    <?php
  if($check_influencer)
        {
            while($row=mysqli_fetch_assoc($query_run)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['Name']?></th>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['category']?></td>
      <td><?php echo $row['instagram_followers']?></td>
      <td><?php echo $row['twitter_followers']?></td>
      <?php
            }
          }
          ?>
    </tr>
  </tbody>
</table>
        </div>
        <!-- All Brands -->
        <div class="Brand">
          <h1>All Brands</h1>
  <table class="table">
  <?php
        include 'connect.php';
        $results_per_page=9;
          $query = "select * from brand_login";
        $query_run=mysqli_query($conn,$query);
        $check_influencer=mysqli_num_rows($query_run)>0;
        $number_of_result=mysqli_num_rows($query_run);
  ?>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
      <th scope="col">Sales(in Billion)</th>
    </tr>
  </thead>
  <tbody>
    <?php
  if($check_influencer)
        {
            while($row=mysqli_fetch_assoc($query_run)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['Name']?></th>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['category']?></td>
      <td><?php echo $row['sales']?></td>
      <?php
            }
          }
          ?>
    </tr>
  </tbody>
</table>
        </div>
      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>