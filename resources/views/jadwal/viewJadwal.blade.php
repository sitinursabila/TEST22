@extends('layout.layouts')
@section('content')

<!-- page content -->
       
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Jadwal </h3>
               
              </div>


            <div class="clearfix"></div>

            <div class="row">
            <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                  <table>
                      <tr>
                        <hr>
                      </tr>
                      <tr>
                          <td> <a class="btn btn-primary" href=""><i class="fa fa-plus"></i></a></td>
                      </tr>
                  </table>
                  <hr>
               </header>
                    <div class="clearfix"></div>
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
                          <th>Sesi 1</th>
                          <th>Sesi 2</th>   
                          <th>Sesi 3</th>
                          <th>Sesi 4</th>
                          <th>Sesi 5</th>
                          <th>Sesi 6</th>
                          <th>Sesi 7</th>
                                
                        </tr>
                      </thead>


                      <tbody>
                      @foreach($data as $d)
                      <tr>
                      <td>{{ $d->namaDokter }}</td>
                      <td>{{ $d->hari }}</td>
                      @if ($d->jam == "09:00- 10:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      @if ($d->jam == "10:00-11:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      @if ($d->jam == "11:00-12:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      @if ($d->jam == "12:00-13:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      @if ($d->jam == "13:00-14:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      @if ($d->jam == "14:00-15:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif
                      
                      
                      @if ($d->jam == "16:00-17:00")
                      <td>{{ $d->jam }}</td>
                      @else 
                      <td>   </td>
                      @endif

                      
                  
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