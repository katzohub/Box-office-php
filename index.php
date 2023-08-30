<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>DU</title>
</head>
<body>
    
</body>
</html>
<?php
    $data = [
        [
            "Title" => "spider man homecoming",
            "Genre" => "Sci-Fi,Marvel",
            "Year"  => 2020,
            "Gross" => 880200
        ],
        [
            "Title" => "Avengers: Infinity War",
            "Genre" => "Sci-Fi,Marvel",
            "Year"  => 2021,
            "Gross" => 2052000
        ],
        [
            "Title" => "Avengers: Endgame",
            "Genre" => "Sci-Fi,Marvel",
            "Year"  => 2022,
            "Gross" => 1100000
        ],
        [
            "Title" => "Spider-Man: No Way Home",
            "Genre" => "Sci-Fi,Marvel",
            "Year"  => 2023,
            "Gross" => 1922000,
            
        ],
      
    ];
    echo '<div class="all-sum">';

     echo '<h1>Marvel Box-Office</h1>';
     
     echo '<table>';
     echo '<thead>';
     echo'<tr>';
    
     $keys = array_keys($data);

     for($i = 3; $i < count($data); $i++)
     {
         foreach($data[$keys[$i]] as $key => $value) 
         {
             echo"<th>". $key . " </th> ";
         }
        
     }
     echo'</tr>';
     
     echo '</thead>';
     echo '<tbody>';
    echo'<tr class="odd">';  
                echo'<td>' .$data[0]["Title"] .'</td> ';
                echo'<td>' .$data[0]["Genre"] .'</td> ';
                echo'<td>' .$data[0]["Year"] .'</td> ';   
                echo'<td>$ ' .number_format($data[0]["Gross"]) .'</td> ';
    echo'</tr>';
            echo'<tr>';
            echo'<td>' .$data[1]["Title"] .'</td> ';
            echo'<td>' .$data[1]["Genre"] .'</td> ';
            echo'<td>' .$data[1]["Year"] .'</td> ';   
            echo'<td>$ ' .number_format($data[1]["Gross"]) .'</td> ';
            echo '</tr>';
          echo'<tr class="odd">';
            echo'<td>' .$data[2]["Title"] .'</td> ';
            echo'<td>' .$data[2]["Genre"] .'</td> ';
            echo'<td>' .$data[2]["Year"] .'</td> ';   
            echo'<td>$ ' .number_format($data[2]["Gross"]) .'</td> ';
            echo '</tr>';
            echo'<tr>';
            echo'<td>' .$data[3]["Title"] .'</td> ';
            echo'<td>' .$data[3]["Genre"] .'</td> ';
            echo'<td>' .$data[3]["Year"] .'</td> ';   
            echo'<td>$ ' .number_format($data[3]["Gross"])  .'</td> ';
            echo '</tr>';
            echo '</tbody>';
  
            
            echo '<tfoot>';
            $sum = array_sum(array_column($data,'Gross'));
            echo '<td colspan="3" class="all-sum">Celková suma:</td>';

            echo '<td>$'.number_format($sum) .' </td>';
            echo '<tfoot>';
                    
           
            echo'</table> ';

            echo '<div>'

   
    ?>
        
