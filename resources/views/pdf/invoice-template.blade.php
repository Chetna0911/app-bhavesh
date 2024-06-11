<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quotation</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                position: relative;
                padding-top: 150px;
                padding-bottom: 100px;
            }

            header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 150px;
                text-align: center !important;
                /* background: url('header-image-url') no-repeat center; */
                /* background-size: cover; */
                z-index: -1;
            }

            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100px;
                /* background-size: cover; */
                z-index: -1;
            }

            header img {
                width: 100%;
                height: auto;
            }

            footer img {
                width: 100%;
                height: auto;
            }

            .container {
                width: 100%;
                margin: 0 auto;
            }

            h1 {
                text-align: center;
                margin-top: 0;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 8px;
                text-align: left;
            }

            .terms-table th {
                background-color: #f2f2f2;
                text-align: center;
            }

            .header table tbody tr td {
                border: none !important;
            }

            .header table {
                border: none !important;
            }

            .page-break-after-div {
                page-break-after: always;
            }

            .page-break-before-div {
                page-break-before: always;
            }

            @media print {
                footer {
                    page-break-before: always !important;
                }
            }
        </style>
    </head>

    <body class="lh-sm" style="font-size: 12px ">

        <header>
            <img src="{{ public_path('images/logo.png') }}"  alt="Logo">
        </header>
        <footer>
            <img src="{{ public_path('images/footer-abb.png') }}" alt="Footer Image">
        </footer>
        
        <div class="container" style="margin-top: -4%">
            <h3 style="text-align: center;">Quotation</h3>
            <div class="header" style="margin-top: -4%">
                <table>
                    <tbody>
                        <tr>
                            <td style="text-align: left; padding: 0px !important;">
                                REF: {{ $data['refno'] }}
                            </td>
                            <td style="text-align: right;">
                                Date: {{ now()->format('d/m/Y') }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>To,<br>
                {{ $data['address1'] }}<br>
                {{ $data['address2'] }}<br>
                {{ $data['city'] }}<br>
                {{ $data['pincode'] }}<br>

            </p>

            <p>Kind Attn: {{ $data['kindatt'] }}</p>

            <p>Ref: {{ $data['refenq'] }}</p>
            <p style="margin-top:-1%;">Subject: {{ $data['subject'] }}</p>

            <div>
                <p>Dear Sir,<br>
                    We Thank you for your recent inquiry and expressing interest in ABB products & services. At GEPL, we
                    are
                    thrilled to present you with a Techno-commercial offer designed to meet your unique requirements as
                    per
                    your enquiry and details shared.</p>

                <p style="margin-top:-1.5%;">We are presenting you with the below offer as per ABB's instructions and guidelines.</p>

                <p style="margin-top:-1.5%;">Our commitment to quality & solution centric mindset sets us apart, and we are confident that our
                    tailored solution will not only meet but exceed your expectations.</p>

                <p style="margin-top:-1.5%;">Our team is ready to address any questions and provide additional details to ensure you make an
                    informed
                    decision. Please feel free to reach out to discuss any specific aspects or to arrange a meeting.</p>
            </div>

            <div class="" style="margin-top: -3%">
                <table style="font-size:80%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Item Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" style="text-align: center;">As Per Annexure</td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;">This Offer Contains {{ $data['annexure'] }}
                                Annexure </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <table class="terms-table" style="font-size:12px; margin-top: -1%">
                <thead>
                    <tr>
                        <th colspan="2">Terms and Conditions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>
                            <b>Taxes & Duties : </b>{{ $data['taxes'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">2</td>
                        <td>
                            <b>Freight, P&F & Transit Insurance : </b> Inclusive in above offer.
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">3</td>
                        <td>
                            <b>Payment Terms : </b>{{ $data['paymentTerms'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">4</td>
                        <td>
                            <b>Validity : </b>Prices are valid for a period of 25 days from the date of offer
                            submission.
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">5</td>
                        <td>
                            <b>Delivery : </b>14-16 weeks from the date of receipt of your PO/advance payment whichever
                            is later.
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">6</td>
                        <td>
                            <b>{{ $details['scope']['key'] }} : </b> {{ $details['scope']['value'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">7</td>
                        <td>
                            <b>Warrenty : </b>{{ $data['warranty'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">8</td>
                        <td>
                            <b>Liquidation Charges : </b>As per ABB policy we do not accept any L.D. clause.</p>
                        </td>
                    </tr>
                </tbody>
            </table>



            <div class="page-break-before-div">
                <div class="header" style="margin-top: -4%">
                    <table>
                        <tbody>
                            <tr>
                                <td style="text-align: left; padding: 0px !important;">
                                    REF: {{ $data['refno'] }}
                                </td>
                                <td style="text-align: right;">
                                    Date: {{ now()->format('d/m/Y') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h2 style="text-align: center;">ANNEXURE - 1</h2>
                <table>
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Item Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['items'] as $key => $item)
                        <tr>
                            <td  style="text-align: center;">{{ $key + 1 }}</td>
                            <td>{{ $item['desc'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>{{ $item['item_price'] }}</td>
                            <td>{{ $item['qty'] * $item['item_price'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td>NOTE:</td>
                        <td>
                            <ol>
                                <li>
                                    Installation , Supervision, any site activity not included in offered rates.
                                </li>
                                <li>
                                    We request you to send the final approved
                                    drawings, SLD & all necessary details for making relay configuration files along
                                    with PO
                                    placement. Our lead time for
                                    making relay configuration based on the clear inputs received from your end is 30
                                    days.
                                </li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
            <br><br><br><br><br><br>
            <p>Best Regards,<br>GEPL</p>
        </div>

    </body>

</html>