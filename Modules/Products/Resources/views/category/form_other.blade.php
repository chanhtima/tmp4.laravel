<!-- category other tab -->
<div class="row">
    {{-- <div class="form-group col-lg-6">
        <label class="form-label">{{ __('news_admin.sequence') }}</label>
        <input type="text" class="form-control" maxlength="3" onkeypress="InputValidateString()" id="sequence"
            name="sequence" placeholder="{{ __('news_admin.sequence_placeholder') }}"
            value="{{ !empty($data->sequence) ? $data->sequence : '' }}">
    </div> --}}
    <div class="form-group col-md-6">
        <label class="form-label">{{ __('products::admin.field.status') }}</label>
        <div class="button button-r btn-switch">
            <input type="checkbox" class="checkbox" id="status" name="status" value="1" {{ isset($data->status) ? ($data->status == 1 ? 'checked' : '') : 'checked' }}>>
            <div class="knobs"></div>
            <div class="layer"></div>
        </div>
    </div>
    {{-- <div class="form-group col-md-6">
        <label class="form-label">แสดงหน้าแรก</label>
            <div class="button button-r btn-switch">
                <input type="checkbox" class="checkbox" id="status_index" name="status_index" value="1" {{ isset($data->status_index) ? ($data->status_index == 1 ? 'checked' : '') : 'checked' }}>>
                <div class="knobs"></div>
                <div class="layer"></div>
        </div>
    </div> --}}
</div>

<div class="row">
    {{-- <div class="form-group col-md-6">
        <label class="form-label">{{ __('products::admin.field.status_footer') }}</label>
            <div class="button button-r btn-switch">
                <input type="checkbox" class="checkbox" id="status_footer" name="status_footer" value="1" {{ isset($data->status_footer) ? ($data->status_footer == 1 ? 'checked' : '') : 'checked' }}>>
                <div class="knobs"></div>
                <div class="layer"></div>
        </div>
    </div> --}}
</div>
<!-- .category other tab -->
