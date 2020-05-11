@extends('template2')
@section('title','Halaman Bidang')

@section('konten')

<div class="container "  >
        <div class="form-row">

        <div class="form-group col-md-10">
            <div class="animate__animated animate__backInLeft"  style=" animation-duration: 3s;">
        <strong><font size="6" style="font-family:Arial, Helvetica, sans-serif;" >Bidang</font></strong> 
             </div>
        </div>
        <!-- Button trigger modal -->
        <div class="form-group col-md-2">
        <div class="animate__animated animate__flipInX"  style=" animation-duration: 3s;">
        <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i> Create New Data 
        </button>
        </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Insert Bidang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/bidang/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_bidang"><font size="4">Nama Bidang</font></label>
                            <input type="text" class="form-control @error('nama_bidang') is-invalid @enderror" 
                            id="nama_bidang" placeholder="Nama Bidang" name="nama_bidang" value="{{ old('nama_bidang') }}">
                            @error('nama_bidang')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="penjelasan"><font size="4">Penjelasan</font></label>
                            <textarea type="text" class="form-control @error('penjelasan') is-invalid @enderror" 
                            id="penjelasan" placeholder="Penjelasan Bidang
                            " name="penjelasan" value="{{ old('penjelasan') }}"rows="4"></textarea>
                            @error('penjelasan')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="template"><font size="4">Template</font></label>
                            <input type="text" class="form-control @error('template') is-invalid @enderror" 
                            id="template" placeholder="Link Template
                            " name="template" value="{{ old('template') }}">
                            @error('template')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                    <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" class="btn btn-success">Insert</button>
                    </form>
                    </div>
                    </div>
                </div>
                </div>
                <!-- tutup modal -->
            </div>
        </div>

            @if (session('insert'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Tambahkan!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

            @if (session('update'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Update!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

            @if (session('delete'))
            <font size="4"> 
            <script>
            Swal.fire(
                'Data Berhasil Di Hapus!',
                '',
                'success'
                )
            </script>
            </font>
            @endif

                <div class="form-row">
                <div class="table-responsive"  >
                <font size="2">
                    <table class="table table-bordered  mydatatable" ></font>
                <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Bidang</th>
                <th scope="col">Penjelasan</th>
                <th scope="col">Template</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bidang as $bd )
                    <tr>
                        <td>{{ $bd -> ID_BIDANG }}</td>
                        <td>{{ $bd -> NAMA_BIDANG }}</td>
                        <td>{{ $bd -> PENJELASAN }}</td>
                        <td>{{ $bd -> TEMPLATE }}</td>
                        <!-- action -->
                        <td>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="badge badge-success" data-toggle="modal" data-target="#editModal{{ $bd->ID_BIDANG }}">
                            <svg class="bi bi-pencil" width="25px" height="25px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                            </svg>Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $bd->ID_BIDANG }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit  Bidang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <form method="post" action="{{ url('/bidang/update') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $bd->ID_BIDANG  }}">

                                <div class="form-group">
                                <label for="nama_bidang"><font size="4">Nama Bidang</font></label>
                                <input type="text" class="form-control @error('nama_bidang') is-invalid @enderror" 
                                id="nama_bidang" placeholder="Nama Bidang" name="nama_bidang" value="{{ $bd->NAMA_BIDANG   }}">
                                @error('nama_bidang')
                                <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <label for="penjelasan"><font size="4">Penjelasan</font></label>
                                <textarea  class="form-control @error('penjelasan') is-invalid @enderror" 
                                id="penjelasan" placeholder="Penjelasan Bidang
                                " name="penjelasan" rows="4" >{{$bd -> PENJELASAN}}</textarea>
                                @error('penjelasan')
                                <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="template"><font size="4">Template</font></label>
                                    <input type="text" class="form-control @error('template') is-invalid @enderror" 
                                    id="template" placeholder="Link Template
                                    " name="template" value="{{ $bd -> TEMPLATE }}">
                                    @error('template')
                                <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                                    @enderror
                                </div>
                            
                           
                                
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                            </form>
                                </div>
                                </div>
                            </div>
                            </div>

                            <!-- Button trigger modal -->
                            
                            
                            @php $x=0; @endphp
                            @foreach($detail_kriteria as $dk)
                                @if($bd -> ID_BIDANG  == $dk-> ID_BIDANG)
                                    @php $x=1; @endphp
                                @endif
                            @endforeach

                            @if($x==0)
                                <button type="button" class="badge badge-danger" data-toggle="modal" 
                                data-target="#exampleModal{{$bd->ID_BIDANG}}"><svg class="bi bi-trash-fill" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.5 3a1 1 0 00-1 1v1a1 1 0 001 1H5v9a2 2 0 002 2h6a2 2 0 002-2V6h.5a1 1 0 001-1V4a1 1 0 00-1-1H12a1 1 0 00-1-1H9a1 1 0 00-1 1H4.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM10 7a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 0110 7zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"></path>
                                </svg>Delete</button>
                            @else
                            <button type="button" class="badge badge-danger" onclick="tampil_cant_delete()"><svg class="bi bi-trash-fill" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.5 3a1 1 0 00-1 1v1a1 1 0 001 1H5v9a2 2 0 002 2h6a2 2 0 002-2V6h.5a1 1 0 001-1V4a1 1 0 00-1-1H12a1 1 0 00-1-1H9a1 1 0 00-1 1H4.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM10 7a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 0110 7zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"></path>
                                </svg>Delete</button>
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$bd->ID_BIDANG}}" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Yakin Ingin Menghapus Data ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">
                                    <a href="/bidang/destroy/{{$bd->ID_BIDANG}}">
                                    <font size="3" color="white">Yes</font></a></button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><font size="3">No</font></button>
                                </div>
                                </div>
                            </div>
                            </div> 
                        </td>
                        <!-- tutup action -->
                    </tr>
                @endforeach
                </tbody>
                </table>
            
                </div>
                </div>
</div>
@endsection
@section('tambahscript')
  <script>
      function tampil_cant_delete(){
        Swal.fire({
        //   timer: 2000,
          icon: 'error',
          title: 'Data Tidak Bisa Di Hapus !',
          text: 'Data Digunakan Detail Kriteria',
        })
      }
  </script>
@endsection