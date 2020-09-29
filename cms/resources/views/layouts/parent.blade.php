<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app() -> getLocale()) }}">
<body>
	<div id="app">
		@section('sidebar')
		Master sidebar
		@show
		<main class="py-4">
			@yield('content')
		</main>
		<main class="py-4">
			<p> Saya Evita Putri Nauli Simanungkalit<br>Kelas MI-2E<br>Dari prodi D-III Manajemen Informatika </p>
		</main>
		<main class="py-4">
			<p>About: anak ke dua dari tiga bersaudara</p>
			@extends('about')
		</main>
	</div>
</body>
</html>