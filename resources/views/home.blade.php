@extends ('layout') @section ('content')

<div id="slide1">
	<div id="mongolfiere1"></div>

	<div id="mongolfiere2"></div>

	<a class="waves-effect waves-light btn" id="button"
		href="{{ url('voyage/randonne') }}">voir les randonnées</a>

</div>


<div id="slide2">

	<a class="waves-effect waves-light btn" id="button2"
		href="{{ url('voyage/sejour') }}">voir les séjours</a>

</div>

<div id="slide3">
	<a class="waves-effect waves-light btn" id="button3"
		href="{{ url('voyage/weekend') }}">voir les weekends</a>
</div>

@endsection
