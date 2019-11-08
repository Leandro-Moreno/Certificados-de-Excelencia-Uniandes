@component('mail::message')
*Cordial saludo,*

_Gracias por asistir a los Seminarios Virtuales de Excelencia de la Facultad de Ingeniería de la Universidad de los Andes._

_Si no tiene cuenta para descargar su certificado debe restablecer la contraseña_
<?php
$url=url('/login');
?>
@component('mail::button', ['url' => $url])
Restablezca la contraseña AQUÍ
@endcomponent
<?php
$url=url('/login');
?>
_Si tiene cuenta,_
@component('mail::button', ['url' => $url])
Descargue su certificado AQUÍ
@endcomponent

_Atentamente,_<br>
_Facultad de Ingeniería_
_Universidad de Los Andes_
_Bogotá D.C., Colombia_
@endcomponent
