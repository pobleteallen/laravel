@extends('templates.dashboard')

@section('content')

<div class="content">
	
	<div class="ui segment">
		<div class="ui large secondary menu">
			<div class="item">
				<div class="ui small breadcrumb">
					<a class="section"><i class="home icon"></i>Dashboard</a>
					<i class="right angle icon"></i>
					<div class="section"><i class="file outline icon"></i>Forms</div>
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

	<div class="ui stackable padded grid">

		<div class="five wide column">
			<div class="ui blue segment">
				<h5 class="ui header">
					<i class="list icon"></i>
					List of Forms
				</h5>
				<ul class="ui list">
					<li><a href=""class="item">Form1</a></li>
					<li><a class="link">Form1</a></li>
					<li><a class="link">Form1</a></li>
					<li><a class="link">Form1</a></li>
					<li><a class="link">Form1</a></li>
					<li><a class="link">Form1</a></li>
					<li><a class="link">Form1</a></li>
				</ul>
			</div>
		</div>

		<div class="eleven wide column">
			<div class="ui blue segment">
				<embed style="min-height: 75vh !important; width: 100%;" src=""></embed>
			</div>
		</div>

	</div>

</div>

@endsection