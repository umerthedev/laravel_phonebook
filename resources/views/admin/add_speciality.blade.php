<!doctype html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <!-- Page Container -->

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      @include('admin.overlay')
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      
      <!-- Sidebar Start -->
                @include('admin/sidebar')
      <!-- END Sidebar -->

        <!-- Header -->
          <header id="page-header">           
            <div class="content-header">              

                @include('admin.header')
                
            </div>
        <!-- END Header Content -->

        <!-- Header Search -->
       @include('admin.search')
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        {{-- <div id="page-header-loader" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
        </div> --}}
       
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->
      

      <!-- Main Container -->
      <main id="main-container">                
        <div class="content">
           <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0    text-center text-md-start">          
              <div class="content">
                <!-- Elements -->
                <div class="block block-rounded">                                
                  <div class="block-content">
                    @if(session()->has('message'))  
                   
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <p class="mb-0">{{session()->get('message')}}!!!</p>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                      
                    </div>
        
                    @endif
                  <h1 class="m-4 " style="text-align: center">Doctor Speciality list</h1>

                    <form action="{{url('/add_speciality')}}" method="POST">
                        @csrf
                        <div >
                            <input type="text" id="inputcat" class="form-control"  placeholder="Add Specialist Doctor" name="specialist" required> 
                        </div>
                        <div >
                            <button type="submit"  class="btn btn-secondary bg-dark mt-2 mb-2">Add</button>
                        </div>
    
                   
                    </form>                    
                
                        <div>             
                   
                          <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                              <tr>                                
                                <th style="width: 10%;">ID</th>
                                <th style="width: 70%;">Speciality</th>
                                <th class="text-center" style="width: 120%;">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                
                              <tr>                                
                                <td style="width: 10%px">
                                 
                                </td>
                                <td></td>
                                
                                <td class="text-center">
                                  <div class="btn-group">
                                    <a href="{{url('edit_speciality',)}}">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                      <i class="fa fa-pencil-alt"></i>
                                    </button></a>
                                    <a href="{{url('delete_speciality',)}}" onclick="return confirm('Are You Sure Want To Delete This???')">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                      <i class="fa fa-times"></i>
                                    </button></a>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>   
                    </div>  
                </div>
            </div>
       </div>
            
          
                
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('admin/footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
   
    @include('admin/script')
  </body>
</html>

