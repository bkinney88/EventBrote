<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="label-control sr-only">Titre</label>
    <input type="text" id="title" name="title" placeholder="le titre de votre evevenement" value="{{ old('title') ?? $event->title }}" class="form-control">
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="label-control sr-only">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="description" class="form-control">{{ old('description') ?? $event->description }}</textarea>
    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
<input type="submit" class="btn btn-info btn-block" value="{{ $submitButtonText }}">
</div>
