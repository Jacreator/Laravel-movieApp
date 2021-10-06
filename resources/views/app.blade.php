@extends('common::framework')

@section('angular-styles')
    {{--angular styles begin--}}
		<link rel="stylesheet" href="client/styles.b3d81da7529f21050daa.css">
	{{--angular styles end--}}
@endsection

@section('angular-scripts')
    {{--angular scripts begin--}}
		<script src="client/runtime-es2015.e73b3463dccab0ff1ec7.js" type="module"></script>
		<script src="client/runtime-es5.e73b3463dccab0ff1ec7.js" nomodule defer></script>
		<script src="client/polyfills-es5.b1a5f9188df71f01b22a.js" nomodule defer></script>
		<script src="client/polyfills-es2015.23b1b776924c27d95bf0.js" type="module"></script>
		<script src="client/main-es2015.40d69f0ba3e4a7767065.js" type="module"></script>
		<script src="client/main-es5.40d69f0ba3e4a7767065.js" nomodule defer></script>
	{{--angular scripts end--}}
@endsection
