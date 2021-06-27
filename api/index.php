<?php
require_once '../auxiliares/jwthelp.php';
require_once(__DIR__.'/../db/infodb.php');
include('../auxiliares/HandleErrors.php');
include ('../auxiliares/dbfunctions.php');
define('ALGORITMO', 'HS512'); // Algoritmo de codificación/firma
define('SECRET_KEY', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhdXRvcml6YWRvIjoidHJ1ZSJ9.yzVDphCD7KasXsPZ4bPKOMZKnd7IGrKSdjfmxTdIlVE');

function outputJson($data, $codigo = 200)
{
    header('', true, $codigo);
    header('Content-type: application/json');
    print json_encode($data);
    die;
}

//function requireLogin () {
//    $authHeader = getallheaders();
//    try
//    {
//        list($jwt) = @sscanf( $authHeader['Authorization'], 'Bearer %s');
//        $datos = JWT::decode($jwt, SECRET_KEY, ALGORITMO);
//        if (time() > $datos->expira) {
//            postLogout();
//            throw new Exception("Token expirado", 1);
//        }
//        $link = conectarBD();
//        $resultado = mysqli_query($link, "SELECT 1 FROM tokens WHERE token = '$jwt'");
//        if (!($resultado && mysqli_num_rows($resultado)==1)) {
//            throw new Exception("Token inválido", 1);
//        }
//        mysqli_close($link);
//    } catch(Exception $e) {
//        outputError(401);
//    }
//}
function getContenido()
{
    $link = conectarBD();
    $sql = "SELECT id, titulo, descripcion, url_foto FROM contenido";
    $resultado = mysqli_query($link, $sql);
    if ($resultado === false) {
        print "Falló la consulta: " . mysqli_error($link);
        outputError(500);
    }
    $ret = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $ret[] = [
            'id'       => $fila['id'],
            'titulo' => $fila['titulo'],
            'descripcion'   => $fila['descripcion'],
            'url_foto'    => $fila['url_foto']
        ];
    }

    mysqli_free_result($resultado);
    mysqli_close($link);
    outputJson($ret);
}

if (!isset($_GET['accion'])) {
    outputError(400);
}

$metodo = strtolower($_SERVER['REQUEST_METHOD']);
$accion = explode('/', strtolower($_GET['accion']));
$funcionNombre = $metodo . ucfirst($accion[0]);
$parametros = array_slice($accion, 1);
if (count($parametros) >0 && $metodo == 'get') {
    $funcionNombre = $funcionNombre.'ConParametros';
}
if (function_exists($funcionNombre)) {
    call_user_func_array ($funcionNombre, $parametros);
} else {
    outputError(400);
}
