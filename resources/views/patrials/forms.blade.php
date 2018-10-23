<div class="form-group">
    {{ Form::text('name', null, ['class' => 'form-control mx-1', 'placeholder' => 'Nombre']) }}
</div>
<div class="form-group">
    {{ Form::text('email', null, ['class' => 'form-control mx-1', 'placeholder' => 'Email']) }}
</div>
<div class="form-group">
    {{ Form::text('bio', null, ['class' => 'form-control mx-1', 'placeholder' => 'Bio']) }}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-default">
        <span><i class="fas fa-search"></i></span>
    </button>
</div>