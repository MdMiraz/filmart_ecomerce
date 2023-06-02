@if(Session('success'))
<div class="alert bg-primary fade in">
	<a href="" class="close" data-dismiss="alert">x</a>
	<strong>{{ Session('success') }}</strong>
</div>
@endif
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert bg-danger fade in">
	<a href="" class="close" data-dismiss="alert">x</a>
	<strong>{{ $error }}</strong>
</div>
@endforeach
@endif