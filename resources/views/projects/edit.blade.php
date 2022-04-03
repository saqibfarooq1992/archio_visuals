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
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Project Update</h4>
                    </div>
                </div>
                <div class="card-body row">
                    <form  action="{{route('projects.update' , $project->id)}}" method="POST" enctype="multipart/form-data" role="form" class="text-start">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Slider Title</label>
                                    <input type="text" name="slider_title" value="{{$project->slider_title}}"  class="form-control" autocomplete="slider_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{$project->title}}" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Slogan</label>
                                    <input type="text" name="slogan" value="{{$project->slogan}}" class="form-control" autocomplete="slider_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Project Name</label>
                                    <input type="text" name="project_name" value="{{$project->project_name}}" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Client</label>
                                    <input type="text" name="client" value="{{$project->client}}" class="form-control" autocomplete="heading">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" value="{{$project->location}}" class="form-control" autocomplete="location">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Surface Area</label>
                                    <input type="text" name="surface_area" value="{{$project->surface_area}}" class="form-control" autocomplete="surface_area">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Year Completed</label>
                                    <input type="text" name="year_completed" value="{{$project->year_completed}}" class="form-control" autocomplete="year_completed">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Value </label>
                                    <input type="text" name="value" value="{{$project->value}}"  class="form-control" autocomplete="heading">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Architect</label>
                                    <input type="text" name="architect" value="{{$project->architect}}" class="form-control" autocomplete="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Banner Image</label>
                                <div class="input-group input-group-outline">
                                    <input type="file" name="banner_image"   class="form-control" autocomplete="banner_picture">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Project Thumb 1</label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="file" name="picture_1" class="form-control" autocomplete="picture_1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Project Thumb 2</label>
                                <div class="input-group input-group-outline">
                                    <input type="file" name="picture_2"  class="form-control" autocomplete="picture_1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Project Thumb 3</label>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="file" name="picture_3" class="form-control" autocomplete="picture_1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Project Single Img 1</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="file" name="gallery" class="form-control" autocomplete="picture_1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Project Single Img 2</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="file" name="gallery" class="form-control" autocomplete="picture_1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="form-label">Project Single Img 3</label>
                                    <div class="input-group input-group-outline mb-3">
                                        <input type="file" name="gallery" class="form-control" autocomplete="picture_1">
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline mb-3">
                                    <textarea name="short_description" placeholder="Short Description...." class="form-control" id="short_description" cols="30" rows="5" autocomplete="short_description">{{$project->short_description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-outline mb-3">
                                    <textarea name="detail_description" placeholder="Detail Description...." class="form-control" id="summernote_2" cols="30" rows="5" autocomplete="detail_description">{{$project->detail_description}}</textarea>
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
<script>

</script>
