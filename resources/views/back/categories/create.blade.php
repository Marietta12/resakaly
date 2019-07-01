<!DOCTYPE html>
<html>
<head>
	<title>Ajout des Catégories</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
    	<h2 class="titre m-t-10">Ajout des Catégories</h2>
	  <form class="formulaire" method="post" action="{{ route('back_storeCategories')}}">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Titre</label>
	    <input type="text" class="form-control" name="title">        
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Description</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="description"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPhoto">Photo</label>
	    <input type="text" name="photo" id="exampleInputPhoto" class="form-control-file" />        
	  </div>      
	  <button class="btn btn-success m-t-10" type="submit">Ajouter</button>
	</form>
	</div>
</body>
</html>