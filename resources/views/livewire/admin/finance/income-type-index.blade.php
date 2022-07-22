<div>
    {{-- main --}}
    @include('livewire.admin.finance.income-type-create')

    <div>
        {{-- main --}}
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                @if(Session::has('success_update'))
                  <div class="alert alert-success alertsuccess" role="alert">
                     <strong>Successfully!</strong> Update Blood Information.
                  </div>
                @endif

                @if(Session::has('delete_success'))
                  <div class="alert alert-success alertsuccess" role="alert">
                     <strong>Successfully!</strong> Delete Blood Information.
                  </div>
                @endif

                @if(Session::has('error'))
                  <div class="alert alert-warning alerterror" role="alert">
                     <strong>Opps!</strong> please try again.
                  </div>
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-header custom-card-header">
                      <div class="row">
                          <div class="col-md-8">
                              <h3 class="card-title card_top_title"><i class="fab fa-gg-circle mr-2"></i>All Income Type</h3>
                          </div>

                          <div class="col-md-4 text-right">
                              <a data-toggle="modal" data-target="#incomeTypeAdded" class="btn btn-md btn-primary waves-effect card_top_button"><i class="fa fa-plus-circle mr-2"></i>Added Income Type</a>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-12">
                              <div class="table-responsive">
                                  <table id="alltableinfo" class="table table-bordered custom_table mb-0">
                                      <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Income Name</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
                                          </tr>
                                      </thead>
                                      {{-- main work --}}
                                      <tbody>
                                         @forelse ($incometype as $data)
                                         <tr>
                                           <td> {{ $loop->iteration }} </td>
                                           <td>{{ $data->income_name }}</td>
                                           <td>{{ $data->remarks }}</td>
                                           <td style="width:17%; text-align:center">
                                             <a class="btn btn-primary btn-sm" href="#"><i class="fas fa-edit"></i></a>
                                           </td>
                                         </tr>
                                        @empty
                                          <p style="color:red">Data Not Assigned!</p>
                                        @endforelse
                                       </tbody>
                                      {{-- main work --}}
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer card_footer">
                    .
                  </div>
              </div>
          </div>
        </div>
        {{-- main --}}
    </div>

    {{-- main --}}
</div>
