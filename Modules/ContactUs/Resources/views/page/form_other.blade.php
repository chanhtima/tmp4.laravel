<div class="row mt-3">
    <div class="form-group col-lg-6">
        <label class="form-label" title="phone">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Tel"maxlength="100"
            onkeypress="InputValidateString();" value="{{ !empty($data->phone) ? $data->phone : '' }}">
    </div>

    <div class="form-group col-6">
        <label class="form-label">email</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1"
            id ="email" name ="email" value="{{ !empty($data->email) ? $data->email : '' }}">
        </div>
    </div>

    
    <div class="form-group col-6">
        <label class="form-label">Twitter</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="twitter" aria-label="twitter" aria-describedby="basic-addon1"
            id ="twitter" name ="twitter" value="{{ !empty($data->twitter) ? $data->twitter : '' }}">
        </div>
    </div>
    
    <div class="form-group col-6">
        <label class="form-label">{{__('contactus::admin.facebook') }}</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="{{__('contactus::admin.facebook') }}" aria-label="{{__('contactus::admin.facebook') }}" aria-describedby="basic-addon1"
            id ="facebook" name ="facebook" value="{{ !empty($data->facebook) ? $data->facebook : '' }}">
        </div>
    </div>

    <div class="form-group col-6">
        <label class="form-label">{{__('contactus::admin.ig') }}</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="{{__('contactus::admin.ig') }}" aria-label="{{__('contactus::admin.ig') }}" aria-describedby="basic-addon1"
            id ="ig" name ="ig" value="{{ !empty($data->ig) ? $data->ig : '' }}">
        </div>
    </div>
    <div class="form-group col-6">
        <label class="form-label">{{__('contactus::admin.skype') }}</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="skype" aria-label="skype" aria-describedby="basic-addon1"
            id ="skype" name ="skype" value="{{ !empty($data->skype) ? $data->skype : '' }}">
        </div>
    </div>

    <div class="form-group col-6">
        <label class="form-label">LinkedIn</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{__('contactus::admin.url')}}</span>
            <input type="text" class="form-control" placeholder="linkedin" aria-label="linkedin" aria-describedby="basic-addon1"
            id ="linkedin" name ="linkedin" value="{{ !empty($data->linked_in) ? $data->linked_in : '' }}">
        </div>
    </div>

    <div class="form-group col-lg-6">
        <label class="form-label">{{ __('contact_admin.gmaps') }}</label>
        <textarea id="gmaps" class="form-control" name="gmaps" rows="4"
            placeholder="{{ __('contact_admin.gmaps') }}">{{ !empty($data->gmaps) ? $data->gmaps : '' }}</textarea>
    </div>
</div>
