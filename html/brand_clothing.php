<?php
// session_start();
include 'header.php';
?>
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="brands.php">Brands</a></li>
                <li class="breadcrumb-item active">clothing</li>
              </ul>
            </nav>
            <h1 class="text-center">Brands</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <form action="" class="form-search-blog">
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <!-- <input type="text" class="form-control" placeholder="Enter the name of the influencer"> -->
            </div>
          </form>
        </div>
        <!-- <div class="col-sm-2 text-sm-right">
          <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
        </div> -->
      </div>
      <div class="container py-5">
      <div class="row mt-5">
        <?php
        include 'connect.php';
        $results_per_page=9;
          $query = "select * from brand_login WHERE category='clothing'";
        $query_run=mysqli_query($conn,$query);
        $check_influencer=mysqli_num_rows($query_run)>0;
        $number_of_result=mysqli_num_rows($query_run);
        $number_of_page=ceil($number_of_result/$results_per_page);
        if(isset($_GET['page'])){
          $page=1;
        }
        else{
          $page=$_GET['page'];
        }
        $page_first_result=($page-1)*$results_per_page;
        if($check_influencer)
        {
            while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
              <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['brand_logo'] ).'"alt="Brand image" style="width:300px; height:300px;">';?>
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="selected_brand_profile.php?id=<?php echo $row['brand_id']?>" ><?php echo $row['Name']?></a></h5>
              <div class="post-date"><a href="#"><?php echo $row['category']?></a></div>
            </div>
          </div>
        </div>
        <?php
            }
          }
          ?>
      </div>
    </div>
  </div>
<?php
include 'footer.php';
?>