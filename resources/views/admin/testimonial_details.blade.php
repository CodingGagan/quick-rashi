@extends('includes.admin.default')

@section('content')
    <div class="main-content">
        <div class="main-content-inner" id="mainCont">
            <section class="agent-details">
                <div class="container">
                    <h2 class="mb-4">Add Testimonial</h2>
                    <div class="tab-content pb-5">

                        <div class="form-group mt-2">
                            <label class="label">Upload Image:</label>
                            <input type="file" name="bank_pdf" class="filebtnupload" accept=".png,.jpg,.jpeg" >
                        </div>

                        <div class="form-group">
                            <label class="label">Name</label>
                            <input type="text" name="add_text" class="form-control" placeholder="add text..." />
                        </div>

                        <div class="form-group">
                            <label class="label">Designation</label>
                            <input type="text" name="add_designation" class="form-control" placeholder="add designation..." />
                        </div>

                        <div class="form-group">
                            <label class="label">From</label>
                            <input type="text" name="add_from" class="form-control" placeholder="add from..." />
                        </div>

                        <div class="input-single">
                            <label class="label" for="desc">Description</label>
                            <textarea class="form-control" name="message" rows="8" placeholder="Enter Description..."></textarea>
                        </div>

                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
@endsection
