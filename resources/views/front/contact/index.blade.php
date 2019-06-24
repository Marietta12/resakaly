@extends('front.layout.master')

@section('main')

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/6768666-1080p-wallpapers.jpg" data-scrollwhell="0" data-draggable="1"><!-- <img id="img-contact" src="images/6768666-1080p-wallpapers.jpg"> --></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Envoyer votre message
						</h4>

						<div class="bo4  size15 m-b-20">
							<input class="sizefull s-text7-1 p-l-22 p-r-22" type="text" name="name" placeholder="Nom complet">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7-1 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Numero de telephone">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7-1 p-l-22 p-r-22" type="text" name="email" placeholder="Adresse e-mail">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Envoyer
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection

@section('additional-js')

@endsection