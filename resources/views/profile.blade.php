@extends('template2')
@section('title','Profile')
@section('konten')

@if(session('update_sukses'))
      <font size="4"> 
      <script>
     Swal.fire({
          timer: 2000,
          icon: 'success',
          title: 'Success',
          text: 'Profile Berhasil Di Update !',
        })
    </script>
    </font>
@endif
<div class="animate__animated animate__fadeInUp"  style=" animation-duration: 3s;">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                @php $z=Session::get('id') @endphp
                
                    

                    @foreach($admin as $d)
                    @if($d->ID_ADMIN == $z)
                    <div class="card-header">
                    <center><i class="far fa-id-badge fa-2x"></i></center>
                    <center><strong><font size="5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Profile Admin</font></strong></center>   
                    </div>
                    <div class="card-body">
                    <form method="POST" action="/updateprofile">
                            <!-- @method('patch') -->
                            @csrf
                            <input type="hidden" name="id" value="{{$z}}">
                          <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Nama</font></label>

                        <div class="col-md-6 input-group">
                            <input type="text" name="nama_admin" id="nama_admin" class="form-control @error('nama_admin') is-invalid @enderror" value="{{$d->NAMA_ADMIN}}" readonly>
                            @error('nama_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong><font size="2">{{ $message }} </font></strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Alamat</font></label>

                        <div class="col-md-6 input-group">
                        <textarea type="text" class="form-control @error('alamat_admin') is-invalid @enderror" 
                             rows="3" name="alamat_admin" id="alamat_admin" readonly>{{$d->ALAMAT_ADMIN}}</textarea>
                             @error('alamat_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong><font size="2">{{ $message }} </font></strong>
                                        </span>
                            @enderror
                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Telepon</font></label>

                        <div class="col-md-6 input-group">
                            <input  type="number" name="telp_admin" id="telp_admin" class="form-control @error('telp_admin') is-invalid @enderror" value="{{$d->NO_TELP_ADMIN}}" readonly>
                            @error('telp_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong><font size="2">{{ $message }} </font></strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Email</font></label>

                        <div class="col-md-6 input-group">
                            <input  type="email" name ="email_admin" id="email_admin" class="form-control @error('email_admin') is-invalid @enderror" value="{{$d->EMAIL_ADMIN}}" readonly> 
                            @error('email_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong><font size="2">{{ $message }} </font></strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Username</font></label>

                        <div class="col-md-6 input-group">
                            <input  type="text" name="username_admin" id="username_admin" class="form-control @error('username_admin') is-invalid @enderror" value="{{$d->USERNAME_ADMIN}}" readonly>
                            @error('username_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong><font size="2">{{ $message }} </font></strong>
                                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-left" style="margin-top: -25px;"><font size="4" style="font-family: Arial, Helvetica, sans-serif;">Password</font></label>

                        <div class="col-md-6 input-group">
                            <input  type="password" class="form-control" value="{{$d->PASSWORD_ADMIN}}" readonly>
                        </div>

                        <div class="col-md-2 input-group">
                        <a href="/ubahpassword" target="_blank"><font size="2">Ubah Pasword</font></a>
                        </div>
                        
                    </div>
                    
                         

                    @endif
                    @endforeach

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" id="tombol" class="btn btn-primary" onclick="edit()">
                                        Edit Profile
                                    </button>
                                </div>
                            </div>

                          
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('tambahscript')

<script>
    $("#tombol").click(function(event) { 
                event.preventDefault(); 
    }); 
    


    function edit(){
        document.getElementById("nama_admin").readOnly=false;
        document.getElementById("alamat_admin").readOnly=false;
        document.getElementById("telp_admin").readOnly=false;
        document.getElementById("email_admin").readOnly=false;
        document.getElementById("username_admin").readOnly=false;
         ganti_tombol();

    }

    function ganti_tombol(){
        document.getElementById("tombol").innerHTML='Update Profile';
        $("#tombol").removeClass("btn btn-primary");
        $("#tombol").addClass("btn btn-success update");
        $("#tombol").attr('id','tombol_update');
        $("#tombol_update").attr("onclick","update()");
    }

        function update(){
            $("form").submit();            
    }

   

   

</script>

@endsection