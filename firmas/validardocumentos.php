
<!DOCTYPE html>

<html>
    
    <head>
        <title>Validar documentos firmados con FIEL.</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css?ver=111000011" type="text/css" />
        <link rel="shortcut icon" href="Browser.ico"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    </head>
     
    <body style="font-family: 'Montserrat', sans-serif;">

    <nav class="navbar" style="background-color:#511229;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/FGEBC_SEJAP_LOGO.png" alt="" width="270" height="auto">
            </a>
        </div>
    </nav>
        
        <script type="text/javascript" >

            var xmlHttp;

            function CreateXmlHttp() {
                if (window.XMLHttpRequest) {
                        xmlHttp =  new XMLHttpRequest();
                } else if (window.ActiveXObject) {
                        xmlHttp =  new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            
            function NumAleat(){
                Num =  Math.floor((Math.random()*10000000000)+1);
                return Num;
            }
            
        </script>
        
        
        <script src="jquery.js" type="text/javascript"></script>
<div class="container m-auto">

    <div class="card shadow py-4 px-3 border-0">
        <div class="card-body">
            <h1 id="titulo" class="text-center fw-bolder pb-1 text-blue">VALIDAR DOCUMENTO FIRMADO</h1>
        
        <div id="DivDefault" style="display: block;">
            <table width="100%">
                <tr>
                    <td align="center" valign="top" style="height: auto; width: 1000px; padding: 0px; margin: 0px; background-color: #FFFFFF;">
                        <div id="Div_Cont1" style="padding: 10px;">
                            
                            <table width="100%" class="">

                                <tr>
                                    <td align="center" valign="top"  style="padding: 8px;">
                                        
                                        <div id="Div_Cont2" style="overflow-y: auto;">
                                            
                                            <blockquote>
                                            
                                                <form id="XML_upload_form" enctype="multipart/form-data" method="post" action="#">

                                                    <table class="table table-bordered ">

                                                    <thead>
                                                        <tr>
                                                            <th valign="middle" align="left" class="" style="background-color:#3e0e20; color: #FFFFFF; padding: 10px; padding-left: 10px; font-size: 11pt;" colspan="2">
                                                                Seleccione el archivo XML del documento a validar.
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                        <tr>
                                                            <td>
                                                                Archivo .xml
                                                            </td>
                                                            <td valign="middle" height="" align="left">
                                                                <input class="form-control form-control-sm" name="ArchXML" id="ArchXML" type="file" onchange="XML_fileSelected(this);" />
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                Archivo .pub
                                                            </td>
                                                            <td valign="middle" height="" align="left">
                                                                <input class="form-control form-control-sm" name="ArchPUB" id="ArchPUB" type="file" onchange="XML_fileSelected(this);" />
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                        <td valign="middle" align="right" colspan="2" style="padding-left: 10px; height: 40px;">
                                                                <input class="btn btn-outline-dark btn-sm" type="button" onclick="XML_startUploading()" value="Subir y validar archivo" />
                                                            </td>
                                                        </tr>

                                                    </table>

                                                    <div id="XML_progress_info" style="display: none;">

                                                        <table class="table border="0" width="50%" cellpadding="6" cellspacing="0">

                                                            <tr>
                                                                <td width="100%" align="left" valign="top" height="22">
                                                                    <progress id="XML_progressBar" value="0" max="100" style="width:400px; height: 20px; display: none;"></progress>
                                                                </td>
                                                            </tr>

                                                        </table>

                                                        <div id="XML_progress"></div>
                                                        <div id="XML_progress_percent">&nbsp;</div>
                                                        <div class="XML_clear_both"></div>

                                                        <div>
                                                            <div id="XML_b_transfered">&nbsp;</div>
                                                            <div class="XML_clear_both"></div>
                                                        </div>

                                                        <div id="XML_upload_response"></div>

                                                    </div>
                                                    
                                                    <input type="hidden" name="RefAlfa" id="RefAlfa" size="12" />
                                                    
                                                </form>                                             

                                                <div id="RespServ" style="margin-top: 10px; margin-bottom: 10px;">


                                                </div>
                                                
                                            </blockquote>
                                            
                                        </div>
                                        
                                    </td>
                                </tr>

                            </table>
                            
                        </div>
                        
                    </td>
                </tr>
            </table>
                
        </div>
        </div>
        </div>
        </div>

        <footer class="container-fluid text-center text-white d-flex align-items-center justify-content-center footer py-3" style="background-color:#511229;">
		    <span>© <?= date("Y") ?> Fiscalía General del Estado de Baja California</span>
	    </footer>
        
        <script>
            
            $.ajax({
                url: "Funciones.js",
                dataType: "script",
                cache: false
            });               
    
            $.ajax({
                url: "ScriptsJS_Modulo_ValidarDoc.js?sesion="+NumAleat(),
                dataType: "script",
                cache: false
            });

            document.getElementById("Div_Cont1").style.height = ($(window).height()-82) + "px";
            document.getElementById("Div_Cont2").style.height = ($(window).height()-80) + "px";

            $(window).resize(function(){

                document.getElementById("Div_Cont1").style.height = ($(window).height()-82) + "px";
                document.getElementById("Div_Cont2").style.height = ($(window).height()-100) + "px";
            }); 
       
        </script>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</html>









