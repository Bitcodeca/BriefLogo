<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '/home/bitcodeweb/public_html/brieflogo/phpmailer/PHPMailerAutoload.php';

if (isset($_POST['p0'])) {
    if (empty($_POST['p0'])) {
        $data = array('success' => false, 'message' => 'Por favor, llene el formulario.');
        echo json_encode($data);
        exit;
    }
    
    $p0='';
    $p1='';
    $p2='';
    $p3='';
    $p4='';
    $p5='';
    $p6='';
    $p7='';
    $p8='';
    $p9='';
    $p10='';
    $p11='';
    $p12='';
    $p13='';


    if (isset($_POST['p0'])) {
        if (!empty($_POST['p0'])) {
            $p0=$_POST['p0'];
        }
    }
    if (isset($_POST['p1'])) {
        if (!empty($_POST['p1'])) {
            $p1=$_POST['p1'];
        }
    }
    if (isset($_POST['p2'])) {
        if (!empty($_POST['p2'])) {
            $p2=$_POST['p2'];
        }
    }
    if (isset($_POST['p3'])) {
        if (!empty($_POST['p3'])) {
            $p3=$_POST['p3'];
        }
    }
    if (isset($_POST['p4'])) {
        if (!empty($_POST['p4'])) {
            $p4=$_POST['p4'];
        }
    }
    if (isset($_POST['p5'])) {
        if (!empty($_POST['p5'])) {
            $p5=$_POST['p5'];
        }
    }
    if (isset($_POST['p6'])) {
        if (!empty($_POST['p6'])) {
            $p6=$_POST['p6'];
        }
    }
    if (isset($_POST['p7'])) {
        if (!empty($_POST['p7'])) {
            $p7=$_POST['p7'];
        }
    }
    if (isset($_POST['p8'])) {
        if (!empty($_POST['p8'])) {
            $p8=$_POST['p8'];
        }
    }
    if (isset($_POST['p9'])) {
        if (!empty($_POST['p9'])) {
            $p9=$_POST['p9'];
        }
    }
    if (isset($_POST['p10'])) {
        if (!empty($_POST['p10'])) {
            $p10=$_POST['p10'];
        }
    }
    if (isset($_POST['p11'])) {
        if (!empty($_POST['p11'])) {
            $p11=$_POST['p11'];
        }
    }
    if (isset($_POST['p12'])) {
        if (!empty($_POST['p12'])) {
            $p12=$_POST['p12'];
        }
    }
    if (isset($_POST['p13'])) {
        if (!empty($_POST['p13'])) {
            $p13=$_POST['p13'];
        }
    }

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';                      
    $mail->From = 'bitcodemail@gmail.com';
    $mail->FromName = 'Brief para Logo';
    $mail->AddAddress('bitcodemail@gmail.com');
    $mail->Subject = 'Respuesta de Brief para elaboración de logotipo';

    $mail->Body = 'Nombre 
        ' .$p0 . "\r\n\r\n" .'
    Descripción de la empresa 
        ' .$p1 . "\r\n\r\n" .'
    ¿Por qué motivo cree que los clientes eligen sus productos o servicios? 
        ' .$p2 . "\r\n\r\n" .'
    Eslogan de la empresa
        ' . $p13. "\r\n\r\n" .'
    ¿Qué valores defiende y promueve su empresa?
        ' .$p3. "\r\n\r\n" .'
    ¿Qué le gustaría que los demás vieran en su empresa? 
        ' .$p4 . "\r\n\r\n" .'
    ¿Quién es su competencia directa e indirecta? 
        ' .$p5 . "\r\n\r\n" .'
    ¿Cómo es el cliente potencial de los productos o servicios de la empresa? Segmentos de mercado en los que se quiere potenciar la imagen de la empresa, producto o servicio 
        ' .$p6 . "\r\n\r\n" .'
    ¿Qué idea inicial tiene sobre el logo, colores corporativos? Quizás haya logos de otras empresas (pueden ser de otros sectores) que sirvan como referencia de estilo 
        ' .$p7 . "\r\n\r\n" .'
    Elementos y colores que debe incluir el logo. (Ejemplo: Se debe de incluir un martillo verde porque es el símbolo de…) 
        ' .$p8 . "\r\n\r\n" .'
    Elementos que en ningún caso debe incluir el logo. (Ejemplo: Elementos que tenga mala imagen dentro del sector) 
        ' .$p9 . "\r\n\r\n" .'
    Otros datos que puedan ser importantes para el proceso de diseño.
        ' . $p10 . "\r\n\r\n" .'
    ¿Qué logos de otras empresas (pueden ser de otros sectores) le gusta?
        ' . $p11 . "\r\n\r\n" .'
   ¿Qué aplicaciones tendrá su logo? (Papelería, uniformes, página web, etc...)
        ' . $p12;

    if(!$mail->send()) {
        $data = array('success' => false, 'message' => 'No se pudo enviar. Mailer Error: ' . $mail->ErrorInfo);
        echo json_encode($data);
        exit;
    }

    $data = array('success' => true, 'message' => '¡Cuestionario enviado!');
    echo json_encode($data);

} else {
    $data = array('success' => false, 'message' => 'Por favor, termine de llenar el formulario.');
    echo json_encode($data);
}
?>