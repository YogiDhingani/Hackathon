<?php  
	include 'getConn.php';
	
       $s="select category_id , count(*) as number from complaint c group by category_id ";
                 $sql=mysqli_query($conn,$s);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Category', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($sql))  
                          {  
                                $s1="select name from category where category_id=".$row["category_id"];
                                $sql1=mysqli_query($conn,$s1);
                                $row1 = mysqli_fetch_array($sql1);
                               echo "['".$row1["name"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Complaint Category',  
                      is3D:true,  
                      //pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Complaint Category</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
	  </html>