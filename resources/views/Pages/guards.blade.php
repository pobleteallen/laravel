@extends('templates.dashboard')

@section('content')

<div class="ui page dimmer">
	<div class="content">
		<div id="add-guard" class="ui blue segment">
			<h4 class="ui header">Add Guard Information</h4>
			
			<form class="ui form">

				<div class="ui hidden divider"></div>
				<h5 class="ui horizontal divider header">Personal Information</h5>
				<div class="ui hidden divider"></div>

				<div class="three fields">
					<div class="field">
						<input type="text" placeholder="Firstname">
					</div>
					<div class="field">
						<input type="text" placeholder="Middlename">
					</div>
					<div class="field">
						<input type="text" placeholder="Lastname">
					</div>
				</div>
				<div class="field">
					<input type="text" placeholder="Address">
				</div>

				<div class="ui hidden divider"></div>
				<h5 class="ui horizontal divider header">ID Numbers</h5>
				<div class="ui hidden divider"></div>

				<div class="two fields">
					<div class="field">
						<input type="text" placeholder="SSS Number">
					</div>
					<div class="field">
						<input type="text" placeholder="PhilHealth Number">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<input type="text" placeholder="TIN Number">
					</div>
					<div class="field">
						<input type="text" placeholder="Pag-ibig Number">
					</div>
				</div>
				<div class="center">
				
						<button class="ui blue button">ADD</button>
						<button class="ui blue button">CANCEL</button>
				
				</div>
			</form>
		</div>
	</div>
</div>



<div class="ui content">

	<div class="ui equal large attached menu">
		<a id="add-guard-btn" class="item">
			<i class="add user icon"></i>
			Add Guard
		</a>
		<div class="ui simple dropdown item">
			<i class="sort icon"></i>
			Sort by
			<i class="dropdown icon"></i>
			<div class="menu">
				<div class="item">Date</div>
				<div class="item">Name</div>
				<div class="item">Date</div>
				<div class="item">Name</div>
			</div>
		</div>
		<div class="ui secondary right menu">
			<div class="item">
				<div class="ui icon input">
					<input type="text" placeholder="Search...">
					<i class="search link icon"></i>
				</div>
			</div>

		</div>
	</div>

	<div class="ui vertical segment">
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

</div>

@endsection