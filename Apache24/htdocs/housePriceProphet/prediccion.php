<?php
// Obtener los datos del formulario
$banos = $_POST['banos'];
$m2_edificados = $_POST['m2_edificados'];
$dormitorios = $_POST['dormitorios'];
$garajes = $_POST['garajes'];
$plantas = $_POST['plantas'];
$condominio = $_POST['condominio'];
$tipo_Casa = $_POST['tipo_Casa'];
$tipo_Departamento = $_POST['tipo_Departamento'];
$zona_Centro = $_POST['zona_Centro'];
$zona_Ciudadelas = $_POST['zona_Ciudadelas'];
$zona_Doble_via_la_guardia = $_POST['zona_Doble_via_la_guardia'];
$zona_Equipetrol = $_POST['zona_Equipetrol'];
$zona_Este = $_POST['zona_Este'];
$zona_Hamacas = $_POST['zona_Hamacas'];
$zona_Las_palmas = $_POST['zona_Las_palmas'];
$zona_Norte = $_POST['zona_Norte'];
$zona_Oeste = $_POST['zona_Oeste'];
$zona_Polanco = $_POST['zona_Polanco'];
$zona_Remanso = $_POST['zona_Remanso'];
$zona_Sur = $_POST['zona_Sur'];
$zona_Urbari = $_POST['zona_Urbari'];
$zona_Urubó = $_POST['zona_Urubó'];
$estado_A_estrenar = $_POST['estado_A_estrenar'];
$estado_A_reciclar = $_POST['estado_A_reciclar'];
$estado_Buen_estado = $_POST['estado_Buen_estado'];
$estado_En_Pozo = $_POST['estado_En_Pozo'];
$estado_En_construcción = $_POST['estado_En_construcción'];
$estado_Excelente_estado = $_POST['estado_Excelente_estado'];
$estado_Requiere_mantenimiento = $_POST['estado_Requiere_mantenimiento'];
$estado_Sin_Definir = $_POST['estado_Sin_Definir'];

// Mostrar las características ingresadas por el usuario
echo "<h2>Características de la Casa:</h2>";
echo "<ul>";
echo "<li>Número de Baños: $banos</li>";
echo "<li>Metros Cuadrados Edificados: $m2_edificados</li>";
echo "<li>Número de Dormitorios: $dormitorios</li>";
echo "<li>Número de Garajes: $garajes</li>";
echo "<li>Número de Plantas: $plantas</li>";
echo "<li>Condominio: $condominio</li>";
echo "<li>Tipo de Casa: $tipo_Casa</li>";
echo "<li>Tipo de Departamento: $tipo_Departamento</li>";
echo "<li>Zona Centro: $zona_Centro</li>";
echo "<li>Zona Ciudadelas: $zona_Ciudadelas</li>";
echo "<li>Zona Doble vía la guardia: $zona_Doble_via_la_guardia</li>";
echo "<li>Zona Equipetrol: $zona_Equipetrol</li>";
echo "<li>Zona Este: $zona_Este</li>";
echo "<li>Zona Hamacas: $zona_Hamacas</li>";
echo "<li>Zona Las Palmas: $zona_Las_palmas</li>";
echo "<li>Zona Norte: $zona_Norte</li>";
echo "<li>Zona Oeste: $zona_Oeste</li>";
echo "<li>Zona Polanco: $zona_Polanco</li>";
echo "<li>Zona Remanso: $zona_Remanso</li>";
echo "<li>Zona Sur: $zona_Sur</li>";
echo "<li>Zona Urbari: $zona_Urbari</li>";
echo "<li>Zona Urubó: $zona_Urubó</li>";
echo "<li>Estado A estrenar: $estado_A_estrenar</li>";
echo "<li>Estado A reciclar: $estado_A_reciclar</li>";
echo "<li>Estado Buen estado: $estado_Buen_estado</li>";
echo "<li>Estado En Pozo: $estado_En_Pozo</li>";
echo "<li>Estado En construcción: $estado_En_construcción</li>";
echo "<li>Estado Excelente estado: $estado_Excelente_estado</li>";
echo "<li>Estado Requiere mantenimiento: $estado_Requiere_mantenimiento</li>";
echo "<li>Estado Sin Definir: $estado_Sin_Definir</li>";
echo "</ul>";

// Realizar la predicción
// Cargar el modelo entrenado desde el archivo .pkl
$python_path = "C:/Python310/python.exe";
$script_path = "C:/Apache24/htdocs/housePriceProphet/predecir_precio.py";
$output = shell_exec("$python_path $script_path $banos $m2_edificados $dormitorios $garajes $plantas $condominio $tipo_Casa $tipo_Departamento $zona_Centro $zona_Ciudadelas $zona_Doble_via_la_guardia $zona_Equipetrol $zona_Este $zona_Hamacas $zona_Las_palmas $zona_Norte $zona_Oeste $zona_Polanco $zona_Remanso $zona_Sur $zona_Urbari $zona_Urubó $estado_A_estrenar $estado_A_reciclar $estado_Buen_estado $estado_En_Pozo $estado_En_construcción $estado_Excelente_estado $estado_Requiere_mantenimiento $estado_Sin_Definir");

// Imprimir el resultado de la predicción
echo "<h2>Precio Predicho:</h2>";
echo "<p>$output</p>";
?>
