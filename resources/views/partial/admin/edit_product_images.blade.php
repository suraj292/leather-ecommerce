@if(!is_null($images))
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title pb-1" style="border-bottom: {{$selectedColor}} 5px solid;">Product Color & Images: </h4>
            @if(session()->has('color_img'))
                <p class="alert-success p-2">{{session('color_img')}}</p>
                <button type="submit" class="btn btn-gradient-primary w-100 mb-2" wire:click="add_more_color">+ Add more Color</button>
            @else
                <form class="forms-sample" wire:submit.prevent="productNewImg">
                    @foreach($images as $key=>$image)
                    <div class="row mb-2 pb-2" style="border-bottom: #a0a0a04a 1px solid;">
                        <div class="col-4 d-flex align-items-center">
                            <div class="form-group container">
                                <label for="image1">Image :</label>
                                <input type="file" class="form-control-file" id="image1" disabled>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{url('storage/product/'.$image)}}" alt="img" class="img-thumbnail" width="100px">
                        </div>
                        <div class="col-4 d-flex align-items-center"  wire:click="deleteImg({{ $key }})">
                            <button type="button" class="btn btn-inverse-danger btn-icon" >
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                        @if($imgDiv == true)
                            <div class="row mb-2 pb-2" style="border-bottom: #a0a0a04a 1px solid;">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="form-group container">
                                        <label for="newImage">Image : 1</label>
                                        <input type="file" class="form-control-file" id="newImage" wire:model="newImage">
                                        @error('newImage') <p class="text-danger mt-3">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    @if ($newImage)
                                        <img src="{{ $newImage->temporaryUrl() }}" alt="img" class="img-thumbnail" width="100px">
                                    @else
                                        <img src="{{ asset('assets\images\test\empty.jpg') }}" alt="img" class="img-thumbnail" width="100px">
                                    @endif
                                </div>
                            </div>
                        @endif
                    @if($imgDiv == false)
                        <button class="btn btn-gradient-success" wire:click.prevent="addImgDiv">+ Add Image</button>
                    @endif

                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            @endif
        </div>
    </div>
</div>
@endif
