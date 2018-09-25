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
                                    <th>Case</th>
                                    <th>Applicant Name</th>
                                    <th>Dastavej LakhiApnar</th>
                                    <th>Dastavej LakhaviLenar</th>
                                    <th>Search From</th>
                                    <th>Search Upto</th>
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
                <form action="propertyApplications" method="post" id="addform">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Inward No</label>
                                <select name="property_case_id" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Enter Sub Registrar</label>
                                <input type="text" class="form-control" required="true" id="sub_registrar" name="sub_registrar"
                                       placeholder="Enter Sub Registrar" autocomplete="off">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Property Applicant Name</label>
                                <input type="text" class="form-control" required="true" id="applicant_name" name="applicant_name"
                                       placeholder="Enter Applicant Name">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Applicant Address</label>
                                <textarea class="form-control" required="true" id="applicant_address" name="applicant_address"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Dastavej Details</label>
                                <textarea class="form-control" required="true" id="dastavej_details" name="dastavej_details"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Property Description</label>
                                <textarea class="form-control" required="true" id="property_description" name="property_description"></textarea>
                            </fieldset>
                        </div>
                        <div class="row">
                                <fieldset class="form-group floating-label-form-group col-md-4">
                                    <label for="title">Dastavej Lakhiapnar</label>
                                    <input type="text" class="form-control" required="true" id="dastavej_lakhiapnar" name="dastavej_lakhiapnar"
                                           placeholder="Enter Dastavej Lakhiapnar">
                                </fieldset>
                                <fieldset class="form-group floating-label-form-group col-md-4">
                                    <label for="title">Dastavej Lakhilenar'</label>
                                    <input type="text" class="form-control" required="true" id="dastavej_lakhilenar" name="dastavej_lakhilenar"
                                           placeholder="Enter Dastavej Lakhilenar">
                                </fieldset>
                                <fieldset class="form-group floating-label-form-group col-md-4">
                                    <label for="title">Dastavej Date</label>
                                    <input type="text" class="form-control datepicker" required="true" id="dastavej_date" name="dastavej_date"
                                           placeholder="Enter Dastavej Date">
                                </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Year From</label>
                                <input type="text" class="form-control datepicker" id="search_year_from" name="search_year_from"
                                       placeholder="Enter Search Year From"  required="true">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Year To</label>
                                <input type="text" class="form-control datepicker" id="search_year_upto" name="search_year_upto"
                                       placeholder="Enter Search Year To"  required="true">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Application No</label>
                                <input type="number" class="form-control" id="search_application_no" name="search_application_no"
                                       placeholder="Enter Search Application No"  required="true">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Fee</label>
                                <input type="text" class="form-control" id="search_fee" name="search_fee"
                                       placeholder="Enter Search Fee">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Actual Payment</label>
                                <input type="number" class="form-control" id="actual_payment" name="actual_payment"
                                       placeholder="Enter Actual Payment">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Extra Expense</label>
                                <input type="text" class="form-control" id="extra_expense" name="extra_expense"
                                       placeholder="Enter Extra Expense">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Extra Payment Details</label>
                                <textarea class="form-control" required="true" id="payment_details" name="payment_details"
                                          placeholder="Enter Payment Details"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="description">Property Address Office</label>
                                <textarea class="form-control" required="true" id="property_address_office" name="property_address_office"
                                          placeholder="Enter Property Address Office"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="description">Note</label>
                                <textarea class="form-control" required="true" id="note" name="note"
                                          placeholder="Enter Note"></textarea>
                            </fieldset>
                        </div>
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
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Inward No</label>
                                <select name="property_case_id" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Enter Sub Registrar</label>
                                <input type="text" class="form-control" required="true" id="sub_registrar" name="sub_registrar"
                                       placeholder="Enter Sub Registrar" autocomplete="off">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Property Applicant Name</label>
                                <input type="text" class="form-control" required="true" id="applicant_name" name="applicant_name"
                                       placeholder="Enter Applicant Name">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Applicant Address</label>
                                <textarea class="form-control" required="true" id="applicant_address" name="applicant_address"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Dastavej Details</label>
                                <textarea class="form-control" required="true" id="dastavej_details" name="dastavej_details"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Property Description</label>
                                <textarea class="form-control" required="true" id="property_description" name="property_description"></textarea>
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Dastavej Lakhiapnar</label>
                                <input type="text" class="form-control" required="true" id="dastavej_lakhiapnar" name="dastavej_lakhiapnar"
                                       placeholder="Enter Dastavej Lakhiapnar">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Dastavej Lakhilenar'</label>
                                <input type="text" class="form-control" required="true" id="dastavej_lakhilenar" name="dastavej_lakhilenar"
                                       placeholder="Enter Dastavej Lakhilenar">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Dastavej Date</label>
                                <input type="text" class="form-control datepicker" required="true" id="dastavej_date" name="dastavej_date"
                                       placeholder="Enter Dastavej Date">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Year From</label>
                                <input type="text" class="form-control datepicker" id="search_year_from" name="search_year_from"
                                       placeholder="Enter Search Year From"  required="true">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Year To</label>
                                <input type="text" class="form-control datepicker" id="search_year_upto" name="search_year_upto"
                                       placeholder="Enter Search Year To"  required="true">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Application No</label>
                                <input type="number" class="form-control" id="search_application_no" name="search_application_no"
                                       placeholder="Enter Search Application No"  required="true">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Search Fee</label>
                                <input type="text" class="form-control" id="search_fee" name="search_fee"
                                       placeholder="Enter Search Fee">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Actual Payment</label>
                                <input type="number" class="form-control" id="actual_payment" name="actual_payment"
                                       placeholder="Enter Actual Payment">
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Extra Expense</label>
                                <input type="text" class="form-control" id="extra_expense" name="extra_expense"
                                       placeholder="Enter Extra Expense">
                            </fieldset>
                        </div>
                        <div class="row">
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="title">Extra Payment Details</label>
                                <textarea class="form-control" required="true" id="payment_details" name="payment_details"
                                          placeholder="Enter Payment Details"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="description">Property Address Office</label>
                                <textarea class="form-control" required="true" id="property_address_office" name="property_address_office"
                                          placeholder="Enter Property Address Office"></textarea>
                            </fieldset>
                            <fieldset class="form-group floating-label-form-group col-md-4">
                                <label for="description">Note</label>
                                <textarea class="form-control" required="true" id="note" name="note"
                                          placeholder="Enter Note"></textarea>
                            </fieldset>
                        </div>
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
                    {data: "property_case_id"},
                    {data: "sub_registrar"},
                    {data: "applicant_name"},
                    {data: "dastavej_lakhiapnar"},
                    {data: "dastavej_lakhilenar"},
                    {data: "search_year_from"},
                    {data: "search_year_upto"},
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