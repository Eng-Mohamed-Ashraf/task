@foreach($fields_images as $input)
<div class="col-md-6">
    <label>
        <br>
    </label>
    <div class="input-group " data-type="{{$input['type']??'all'}}" data-toggle="aizuploader"   data-multiple="{{$input['multiple']??false}}">
        <div id="{{$input['name']}}" class="input-group-prepend input-group-btn">
            <div class="input-group-text btn btn-success">  {{$input['title']}} </div>
        </div>
        <div class="form-control file-amount "></div>
        <input type="hidden" name="{{$input['name']}}"
               value="{{isset($input['model'])?$input['model'][$input['name']]:''}}" class="selected-files">
    </div>
    <div class="file-preview box sm">
    </div>

</div>
@endforeach
