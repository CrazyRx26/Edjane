<<<<<<< HEAD
<?php

if  ($_SERVER["REQUEST METHOD"] == "POST") {
    
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]));
    $phone = strip_tags($_POST["phone"]);
    $message = strip_tags(trim($_POST["message"]));

    $destinatario = "edjaneoliveiraborges@gmail.com"; //email real

    $assunto = "Contato pelo Site";

    $body = "Mensagem de contato do site\n\n";
    $body .= "Nome: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Telefone". $phone . "\n";
    $body .= "Mensagem:\n". $assunto . "\n";

    $headers = "From: edjane@techfixbr.com\n";
    $headers .= "Reply-To: " . $email . "\n";

    //send

    if (mail($destinatario, $assunto, $body, $headers)) {
        echo "Email enviado com sucesso";
    } else {
        echo "Erro ao enviar email";
    }

    exit;
}
?>
=======
<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "ed.oliveirapsique@gmail.com"
    $assunto = "Coleta de dados - Edjane"

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: ed.oliveirapsique@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion()

    if(mail($para,$assunto$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    }else{
        echo("Houve um erro ao enviar o email!");
    }
    
    ?>
>>>>>>> 1ad4e9097c5c8781372de05c93b6edc05ffbba0e
