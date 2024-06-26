{{--
<input class="form-control" id="ref_no" name="ref" type="ref_no"="Enter REF No" required="" <input class="form-control"
    id="name" name="name" type="text"="Enter Name" required="">

<input class="form-control" id="address" name="address" type="address"="Enter Address" required="" <input
    class="form-control" id="pincode" name="pincode" type="pincode"="Enter Pin Code" required="" <form
    action="{{ route('generate-pdf') }}" method="post" enctype="multipart/form-data"> --}}

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDF</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
            rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style>
            body {
                background-color: #dee9ff;
            }

            .registration-form {
                padding: 50px 0;
            }

            .registration-form form {
                background-color: #fff;
                max-width: 900px;
                margin: auto;
                padding: 50px 70px;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            }

            .registration-form .form-icon {
                text-align: center;
                background-color: #5891ff;
                border-radius: 50%;
                font-size: 40px;
                color: white;
                width: 100px;
                height: 100px;
                margin: auto;
                margin-bottom: 50px;
                line-height: 100px;
            }

            .registration-form .item {
                border-radius: 20px;
                margin-bottom: 25px;
                padding: 10px 20px;
            }

            .registration-form .create-account {
                border-radius: 30px;
                padding: 10px 20px;
                font-size: 18px;
                font-weight: bold;
                background-color: #5791ff;
                border: none;
                color: white;
                margin-top: 20px;
            }

            .registration-form .social-media {
                max-width: 600px;
                background-color: #fff;
                margin: auto;
                padding: 35px 0;
                text-align: center;
                border-bottom-left-radius: 30px;
                border-bottom-right-radius: 30px;
                color: #9fadca;
                border-top: 1px solid #dee9ff;
                box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
            }

            .registration-form .social-icons {
                margin-top: 30px;
                margin-bottom: 16px;
            }

            .registration-form .social-icons a {
                font-size: 23px;
                margin: 0 3px;
                color: #5691ff;
                border: 1px solid;
                border-radius: 50%;
                width: 45px;
                display: inline-block;
                height: 45px;
                text-align: center;
                background-color: #fff;
                line-height: 45px;
            }

            .registration-form .social-icons a:hover {
                text-decoration: none;
                opacity: 0.6;
            }

            @media (max-width: 576px) {
                .registration-form form {
                    padding: 50px 20px;
                }

                .registration-form .form-icon {
                    width: 70px;
                    height: 70px;
                    font-size: 30px;
                    line-height: 70px;
                }
            }
        </style>
    </head>

    <body>
        <div class="registration-form">
            <form action="{{ route('create-pdf') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    {{-- <img style="width: 100%; height: 150%;" alt="Image" src="<?php echo asset("
                        /images/logo.png")?>"> --}}
                    <img src="{{asset('images/logo.png')}}" alt="Image" style="width: 100%; height: 150%;" />
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="ref">Ref No</label>
                        <input type="text" name="refno" class="form-control" id="ref">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="annexure">Annexure No</label>
                        <input type="text" name="annexure" class="form-control" id="annexure">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="refenq">Ref Enquiry</label>
                        <input type="text" class="form-control" name="refenq" id="refenq">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kindatt">Kind Attn</label>
                        <input type="text" class="form-control" name="kindatt" id="kindatt">
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address1" id="inputAddress">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" name="address2" id="inputAddress2">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" name="city" id="inputCity">
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" name="pincode" id="inputZip">
                    </div>
                </div>
                <div>
                    <h3>Offering Details</h3>
                    <div>
                        <div class="d-flex">
                            <p class="mr-auto p-2" style="font-weight: bold;">Add Items</p>
                            {{-- <div class="p-2 mb-3">
                                <button class="btn btn-primary px-3 mr-2" name="addItem">+</button>
                                <button class="btn btn-danger px-3" name="removeItem">-</button>

                            </div> --}}
                        </div>
                        <div id="input-fields">
                            <div class="form-group row">
                                <div class="col-md-4 mb-2">
                                    <input type="text" name="items[0][desc]" class="form-control" placeholder="Item Description">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <input type="text" name="items[0][qty]" class="form-control quantity" placeholder="Item Quantity">
                                </div>
                                <div class="col-md-3 mb-2">
                                    <input type="text" name="items[0][item_price]" class="form-control price" placeholder="Item Price">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-success" id="add-button">+</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div>
                        <br>
                        <p style="font-weight: bold;">Terms and Conditions of Supply</p>
                        <div>
                            <label class="my-1 mr-2">Taxes</label>
                            <select class="custom-select my-1 mr-sm-2" name="taxes" id="inlineFormCustomSelectPref">
                                <option selected>Choose Taxes...</option>
                                @foreach ($termsNCondition['taxes'] as $condition)
                                <option value="{{ $condition['value'] }}">{{ $condition['key'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label class="my-1 mr-2">Price Basis</label>
                            <select class="custom-select my-1 mr-sm-2" name="priceBasic"
                                id="inlineFormCustomSelectPref">
                                <option selected>Choose Price Basis...</option>
                                @foreach ($termsNCondition['priceBasis'] as $condition)
                                <option value="{{ $condition['value'] }}">{{ $condition['key'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label class="my-1 mr-2">Payment Terms :</label>
                            <select class="custom-select my-1 mr-sm-2" name="paymentTerms"
                                id="inlineFormCustomSelectPref">
                                <option selected>Choose Payment Terms...</option>
                                @foreach ($termsNCondition['paymentTerms'] as $condition)
                                <option value="{{ $condition['value'] }}">{{ $condition['key'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label class="my-1 mr-2">Warranty</label>
                            <select class="custom-select my-1 mr-sm-2" name="warranty" id="inlineFormCustomSelectPref">
                                <option selected>Choose Warranty...</option>
                                @foreach ($termsNCondition['warranty'] as $condition)
                                <option value="{{ $condition['value'] }}">{{ $condition['key'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div>
                            <label class="my-1 mr-2">Delivery</label>
                            <select class="custom-select my-1 mr-sm-2" name="delivery" id="inlineFormCustomSelectPref">
                                <option selected>Choose Delivery Option...</option>
                                @foreach ($termsNCondition['delivery'] as $condition)
                                <option value="{{ $condition['value'] }}">{{ $condition['key'] }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block create-account">Generate Pdf</button>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
        </script>
        {{-- <script src="assets/js/script.js"></script> --}}
        <script type="text/javascript">
            $(document).ready(function() {
            let counter = 1;

            $('#add-button').click(function() {
                let newField = `
                    <div class="form-group row">
                        <div class="col-md-4 mb-2">
                            <input type="text" name="items[${counter}][desc]" class="form-control" placeholder="Item Description">
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" name="items[${counter}][qty]" class="form-control quantity" placeholder="Item Quantity">
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" name="items[${counter}][item_price]" class="form-control price" placeholder="Item Price">
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-danger remove-button">-</button>
                        </div>
                    </div>
                `;
                $('#input-fields').append(newField);
                counter++;
            });

            $(document).on('click', '.remove-button', function() {
            $(this).closest('.form-group').remove();
            });
        });
        </script>

    </body>

</html>