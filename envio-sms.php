<?php

if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {
 if (
 isset( $_REQUEST['phoneNumber'], $_REQUEST['carrier'], $_REQUEST['smsMessage'] ) &&
  !empty( $_REQUEST['phoneNumber'] ) &&
  !empty( $_REQUEST['carrier'] )
 ) {
  $message = wordwrap( $_REQUEST['smsMessage'], 70 );
  $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];
  $result = @mail( $to, '', $message );
  print 'Mensaje enviado a ' . $to;
 } else {
  print 'No se pudo enviar la alerta.';
 }
}
?>
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   <style>
    body {
     margin: 0;
     padding: 3em 0;
     color: #fff;
     background: #f8f9fc!important;
     font-family: Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    }

    #container {
     width: 600px;
     background: #fff;
     color: #555;
     border: 3px solid #ccc;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     -ms-border-radius: 10px;
     border-radius: 10px;
     border-top: 3px solid #ddd;
     padding: 1em 2em;
     margin: 0 auto;
     -webkit-box-shadow: 3px 7px 5px #000;
     -moz-box-shadow: 3px 7px 5px #000;
     -ms-box-shadow: 3px 7px 5px #000;
     box-shadow: 3px 7px 5px #000;
    }

    ul {
     list-style: none;
     padding: 0;
    }

    ul > li {
     padding: 0.12em 1em
    }

    label {
     display: block;
     float: left;
     width: 130px;
    }

    input, textarea {
     font-family: Georgia, Serif;
    }
   </style>
  </head>
  <body>
   <div id="container">
    <h1>Modulo SMS para las notificaciones de procesos internos VenCERT</h1>
    <form action="" method="post">
     <ul>
      <li>
       <label for="phoneNumber">Selecciona la plataforma</label>
       <select name="test" id="test">
    <option value="uno">Zone-h</option>
    <option value="dos">Tweetdeck</option>
    <option value="dos">PasteBin</option>
     <option value="dos">Openbugbounty</option>
</select>
      <br>
      <br>
      <br>
      </li>
        <li><input type="submit" name="sendMessage" id="sendMessage" value="Escanear y enviar alerta" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>