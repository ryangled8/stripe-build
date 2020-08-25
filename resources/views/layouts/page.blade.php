@extends('layouts/app')

@section('content')
	<wrapper
		:site-header='@json($site_header ?? null)'
		:site-footer='@json($site_footer ?? null)'
	></wrapper>
@endsection
