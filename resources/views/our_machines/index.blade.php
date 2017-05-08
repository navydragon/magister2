@extends ('layout')

@section ('content')
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Машины в наличии</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
           <table class="table table-bordered">
              <thead>
                <tr>
                  <td>№ п/п</td>
                  <td>Модель</td>
                  <td>Табельный номер</td>
                  <td>Машинист</td>
                </tr>
              </thead>
           <tbody>
           		@foreach ($our_machines as $our_machine)
           			<tr>
                <td></td>  
                </tr>
           		@endforeach
            </tbody>  
           </table>
        </div>
    </div>         
    <hr>
    <div class="row">
      <div class="col-lg-12">
            <form method="POST" action="/our_machines/create">
              {{ csrf_field() }}
        <h4>Добавить новую машину</h4>
        <div class="form-group">
          <label for="name">Модель машины</label>
          <select  class="form-control" id="machine_type" name="machine_type" >
          @foreach($machine_types as $machine_type)
            <option value="{{ $machine_type->id }}">{{ $machine_type->name }}</option>
          @endforeach
          </select>
        </div>
        

        <button type="submit" class="btn btn-default">Добавить</button>
      </form>
        </div>
    </div>

                <!-- /.row -->
@endsection