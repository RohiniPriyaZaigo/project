@extends('backend.layouts.app')
@section('content')
<form action="" method="post"  enctype="multipart/form-data">
<div class="col-6">
<label>ADDRESS:</label>
<input type="text"  value="" class="form-group col-md-8" name="address" style="width: 300px; height: 100px; "/>
</div>
<div class="col-6">
<input type="checkbox" id="" name="" value="">
<label> I am agree to the terms and conditions check box</label>
</div>
</form>
@endsection