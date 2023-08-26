<!-- product detail tab  -->
<div class="tab_content">
        <div class="mb-2">
            <div class="form-group">
                <?= image_upload(
                    $id = '1', 
                    $name = 'images', 
                    $label = 'รูปภาพปก' . '', 
                    $image = (!empty($product['data']->images))?$product['data']->images:'', 
                    $size_recommend =  "1920*900 px",
                    false,true
                    )
                ?>
            </div>
        </div>

    <div class="tab_wrapper mb-3" id="product-detail-tab">
        <ul class="tab_list">
            <li class="icons-list-item" style="height: 36px;"><i class="flag flag-th"></i>
            </li>
            <li class="icons-list-item" style="height: 36px;"><i class="flag flag-gb"></i>
            </li>
        </ul>
        <div class="content_wrapper">
            <!-- form_detail_th -->
            @includeIf('products::product.form_detail_th')
            <!-- .form_detail_th -->
            <!-- form_detail_en -->
            @includeIf('products::product.form_detail_en')
            <!-- .form_detail_en -->
        </div>
        <!-- form_price -->
        <!-- .form_price -->
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label class="form-label">{{ __('news_admin.sequence') }}</label>
            <input type="text" class="form-control" maxlength="3" onkeypress="InputValidateString()" id="sort"
                name="sort" placeholder="{{ __('news_admin.sequence_placeholder') }}"
                value="{{ !empty($product['data']->sort) ? $product['data']->sort : '' }}">
        </div>

        <div class="form-group col-md-3">
            <label class="form-label">{{ __('content::admin.field.status') }}</label>
            <div class="button button-r btn-switch">
                <input type="checkbox" class="checkbox" id="status" name="status" value="1"
                    {{ isset($product['data']->status) ? ($product['data']->status == 1 ? 'checked' : '') : 'checked' }}>>
                <div class="knobs"></div>
                <div class="layer"></div>
            </div>
        </div>
    </div>
</div>
<!-- .product detail tab -->
