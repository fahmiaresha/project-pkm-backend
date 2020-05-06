@extends('template2')
@section('title','Halaman Tata Cara')

@section('konten')

<div class="container">
        <!-- Button trigger modal -->
        <div class="form-row">

        <div class="form-group col-md-10">
        <strong><font size="6" style="font-family:Arial, Helvetica, sans-serif;"> Tata Cara</font></strong>
        </div>

        <div class="form-group col-md-2">
        <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i> Create New Data 
        </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Insert Tata Cara</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ url('/tata_cara/store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nama_tata_cara"><font size="4">Nama Tata Cara</font></label>
                            <input type="text" class="form-control @error('nama_tata_cara') is-invalid @enderror" 
                            id="nama_tata_cara" placeholder="Nama Tata Cara" name="nama_tata_cara" value="{{ old('nama_tata_cara') }}">
                            @error('nama_tata_cara')
                        <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tata_cara"><font size="4">Tata Cara</font></label>
                            <textarea type="text" class="form-control @error('tata_cara') is-invalid @enderror" 
                            id="ckeditor-konten" placeholder="Tata Cara" name="tata_cara" value="{{ old('tata_cara') }}" rows="10"></textarea>
                            @error('tata_cara')
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
                <th scope="col">Nama Tata Cara</th>
                <th scope="col">Tata Cara</th>
                <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tata_cara as $tc )
                    <tr>
                        <td>{{ $tc -> ID_TATACARA }}</td>
                        <td>{{ $tc -> NAMA_TATA_CARA }}</td>
                        <!-- <td>{{ $tc -> TATA_CARA }}</td> -->
                        <td>{{str_limit($tc->TATA_CARA,70,"...")}} 
                            <span class="read-more mt-2" style="font-family: Arial, Helvetica, sans-serif;">
                            <button type="button" style="padding:2px;" class="btn btn-info" data-toggle="modal" data-target="#tampilreadmore{{ $tc -> ID_TATACARA  }}" ><font size="1">Read More</font></button>
                            </span>

                             <!-- Modal -->
                             <div class="modal fade" id="tampilreadmore{{ $tc -> ID_TATACARA  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Tata Cara</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                               
                             <div class="form-group">
                                <textarea type="text" class="form-control " rows="15" readonly>{{$tc ->TATA_CARA}}</textarea>
                            </div>
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
                            
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                      
                        <!-- action -->
                        <td>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="badge badge-success" data-toggle="modal" data-target="#editModal{{ $tc -> ID_TATACARA  }}">
                            <svg class="bi bi-pencil" width="25px" height="25px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M13.293 3.293a1 1 0 011.414 0l2 2a1 1 0 010 1.414l-9 9a1 1 0 01-.39.242l-3 1a1 1 0 01-1.266-1.265l1-3a1 1 0 01.242-.391l9-9zM14 4l2 2-9 9-3 1 1-3 9-9z" clip-rule="evenodd"></path>
                            <path fill-rule="evenodd" d="M14.146 8.354l-2.5-2.5.708-.708 2.5 2.5-.708.708zM5 12v.5a.5.5 0 00.5.5H6v.5a.5.5 0 00.5.5H7v.5a.5.5 0 00.5.5H8v-1.5a.5.5 0 00-.5-.5H7v-.5a.5.5 0 00-.5-.5H5z" clip-rule="evenodd"></path>
                            </svg>Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="editModal{{ $tc -> ID_TATACARA  }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Tata Cara</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <form method="post" action="{{ url('/tata_cara/update') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$tc -> ID_TATACARA   }}">

                                <div class="form-group">
                                <label for="nama_tata_cara"><font size="4">Nama Tata Cara</font></label>
                                <input type="text" class="form-control @error('nama_tata_cara') is-invalid @enderror" 
                                id="nama_tata_cara" placeholder="Nama Tata Cara" name="nama_tata_cara" value="{{ $tc -> NAMA_TATA_CARA  }}">
                                @error('nama_tata_cara')
                            <div clas="invalid-feedback"><font color="red" size="2">{{ $message }}</font></div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tata_cara"><font size="4">Tata Cara</font></label>
                                <textarea type="text" class="form-control @error('tata_cara') is-invalid @enderror" 
                                id="tata_cara" placeholder="Tata Cara" name="tata_cara" rows="10">{{$tc ->TATA_CARA}}</textarea>
                                @error('tata_cara')
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
                                <button type="button" class="badge badge-danger" data-toggle="modal" 
                                data-target="#exampleModal{{$tc -> ID_TATACARA }}"><svg class="bi bi-trash-fill" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.5 3a1 1 0 00-1 1v1a1 1 0 001 1H5v9a2 2 0 002 2h6a2 2 0 002-2V6h.5a1 1 0 001-1V4a1 1 0 00-1-1H12a1 1 0 00-1-1H9a1 1 0 00-1 1H4.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM10 7a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 0110 7zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"></path>
                                </svg>Delete</button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$tc -> ID_TATACARA }}" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="/tata_cara/destroy/{{$tc -> ID_TATACARA }}">
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
@endsection
