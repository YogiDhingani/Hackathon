<?php  

	
       $s="select category_id , count(*) as number from complaint c group by category_id ";
                 $sql=mysqli_query($conn,$s);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
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
                var chart = new google.visualization.BarChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
          
            <div id="piechart" class="container"></div>
            
      </body>  
	  </html>