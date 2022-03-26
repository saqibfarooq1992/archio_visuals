<x-app-layout>
  <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                <div class="col-6 d-flex align-items-center">
                    <h6 class="text-white text-capitalize ps-3">Specializations</h6>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-sm bg-gradient-dark mb-0" href="{{ route('specializations.create') }}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Specializations</a>
                </div>
            </div
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                        <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                        <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($specializations as $item)
                        <tr>
                            <td class="text-left">1</td>
                            <td class="text-left">{{$item->title}}</td>
                            <td><img src="storage/{{$item->picture}}" style="height:26%; width:16% ; border-radius: 0%;" alt=""></td>
                            <td class="text-left">pendding</td>
                            <td class="text-left">
                              <a class="btn btn-link text-info text-gradient px-3 mb-0" href="">Show</a>
                              <a class="btn btn-link text-success text-gradient px-3 mb-0" href="">Edit</a>
                              <a href="" class="btn btn-link text-danger text-gradient px-3 mb-0">Delete</a>
                              <a class="btn btn-link text-warning text-gradient px-3 mb-0" href="">Status</a>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
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
  </div>
</x-app-layout>
