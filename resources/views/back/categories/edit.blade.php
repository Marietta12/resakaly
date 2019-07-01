@extends('back.categories.index')

@section('contente')
	<div class="row">
		<div class="col-lg-6">
			<div class="pull-left">
				<h2>Editer Catégories</h2>
			</div>
			<div class="pull-right">
				<a href="{{route('back_categories')}}"></a>
			</div>			
		</div>		
	</div>
	<br>
	<form action="" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="hidden" name="_method" value="">
		<div class="row">
			<div class="col-xs- col-sm-6 col-md-6">
				<div class="form-group{{$errors->has('titre')?' has-error':''}}">
					<strong>Titre:</strong>
					<input type="text" name="name" value="{{ $category->titre }}" class="form-control" placeholder="Titre">
					<span class="text-danger">{{$errors->first('titre')}}</span>				
				</div>
			</div>	
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group{{$errors->has('description')?' has-error':''}}">
					<strong>Description:</strong>
					<input type="text" name="name" value="{{ $category->description }}" class="form-control" placeholder="Description">
					<span class="text-danger">{{$errors->first('description')}}</span>				
				</div>
			</div>	
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group{{$errors->has('photo')?' has-error':''}}">
					<strong>Photo:</strong>
					<input type="text" name="name" value="{{ $category->photo }}" class="form-control" placeholder="Photo">
					<span class="text-danger">{{$errors->first('photo')}}</span>				
				</div>
			</div>	
			<div class="col-xs-6 col-sm-6 col-md-6">
				<button type="submit" class="btn btn-primary">Modifier</button>
			</div>			
		</div>
		
	</form>


@endsection