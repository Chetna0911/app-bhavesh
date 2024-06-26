<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        set_time_limit(3600);
        $data = [
            'ref_no' => $request->input('ref_no'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'pincode' => $request->input('pincode'),
        ];

        $pdf = PDF::loadView('pdf.template', $data);

        // Generate a unique filename
        $filename = 'generated_pdf_' . time() . '.pdf';

        // Save the PDF to the public disk
        $pdf->save(public_path('storage/' . $filename));

        // Generate the URL for the PDF
        $pdfUrl = url('/storage/' . $filename);

        // Echo JavaScript to open the PDF in a new tab
        // and provide a download link
        echo "<script>
                var newTab = window.open('{$pdfUrl}', '_blank');
                if (!newTab || newTab.closed || typeof newTab.closed == 'undefined') {
                    window.location.href = '{$pdfUrl}';
                }
            </script>";

        // Provide a link for direct download
        echo "<p><a href='{$pdfUrl}' download='{$filename}'>Download PDF</a></p>";
    }

    public function showForm(Request $request)
    {
        set_time_limit(3600);
        $termsNCondition = config('terms-and-condition');
        return view('invoice-form', ['termsNCondition' => $termsNCondition]);
    }

    public function createInvoicePdf(Request $request)
    {
        set_time_limit(3600);
        $details = config('terms-and-condition');
        $data = $request->all();
        // return view('pdf.invoice-template', ['data' => $data, 'details' => $details]);
        // dd($request->all());
        $pdf = PDF::loadView('pdf.invoice-template', ['data' => $data, 'details' => $details]);

        // Generate a unique filename
        $filename = 'generated_pdf_' . time() . '.pdf';

        // Save the PDF to the public disk
        $pdf->save(public_path('storage/' . $filename));

        // Generate the URL for the PDF
        $pdfUrl = url('/storage/' . $filename);

        // Echo JavaScript to open the PDF in a new tab
        // and provide a download link
        echo "<script>
             var newTab = window.open('{$pdfUrl}', '_blank');
             if (!newTab || newTab.closed || typeof newTab.closed == 'undefined') {
                 window.location.href = '{$pdfUrl}';
             }
         </script>";

        // Provide a link for direct download
        echo "<p><a href='{$pdfUrl}' download='{$filename}'>Download PDF</a></p>";
    }
}
