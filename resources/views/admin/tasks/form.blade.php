<div class="row">


    <div class="col-md-6 form-group">
        <label class="col-form-label">
            Title
        </label>
        <input CLASS="form-control" name="title" id="title" value="{{$row['title']??''}}" placeholder="Add Title">


    </div>



    <div class="col-md-6 form-group">
        <label class="col-form-label">
            Admin
        </label>
        <select class="form-control select " name="assigned_by_id" id="assigned_by_id">
            <option value=""> select Admin</option>
            @foreach($append['admins'] as $admin)

                <option {{isset($row)&&$row['assigned_by_id']==$admin['id']?'selected':''}} value="{{$admin['id']}}">{{$admin['name']}}</option>
            @endforeach


        </select>

    </div>

   <div class="col-md-6 form-group">
        <label class="col-form-label">
            User
        </label>
        <select class="form-control select " name="assigned_to_id" id="assigned_to_id">
            <option value=""> select User</option>
            @foreach($append['users'] as $user)

                <option {{isset($row)&&$row['assigned_to_id']==$user['id']?'selected':''}} value="{{$user['id']}}">{{$user['name']}}</option>
            @endforeach



        </select>

    </div>

   <div class="col-md-12 form-group">
        <label class="col-form-label">
            Description
        </label>
     <textarea class="form-control" name="description" id="description">{{$row['description']??''}}</textarea>

    </div>









</div>

<div class="form-group row">
    <div class="offset-sm-2 col-sm-10">
        <button onclick="save_form($(this),event)"   type="submit" class="btn btn-danger">Save</button>
    </div>
</div>
