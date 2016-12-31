@extends('layouts.principal')
	@section('content')
				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">
						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r4.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>MovieCiencias</i></a>
								<p class="info">Reparto:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
								<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hora 45 minutos</p>
							</div>

							<div class="clearfix"></div>
						</div>
						

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="images/r1.jpg" alt="" /></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html">Lorem  <i>Movie Review</i></a>
								
								<p class="info">Reparto:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Will Smith, Margot Robbie, Adrian Martinez, Rodrigo Santoro, BD Wong, Robert Taylor</p>
								<p class="info">DIRECCION: &nbsp;&nbsp;&nbsp;&nbsp;Glenn Ficarra, John Requa</p>
								<p class="info">GENERO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Crimen</p>
								<p class="info">DURACION:&nbsp;&nbsp;&nbsp; &nbsp; 1 hora 45 minutos</p>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>


					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
				<li><img src="images/r1.jpg" alt=""/></li>
				<li><img src="images/r2.jpg" alt=""/></li>
				<li><img src="images/r3.jpg" alt=""/></li>
				<li><img src="images/r4.jpg" alt=""/></li>
				<li><img src="images/r5.jpg" alt=""/></li>
				<li><img src="images/r6.jpg" alt=""/></li>
			</ul>	
		</div>	
	@endsection