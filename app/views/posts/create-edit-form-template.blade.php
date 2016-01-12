

{{ Form::label('title', 'Title') }}
{{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Enter your title']) }}

{{ Form::label('subtitle', 'Subtitle') }}
{{ Form::text('subtitle', null, ['class'=>'form-control', 'placeholder'=>'Enter your Subtitle']) }}

{{ Form::label('content', 'Content') }}
{{ Form::textarea('content', null, ['class'=>'form-control', 'placeholder'=>'Enter your Content']) }}

{{ Form::submit('submit') }}	
