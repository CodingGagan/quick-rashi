@extends('includes.admin.default')

@section('content')
<script src="https://cdn.tiny.cloud/1/4za0ov508qxpc5nxkpoijqwzn3q1g0ijhk2mho3oclpvzv4a/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <div class="main-content">
        <div class="main-content-inner" id="mainCont">
            <section class="agent-details">
                <div class="container">
                    <h2 class="mb-4">Add Blog</h2>
                    <div class="tab-content">
                        <form action="{{ route('admin_blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label class="label">Upload Image:</label>
                                <input type="file" name="image" class="filebtnupload" accept=".png,.jpg,.jpeg">
                            </div>
                            <div class="form-group">
                                <label class="label">Add Text</label>
                                <input type="text" name="title" class="form-control" placeholder="add text..." />
                            </div>

                            <div class="input-single">
                                <label class="label" for="desc">Description</label>
                                <textarea class="form-control" id="mytsextarea" name="desc" rows="8" placeholder="Enter Description..."></textarea>
                            </div>

                            <div class="col-4  m-2">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
            </section>
        </div>
    </div>
    <script>
         tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
    </script>
@endsection
