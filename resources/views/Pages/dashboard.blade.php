@extends('templates.dashboard')

@section('content')


	<div class="content dashboard">
		<div class="ui segment">
			<div class="ui large secondary menu">
				<div class="item">
					<div class="ui small breadcrumb">
						<div class="section"><i class="home icon"></i>Dashboard</div>
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

		<div class="ui stackable two column padded grid">
			<div class="column">
					<table class="ui blue unstackable celled table">
						<thead>
							<tr>
								<th colspan="2" >Recently Added Guards</th>
							</tr>
							<tr>
								<th width="85%">Name</th>
								<th width="15%">Date</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Allen Poblete</td>
								<td>10/23/2015</td>
							</tr>
							<tr>
								<td>Allen Poblete</td>
								<td>10/23/2015</td>
							</tr>
							<tr>
								<td>Allen Poblete</td>
								<td>10/23/2015</td>
							</tr>
							<tr>
								<td>Allen Poblete</td>
								<td>10/23/2015</td>
							</tr>
						</tbody>
					</table>
			</div>
			<div class="column">
				<div class="ui blue segment">
			
				</div>
			</div>
		</div>
		
	</div>

@endsection()