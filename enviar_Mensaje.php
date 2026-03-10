<?php

header('Content-Type: text/html; charset=utf-8');

// Datos 
$name = $_POST["name_surname"];
$email = $_POST["email"]; 
$subject = $_POST["subject"];            
$heightCustomTextarea = $_POST["heightCustomTextarea"];

// Parámetros de la función mail
$sendTo = "comunicacion@acingeconst.co.cu";


$subject_ = 'Mensaje enviado desde el Sitio Corporativo';
$subjectAcuse = "Respuesta Automática / Automatic Reply";

$emailTextAcuse = @"Acinox Ingenier&iacute;a,                                                                                                    <br/>
                    Se complace en notificarle que su mensaje ha sido recibido, nos pondremos en contacto con usted a la mayor brevedad posible.<br/>
                                                                                                                                                <br/>
                    ----------------------------------------------------------------------------------------------------------------------------<br/>
                                                                                                                                                <br/>
					Acinox Engineering,                                                                                                    <br/>
                    Your message has been received, we will get back to you as soon as possible.                                                <br/>";

  
$emailText = @"Detalle del mensaje: <br/>
              ============================= <br/>
			  <br/>
			  Nombre: $name <br/>
			  Correo electr&oacute;nico: $email <br/> 
			  Asunto: $subject <br/> 
			  <br/>
			  Mensaje: <br/>
			  ------- <br/>           
			  $heightCustomTextarea <br/>
			  ";


//--------------------------------------- Envio a Gmail
// para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

// dirección del remitente
$headers .= "From: $email \r\n";

//---------------------------------------- Acuse de recibo (Cliente)
// para el envío en formato HTML
$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";

// dirección del remitente
$headers1 .= "From: no-reply@acingeconst.co.cu \r\n";

		
$errorMessage = 'Ha ocurrido un error mientras se enviaba el mensaje. Por favor intente nuevamente.';

try
{

			// Envio a buzón ACINOX
			mail($sendTo, $subject_, $emailText, $headers); 
			
			//Acuse de recibo Cliente
			mail($email, utf8_decode($subjectAcuse), $emailTextAcuse, $headers1);
			

}
catch (Exception $e)
{
    echo $errorMessage;
}

?>
