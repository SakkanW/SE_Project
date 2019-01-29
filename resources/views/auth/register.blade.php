@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">สมัครสมาชิก</div>
				<div class="alert alert-info">
							
							<ul>
									<li>กรุณากรอกอีเมลตามจริงและตรวจสอบความถูกต้อง หากผิดพลาดจะไม่สามารถแก้ไขข้อมูลได้</li>
									<li>กรุณากรอกเลขบัตรประชาชนตามจริงและตรวจสอบความถูกต้อง หากผิดพลาดจะไม่สามารถแก้ไขข้อมูลได้</li>
							</ul>
						</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">ชื่อ</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">รหัสบัตรประชาชน</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="id_card" value="{{ old('id_card') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">รหัสผ่าน</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">ยืนยันรหัสผ่าน</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									สมัคร
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
