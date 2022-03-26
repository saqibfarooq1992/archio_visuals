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
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Experts</h4>
                    </div>
                </div>
                <div class="card-body row">
                    <form role="form" action="{{route('experts.store')}}" method="POST" enctype="multipart/form-data" class="text-start">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name"  class="form-control" autocomplete="heading">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Designation</label>
                                    <input type="text" name="designation" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Facebook</label>
                                    <input type="url" name="facebook"  class="form-control" autocomplete="facebook">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="url" name="instagram" class="form-control" autocomplete="instagram">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Twitter</label>
                                    <input type="url" name="twitter" class="form-control" autocomplete="twitter">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Gmail</label>
                                    <input type="url" name="gmail" class="form-control" autocomplete="gmail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Whatsapp</label>
                                    <input type="url" name="whatsapp" class="form-control" autocomplete="whatsapp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-label">Picture</label>
                            <div class="input-group input-group-outline mb-3">
                                <input type="file" name="picture" class="form-control" autocomplete="whatsapp">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Save</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
