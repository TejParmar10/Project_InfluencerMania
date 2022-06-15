<?php
session_start();
include "connect.php";

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Name','Instagram Followers','Twitter Followers'],
          <?php
          $query="select * from login WHERE category='$category'";
          $res=mysqli_query($conn,$query);
          while($data=mysqli_fetch_array($res))
          {
            $name=$data['Name'];
            $instgram_followers=$data['instagram_followers'];
            $twitter_followers=$data['twitter_followers'];
            // $influencer_category=$data['category'];
            ?>
            ['<?php echo $name;?>','<?php echo $influencer_followers;?>','<?php echo $twitter_followers;?>'],
            <?php
          }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Top Influencers',
            subtitle: 'Influencer Profile: 2022',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 1000px; height: 500px;"></div>
    <?php
    echo $category;
    ?>
  </body>
</html>
