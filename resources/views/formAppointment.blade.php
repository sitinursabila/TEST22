@extends('layoutUser.layout')
@section('content')

    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
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
           
     
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div> 
@endsection