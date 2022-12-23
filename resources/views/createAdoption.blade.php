@extends(`layouts.app`)
@section(`content`)
	<div class="containerCreate">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<h2 class="cardTitle">Create a new event</h2>
						<form class="justify-content-center" action="{{ route('storeEvent') }}" method="post">
							@csrf
						<div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
							<input type="text" name="name" class="form-control" aria-label="Sizing example input"
							aria-describedby="inputGroup-sizing-default" placeholder="name">
                        </div>
                        <div class="input-group mb-3">
							<span class="input-group-text" id="inputGroup-sizing-default">Name</span>
							<input type="text" name="space" class="form-control" aria-label="Sizing example input"
							aria-describedby="inputGroup-sizing-default" placeholder="Space Max">
                        </div>