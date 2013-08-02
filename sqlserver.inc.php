<?php
include("adodb/adodb.inc.php");
         
         //Datos de conexión SQL Server
         $db = ADONewConnection('odbc_mssql');
         $dsn = "Driver={SQL Server};Server=201.147.197.249;Database=CERRAJES TIENDA;";
         //Te da informes de posibles errores, este script nos ayuda muchísimo, si tenemos un error en una consulta o insert.
         $db->debug=true;
         $db->Connect($dsn,'web','t13nd45c');
         
         //Variable Global por default
         $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;    
?>