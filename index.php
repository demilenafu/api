<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MARVEL</title>

    <!-- -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Poppins" rel="stylesheet"> 

    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>
  <body>
        <div class="header">
            <div class="col-xs-12 col-sm-12">
                <table class="t1">
                    <tbody>
                        <tr>
                            <td>
                                <div style="padding-left: 70%; width: 100px; align-items: left">
                                    <img src="img/marvel.png" width="130">
                                </div>
                            </td>
                            <td>
                                <div style="padding-left: 210px">
                                    <form id="search-form" role="form">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input placeholder="Search character..." style="padding-left: 3%; width: 450px;" class="form-control lupa" type="text" id="query">
                                                <input type="image" src="icons/search.png" class="image_buscar">
                                            </div>
                                        </div>
                                    </form>     
                                </div>                         
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

      	<div class="container">  
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-9" style="margin-top: 15px; !important;">
                        <p></p>
                        <img src="icons/characters.png" width="40" height="40">
                        <label class="titulo">Characters</label>
                        <div id="resultados" style="background-color: transparent">                   
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 favorito" style="background-color: #EBEBEB; height: 1910px;">
                        <div id="favoritos">                   
                        </div>
                    </div>
                </div>
            	
            </div>

        </div>

    <!-- Handeblars JS -->
    <script src="js/handlebars-v4.0.0.js" type="text/javascript"></script>    
    <script id="resultados-template" type="text/x-handlebars-template">
        {{#each data.results}}

            <div class="col-xs-12 col-sm-6">
                <div id="resultados" style="margin-top: 10px; margin-bottom: 20px; !important; overflow: hidden;">  

                    <div style="background-image:url('{{thumbnail.path}}/standard_amazing.jpg')" data-character-id="{{id}}" class="circle">               
                    </div>
                    
                    <br>
                    <h6 class="name">{{name}}</h6>
                    <span class="description">
                        {{description}}
                    </span>
                    
                    <button class="more">VIEW MORE</button>
                    <div class="related">
                        <span class="title_related">
                            Related comics
                        </span>
                        {{#each comics.items}}
                        <div class="col-xs-6 col-sm-6 named_related" style="margin-top: 5px; margin-bottom: 5px; !important">
                            
                            <span>
                                <a href="#vmodal" id="myBtn">{{name}}</a>
                                <div id="vmodal" >
                                    <a class="cerrar" href="#cerrar">X</a>
                                    <p class="parrafo">{{name}}</p>
                                </div>
                            </span>
                            
                        </div>

                        {{/each}}
                    </div>
                    
                </div>
            </div>
        {{/each}}


    </script>

    <script src="js/buscar.js" type="text/javascript"></script>

    <!-- Fin Handeblars JS -->


    <div class="footer" >
        <div class="col-xs-12 col-sm-12">
            <table class="t1">
                <tbody>
                    <tr>
                        <td>
                            <div class="grability">
                                Grability 2016 - Todos los derechos reservados
                            </div>
                        </td>
                        <td>
                            <div style="padding-left: 210px">
                                   <img src="img/grability-logo.png" width="50" height="50">
                            </div>                         
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </body>
</html>