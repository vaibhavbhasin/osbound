<fieldset>
  <legend>Searches</legend>
  <form autocomplete="off">
    <div class="row no-gutters mb-2">
      <div class="col-md-2 pr-1">
        <select name="id" id="id" class="custom-select custom-select-sm">
          <option value="0">Job No</option>
          @foreach ($enquires as $enquiry)
            <option
              value="{{$enquiry->id}}" {{ request('id') == $enquiry->id ? 'selected' : '' }}>{{$enquiry->enq_number}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::text('date_form', request('date_form'), ['class' => 'form-control form-control-sm datepicker','placeholder'=>'Date From']) !!}
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::select('contact', @$filteredNames , request('contact') , ['class' => 'custom-select custom-select-sm','placeholder'=>'Name']) !!}
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::select('status', @$statues , request('status') , ['class' => 'custom-select custom-select-sm','placeholder'=>'Status']) !!}
      </div>
      <div class="col-md-2 pr-1">

      </div>
      <div class="col-md-2">
        <a href="#" data-modal-width="70%"
           data-modal-title="Add New {{ $pageName }}" data-toggle="modal"
           data-load-url="{{ route($baseRoute.'.create') }}" data-target="#outboundsModel"
           class="btn btn-sm btn-primary btn-block active">Add New {{ $pageName }}</a>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-2 pr-1">
        {!! Form::text('reminder_date', request('reminder_date'), ['class' => 'form-control form-control-sm datepicker','placeholder'=>'Reminders']) !!}
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::text('date_to', request('date_to'), ['class' => 'form-control form-control-sm datepicker','placeholder'=>'Date To']) !!}
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::select('company', @$filteredCompanies , request('company') , ['class' => 'custom-select custom-select-sm','placeholder'=>'Company']) !!}
      </div>
      <div class="col-md-2 pr-1">
        {!! Form::select('reason', $reasons , request('reason') , ['class' => 'custom-select custom-select-sm','placeholder'=>'Reason']) !!}
      </div>
      <div class="col-md-2 pr-1">

      </div>
      <div class="col-md-1 pr-1">
        <button type="submit" class="btn btn-sm btn-block btn-outline-primary">Search</button>
      </div>
      <div class="col-md-1">
        <a href="{{ route($baseRoute.'.index') }}" class="btn btn-sm btn-block btn-outline-secondary active">Back To
          All</a>
      </div>
    </div>
  </form>
</fieldset>
