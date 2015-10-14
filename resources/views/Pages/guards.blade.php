@extends('templates.dashboard')

@section('content')
<div class="content">
	
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

	<div class="ui stackable padded grid">
		<div class="twelve wide column">	
			<!-- <button class="ui attached top labeled icon blue button">
				<i class="add user icon"></i>
				Add Guard
			</button> -->
			<table class="ui attached unstackable blue table">
				<thead>
					<tr>
						<th width="85%">Name</th>
						<th width="15%">Availability</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Allen Poblete</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Allen Poblete</td>
						<td>No</td>
					</tr>
					<tr>
						<td>Allen Poblete</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Allen Poblete</td>
						<td>No</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>
							<div class="ui icon input">
								<input type="text" placeholder="Search...">
								<i class="search icon"></i>
							</div>
						</th>
						<th>
							<div class="ui pagination small menu">
								<a class="active item">1</a>
								<a class="item">2</a>
								<a class="item">3</a>
								<div class="disable item">...</div>
								<a class="item">4</a>
								<a class="item">5</a>
								<a class="item">6</a>
							</div>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>

		<div class="four wide column">

			<div class="ui card">
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
					<p>Availability: Yes</p>
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