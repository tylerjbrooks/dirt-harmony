<div class="h-screen">
   
@if(!empty($successMessage))
<div class="alert alert-success">
   {{ $successMessage }}
</div>
@endif
  
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}">3</a>
                <p>Step 3</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}">4</a>
                <p>Step 4</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-circle {{ $currentStep != 5 ? 'btn-default' : 'btn-primary' }}">5</a>
                <p>Step 5</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-circle {{ $currentStep != 6 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">6</a>
                <p>Step 6</p>
            </div>
        </div>
    </div>

    <!-- start of relative section -->
    <div class="relative w-full">

        <!-- Step 1 -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-0 opacity-100 slide"
            id="step-1">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 1</h3>
     
                    <div class="form-group">
                        <label for="post_type">Post Type:</label>
                        <input type="text" wire:model="postType" class="frm-control" id="post_type">
                        @error('postType') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-full opacity-0 slide"
            id="step-2">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 2</h3>
      
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" wire:model="title" class="form-control" id="title"/>
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" wire:model="address" class="form-control" id="address"/>
                        @error('address') <span class="error">{{ $message }}</span> @enderror
                    </div>
                      <div class="form-group">
                        <label for="title">Range</label>
                        <input type="text" wire:model="range" class="form-control" id="range"/>
                        @error('range') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-full opacity-0 slide"
            id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
      
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" wire:model="quantity" class="form-control" id="quantity"/>
                        @error('quantity') <span class="error">{{ $message }}</span> @enderror
                    </div>
                     <div class="form-group">
                        <label for="dirt_type">Dirt Type</label>
                        <input type="text" wire:model="dirtType" class="form-control" id="dirt_type"/>
                        @error('dirtType') <span class="error">{{ $message }}</span> @enderror
                    </div>
                      <div class="form-group">
                        <label for="dirt_quality">Dirt Quality</label>
                        <input type="text" wire:model="dirtQuality" class="form-control" id="dirt_quality"/>
                        @error('dirtQuality') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-full opacity-0 slide"
            id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 4</h3>
      
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" wire:model="description" class="form-control" id="description"/>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-full opacity-0 slide"
            id="step-5">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 5</h3>
      
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" wire:model="name" class="form-control" id="name"/>
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" wire:model="username" class="form-control" id="username"/>
                        @error('username') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" wire:model="phone" class="form-control" id="phone"/>
                        @error('phone') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="phone">email</label>
                        <input type="text" wire:model="email" class="form-control" id="email"/>
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" wire:model="password" class="form-control" id="password"/>
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
      
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="text" wire:model="confirmPassword" class="form-control" id="confirm-password"/>
                        @error('confirmPassword') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 6: Summary -->
        <div 
            class="absolute top-10 flex items-center justify-center w-full transition ease-in-out duration-500 transition-all ease-in-out duration-1000 transform translate-x-full opacity-0 slide"
            id="step-6">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 6</h3>
      
                    <table class="table">
                        <tr>
                            <td>Post Type:</td>
                            <td><strong>{{$postType}}</strong></td>
                        </tr>
                        <tr>
                            <td>Title:</td>
                            <td><strong>{{$title}}</strong></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><strong>{{$address}}</strong></td>
                        </tr>
                        <tr>
                            <td>Range</td>
                            <td><strong>{{$range}}</strong></td>
                        </tr>
                        <tr>
                            <td>Quantity:</td>
                            <td><strong>{{$quantity}}</strong></td>
                        </tr>
                        <tr>
                            <td>Dirt Type:</td>
                            <td><strong>{{$dirtType}}</strong></td>
                        </tr>
                        <tr>
                            <td>Dirt Quality:</td>
                            <td><strong>{{$dirtQuality}}</strong></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><strong>{{$description}}</strong></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><strong>{{$name}}</strong></td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><strong>{{$username}}</strong></td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td><strong>{{$phone}}</strong></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><strong>{{$email}}</strong></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><strong>{{$password}}</strong></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td><strong>{{$confirmPassword}}</strong></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!-- end of relative section -->

    </div>
    <div class="fixed bottom-0 right-0 bg-white w-16 h-16 flex items-center justify-center text-black" onclick="nextSlide()">&#x276F;</div>
    <div class="fixed bottom-0 right-0 bg-white w-16 h-16 mr-16 border-r border-gray-400 flex items-center justify-center text-black" onclick="previousSlide()">&#x276E;</div>
</div>

@push('scripts')
<script>
function nextSlide(){
    let activeSlide = document.querySelector('.slide.translate-x-0');
    let nextSlide = activeSlide.nextElementSibling;

    if (activeSlide && nextSlide) {
        activeSlide.classList.remove('translate-x-0');
        activeSlide.classList.add('-translate-x-full');
        activeSlide.classList.remove('opacity-100');
        activeSlide.classList.add('opacity-0');
        
        nextSlide.classList.remove('translate-x-full');
        nextSlide.classList.add('translate-x-0');
        nextSlide.classList.remove('opacity-0');
        nextSlide.classList.add('opacity-100');
    }
}

function previousSlide(){
    let activeSlide = document.querySelector('.slide.translate-x-0');
    let previousSlide = activeSlide.previousElementSibling;

    if (activeSlide && previousSlide) {
        activeSlide.classList.remove('translate-x-0');
        activeSlide.classList.add('translate-x-full');
        activeSlide.classList.remove('opacity-100');
        activeSlide.classList.add('opacity-0');
        
        previousSlide.classList.remove('-translate-x-full');
        previousSlide.classList.add('translate-x-0');
        previousSlide.classList.remove('opacity-0');
        previousSlide.classList.add('opacity-100');
    }
}
</script>
@endpush

@push('styles')
<style>
body{ 
    margin-top:40px; 
}
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.displayNone{
  display: none;
}

[x-cloak] { display: none !important; }

</style>
@endpush
