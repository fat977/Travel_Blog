@extends('dashboard.layouts.layout')

@section('content')
    <!-- Breadcrumb -->
    <ol class="breadcrumb" style="margin-top:5%; padding-right: 16%">
        <li class="breadcrumb-item">{{__('words.dashboard')}}</li>
        <li class="breadcrumb-item"><a href="#">{{__('words.destinations')}}</a>
        </li>
    </ol>


    {{-- {{dd($setting)}} --}}

    <div class="container-fluid">

        <div class="col-lg-12">
            <div class="card" style="margin-right: 15%">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> {{__('words.striped_table')}}
                </div>
                <div class="card-block">
                    <table class="table table-striped" id="destination">
                        <thead>
                            <tr>
                                <th>{{__('words.destinations')}}</th>
                                <th>{{__('words.continent')}}</th>
                                <th>{{__('words.actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($destinations as $destination)
                            @if (isset($destination['parents']['title'])&&!empty($destination['parents']['title']))
                               @php
                                   $parent_destination = $destination['parents']['title'];
                               @endphp  
                            @else
                               @php
                                    $parent_destination =__('words.home');
                               @endphp
                            @endif
                            <tr>
                                <td>{{ $destination['title']}} </td>
                                <td> {{ $parent_destination }} </td>
                                <td>
                                    <form action="{{ route('destination.destroy',$destination['id']) }}" method="POST">
                                        
                                        <a href="{{ route('destination.edit',$destination['id']) }}" class="btn btn-primary"><i style="font-size: 20px" class="fa fa-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit" onclick="return confirm('{{ __('buttonre you sure you want to delete?') }}')" class="btn btn-danger"><i style="font-size: 20px;" class="fa fa-trash"></i></button>
                                    </form>
        
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


    {{-- delete --}}
{{-- <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ Route('dashboard.category.delete') }}" method="POST">
            <div class="modal-content">

                <div class="modal-body">
                    @csrf

                    <div class="form-group">
                        <p>{{ __('words.sure delete') }}</p>
                        @csrf
                        <input type="hidden" name="id" id="id">
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">{{ __('words.close') }}</button>
                    <button type="submit" class="btn btn-danger">{{ __('words.delete') }} </button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div> --}}
{{-- delete --}}
@endsection







{{-- @push('javascripts')
    <script type="text/javascript">
        $(function() {
            var table = $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ Route('dashboard.category.all') }}",
                columns: [
                 
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'parent',
                        name: 'parent'
                    },
                    {
                        data: 'action',
                        name: 'action',
                    }
                ]
            });

        });

        $('#table_id tbody').on('click', '#deleteBtn', function(argument) {
            var id = $(this).attr("data-id");
            console.log(id);
            $('#deletemodal #id').val(id);
        })
    </script>
@endpush --}}
