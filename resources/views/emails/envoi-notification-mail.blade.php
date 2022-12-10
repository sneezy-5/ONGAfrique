<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        html,
        body {
            height: 100%
        }

        body {
            display: grid;
            place-items: center;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to bottom right, rgb(10, 153, 209), rgb(5, 76, 122));
            text-align: center;
            font-size: 16px;
        }

        .modal-content{
            border-radius: 1rem;
        }


        .modal-content:hover{
            box-shadow: 2px 2px 2px black;
        }

        .fa{
            color: #2b84be;
            font-size:90px;
            padding: 30px 0px;
        }

        .b1{
            background-color:#2b84be;
            box-shadow: 0px 4px #337095;
            font-size: 17px;
        }

        .r3{
            color: #c1c1c1;
            font-weight: 500;
        }

        a, a:hover{
            text-decoration: none;
        }

    </style>

    <title>Document</title>
</head>
<body>

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form"> See Modal with Form </button>
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
        
        <h3>Push notifications</h3>
            <i class="fa fa-bell"></i>
            <p class="r3 px-md-5 px-sm-1">Coucou , tu recois ce mail pour la creation d'un compte donateur .</p>
    
            <div class="text-center mb-3"> <button class="btn btn-primary w-50 rounded-pill b1"><a href="http://ongsouriredafrique.com/">Visite le site</a></button> </div>
            
            
        </div>
    </div>
</div>







</body>
</html>