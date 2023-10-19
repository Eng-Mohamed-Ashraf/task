<div class="col-md-6 form-group">
    <label class="col-form-label">
        Branch
    </label>
    <select class="form-control select " name="branch_id" id="branch_id">
        <option value=""> select Branch</option>
        @foreach(branch_users() as $branch)
        <option {{isset($row)&&$row['branch_id']==$branch['id']?"selected":""}} value="{{$branch['id']}}">{{$branch['name']}}</option>
        @endforeach

    </select>

</div>
