<!-- category th tab -->
<div class="tab_content active">
    <div class="form-group">
        <label class="form-label">ชื่อหมวดหมู่ (TH)</label>
        <input type="text" class="form-control" name="name_th"
            placeholder="ชื่อหมวดหมู่"
            value="{{ !empty($data->name_th) ? $data->name_th : '' }}">
    </div>
    {{-- <div class="form-group">
        <label class="form-label">รายละเอียด (TH)</label>
        <textarea id="master_category_description" class="form-control texteditor" name="description_th" rows="4"
            placeholder="รายละเอียด">{{ !empty($data->description_th) ? $data->description_th : '' }}</textarea>
    </div> --}}
</div>
<!-- .category th tab  -->
                                        