<?php 
 $codigo_empresa=$_GET['CODIGO_EMPRESA'];
 $ano_pericia=$_GET['ANO_PERICIA'];
 $numero_laudo=$_GET['NUMERO_LAUDO'];
 $revisao=$_GET['REVISAO'];


 $isonserver='S';
// PHP client for requesting reports from JasperServer via SOAP. 
 
//USAGE: 

//$url = "http://209.97.130.137:8086/jasperserver/rest_v2/reports/reports/rpt_laudo2.PDF?CODIGO_EMPRESA=$codigo_empresa"."&ANO_PERICIA=$ano_pericia"."&NUMERO_LAUDO=$numero_laudo"."&REVISAO=$revisao";
//$params = array('skip' => 0, 'top' => 5000);
//$header = array('Content-Type' => 'application/json');
//$header = addBasicAuth($header, 'jasperadmin','jasperadmin');
//$response = request("GET", $url, $header, $params);
//print($response);

function addBasicAuth($header, $username, $password) {
    $header['Authorization'] = 'Basic '.base64_encode("$username:$password");
    return $header;
}

// method should be "GET", "PUT", etc..
function request($method, $url, $header, $params) {
    $opts = array(
        'http' => array(
            'method' => $method,
        ),
    );

    // serialize the header if needed
    if (!empty($header)) {
        $header_str = '';
        foreach ($header as $key => $value) {
            $header_str .= "$key: $value\r\n";
        }
        $header_str .= "\r\n";
        $opts['http']['header'] = $header_str;
    }

    // serialize the params if there are any
    if (!empty($params)) {
        $params_array = array();
        foreach ($params as $key => $value) {
            $params_array[] = "$key=$value";
        }
        $url .= '?'.implode('&', $params_array);
    }

    $context = stream_context_create($opts);
    $data = file_get_contents($url, false, $context);
    return $data;
}
$url="http://209.97.130.137:8086/jasperserver/rest_v2/reports/reports/rpt_laudo2.PDF?CODIGO_EMPRESA=$codigo_empresa&ANO_PERICIA=$ano_pericia&NUMERO_LAUDO=$numero_laudo&REVISAO=$revisao";
$username = 'jasperadmin';
$password = 'jasperadmin';



//require '../vendor/autoload.php';

//use GuzzleHttp\Exception\GuzzleException;
//use GuzzleHttp\Client;

//$client = new Client();

//$resource = fopen('/tmp/test.pdf', 'w');

//$response = $client->request('GET', $url, [
//    'headers' => [
//        'Authorization' => 'Basic: '.base64_encode("$username:$password"), 
//        'Cache-Control' => 'no-cache', 
//        'Content-Type' => 'application/pdf'
//    ],
//    'sink' => $resource,
//]);

$filename=fopen("/tmp/rpt_lauto2.pdf", w);
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=".$filename);

header("Authorizatio: Basic " .base64_encode("$username:$password"));

header("Location: $url");
// The PDF source is in original.pdf
readfile($filename);

exit;

//$file=fopen('/tmp/rpt_laudo2.pdf',w);
//$context = stream_context_create(array(
//    'http' => array(
//        'header'  => "Authorization: Basic " . base64_encode("$username:$password"), "Content-Type: " => "application/pdf","Content-Disposition:" => "inline","Filename:" => $file
//    )
//));

//$fileName = file_get_contents($url, false, $context);

//$filePath = "/tmp/".$fileName;

//header("Pragma: public");
//header("Expires: 0");
//header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//header("Cache-Control: public");
//header("Content-Description: File Transfer");
//header("Content-Disposition: inline; filename=\"$file \""); 
//header("Content-type: application/pdf");
//header("Content-Transfer-Encoding: binary");

//$content = file_get_contents("http://209.97.130.137:8086/jasperserver/rest_v2/reports/reports/rpt_laudo2.PDF?CODIGO_EMPRESA=$codigo_empresa&ANO_PERICIA=$ano_pericia&NUMERO_LAUDO=$numero_laudo&REVISAO=$revisao");
//header('Content-type: application/pdf');
//header('Content-Disposition: inline; filename=rpt_laudo2.pdf');
//echo $content;
//exit;
$file=fopen('/tmp/rpt_laudo2.pdf', +w); 
$auth = base64_encode("jasperadmin:jasperadmin");
$context = stream_context_create(['http' => ['header' => "Authorization: Basic $auth","Content-Disposition" => "attachment","Content-Type" => "application/pdf", "Filename: " => "$file", "Contnt-Length" => filesize($file)]]);
$url="http://209.97.130.137:8086/jasperserver/rest_v2/reports/reports/rpt_laudo2.PDF?CODIGO_EMPRESA=$codigo_empresa&ANO_PERICIA=$ano_pericia&NUMERO_LAUDO=$numero_laudo&REVISAO=$revisao";
$data = file_get_contents($url, false, $context , -1 );
readfile($file);
exit;

$request = new HttpRequest();
$request->setUrl("http://209.97.130.137:8086/jasperserver/rest_v2/reports/reports/rpt_laudo2.PDF?CODIGO_EMPRESA=$codigo_empresa&ANO_PERICIA=$ano_pericia&NUMERO_LAUDO=$numero_laudo&REVISAO=$revisao");
$request->setMethod(HTTP_METH_GET);
$userpassword="jasperadmin:jasperadmin";
$filename='rpt_laudo2.pdf';
$request->setHeaders(array(
  'Authorization' => 'Basic '.
  base64_encode($userpassword),
  'Content-type' => 'application/pdf',
  'Content-disposition' => 'inline',
  'filename ' => $filename,
  'Content-Length  ' => filesize($filename) 
));
ob_clean();
flush();

try {
  $response = $request->send();
readfile($filename);
  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}


exit;
$jasper_url = "http://209.97.130.137:8086/jasperserver/rest_v2"; 
// $jasper_url = "http://localhost:8086/jasperserver/services/repository"; 
$jasper_username = "jasperadmin"; 
$jasper_password = 'jasperadmin'; 
 
$client = new JasperClient($jasper_url, $jasper_username, $jasper_password); 
/* Nome do arquivo do relatório importado para o jasper server */
$config_file=  parse_ini_file('../classes/PHP/config.ini',true);
$empresa_utilizacao=$config_file['jasperserver']['empresa_utilizacao'];
$report_unit = "/reports/reports$empresa_utilizacao/rpt_laudo2"; 
/*  Formato de exportaçao do relatório */
$report_format = "PDF"; 
/* Parâmetos que são passados para o relatório, caso seja mais de um separar por vírgulas */
$report_params = array('CODIGO_EMPRESA' => $codigo_empresa,'ANO_PERICIA' => $ano_pericia, 'NUMERO_LAUDO' => $numero_laudo, 'REVISAO' => $revisao,'IsOnServer'=>$isonserver); 
//$report_parms=array(); 

 $result = $client->requestReport($report_unit, $report_format,$report_params); 

header('Content-type: application/pdf'); 
echo $result; 
/* Essa classe (abaixo) você pode colocar numa biblioteca no Scriptcase e só marcar nas aplicações que você  for usar */
class JasperClient { 
private $url; 
private $username; 
private $password; 
 
public function __construct($url, $username, $password) { 
$this->url = $url; 
$this->username = $username; 
$this->password = $password; 
} 
 
public function requestReport($report, $format, $params) { 
$params_xml = ""; 
foreach ($params as $name => $value) { 
$params_xml .= "<parameter name=\"$name\"><![CDATA[$value]]></parameter>\n"; 
} 
 
$request = " 
<request operationName=\"runReport\" locale=\"pt_BR\"> 
<argument name=\"RUN_OUTPUT_FORMAT\">$format</argument> 
<resourceDescriptor name=\"\" wsType=\"\" 
uriString=\"$report\" 
isNew=\"false\"> 
<label>null</label> 
$params_xml
</resourceDescriptor> 
</request> 
"; 
 
$client = new SoapClient(null, array( 
'location'  => $this->url, 
'uri'       => 'urn:', 
'login'     => $this->username, 
'password'  => $this->password, 
'trace'    => 1, 
'exception'=> 1, 
'soap_version'  => SOAP_1_1, 
'style'    => SOAP_RPC, 
'use'      => SOAP_LITERAL 
 
)); 
 
$pdf = null; 
try { 
$result = $client->__soapCall('runReport', array( 
new SoapParam($request,"requestXmlString") 
)); 
 
$pdf = $this->parseReponseWithReportData( 
$client->__getLastResponseHeaders(), 
$client->__getLastResponse()); 
} catch(SoapFault $exception) { 
$responseHeaders = $client->__getLastResponseHeaders(); 
if ($exception->faultstring == "looks like we got no XML document" && 
strpos($responseHeaders, "Content-Type: multipart/related;") !== false) { 
$pdf = $this->parseReponseWithReportData($responseHeaders, $client->__getLastResponse()); 
} else { 
throw $exception; 
} 
} 
 
if ($pdf) 
return $pdf; 
else
throw new Exception("Jasper did not return PDF data. Instead got: \n$pdf"); 
} 
 
protected function parseReponseWithReportData($responseHeaders, $responseBody) { 
preg_match('/boundary="(.*?)"/', $responseHeaders, $matches); 
$boundary = $matches[1]; 
$parts = explode($boundary, $responseBody); 
 
$pdf = null; 
foreach($parts as $part) { 
if (strpos($part, "Content-Type: application/pdf") !== false) { 
$pdf = substr($part, strpos($part, '%PDF-')); 
break; 
} 
} 
 
return $pdf; 
} 
 
} 
?>
