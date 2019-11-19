<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>certificados</title>


<style id="applicationStylesheet" type="text/css">
@font-face {
		font-family: 'Agfa_Rotis_Sans_Serif_ExBd';
		src:url({{storage_path('fonts\AgfaRotisSansSerifExtraBold.ttf')}}) format('truetype');
		font-weight: 500;
		font-style: normal;
}

@font-face {
		font-family: 'Agfa_Rotis_Sans_Serif_Bold';
		src:url({{storage_path('fonts\AgfaRotisSansSerif-Bold.ttf')}}) format('truetype');
		font-weight: bold;
		font-style: normal;
}

@font-face {
		font-family: 'Agfa_Rotis_Sans_Serif';
		src: local('/fontsAgfaRotisSansSerif'),
				src:url({{storage_path('fonts\AgfaRotisSansSerif.ttf')}}) format('truetype');
		font-weight: 500;
		font-style: normal;
}



	body {
		margin: 0;
		padding: 0;
	}
	#Certificado * {
		margin: 0;
		padding: 0;
	}
	#Certificado {
		position: absolute;
		/* box-sizing: border-box; */
		background: #E5E5E5;
		width: 1056px;
		height: 816px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		margin: 0;
		padding: 0;
		opacity: 1;
	}
	#_DEPARTAMENTO__Direcci_n_de_Ed {
		opacity: 1;
		position: absolute;
		left: 194.857px;
		top: 127.46px;
		/* box-sizing: border-box; */
		margin: 0;
		padding: 0;
		overflow: hidden;
		width: 594.162px;
		height: 98.349px;
		line-height: 37.32767105102539px;
		margin-top: -2.026355743408203px;
		text-align: center;

	font-family: 'DaxMedium';
	font-style: normal;
	font-weight: normal;
}
#Universidad_de_los_Andes___Vig {
	opacity: 1;
	position: absolute;
	left: 7.187px;
	top: 678.472px;
	margin: 0;
	padding: 0;
	overflow: hidden;
	width: 420.443px;
	height: 37.074px;
	line-height: 9.966672897338867px;
	margin-top: -0.8305563926696777px;
	text-align: left;
	font-family: 'DaxMedium';
	font-style: normal;
	font-weight: normal;
	font-size: 8.305560111999512px;
	color: rgba(0,0,0,1);
	letter-spacing: 0.02px;
}
#La_autenticidad_de_este_docume {
	opacity: 1;
	position: absolute;
	left: 236.04px;
	top: 722.726px;
	margin: 0;
	padding: 0;
	overflow: hidden;
	width: 454.144px;
	height: 14.673px;
	line-height: 9.966672897338867px;
	margin-top: -0.8305563926696777px;
	text-align: right;
	font-family: 'DaxMedium';
	font-style: normal;
	font-weight: normal;
	font-size: 8.305560111999512px;
	color: rgba(0,0,0,1);
	letter-spacing: 0.02px;
}
#Bogot__D_C___Colombia {
	opacity: 1;
	position: absolute;
	left: 820.866px;
	top: 698.117px;
	margin: 0;
	padding: 0;
	overflow: hidden;
	width: 105.662px;
	height: 17.923px;
	line-height: 9.966672897338867px;
	margin-top: -0.8305563926696777px;
	text-align: right;
	font-family: 'DaxMedium';
	font-style: normal;
	font-weight: normal;
	font-size: 8.305560111999512px;
	color: rgba(0,0,0,1);
	letter-spacing: 0.02px;
}
#_CONSECUTIVO_ {
	opacity: 1;
	position: absolute;
	left: 403.671px;
	top: 679.602px;
	margin: 0;
	padding: 0;
	overflow: hidden;
	width: 118.881px;
	height: 31.006px;
	line-height: 18.39999771118164px;
	margin-top: -1.5333337783813477px;
	text-align: center;
	font-family: 'DaxBold';
	font-style: normal;
	font-weight: bold;
	font-size: 15.333330154418945px;
	color: rgba(176,0,0,1);
	letter-spacing: 0.02px;
}
#logoUniandes {
	opacity: 1;
}
.logoUniandes {
	position: absolute;
	overflow: visible;
	width: 286.468px;
	height: 86.72px;
	left: 320.155px;
	top: 6.166px;
}
.imagenFirma{
	position: absolute;
	width:auto;
	height: 50px;
	left: 170.797px;
	top: 535.105px;
}
</style>
</head>
<body>
<div id="certificados_dax">
<div id="_Departamento__Direcci_n_de_Ed">
	<span>{{$asistencia->eventos->firma->area}}<br/>Dirección de Educación Continua</span>
</div>
<div id="Nombre_Participante">
	<span>{{$asistencia->usuarios->name}}</span>
		@isset($asistencia->usuarios->name2)
	 <span>{{$asistencia->usuarios->name2}}</span>
		@endisset
		<span>{{$asistencia->usuarios->apellido}}</span>
		@isset($asistencia->usuarios->apellido2)
	 <span>{{$asistencia->usuarios->apellido2}}</span>
		@endisset
</div>
<div id="Titulo_Evento">
	<span>{{$asistencia->eventos->nombre}}</span>
</div>
<div id="certifican_que">
	<span>certifican que</span>
</div>
<div id="Particip__en_el_seminario_virt">
	<span>Participó en el seminario virtual de excelencia </span>
</div>
<div id="Grupo_1">
	<div id="fecha">
		<span>Realizado el {{$fechaEvento}}, con una duración de {{$asistencia->eventos->hora}} horas.</span>
	</div>
</div>
<svg class="L_nea_1">
	<path id="L_nea_1" d="M 0 0 L 268.013916015625 0">
	</path>
</svg>
<svg class="L_nea_2">
	<path id="L_nea_2" d="M 0 0 L 268.0138854980469 0">
	</path>
</svg>
<div id="Director_departamento">
	<span>{{$asistencia->eventos->firma->nombre}}</span>
</div>
<div id="Director_">
	<span style="">{{$asistencia->eventos->firma->cargo}}</span><span style=""><br/></span>
</div>
<div id="_Departamento__">
	<span style="">{{$asistencia->eventos->firma->area}}</span>
</div>
<div id="Diana_Betancourt_Galindo_Direc">
	<span style="">Diana Betancourt Galindo<br/></span><span id="diana-info" style="font-style:normal;font-weight:normal;font-size:12.726670265197754px;">Directora<br/>Dirección de Educación Continua</span>
</div>
<div id="Universidad_de_los_Andes___Vig">
	<span>Universidad de los Andes | Vigilada Mineducación. <br/>Reconocimiento como Universidad: Decreto 1297 del 30 de mayo de 1964.<br/>Reconocimiento personería jurídica: Resolución 28 del 23 de febrero de 1949 Minjusticia.</span>
</div>
<div id="La_autenticidad_de_este_docume">
	<span>La autenticidad de este documento puede ser verificada en la página web http://certificadosingenieria.uniandes.edu.co</span>
</div>
<div id="Bogot__D_C___Colombia">
	<span>Bogotá D.C., Colombia</span>
</div>
<div id="_CONSECUTIVO_">
	<span>VI{{str_pad($asistencia->asistencia, 6, '0', STR_PAD_LEFT)}}</span>
</div>
<img class="imagenFirma" src="{{asset($imagen) }}" />
 <img class="logoUniandes"  src="{{ asset('material/img/logoUniandes.png') }}"/>
</div>
</body>
</html>
