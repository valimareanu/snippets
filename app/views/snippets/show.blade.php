@extends('master')

@section('stylesheets')
	{{ HTML::style('code-prettify/src/prettify.css') }}
@stop

@section('container')
	<pre class="prettyprint linenums">{{ htmlentities($snippet) }}</pre>
	<div class="btn-group nav"> 
		{{ HTML::linkRoute('fork_snippet', 'Fork', $id, array('class' => 'btn btn-warning')) }}
		{{ HTML::linkRoute('new_snippet', 'New', '', array('class' => 'btn btn-success')) }}
	</div>
@stop

@section('scripts')
	{{ HTML::script('code-prettify/src/prettify.js') }}
	<script type="text/javascript">prettyPrint();</script>
@stop