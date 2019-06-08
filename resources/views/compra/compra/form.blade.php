<div class="form-group {{ $errors->has('factura') ? 'has-error' : ''}}">
    <label for="factura" class="control-label">{{ 'Factura' }}</label>
    <input class="form-control" name="factura" type="text" id="factura" value="{{ isset($compra->factura) ? $compra->factura : ''}}" >
    {!! $errors->first('factura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('serie') ? 'has-error' : ''}}">
    <label for="serie" class="control-label">{{ 'Serie' }}</label>
    <input class="form-control" name="serie" type="text" id="serie" value="{{ isset($compra->serie) ? $compra->serie : ''}}" >
    {!! $errors->first('serie', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('proveedor') ? 'has-error' : ''}}">
    <label for="proveedor" class="control-label">{{ 'Proveedor' }}</label>
    <input class="form-control" name="proveedor" type="text" id="proveedor" value="{{ isset($compra->proveedor) ? $compra->proveedor : ''}}" required>
    {!! $errors->first('proveedor', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
