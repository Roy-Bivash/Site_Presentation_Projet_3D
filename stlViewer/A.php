<!DOCTYPE html>
<html>
    <head>
        <title>Premier prototype du disque de Frein</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    </head>

     <body style="background:#EBEDEF">
        <br>
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <h4 class="text-center">Premier prototype du disque de Frein</h4>
        </div>
        <p class="text-center"><small>Veuillez patientez si rien ne s’affiche, le model STL met un peu de temps à charger.<br>Cette page n’est pas destinée à être visualiser sur un écran de téléphone, pour votre confort nous vous recommandons d’utiliser un écran de 720p à 14 pouces minimum.</small></p>
        <div id="stl_cont" style="width:80%;height:500px;margin:0 auto;background-color:#D6EAF8;"></div>
        <script src="stl_viewer.min.js"></script>        
        <script>
            var stl_viewer=new StlViewer
            (
                document.getElementById("stl_cont"),
                {
                    models:
                    [
                        {filename:"stl_cont/A.STL"}
                    ]
                }
            );
        </script>
        

    <br>
    <div class="container">
        <p class="text-center" style="color: #566573"><small>Auteur : <a style="color: #566573"href="http://bivash.com/">ROY Bivash</a> - 2020 - <a style="color: #566573" href=".../cgu.html">Condition générale d'utilisation</a></small></p>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        
    </body>
</html>