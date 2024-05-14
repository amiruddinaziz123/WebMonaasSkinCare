@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">

            {{-- <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Alumni</span>
                      <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row --> --}}
              <div class="col-12">
                <table id="example"  class="table table-light" style="width: 100%;">
                 <thead>
                     <tr>
                         <th data-priority="1">
                             ID
                         </th>
                         <th data-priority="1">>
                             Username
                         </th>
                         <th data-priority="1">> 
                             Email
                         </th>
                         <th>
                             Password
                         </th>
                         <th>
                             Telepon
                         </th>
                         {{-- <th>
                             Tanggal
                         </th> --}}
                         <th data-priority="1">>
                             Aksi
                         </th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach ($customers as $mtr)
                     <tr>
                         <td>
                             {{ $mtr->id }}
                         </td>
                         <td>
                             {{ $mtr->username_user }}
                         </td>
                         <td>
                             {{ $mtr->email_user }}
                         </td>
                         <td>
                             {{ $mtr->password_user }}
                         </td>
                         <td>
                          {{ $mtr->no_telp_user }}
                         </td>
                         {{-- <td>
                             @if ($lat->update_at != null)
                             {{ Carbon\Carbon::parse($lat->update_at)->format('d-m-Y H:i:s') }}
                             @else
                             {{ Carbon\Carbon::parse($lat->created_at)->format('d-m-Y H:i:s') }}  
                             @endif
                         </td>
                         <td>
                             @if ($lat->updated_by != null)
                                 {{ $lat->updated_by }}
                             @else
                                 {{ $lat->created_by }}
                             @endif
                         </td> --}}
                         <td>
                             <a href="" class="btn btn-primary btn-sm" role="button">
                                 <i class="bi bi-eye"></i>
                             </a>
                             {{-- <a href="{{ route('latihan.edit', $lat->slug_link) }}" class="btn btn-success btn-sm" role="button"> --}}
                                 <i class="bi bi-pencil"></i>
                             </a>
                             {{-- <a href="{{ route('latihan.hapus', $lat->slug_link) }}" class="btn btn-danger btn-sm" role="button"> --}}
                                 <i class="bi bi-trash3"></i>
                             </a>
                         </td>
                     </tr>
                 @endforeach
                 </tbody>
                 <tfoot>
                  <tr>
                    <th data-priority="1">
                        ID
                    </th>
                    <th data-priority="1">>
                        Username
                    </th>
                    <th data-priority="1">> 
                        Email
                    </th>
                    <th>
                        Password
                    </th>
                    <th>
                        Telepon
                    </th>
                    {{-- <th>
                        Tanggal
                    </th> --}}
                    <th data-priority="1">>
                        Aksi
                    </th>
                </tr>
                 </tfoot>
                </table>
             </div>
          <!-- /.row -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
          <!-- /.row -->
          
         
        </div><!-- /.container-fluid -->
      </section>
</div>


@endsection