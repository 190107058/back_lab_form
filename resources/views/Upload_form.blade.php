<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->
<style>
.container {
margin-top:2%;
}
</style>
</head>
<body>
@if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">
<div class="row">
<div class="col-md-2"> <img src="/32114.svg" width="80" /></div>
<div class="col-md-8"><h2>@lang('main.title')</h2>
</div>
</div>
<br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="/multiuploads" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
                    <label for="Person Name">@lang('main.name')</label>
                    <input type="text" name="name" class="form-control"  placeholder="@lang('main.name')" >
                </div>

                <div class="form-group">
                    <label for="Person Surname">@lang('main.surname')</label>
                    <input type="text" name="surname" class="form-control"  placeholder="@lang('main.surname')" >
                </div>

                <div class="form-group">
                    <label for="Person Email">@lang('main.email')</label>
                    <input type="text" name="email" class="form-control"  placeholder="@lang('main.email')" >
                </div>
<label for="Product Name">@lang('main.photo')</label>
<br />
<input type="file" class="form-control" name="photos[]" multiple/>
<br />
<input type="submit" class="btn btn-primary" value="@lang('main.upload')" />
</form>
</div>
</div>
</div>
</body>
</html>