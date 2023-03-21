<h1> 1istar-Usuario </h1> 
<?php> 
   $sql = "SELECT" FROM usuarios";

   $res = $conn->query($sql);
   
   $qtd = $res->num_rows;

   if($qtd > 0){
   	 while($row = $res->festch_object()){
   	 	print "<tr>"; <td>
          print <td> $row ->id; 
          print<td> $row ->nome;
          print <td> $row <td> email;
          print $row <td> data; 
          print "</tr>";
       }
        print  "</table>;
       }


   	}else{
   		print <p class='alert-danger'>"" Ainda não há nada";  </p>
  
    }
      ?>	