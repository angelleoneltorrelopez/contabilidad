<div class="form-group {{ $errors->has('factura') ? 'has-error' : ''}}">
    <label for="factura" class="control-label">{{ 'Factura' }}</label>
    <input class="form-control" name="factura" type="text" id="factura" value="{{ isset($ventum->factura) ? $ventum->factura : ''}}" >
    {!! $errors->first('factura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    <label for="serie" class="control-label">{{ 'Serie' }}</label>
    <input class="form-control" name="serie" type="text" id="serie" value="{{ isset($ventum->serie) ? $ventum->serie : ''}}" >
    {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}">
    <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
    <input class="form-control" name="cliente" type="text" id="cliente" value="{{ isset($ventum->cliente) ? $ventum->cliente : ''}}" required>
    {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
