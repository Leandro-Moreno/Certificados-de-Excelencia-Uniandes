@component('mail::message')
*Cordial saludo,*
{{$nombreEvento}}

Gracias por asistir a los Seminarios Virtuales de Excelencia de la Facultad de Ingeniería de la Universidad de los Andes.

Si no tiene cuenta para descargar su certificado,
<?php
$url=url('/login');
?>
@component('mail::button', ['url' => $url])
Cree una cuenta y una contraseña AQUÍ
@endcomponent
<?php
$url=url('/login');
?>
Si tiene ya tiene una cuenta activa,
@component('mail::button', ['url' => $url])
Descargue su certificado AQUÍ
@endcomponent

_Atentamente,_<br>
_Facultad de Ingeniería_
_Universidad de Los Andes_
_Bogotá D.C., Colombia_
@endcomponent
