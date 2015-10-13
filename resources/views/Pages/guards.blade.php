@extends('templates/dashboard')

@section('content')

<div class="content guards">
	<div class="ui segment">
		<div class="ui large secondary menu">
			<div class="item">
				<div class="ui small breadcrumb">
					<a class="section"><i class="home icon"></i>Dashboard</a>
					<i class="right angle icon"></i>
					<div class="section"><i class="user icon"></i>Guards</div>
				</div>
			</div>
			<div class="ui right secondary menu">
				<div class="item">
					<div class="ui action input">
						<input type="text" placeholder="Search...">
						<button class="ui icon button">
							<i class="search icon"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection