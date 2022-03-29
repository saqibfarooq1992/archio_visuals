<x-app-layout>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="container-fluid my-auto mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Update About</h4>
                    </div>
                </div>
                <div class="card-body row">
                    <form role="form" action="{{route('companies.store')}}" method="POST" class="text-start" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Company Picture</label>
                                <div class="input-group input-group-outline">
                                    <input type="file" name="company_picture"  class="form-control" autocomplete="company_picture">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
