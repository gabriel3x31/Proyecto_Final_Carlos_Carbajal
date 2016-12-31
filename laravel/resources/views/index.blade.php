@extends('layouts.principal')
	@section('content')
				<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>MoviesCiencias</p>
				</div>
				<div class="search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="header-info">
				<h1>BIG HERO 6</h1>
				<p class="age"><a href="#">AAA</a> Don Hall, Chris Williams</p>
				<p class="review">Rating	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
				<p class="review reviewgo">Genero	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animacion, Accion, Comedia</p>
				<p class="review">Lanzamiento &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2016</p>
				<p class="special">El vínculo especial que se desarrolla entre el robot inflable más grande Baymax y el prodigio Hiro Hamada, que se unen con un grupo de amigos para formar una banda de héroes de alta tecnología.</p>
				<a class="video" href="#"><i class="video1"></i>Trailer</a>
				<a class="book" href="#"><i class="book1"></i>Boletos</a>
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