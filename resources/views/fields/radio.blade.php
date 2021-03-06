<label>{{ $field->getLabel() }}</label>
@foreach($field->getMultipleData() as $radio)
    <div class="radio">
        <label>
            <input type="radio" name="{{ $field->getFieldName() }}" value="{{ $radio['value'] }}">
            {{ $radio['label'] }}
        </label>
    </div>
@endforeach
@if ($errors->has($field->getFieldName()))
    <span class="help-block">
        <strong>{{ $errors->first($field->getFieldName()) }}</strong>
    </span>
@endif
