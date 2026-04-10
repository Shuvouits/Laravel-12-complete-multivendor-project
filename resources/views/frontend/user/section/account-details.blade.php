 <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">


     <div class="card">
         <div class="card-header p-0">
             <h5>Account Details</h5>
         </div>
         <div class="card-body p-0">
             <p>You can edit your account details here.</p>

             @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul class="mb-0">
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif

             <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">


                 @csrf
                 @method('PUT')

                 <div class="row mt-30">

                     <!-- Profile Image Upload -->
                     <div class="form-group col-md-12">
                         <label class="d-block mb-2">Profile Image</label>

                         <div class="image-upload-wrapper">

                             <div id="preview-icon"
                                 style="width:120px;height:120px;border-radius:50%;background:#f5f5f5; display:flex;align-items:center;justify-content:center; cursor:pointer;font-size:40px;color:#999;overflow:hidden;">

                                 @if (auth('web')->user()->avatar)
                                     <img src="{{ asset(auth('web')->user()->avatar) }}"
                                         style="width:100%;height:100%;object-fit:cover;">
                                 @else
                                     <i class="fi-rs-user"></i>
                                 @endif

                             </div>

                             <input type="file" name="avatar" id="image-input" accept="image/*" hidden>

                             <div>
                                 <small class="text-muted mt-2">Click to upload image</small>
                             </div>
                         </div>
                     </div>


                     <!-- Name -->
                     <div class="form-group col-md-12">
                         <label>Name <span class="required">*</span></label>
                         <input required class="form-control" name="name" type="text"
                             value="{{ auth('web')->user()->name }}" />
                         <x-input-error :messages="$errors->get('name')" class="mt-2" />
                     </div>

                     <!-- Email -->
                     <div class="form-group col-md-12">
                         <label>Email Address <span class="required">*</span></label>
                         <input required class="form-control" name="email" type="email"
                             value="{{ auth('web')->user()->email }}" />
                         <x-input-error :messages="$errors->get('email')" class="mt-2" />
                     </div>

                     <!-- Submit -->
                     <div class="col-md-12">
                         <button type="submit" class="btn btn-fill-out submit font-weight-bold">
                             Save Change
                         </button>
                     </div>

                 </div>
             </form>

         </div>
     </div>




     <div class="card mt-4">
         <div class="card-header p-0">
             <h5>Change Password</h5>
         </div>
         <div class="card-body p-0">
             <p>You can change your password here.</p>
             <form method="post" action="{{ route('password.update') }}">
                 @csrf
                 @method('PUT')
                 <div class="row mt-30">
                     <div class="form-group col-md-12">
                         <label>Current Password <span class="required">*</span></label>
                         <input required="" class="form-control" name="current_password" type="password" />
                         <x-input-error :messages="$errors->get('current_password')" class="mt-2" />

                     </div>
                     <div class="form-group col-md-12">
                         <label>New Password <span class="required">*</span></label>
                         <input required="" class="form-control" name="password" type="password" />
                         <x-input-error :messages="$errors->get('password')" class="mt-2" />

                     </div>
                     <div class="form-group col-md-12">
                         <label>Confirm Password <span class="required">*</span></label>
                         <input required="" class="form-control" name="password_confirmation" type="password" />
                         <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                     </div>
                     <div class="col-md-12">
                         <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit"
                             value="Submit">Save Change</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>



 </div>


 @push('scripts')
     <script>
         $(document).ready(function() {

             $('#preview-icon').click(function() {
                 $('#image-input').click();
             });

             $('#image-input').change(function(e) {
                 const file = e.target.files[0];

                 if (file) {
                     const reader = new FileReader();

                     reader.onload = function(e) {

                         $('#preview-icon').html(
                             `<img src="${e.target.result}"
                              style="width:100%;height:100%;object-fit:cover;">`
                         );

                     }

                     reader.readAsDataURL(file);
                 }
             });

         });
     </script>
 @endpush
