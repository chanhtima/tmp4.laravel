<!-- product seo tab  -->
<div class="tab_content mb-3">
    <div class="tab_wrapper" id="category-seo-tab">
        <ul class="tab_list">
            <li class="icons-list-item" style="height: 36px;"><i class="flag flag-th"></i>
            </li>
            <li class="icons-list-item" style="height: 36px;"><i class="flag flag-gb"></i>
            </li>
        </ul>
        <div class="content_wrapper">
            <!-- form_seo_th -->
            @includeIf('products::category.seo.form_th')
            <!-- .form_seo_th -->
            <!-- form_seo_en -->
            @includeIf('products::category.seo.form_en')
            <!-- .form_seo_en -->
        </div>
    </div>
</div>
<!-- product seo tab  -->
