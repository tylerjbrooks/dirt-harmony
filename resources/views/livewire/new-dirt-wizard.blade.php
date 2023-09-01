<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative h-96 overflow-hidden rounded-lg">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-1">
            <h3> Step 1</h3>

            <div class="form-group">
                <label for="post_type">Post Type:</label>
                <input type="text" wire:model="postType" class="form-control" id="post_type">
                @error('postType') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-2">
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
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-3">
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
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-4">
            <h3> Step 4</h3>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" wire:model="description" class="form-control" id="description"/>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-5">
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
        <!-- Item 6 -->
        <div class="hidden duration-700 ease-in-out" id="carousel-item-6">
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
    <!-- Slider indicators -->
    <div class="flex justify-between items-center m-5">
        <div>
            <x-harmony.button id="carousel-prev">Previous</x-harmony.button>
        </div>
        <div class="flex space-x-3 justify-between">
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="true"  aria-label="Slide 1" id="carousel-indicator-1"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 2" id="carousel-indicator-2"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 3" id="carousel-indicator-3"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 4" id="carousel-indicator-4"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 5" id="carousel-indicator-5"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 5" id="carousel-indicator-6"></button>
        </div>
        <div>
            <x-harmony.button id="carousel-next">Next</x-harmony.button>
        </div>
    </div>
</div>

@push('scripts')
<script>
const items = [
    {
        position: 0,
        el: document.getElementById('carousel-item-1')
    },{
        position: 1,
        el: document.getElementById('carousel-item-2')
    },{
        position: 2,
        el: document.getElementById('carousel-item-3')
    },{
        position: 3,
        el: document.getElementById('carousel-item-4')
    },{
        position: 4,
        el: document.getElementById('carousel-item-5')
    },{
        position: 5,
        el: document.getElementById('carousel-item-6')
    },
];

const options = {
    defaultPosition: 0,
    interval: 3000,
    
    indicators: {
        activeClasses: 'bg-black dark:bg-gray-800',
        inactiveClasses: 'bg-red dark:bg-gray-800/50 hover:bg-red dark:hover:bg-gray-800',
        items: [
            {
                position: 0,
                el: document.getElementById('carousel-indicator-1')
            },{
                position: 1,
                el: document.getElementById('carousel-indicator-2')
            },{
                position: 2,
                el: document.getElementById('carousel-indicator-3')
            },{
                position: 3,
                el: document.getElementById('carousel-indicator-4')
            },{
                position: 4,
                el: document.getElementById('carousel-indicator-5')
            },{
                position: 5,
                el: document.getElementById('carousel-indicator-6')
            },
        ]
    },
    
    // callback functions
    onNext: () => {
        console.log('next slider item is shown');
    },
    onPrev: ( ) => {
        console.log('previous slider item is shown');
    },
    onChange: ( ) => {
        console.log('new slider item has been shown');
    }
};
const carousel = new Carousel(items, options);
const prevButton = document.getElementById('carousel-prev');
const nextButton = document.getElementById('carousel-next');
prevButton.addEventListener('click', () => {
    @this.validatePrev();
});
nextButton.addEventListener('click', () => {
    @this.validateNext();
});
window.addEventListener('prev', () => {
    carousel.prev();
});
window.addEventListener('next', () => {
    carousel.next();
});
</script>
@endpush

