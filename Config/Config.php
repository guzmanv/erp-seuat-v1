<?php

	//define("BASE_URL", "http://localhost/erp-seuat-v1/");
	const BASE_URL = "http://localhost/erp-seuat-v1";

	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//const LIBS = "Libraries/";
	//const VIEWS = "Views/";
	const DB_HOST = "localhost";
	const DB_NAME = "erpseuat";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";

	//Delimitadores decimal y millar Ej. 27,1985.00
	const SPD = "."; //Separador de decimales
	const SPM = ","; //Separador de millares

	//Simbolo de moneda
	const SMONEDA = "$";

?>