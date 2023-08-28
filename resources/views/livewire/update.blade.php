    <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Edit Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model.defer="title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model.defer="description" placeholder="Enter Description"></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                        <label for="title">Note</label>
                        <input wire:model="message" type="text">
                        </div>
                        <div class="d-grid gap-2">
                            <button wire:click.prevent="updatePost()" data-dismiss="modal" class="btn btn-success btn-block">Update</button>
                            <button data-dismiss="modal" aria-label="Close" class="btn btn-secondary btn-block">Cancel</button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>

