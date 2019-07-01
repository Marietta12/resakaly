<!DOCTYPE html>
	<html>
	<head>
		<title>catégories</title>
		<meta charset="utf-8"/>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
	</head>
	<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="titre m-t-10">Catégories</h2>
        </div>
        <div class="col-md-6">
          <a class="btn btn-success m-t-10"  href="{{ route('back_createCategories') }}">Ajouter</a>
        </div>
      </div>
    </div>    
		<div class="container">           
			<table class="table m-t-10">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
    </tr>
  </thead>
  <tbody>
    @if(count($categories) > 0)
      @foreach($categories as $category)
        <tr>
          <td scope="row">{{$category->id}}</td>
          <td>{{$category->titre}}</td>
          <td>{{$category->description}}</td>
          <td>{{$category->photo}}</td>
          <td>
            <form action="" method="post" role="form">
              <a href="{{route('back_editCategories',$category->id)}}" class="btn btn-success">Editer</a>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="hidden" name="_method" value="DELETE"> 
              <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </td>
        </tr>    
      @endforeach
    @endif
  </tbody>
</table>
		</div>

    @yield('contente')
	</body>
	</html>