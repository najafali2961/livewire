<div>
    <div class="col-md-12 mb-2">

        @if ($addPost)
            @include('livewire.create')
        @endif

        @if ($updatePost)
            @include('livewire.update')
        @endif
    </div>
    <div class="col-md-12">

        <div class="card">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            <div class="card-body">
                @if (!$addPost)
                    <button wire:click="addPost()" class="btn btn-primary btn-sm float-left">Add New Post</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Message</th>

                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (count($posts) > 0)
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->description }}</td>

                                        <td>

                                            {{ $message }}
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#updateModal"
                                                wire:click.prevent="editPost({{ $post->id }})"
                                                class="btn btn-primary btn-sm">Edit</button>
                                            <button wire:click="deletePost({{ $post->id }})"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" align="center">
                                        No Posts Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
