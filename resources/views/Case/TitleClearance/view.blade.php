@extends('layouts.template')

@section('title',"File for Title Clearance Report")

@section('head')
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="dist/app-assets/vendors/css/extensions/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/app-assets/vendors/datetimepicker/jquery.datetimepicker.css')}}"/>
@stop

<!-- content-body -->
@section('content-body')

    <!-- Main -->
    <section id="main">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File for Title Clearance Report</h4>
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
                                    <th>Inward No</th>
                                    <th>Inward Date</th>
                                    <th>Owner</th>
                                    <th>Borrower</th>
                                    <th>Bank Id</th>
                                    <th>Bank Branch</th>
                                    <th width="50px;">View</th>
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
        <div class="modal-dialog" role="document" style="max-width: 96%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Add File</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="titleClearances" method="post" id="addform">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Inward No.</label>
                                <input type="number" class="form-control" required="true" id="inward_no" name="inward_no"
                                       placeholder="Enter Inward No">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Inward Date.</label>
                                <input type="text" class="form-control datepicker" required="true" id="inwarddate" name="inwarddate"
                                       placeholder="Enter Inward Date" autocomplete="off">
                            </fieldset>
                        </div>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Property Owner Name</label>
                            <input type="text" class="form-control" required="true" id="property_owner_name" name="property_owner_name"
                                   placeholder="Enter Owner Name">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Property Borrower Name</label>
                            <input type="text" class="form-control" required="true" id="borrower_name" name="borrower_name"
                                   placeholder="Enter Borrower Name">
                        </fieldset>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Bank Id</label>
                                <input type="text" class="form-control" required="true" id="bank_id" name="bank_id"
                                       placeholder="Enter Bank Id">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Bank Branch</label>
                                <input type="text" class="form-control" required="true" id="bank_branch" name="bank_branch"
                                       placeholder="Enter Bank Branch">
                            </fieldset>
                        </div>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Bank Manager</label>
                            <input type="text" class="form-control" required="true" id="bank_manager_name" name="bank_manager_name"
                                   placeholder="Enter Bank Manager">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Bank Facilities</label>
                            <input type="text" class="form-control" id="bank_facilities" name="bank_facilities"
                                   placeholder="Enter Bank Facilities">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="description">Property Description</label>
                            <textarea class="form-control" required="true" id="property_description" name="property_description"
                                      placeholder="Enter Property Description"></textarea>
                        </fieldset>
                        <input type="hidden" class="form-control" id="state" name="state" value="1">
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
        <div class="modal-dialog" role="document" style="max-width: 96%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel35"> Edit </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="" id="editform">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="modal-body">
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Inward No.</label>
                                <input type="number" class="form-control" required="true" id="inward_no" name="inward_no"
                                       placeholder="Enter Inward No">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Inward Date.</label>
                                <input type="text" class="form-control datepicker" required="true" id="inwarddate" name="inwarddate"
                                       placeholder="Enter Inward Date" autocomplete="off">
                            </fieldset>
                        </div>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Property Owner Name</label>
                            <input type="text" class="form-control" required="true" id="property_owner_name" name="property_owner_name"
                                   placeholder="Enter Owner Name">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Property Borrower Name</label>
                            <input type="text" class="form-control" required="true" id="borrower_name" name="borrower_name"
                                   placeholder="Enter Borrower Name">
                        </fieldset>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Bank Id</label>
                                <input type="text" class="form-control" required="true" id="bank_id" name="bank_id"
                                       placeholder="Enter Bank Id">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-6">
                                <label for="title">Bank Branch</label>
                                <input type="text" class="form-control" required="true" id="bank_branch" name="bank_branch"
                                       placeholder="Enter Bank Branch">
                            </fieldset>
                        </div>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Bank Manager</label>
                            <input type="text" class="form-control" required="true" id="bank_manager_name" name="bank_manager_name"
                                   placeholder="Enter Bank Manager">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                            <label for="title">Bank Facilities</label>
                            <input type="text" class="form-control" id="bank_facilities" name="bank_facilities"
                                   placeholder="Enter Bank Facilities">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                            <label for="description">Property Description</label>
                            <textarea class="form-control" required="true" id="property_description" name="property_description"
                                      placeholder="Enter Property Description"></textarea>
                        </fieldset>
                        <input type="hidden" class="form-control" id="state" name="state" value="1">
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
    <script type="text/javascript" src="dist/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="dist/app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script>
    <script src="{{asset('dist/app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>

    <script src="dist/app-assets/js/scripts/forms/validation/jquery.validate.min.js" type="text/javascript"></script>

    <script src="dist/app-assets/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{asset('dist/app-assets/vendors/datetimepicker/build/jquery.datetimepicker.full.min.js')}}" type="text/javascript"></script>

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
                                url: "titleClearances/" + id,
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

       jQuery('.datepicker').datetimepicker({ timepicker:false,format: 'd-m-Y'});

        /* RETRIVE DATA For Editing Purpose */
        $(document).on('click', '.edit', function () {

            var id = $(this).data("id");
            var inward_no = $(this).data("inward-no");
            var inwarddate = $(this).data("inwarddate");
            var property_owner_name = $(this).data("property-owner-name");
            var borrower_name = $(this).data("borrower-name");
            var bank_manager_name = $(this).data("bank-manager-name");
            var bank_id = $(this).data("bank-id");
            var bank_branch = $(this).data("bank-branch");
            var bank_facilities = $(this).data("bank-facilities");
            var property_description = $(this).data("property-description");

            $('#editform #inward_no').val(inward_no);
            $('#editform #inwarddate').val(inwarddate);
            $('#editform #property_owner_name').val(property_owner_name);
            $('#editform #borrower_name').val(borrower_name);
            $('#editform #bank_id').val(bank_id);
            $('#editform #bank_branch').val(bank_branch);
            $('#editform #bank_manager_name').val(bank_manager_name);
            $('#editform #bank_facilities').val(bank_facilities);
            $('#editform #property_description').val(property_description);
            $('#editform').attr('action', 'titleClearances/' + id);
            $('#editmodel').modal('show');
        });

        $(document).ready(function (e) {

            mytable = $('.dynamic-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('titleClearances/getDataTable') }}",

                columns: [
                    {data: "inward_no"},
                    {data: "inwarddate"},
                    {data: "property_owner_name"},
                    {data: "borrower_name"},
                    {data: "bank_id"},
                    {data: "bank_branch"},
                    {data: "view"},
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