@extends('master')

@section('container')
	{{ Form::open(array('url' => '/')) }}
		{{ Form::textarea('snippet', $snippet) }}

		<div class="btn-group nav">
			<a href="{{ URL::route('new_snippet') }}" class='btn btn-danger'>Start Over</a>
			{{ Form::submit('Save', array('class' => 'btn btn-success'))}}
		</div>
	{{ Form::close() }}
@stop

@section('scripts')
	<script type="text/javascript">
		$('textarea').height( $(window).height() - 50);
	</script>
@stop