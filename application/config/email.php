<?php defined('BASEPATH') OR exit('No direct script access allowed.');
/*
        * Configuramos los parámetros para enviar el email,

        */
        
       //Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'smtp.yandex.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'no-reply@somos.mx';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'somosmultimedia';    
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';
        
        $config["smtp_crypto"] = 'ssl';
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido  
       $config['validate'] = true;
             
