<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wise Immigration</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('css/mainpage/onepagevendor.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/mainpage/onepage.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/picker.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/fileupload/blueimp-gallery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fileupload/jquery.fileupload.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fileupload/jquery.fileupload-ui.css') }}" rel="stylesheet" />

</head>

<body data-bs-spy="scroll" data-bs-target="#header" data-bs-offset="51">

    <div id="page-container" class="fade">

        <div id="header" class="header navbar navbar-transparent navbar-fixed-top navbar-expand-lg">

            <div class="container">

                <a href="{{ route('wiseindex') }}" class="navbar-brand">
                    <span class="brand-text">
                        <span class="text-theme">W I S E </span>
                    </span>
                </a>

            </div>
        </div>

        <div id="home" class="content has-bg home">

            <div class="container-fluid home-content text-dark row">
                <div class="col-12 col-xl-2 col-lg-2"></div>

                <div class="col-12 col-xl-4 col-lg-4">
                    <a href="#" class="btn btn-theme btn-info" data-bs-toggle="modal" data-bs-target="#modalFourSeason">Four Seasons Immigration and Study Services</a>
                </div>
                <!-- Add selection 'HQ Documentation' and 'Canada Sales' -->
                <div class="col-12 col-xl-4 col-lg-4 d-sm-none">
                    <hr class="my-4">
                </div>

                <div class="col-12 col-xl-4 col-lg-4">
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modalForWise" class="btn btn-theme btn-info">Wise Concern Immigration and Study Services</a>
                </div>

                <div class="col-12 col-xl-2 col-lg-2"></div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalFourSeason">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <div class="mb-3">
                                    <div id="modalContent"></div>
                                    <form action="{{ route('fourseason-check-email') }}" method="POST" id="checkForm">
                                        @csrf
                                        <label class="form-label" for="exampleInputEmailsa">Please Indicate your Email Address:</label>
                                        <input class="form-control" type="email" name="checkingEmail" id="checkingEmail" required>
                                        <button class="btn btn-primary btn-md col-3 mt-2" id="loadingBtn" type="button" onclick="reloadContentAndCheck()">Check</button>
                                        <button class="btn btn-primary btn-md col-3 mt-2 visually-hidden" id="viewForm" type="button" data-bs-toggle="modal" data-bs-target="#modalForm">View Form</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Four Season Modal Slip -->
            <div class="modal modal-message fade" id="modalForm">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-dark p-5">
                        <div class="panel-body">
                            <div class="form-group row mb-3">
                                <label class="text-center">Four Season Selection</label>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <a class="btn btn-info me-5" href="{{ route('fourseason-request') }}">Concern Slip</a>
                                    <a class="btn btn-primary ms-4" href="{{ route('fourseason-order') }}">Job Order Slip</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wise Modal Slip -->
            <div class="modal modal-message fade" id="modalForWise">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content text-dark p-5">
                        <div class="panel-body">
                            <div class="form-group row mb-3">
                                <label class="text-center">Wise Immigration Selection</label>
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <a class="btn btn-primary me-5" href="Javascript:;" data-bs-toggle="modal" data-bs-target="#modalWiseImmigrationForJobOrderSlip" >Job Order Slip</a>
                                    <a class="btn btn-info ms-4" href="Javascript:;" data-bs-toggle="modal" data-bs-target="#modalWiseImmigrationForRequestOrderSlip" >Request Slip</a>
                                    <!-- <a class="btn btn-primary me-5" href="{{ route('fourseason-order') }}">Job Order Slip</a>
                                    <a class="btn btn-info ms-4" href="{{ route('fourseason-request') }}">Request Slip</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Modal for wise immigration for job Order Slip -->
            <div class="modal fade" id="modalWiseImmigrationForJobOrderSlip">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <label class="text-center" for="exampleInputEmail1">Job Order Slip</label>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Select a Branch/Department:</label>
                                    <select class="form-control form-select" name="department" id="selectedOrder" onchange="navigateToRouteForOrder()">
                                        <option selected hidden>Please Select a Branch/Department</option>
                                        <option value="Cebu Sales">Cebu Sales</option>
                                        <option value="Bohol Sales">Bohol Sales</option>
                                        <option value="Makati Sales">Makati Sales</option>
                                        <option value="Osamiz Sales">Osamiz Sales</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for wise immigration for Request Slip -->
            <div class="modal fade" id="modalWiseImmigrationForRequestOrderSlip">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-dark">
                        <div class="modal-body py-5">
                            <div class="panel-body">
                                <label class="text-center" for="exampleInputEmail1">Request Slip</label>
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">Select a Branch/Department:</label>
                                    <select class="form-control form-select" name="department" id="selectedRequest" onchange="navigateToRouteForRequest()">
                                        <option selected hidden>Please Select a Branch/Department</option>
                                        <option value="Cebu Sales">Cebu Sales</option>
                                        <option value="Bohol Sales">Bohol Sales</option>
                                        <option value="Makati Sales">Makati Sales</option>
                                        <option value="Osamiz Sales">Osamiz Sales</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Human Resource">Human Resource</option>
                                        <option value="Accounting">Accounting</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="{{ asset('js/mainpage/onepageemail.js') }}"></script>
    <script src="{{ asset('js/mainpage/onepagevendor.js') }}"></script>
    <script src="{{ asset('js/mainpage/onepage.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/vendor.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/color.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/parsley.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/highlight.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/render.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="{{ asset('js/googlet.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script async src="{{ asset('js/googlet.min.js') }}" type="d250b0bc11e95ea66e8b3ba5-text/javascript"></script>

    <script>
        $(document).ready(function() {
            $('#viewoption').on('change', function() {
                var selectedOption = $(this).val();
                hideAllForms();
                if (selectedOption === 'requestSlip') {
                    $('#requestSlipForm').removeClass('visually-hidden');
                } else if (selectedOption === 'job') {
                    $('#jobForm').removeClass('visually-hidden');
                }
            });
        });

        function hideAllForms() {
            $('.form-horizontal').addClass('visually-hidden');
        }

        function validateForm(formId) {
            return true;
        }

        function navigateToRouteForRequest() {
            var selectedValue = document.getElementById("selectedRequest").value;
            if (selectedValue) {
                window.location.href = "{{ route('category-request-employee', ['value' => '']) }}/" + selectedValue;
            }
        }

        function navigateToRouteForOrder() {
            var selectedValue = document.getElementById("selectedOrder").value;
            if (selectedValue) {
                window.location.href = "{{ route('category-order-employee', ['value' => '']) }}/" + selectedValue;
            }
        }

        function reloadContentAndCheck() {
            $('#modalContent').html('Checking...');
            $('#loadingBtn').html('Waiting...');

            setTimeout(function() {
                checkUser();
            }, 500);
        }

        function checkUser() {
            var formData = $('#checkForm').serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('fourseason-check-email') }}",
                data: formData,
                dataType: 'json',
                success: function(response) {
                    $('#modalContent').html(response.message);
                    if (response.message == 'User not found') {
                        $('#loadingBtn').html('Check Again');
                    } else {
                        $('#loadingBtn').addClass('visually-hidden');
                        $('#viewForm').removeClass('visually-hidden');
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
    <script type="d250b0bc11e95ea66e8b3ba5-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-Y3Q0VGQKY3');
    </script>
    <script src="{{ asset('js/rocketloader.min.js') }}" data-cf-settings="d250b0bc11e95ea66e8b3ba5-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" data-cf-beacon='{"rayId":"84a480accd39e6d6","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>