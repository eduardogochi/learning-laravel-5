		<div class="group">
			{!! Form::label('title', 'Name: ') !!}
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
		</div>

		<div class="group">
			{!! Form::label('body', 'Body: ') !!}
			{!! Form::textarea('body', null, ['class'=>'form-control']) !!}
		</div>

		<div class="group">
			{!! Form::label('published_at', 'Publish On: ') !!}
			{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
		</div>

		<br>

		<div class="group">
			{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
		</div>