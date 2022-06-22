@extends('layout.layouts')
@section('content')

			<!-- page content -->
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Buat jadwal </h3>
						</div>

						
					</div>
					<div class="clearfix"></div>
					
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate method="post" action="{{route('jadwal.store')}}" class="form-horizontal form-label-left">
										@csrf

												
										<div class="item form-group">
											<label for="dokter" class="col-form-label col-md-3 col-sm-3 label-align">dokter</label>
											<div class="col-md-6 col-sm-6 ">
											<select name="dokter" id="dokter" class="form-control">
                                                <option value="">Pilih Dokter</option>
                                                @foreach($data as $j)
													<option   value="{{$j->idDokter}}">{{$j->namaDokter}} - spesialis {{$j->Spesialis}}</option>
													@endforeach
												</select>											
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="hari">Tanggal <span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" id="hari" name="hari" required="required" class="form-control ">
											</div>
										</div>
                                         <div class= "item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3 label-align">sesi</label>
										    <p style="padding: 5px;">
											<input type="checkbox" name="sesi[]" id="sesi1" value="09:00- 10:00"  class="flat" /> 09:00- 10:00
											<br />

											<input type="checkbox" name="sesi[]" id="sesi2" value="10:00-11:00" class="flat" />10:00-11:00											<br />

											<input type="checkbox" name="sesi[]" id="sesi3" value="13:00-14:00" class="flat" />13:00-14:00										<br />

											<input type="checkbox" name="sesi[]" id="sesi4" value="14:00-15:00" class="flat" />14:00-15:00
											<br />
                                            <input type="checkbox" name="sesi[]" id="sesi5" value="15:00-16:00" class="flat" />15:00-16:00
											<br />
                                            <input type="checkbox" name="sesi[]" id="sesi4" value="16:00-17:00" class="flat" />16:00-17:00
											<br />
										

                                         </div>

										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>	</form>
						
					</div>
				
			</div>
			<!-- /page content -->
@endsection
