@extends('layouts.template')

@section('title',"Customer")

@section('head')
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/extensions/sweetalert.css">
@stop

<!-- content-body -->
@section('content-body')

    <!-- Main -->
    <section id="main">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Customers</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <button type="button" class="btn btn-outline-warning block btn-lg" data-toggle="modal"
                                    data-target="#addmodel">
                                Add
                            </button>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body card-dashboard">

                            <table class="table table-striped table-bordered dynamic-table">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th width="50px;">Edit</th>
                                    <th width="50px;">Delete</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Javascript sourced data -->

    <!-- Modal -->
    <div class="modal fade text-left" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Add Customer</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="customers" method="post" id="addform">
                    @csrf
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" required="true" id="name" name="name"
                                   placeholder="Enter Customer Name">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Mobile</label>
                            <input type="text" class="form-control" required="true" id="mobile" name="mobile"
                                   placeholder="Enter Mobile Number">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" required="true" id="email" name="email"
                                   placeholder="Enter E-mail Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" required="true" id="password" name="password"
                                   placeholder="Enter Secret Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Date of Birth</label>
                            <input type="text" class="form-control" required="true" id="dob" name="dob"
                                   placeholder="Enter Secret Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Image</label>
                            <input type="text" class="form-control" required="true" id="image" name="image">
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Edit Customer</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="" id="editform">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" required="true" id="name" name="name"
                                   placeholder="Enter Customer Name">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Mobile</label>
                            <input type="text" class="form-control" required="true" id="mobile" name="mobile"
                                   placeholder="Enter Mobile Number">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" required="true" id="email" name="email"
                                   placeholder="Enter E-mail Address">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Enter Secret Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Date of Birth</label>
                            <input type="text" class="form-control" required="true" id="dob" name="dob"
                                   placeholder="Enter Secret Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Image</label>
                            <input type="text" class="form-control" required="true" id="image" name="image">
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js_script')

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="dist/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="dist/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="dist/app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
    <script src="dist/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

    <script src="dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js" type="text/javascript"></script>

    <script src="dist/app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script>

        var mytable;

        /* DELETE Record using AJAX Requres */
        $(document).on('click', '.delete', function () {

            var id = $(this).data("delete-id");
            var token = $(this).data("token");

            swal({
                title: "Are you sure?",
                text: "It will Delete Perminatly !",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "No, cancel it!",
                        value: null,
                        visible: true,
                        className: "",
                        closeModal: false,
                    },
                    confirm: {
                        text: "Yes, delete it!",
                        value: true,
                        visible: true,
                        className: "",
                        closeModal: false
                    }
                }
            })
                .then((isConfirm) => {
                    if (isConfirm) {
                        $.ajax(
                            {
                                url: "customers/" + id,
                                type: 'POST',
                                data: {
                                    "id": id,
                                    "_method": 'DELETE',
                                    "_token": token
                                },
                                success: function (result) {
                                    swal("Deleted!", "Your Record is deleted.", "success");
                                    mytable.draw();
                                },
                                error: function (request, status, error) {
                                    var val = request.responseText;
                                    alert("error" + val);
                                }
                            });
                    } else {
                        swal("Cancelled", "Your record is safe", "error");
                    }
                });
        });

        /* RETRIVE DATA For Editing Purpose */
        $(document).on('click', '.edit', function () {

            var id = $(this).data("id");
            var name = $(this).data("name");
            var mobile = $(this).data("mobile");
            var email = $(this).data("email");
            var password = $(this).data("password");
            var dob = $(this).data("dob");
            var image = $(this).data("image");

            $('#editform #name').val(name);
            $('#editform #mobile').val(mobile);
            $('#editform #email').val(email);
            $('#editform #password').val(password);
            $('#editform #dob').val(dob);
            $('#editform #image').val(image);
            $('#editform').attr('action', 'customers/' + id);
            $('#editmodel').modal('show');
        });

        $(document).ready(function (e) {

            mytable = $('.dynamic-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('customers/getDataTable') }}",

                columns: [
                    {data: "image"},
                    {data: "name"},
                    {data: "mobile"},
                    {data: "email"},
                    {data: "dob"},
                    {data: "edit"},
                    {data: "delete"}
                ]
            });

            /* ADD Record using AJAX Requres */
            var addformValidator = $("#addform").validate({
                ignore: ":hidden",
                errorElement: "span",
                errorClass: "text-danger",
                validClass: "text-success",
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass(errorClass);
                    $(element.form).find("span[id=" + element.id + "-error]").addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass(errorClass);
                    $(element.form).find("span[id=" + element.id + "-error]").removeClass(errorClass);
                },
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: $(form).serialize(),
                        success: function (data) {
                            $('#addmodel').modal('hide');
                            swal("Good job!", "Your Record Inserted Successfully", "success");
                            $(form).trigger('reset');
                            mytable.draw();
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            var response = JSON.parse(XMLHttpRequest.responseText);
                            addformValidator.showErrors(response.errors);
                        }
                    });
                    return false; // required to block normal submit since you used ajax
                }
            });

            /* EDIT Record using AJAX Requres */
            var editaddformValidator = $("#editform").validate({
                ignore: ":hidden",
                errorElement: "span",
                errorClass: "text-danger",
                validClass: "text-success",
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass(errorClass);
                    $(element.form).find("span[id=" + element.id + "-error]").addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass(errorClass);
                    $(element.form).find("span[id=" + element.id + "-error]").removeClass(errorClass);
                },
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: $(form).attr('action'),
                        method: $(form).attr('method'),
                        data: $(form).serialize(),
                        success: function (data) {
                            $('#editmodel').modal('hide');
                            swal("Good job!", "Your Record Updated Successfully", "success");
                            $(form).trigger('reset');
                            mytable.draw();
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            var response = JSON.parse(XMLHttpRequest.responseText);
                            editaddformValidator.showErrors(response.errors);
                        }
                    });
                    return false; // required to block normal submit since you used ajax
                }
            });
        });
    </script>

@stop