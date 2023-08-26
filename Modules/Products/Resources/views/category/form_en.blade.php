<!-- tab en -->
<div class="tab_content">
    <div class="form-group">
        <label class="form-label">ชื่อหมวดหมู่ (EN)</label>
        <input type="text" class="form-control" name="name_en"
            placeholder="ชื่อหมวดหมู่"
            value="{{ !empty($data->name_en) ? $data->name_en : '' }}">
    </div>
    {{-- <div class="form-group">
        <label class="form-label">รายละเอียด (EN)</label>
        <textarea id="master_category_description" class="form-control texteditor" name="description_en" rows="4"
            placeholder="รายละเอียด">{{ !empty($data->description_en) ? $data->description_en : '' }}</textarea>
    </div> --}}
</div>
<!-- tab en -->