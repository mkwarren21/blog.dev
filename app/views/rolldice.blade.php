@extends('layouts.master')

{{-- triple curlies protect against the darkenss of raw html --}}
@section('content')

	<h1>{{{$randnum}}}</h1>

	<?php if ($guess==$randnum): ?>
		<h1>Congrats - You Win!</h1>
	<?php elseif ($guess<$randnum):?>
		<h1>You guessed too low!</h1>
	<?php elseif ($guess>$randnum):?>
		<h1>You guessed too high!</h1>
	<?php endif;?>

@stop