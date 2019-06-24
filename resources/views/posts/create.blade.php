{!! Form::open(['url' => 'posts']) !!}
    <div class="form-group">
      {!! Form::label('title', 'Title') !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
      {!! Form::label('content', 'Content') !!}
      {!! Form::text('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
      {!! Form::label('category', 'Category') !!}
      {!! Form::select('size', $category) !!}
    </div>
    <div class='form-group'>
      {!! Form::submit('Add Post', ['class' => 'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}