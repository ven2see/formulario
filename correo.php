<?php

// if (isset($_POSt['enviar'])) {
// 	if (!empty($_post['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
// 		$name = $_POST['name'];
// 		$asunto = $_POST['asunto'];
// 		$msg = $_Post['msg'];
// 		$email = $_POST['email'];
// 		$header = "from: noreply@example.com " . "\r\n";
// 		$header.= "Reply-To: noreply@example.com " . "\r\n";
// 		$header.= "X-Mailer: PHP/". phpversion();
// 		$mail = mail($email,$asunto,$msg,$header);

// 		if ($mail) {
// 			echo "<h4>Mail enviado exitosamente</h4>";
// 		}
// 	}
// }

 $destinatario = 'ernest.darwing@gmail.com'

 $nombre = $_POST['nombre'];
 $asunto = $_POST['asunto'];
 $mensaje = $_POST['mensaje'];
 $email = $_POST['email'];

 $header = "enviado de teiodomd";
 $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre

 mail($destinatario, $asunto, $mensajeCompleto, $header);
 echo "<script>alert('correo enviado extitoda')</script>";
 echo "<script> setTimeout(\"location.href='index.php'\", 1000) </script>";