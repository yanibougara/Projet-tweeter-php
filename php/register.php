<!DOCTYPE html>
<html lang="en">

<head>

    <title>connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="style4.css">

</head>

<body>

    <div class="login">

        <h1 class="text-center">inscrit toi</h1>

        <form class="">
            <div class="form-group ">
                <label class="form-label" for="nom">nom</label>
                <!-- label sont les etiquettes  -->
                <input class="form-control" type="nom" id="nom" >
            </div>

            
            <div class="form-group">
                <label class="form-label" for="prenom">prénom</label>
                <input class="form-control" type="prenom" id="prenom" >
            </div>
    
            <div class="form-group">
                <label class="form-label" for="pseudo">pseudo</label>
                <input class="form-control" type="pseudo" id="pseudo" >
            </div>

            <div class="form-group">
                <label class="form-label" for="tel">N° de téléphone</label>
                <input class="form-control" type="tel" id="tel" >
            </div>


            <div class="form-group">
                <label class="form-label" for="email">adresse mail</label>
                <input class="form-control" type="email" id="email" >
            </div>

            <div class="form-group">
                <label class="form-label" for="date">date de naissance</label>
                <input class="form-control" type="date" id="date" >
            </div>
          
            <div class="form-group ">
                <label class="form-label" for="mot de passe">mot de passe</label>
                <input class="form-control" type="password" id="password">
                <!-- le type="password" va permettre de censurer le mot de pass -->
            </div>


            
            <input class="btn btn-success w-100" href="index3.html"  type="submit" value="créer mon compte">
            <imput class="btn btn-success w-100"><a href="index3.html">Login</a>
        </form>

    </div>

</body>

</html>