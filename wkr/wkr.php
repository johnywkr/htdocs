<?php  

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$base = 'wkr_dev';


	$conn = @mysqli_connect($host, $user, $pass, $base);

	$error;
	
	if(mysqli_connect_errno()){
		$error = "<script>console.log('Error: ".addslashes(utf8_encode(mysqli_connect_error()))."Os dados locais serão apresentados.');</script>";
	}

    $query = "select * from cliente
    ";
    $query = mysqli_query($conn, $query);
    $atualizacao = "update cliente set nome= 'zoro' where id=2; ";
    $atualizacao = mysqli_query($conn, $atualizacao);

?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
      <th scope="col">Curso</th>
    </tr>
  </thead>
  <tbody>
  <?php  while ($registro=mysqli_fetch_assoc($query)){  ?> 
    <tr>
      <th scope="row"></th>
      <td>ID:<?php   echo $registro ['id'] ?></td>
      <td><?php   echo $registro ['nome'] ?></td>
      <td><?php   echo $registro ['idade'] ?></td>
      <td><?php   echo $registro ['curso'] ?></td>
    </tr>
 <?php } ?>   
  </tbody>

</table>