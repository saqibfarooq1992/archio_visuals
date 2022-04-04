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
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Blogs Create</h4>
                    </div>
                </div>
                <div class="card-body row">
                    <form  action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data" role="form" class="text-start">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Hlog Heading</label>
                                    <input type="text" name="blog_heading"  class="form-control" autocomplete="slider_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Blog Details Heading</label>
                                    <input type="text" name="blog_details_heading" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Blog Slogan</label>
                                    <input type="text" name="blog_slogan" id="blog_slogan" autocomplete="blog_slogan" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">title</label>
                                    <input type="text" name="title" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">tags</label>
                                    <input type="text" name="tags" class="form-control" autocomplete="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">title</label>
                                    <input type="text" name="title" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <textarea name="short_description" id="tags" cols="90" rows="5" autocomplete="description" placeholder="short description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <textarea name="details_description" id="tags" cols="90" rows="5" autocomplete="description" placeholder="Details Descriptions" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">Blog Picture</label>
                                <div class="input-group input-group-outline">
                                    <input type="file" name="picture"  class="form-control" autocomplete="heading">
                                </div>
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
<script>

</script>
