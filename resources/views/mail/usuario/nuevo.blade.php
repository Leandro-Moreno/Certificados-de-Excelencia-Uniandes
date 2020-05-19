@component('mail::message')
Cordial saludo,
{{$nombreEvento}}

Gracias por asistir a los Seminarios Virtuales de Excelencia de la Facultad de Ingeniería de la Universidad de los Andes.

Si no tienes cuenta para descargar tu certificado,
<?php
$url=url('/login');
?>
@component('mail::button', ['url' => $url])
Cree una cuenta y una contraseña AQUÍ
@endcomponent
<?php
$url=url('/login');
?>
Si ya tienes una cuenta Uniandes activa,
@component('mail::button', ['url' => $url])
Descargue su certificado AQUÍ
@endcomponent

Atentamente,<br>
Facultad de Ingeniería<br>
Universidad de Los Andes<br>
Bogotá D.C., Colombia<br>
@endcomponent
