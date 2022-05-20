<?php
session_start();
include 'header.php';
?>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,800);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip0045 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 380px;
  max-width: 480px;
  width: 100%;
  background: #ffffff;

  color: #000000;
}
figure.snip0045 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
figure.snip0045 > img {
  width: 50%;
  border-radius: 50%;
  border: 4px solid #ffffff;
  -webkit-transition: all 0.35s ease-in-out;
  transition: all 0.35s ease-in-out;
  -webkit-transform: scale(1.6);
  transform: scale(1.6);
  position: relative;
  left: -15%;
  z-index: 1;
}
figure.snip0045 figcaption {
  padding: 20px 30px 20px 20px;
  position: absolute;
  right: 0;
  width: 50%;
}
figure.snip0045 figcaption h2,
figure.snip0045 figcaption p {
  margin: 0;
  text-align: right;
  padding: 10px 0;
  width: 100%;
}
figure.snip0045 figcaption h2 {
  font-size: 1.3em;
  font-weight: 300;
  text-transform: uppercase;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}
figure.snip0045 figcaption h2 span {
  font-weight: 800;
}
figure.snip0045 figcaption p {
  font-size: 0.9em;
  opacity: 0.8;
}
figure.snip0045 figcaption .icons {
  width: 100%;
  text-align: right;
}
figure.snip0045 figcaption .icons i {
  font-size: 26px;
  padding: 5px;
  top: 50%;
  color: #000000;
}
figure.snip0045 figcaption a {
  opacity: 0.3;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}
figure.snip0045 figcaption a:hover {
  opacity: 0.8;
}
figure.snip0045 .position {
  width: 100%;
  text-align: right;
  padding: 15px 30px;
  font-size: 0.9em;
  opacity: 1;
  font-style: italic;
  color: #ffffff;
  background: #000000;
}
figure.snip0045.blue .position {
  background: #20638f;
}
figure.snip0045.red .position {
  background: #962d22;
}
figure.snip0045.yellow .position {
  background: #bf6516;
}
figure.snip0045.green .position {
  background: #1e8449;
}
figure.snip0045:hover > img,
figure.snip0045.hover > img {
  left: -12%;
}


/* Demo purposes only */
html {
  height: 100%;
}
body {
  background-color: #fff    ;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-flow: wrap;
  margin: 0;
  height: 100%;
}

</style>   
     <div class="container py-5">
              <div class="row mt-8">
                          <?php       
                                    include 'connect.php';
                                  $query = "select * from login ";
                                  $query_run=mysqli_query($conn,$query);
                                  $check_influencer=mysqli_num_rows($query_run)>0;
                                  if($check_influencer)
                                  {
                                      while($row=mysqli_fetch_assoc($query_run)){
                            ?>
                          <div class="col-md-4 mt-2">      
                                      <figure class="snip0045 red">
                                                    <figcaption>
                                                          <h2><?php echo $row['Name']?></h2>
                                                          <h4> Food is not just eating energy. It's an experience.</h4>
                                                          <div class="icons">
                                                                <a href="#"><i class="ion-ios-home"></i></a>
                                                                <a href="#"><i class="ion-ios-email"></i></a>
                                                                <a href="#"><i class="ion-ios-telephone"></i></a>
                                                          </div>  
                                                    </figcaption>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample7.jpg" alt="sample7"/> 
                                            <div class="position">
                                              <?php echo $row['category'];?>
                                            </div>
                                        </figure>
                            </div>
                                      <?php
                                      }
                                  }
                                  else{
                                    echo 'no results';

                                  }
                                      ?>
                    </div>
            </div>
    <?php
    include 'footer.php'
    ?>