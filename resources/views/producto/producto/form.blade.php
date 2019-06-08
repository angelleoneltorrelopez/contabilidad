<div class="form-group {{ $errors->has('producto') ? 'has-error' : ''}}">
    <label for="producto" class="control-label">{{ 'Producto' }}</label>
    <input class="form-control" name="producto" type="text" id="producto" value="{{ isset($producto->producto) ? $producto->producto : ''}}" required>
    {!! $errors->first('producto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('generico') ? 'has-error' : ''}}">
    <label for="generico" class="control-label">{{ 'Generico' }}</label>
    <input class="form-control" name="generico" type="text" id="generico" value="{{ isset($producto->generico) ? $producto->generico : ''}}" >
    {!! $errors->first('generico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
    <label for="cantidad" class="control-label">{{ 'Cantidad' }}</label>
    <input class="form-control" name="cantidad" type="number" id="cantidad" value="{{ isset($producto->cantidad) ? $producto->cantidad : ''}}" >
    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
