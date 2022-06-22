@extends('layoutUser.layout')
@section('content')

<!-- page content -->
<br>       
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Jadwal </h3>
               
              </div>


            <div class="row">
            <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                  <table>
                      <tr>
                        <hr>
                      </tr>
                     
                  </table>
                  <hr>
               </header>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nama Dokter</th>
                          <th>Tanggal</th>
                          <th>jam</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$d->namaDokter}}</td>
                                <td>{{$d->hari}}</td>
                                <td>{{$d->jam}}</td>
                            </tr>
                            @endforeach

                      </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
   
</div>
					
					
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

       @endsection