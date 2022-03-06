<?php  

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'Banco_de_Brasilia';


	$conn = @mysqli_connect($host, $user, $pass, $base);

	$error;
	
	if(mysqli_connect_errno()){
		$error = "<script>console.log('Error: ".addslashes(utf8_encode(mysqli_connect_error()))."Os dados locais serão apresentados.');</script>";
        echo $error;
	}

    $query = "select * from usuario";
    $query = mysqli_query($conn, $query);
    $atualizao = "update usuario set nome= 'jack chinn' where id=2;";
    $atualizao = mysqli_query($conn, $atualizao);

   
    
    
?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php  while ($registro=mysqli_fetch_assoc($query)){  ?> 
    <tr>
      <th scope="row"></th>
      <td>ID:<?php   echo $registro ['id'] ?></td>
      <td><?php   echo $registro ['nome'] ?></td>
      <td><?php   echo $registro ['idade'] ?></td>
      
    </tr>
 <?php } ?>   
  </tbody>

</table>