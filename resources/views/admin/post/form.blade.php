@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Authors table</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="m-3">
                        {!! form($form) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const simplemde = new SimpleMDE({ element: document.getElementById("editor") });
    </script>
@endpush