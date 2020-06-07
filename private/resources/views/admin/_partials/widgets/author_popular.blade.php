<?php
$widget = array_merge([
    'title' => '',
    'period' => '',
    'num' => 5,
    'class' => '',
], $widget);
?>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
    <input type="text" name="item[{{ $widget['id'] }}][title]" class="form-control col-sm-10"
           value="{{ old('item['.$widget['id'].']title', $widget['title']) }}">
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ __('Period') }}</label>
    <select class="form-control col-sm-10" name="item[{{ $widget['id'] }}][period]">
        <option value="all" {{ (('all' == $widget['period'])? "selected":"") }}>{{ __('All time') }}</option>
        <option value="week" {{ (('week' == $widget['period'])? "selected":"") }}>{{ __('Last week') }}</option>
        <option value="month" {{ (('month' == $widget['period'])? "selected":"") }}>{{ __('Last month') }}</option>
        <option value="year" {{ (('year' == $widget['period'])? "selected":"") }}>{{ __('Last year') }}</option>
    </select>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ __('Number') }}</label>
    <input type="number" min="1" step="1" name="item[{{ $widget['id'] }}][num]" class="form-control col-sm-10"
           value="{{ old('item['.$widget['id'].']num', $widget['num']) }}">
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">{{ __('CSS Class') }}</label>
    <input type="text" name="item[{{ $widget['id'] }}][class]" class="form-control col-sm-10"
           value="{{ old('item['.$widget['id'].']class', $widget['class']) }}">
</div>
