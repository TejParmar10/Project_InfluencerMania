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
                <li class="breadcrumb-item active">Influencer</li>
              </ul>
            </nav>
            <h1 class="text-center">Influencer</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <form action="#" class="form-search-blog">
            <div class="input-group">
              <div class="input-group-prepend">
                <select id="categories" class="custom-select bg-light">
                  <option>All Categories</option>
                  <option value="Clothing">Clothing</option>
                  <option value="Grooming">Grooming</option>
                  <option value="Tech">Tech</option>
                  <option value="Food">Food</option>
                </select>
              </div>
              <input type="text" class="form-control" placeholder="">
            </div>
          </form>
        </div>
        <div class="col-sm-2 text-sm-right">
          <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
        </div>
      </div>
      <div class="container py-5">
      <div class="row mt-5">
        <?php
        include 'connect.php';
        $query = "select * from login LIMIT 12";
        $query_run=mysqli_query($conn,$query);
        $check_influencer=mysqli_num_rows($query_run)>0;
        if($check_influencer)
        {
            while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
              <?php echo '<center><img src="data:image/jpg;base64,'.base64_encode( $row['influencer_image'] ).'"alt="influencers image" style="width:300px; height:300px;">';?>
              </div>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="userprofile.php?id=<?php echo $row['influencer_id']?>" ><?php echo $row['Name']?></a></h5>
              <div class="post-date"><a href="#"><?php echo $row['category']?></a></div>
            </div>
          </div>
        </div>
        <?php
            }
          }
          ?>
      </div>
      <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="influencers.php">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="influencers.php">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="influencers.php">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
<?php
include 'footer.php';
?>