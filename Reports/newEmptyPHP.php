<?php
$html = '
     <html>
     <head></head>
     <style>
     h1 {color:#333; size:20px; margin-bottom:5px;}
      h3 {color:#222;}
      </style>
      <body>
    
     <h1>IgorEscobar.com</h1>
     <h3>Desenvolvimento, Tecnologia e Informação, na ponta do lápis.</h3>
    
     </body>
     </html>
';
?>
<?php
     $handle=fopen('x.html','r');
     $html="";
     $linha=array();
     while (!feof($handle)){
         $linha[0]=fgetcsv($handle, ">\n");
         $html.=$linha[0][0]."\n";
     }
     
     require_once("dompdf_config.inc.php");
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->set_paper('letter', 'landscape');
     $dompdf->render();
     $dompdf->stream("exemplo-01.pdf");
?>