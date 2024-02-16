@extends('layout.view')
@section('title', 'Appointment')

@section('content')

        <!-- Cards start -->
        <!-- row 1-->
        <h1 style=" font-family: cursive; text-align: center; font-size: 2.5rem; padding-top: 14px;">Specialist</h1>
        <divs class="row container-fluid mt-4">
            <divs class="col-md-4">
                <div class="card mr-4 h-100" style="width: 30rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="psychiatrist">
                  <div class="card-body" style="background-color: #e3f6dd;">
                    <h5 class="card-title"><b>Psychiatrist</b></h5>
                    <p class="card-text">A psychiatrist is a physician who specializes in psychiatry. </p><br>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
            <divs class="col-md-4">
                <div class="card mr-4 h-100" style="width: 30rem; background-color: #e3f6dd;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="Dermatologist">
                  <div class="card-body">
                    <h5 class="card-title"><b>Dermatologist</b></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
            <divs class="col-md-4">
                <div class="card h-100" style="width: 30rem; background-color: #e3f6dd;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="Cardiologist">
                  <div class="card-body">
                    <h5 class="card-title"><b>Cardiologist</b></h5>
                    <p class="card-text"> Cardiologists are medical professionals that examine and treat illnesses associated with the cardiovascular system.</p>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
        </divs>
        <!-- row 2-->
        <divs class="row container-fluid mt-4">
            <divs class="col-md-4">
                <div class="card mr-4 h-100" style="width: 30rem; background-color: #e3f6dd;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="Neurologist">
                  <div class="card-body">
                    <h5 class="card-title"><b>Neurologist</b></h5>
                    <p class="card-text">A neurologist treats conditions of the nerves, spine, and brain.</p><br><br>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
            <divs class="col-md-4">
                <div class="card mr-4 h-100" style="width: 30rem; background-color: #e3f6dd;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="Pediatrician">
                  <div class="card-body">
                    <h5 class="card-title"><b>Pediatrician</b></h5>
                    <p class="card-text">A pediatrician is a medical practitioner who is in charge of children's physical, behavioral, and mental health from birth to the age of eighteen.</p>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
            <divs class="col-md-4">
                <div class="card h-100" style="width: 30rem; background-color: #e3f6dd;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBM-mBCKvJfodfX9ldmNHFbExDdj_VI7bO8w&usqp=CAU" class="card-img-top" alt="Surgeon">
                  <div class="card-body">
                    <h5 class="card-title"><b>Surgeon</b></h5>
                    <p class="card-text">In modern medicine, a surgeon is a medical doctor who performs surgery.</p><br>
                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Make Appointment</a>
                  </div>
                </div>
            </divs>
        </divs>
        <!-- Cards end -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Doctor Appointment</h1>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{route('save.appointment')}}">
                @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Timing</label>
                    <input type="text" class="form-control" name="timing" id="exampleInputEmail1">
                    <div id="emailHelp" class="form-text">Please select a time range.</div>
                    <br>
                    <button type="button" class="btn close" style="background-color: #0d6efd; color: white;" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: #0d6efd; color: white;" >Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

    </main>


@endsection
