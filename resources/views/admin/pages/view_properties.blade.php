@extends('admin.pages.index')

@section('content')
  <div class="row">
    <div class="container">


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Property Owners</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Property Owner</th>
              <th>Property Name</th>
              <th>Location</th>
              <th>Price</th>
              <th>Image</th>
              <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($properties as $property)
            <tr>
              <td>{{$property->id}}</td>
              <td>{{$property->user->name}}</td>
              <td>{{$property->property_name}}</td>
              <td>{{$property->location}}</td>
              <td><span style="color:green">Kshs.{{$property->price}}</span></td>
              <td><img class="img-fluid rounded-circle mb-3 mb-md-0"  src="/property/images/{{$property->property_image}}" style="height:100px;width:100px;" alt=""></td>
              <td>
                <a class="btn btn-primary btn-sm" title="Edit" href="#modalForm" data-toggle="modal"
                       data-href="{{url('update_user/'.$property->id)}}">
                        Edit</a>
                    <input type="hidden" name="_method" value="delete"/>
                    <a class="btn btn-danger btn-sm" title="Delete" data-toggle="modal"
                       href="#modalDelete"
                       data-id="{{$property->id}}"
                       data-token="{{csrf_token()}}">
                        Delete
                    </a>
                <a href="" class="btn btn-info btn-sm">Deactivate</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                    <input type="hidden" id="delete_token"/>
                    <input type="hidden" id="delete_id"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger"
                            onclick="ajaxDelete('{{url('/delete_user')}}/'+$('#delete_id').val(),$('#delete_token').val())">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
