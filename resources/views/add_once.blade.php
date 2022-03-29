<x-app-layout>
<!-- <div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <div class="card mt-4">
        <div class="card-header p-3">
          <h5 class="mb-0">Add Once</h5>
          <p class="text-sm mb-0">
          </p>
        </div>
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
              <a class="btn bg-gradient-success w-100 mb-0 toast-btn" href="{{route('abouts.index')}}">About us</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-0 mt-2">
              <a class="btn bg-gradient-info w-100 mb-0 toast-btn" href="{{url('specializations')}}">Specialization</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-2">
              <a class="btn bg-gradient-warning w-100 mb-0 toast-btn" href="{{url('our-project')}}" data-target="warningToast">Our Project</a>
            </div>

          </div>
          <div class="row pt-3">
            <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-2">
                <a class="btn bg-gradient-danger w-100 mb-0 toast-btn" href="{{url('perfect-expert')}}" data-target="dangerToast">Profect Expert</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <a class="btn bg-gradient-success w-100 mb-0 toast-btn" href="{{route('abouts.index')}}">What Client Says</a>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-sm-0 mt-2">
              <a class="btn bg-gradient-info w-100 mb-0 toast-btn" href="#">News & Articals</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer py-4  ">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            © <script>
              document.write(new Date().getFullYear())
            </script>,
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div> -->

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
          <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                  <div class="col-6 d-flex align-items-center">
                      <h6 class="text-white text-capitalize ps-3">Add Once</h6>
                  </div>
                  <!-- <div class="col-6 text-end">
                      <a class="btn btn-sm bg-gradient-dark mb-0" href="{{ route('abouts.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;About us</a>
                  </div> -->
                </div
              </div>
              <div class="card-body px-0 pb-2">
                <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="card mt-4">
                        <div class="row">
                          <div class="col-lg-4 col-sm-6 col-12">
                            <a class="btn bg-gradient-success w-100 mb-0 toast-btn" href="{{route('abouts.index')}}">About us</a>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12 mt-sm-0 mt-2">
                            <a class="btn bg-gradient-info w-100 mb-0 toast-btn" href="{{url('specializations')}}">Specialization</a>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-2">
                            <a class="btn bg-gradient-warning w-100 mb-0 toast-btn" href="{{route('projects.index')}}" data-target="warningToast">Our Project</a>
                          </div>
                        </div>
                        <div class="row pt-3">
                          <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-2">
                              <a class="btn bg-gradient-danger w-100 mb-0 toast-btn" href="{{route('experts.index')}}" data-target="dangerToast">Profect Expert</a>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <a class="btn bg-gradient-success w-100 mb-0 toast-btn" href="{{route('clients.index')}}">What Client Says</a>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12 mt-sm-0 mt-2">
                            <a class="btn bg-gradient-info w-100 mb-0 toast-btn" href="{{route('blogs.index')}}">News & Articals</a>
                          </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>

</x-app-layout>
