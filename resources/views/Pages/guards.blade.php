@extends('templates.dashboard')

@section('content')
<div class="ui content">

	<div class="ui large attached menu">
		<a class="item">
			<i class="add user icon"></i>
			Add Guard
		</a>
		<div class="ui secondary right menu">
			<div class="item">
				<div class="ui icon input">
					<input type="text" placeholder="Search...">
					<i class="search link icon"></i>
				</div>
			</div>
		</div>
	</div>

	<div class="ui special cards">

		<div class="card">
			<div class="blurring dimmable image">
				<div class="ui dimmer">
					<div style="margin-left: 0;" class="content">
						<div class="center">
							<div class="ui blue buttons">
								<div class="ui button">
									Remove
								</div>
								<div class="or"></div>
								<div class="ui button">
									Edit
								</div>
							</div>
						</div>	
					</div>
				</div>
				<img src="img/testi-pic.jpg">
			</div>
			<div class="content">
				<div class="header">Allen Poblete</div>
			</div>
			<div class="extra content">
				<div class="ui slide masked reveal">
					<div class="visible content">
						<p>SSS No:</p>
						<p>Phil. Health No:</p>
						<p>TIN No:</p>
						<p>Pag-ibig No:</p>
						<p>NBI ID No:</p>
						<p>SBR Date Issued:</p>
						
					</div>
					<div class="hidden content">
						<p>Address:</p>
						<p>Contact No.:</p>
						<p>Date Accepted:</p>
						<p>Availability:</p>
					</div>
				</div>
			</div>
		</div>	

		<div class="card">
			<div class="blurring dimmable image">
				<div class="ui dimmer">
					<div style="margin-left: 0;" class="content">
						<div class="center">
							<div class="ui blue buttons">
								<div class="ui button">
									Remove
								</div>
								<div class="or"></div>
								<div class="ui button">
									Edit
								</div>
							</div>
						</div>	
					</div>
				</div>
				<img src="img/testi-pic.jpg">
			</div>
			<div class="content">
				<div class="header">Allen Poblete</div>
			</div>
			<div class="extra content">
				<p>SSS No:</p>
				<p>Phil. Health No:</p>
				<p>TIN No:</p>
				<p>Pag-ibig No:</p>
				<p>NBI ID No:</p>
				<p>SBR Date Issued:</p>
			</div>
		</div>	

	</div>

</div>

@endsection