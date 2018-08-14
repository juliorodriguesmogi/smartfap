<?php
$foto=$_POST['foto'];
$acao=$_POST['acao'];
//$foto=str_replace('"\"','"\\"',$foto);
//$foto="c:\\logs\\test.txt";
$acao="I";
switch ($acao){
    case "I":
        enviar_arquivo($foto);
        break;
    case "D":
        apagar_arquivo($foto);
        break;
}

function apagar_arquivo($foto){
    $ftp_server="209.97.130.137";
    $conn_id = ftp_connect($ftp_server);
    $ftpuser_name="anonymous";
    $ftp_user_pass="d9f4k8p3";
    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    ftp_delete($conn_id,$foto);
}

function enviar_arquivo($foto){

if (isset($_FILES['Filedata']) )
{
	$file = $_FILES['Filedata']['tmp_name'];
	$error = false;
 
	/**
	 * THESE ERROR CHECKS ARE JUST EXAMPLES HOW TO USE THE REPONSE HEADERS
	 * TO SEND THE STATUS OF THE UPLOAD, change them!
	 *
	 * If you don't change this example-file and ask me later why your
	 * uploader can't upload other files than images I'll not answer! Thank you!
	 */
 
	if (!is_uploaded_file($file) || ($_FILES['Filedata']['size'] > 2 * 1024 * 1024) ) // Example Validation: Need file < 2Mb
	{
		$error = '400 Bad Request';
	}
	if (!$error && !($size = @getimagesize($file))) // Example Validation: Needs an image
	{
		$error = '409 Conflict';
	}
	if (!$error && !in_array($size[2], array(1, 2, 3, 7, 8) ) ) // Example Validation: Needs a jpeg
	{
		$error = '415 Unsupported Media Type';
	}
	if (!$error && ($size[0] < 25) || ($size[1] < 25)) // Example Validation: Needs dimensions > 25px
	{
		$error = '417 Expectation Failed';
	}
 
	/**
	 * This simply writes a log entry
	 */
	$addr = gethostbyaddr($_SERVER['REMOTE_ADDR']);
 
	$log = fopen('script.log', 'a');
	fputs($log, ($error ? 'FAILED' : 'SUCCESS') . ' - ' . preg_replace('/^[^.]+/', '***', $addr) . ": {$_FILES['Filedata']['name']} - {$_FILES['Filedata']['size']} byte\n" );
	fclose($log);
 
	if ($error)
	{
		/**
		 * ERROR DURING UPLOAD, one of the validators failed
		 *
		 * see FancyUpload.js - onError for header handling
		 */
		header('HTTP/1.0 ' . $error);
 
		/**
		 * Abort execution and output something.
		 *
		 * FLASH NEEDS A CONTENT IN THE RESPONSE OR WILL IGNORE IT
		 */
		die('Error ' . $error);
	}
 
	/**
	 * UPLOAD SUCCESSFULL AND VALID
	 *
	 * Use move_uploaded_file here to save the uploaded file in your directory like:
	 *
	 * move_uploaded_file($file, '/user_uploads/');
	 */
 
	die('Upload Successfull');
}

}

?>
