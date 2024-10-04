<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReceiptService;
use App\Models\Head;
use App\Models\Year;
use Carbon\Carbon;


class InputController extends Controller
{   
    protected $receiptService;
    // Inject ReceiptService in the constructor
    public function __construct(ReceiptService $receiptService)
    {
        $this->receiptService = $receiptService;
    }

    public function EnterReceipt()
    {
        $years = Year::all();
        return view("RE", compact('years'));
    }
    
    public function ReviewReceipt(Request $request)
    {   
        // Validate rules for request
        $validatedData = $request->validate([
        'name' => 'required|string|max:255|',
        'fname' => 'required|string|max:255|',
        'r_number' => 'required|string|max:255',
        'schooling' => 'required|in:SSC,HSSC',
        'session' => 'required|in:A-I,A-II',
        'yearInput' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        'application_id' => 'required|integer|exists:heads,id',
        'document_count' => 'required_if:application_id,2,3|integer|min:1|max:4',
        'paper_count' => 'required_if:application_id,10,19|integer|min:1|max:18',
        'miscellaneous' => 'nullable|numeric|min:0',
        ]);



        // try {
            $headTableData = Head::findOrFail($validatedData['application_id']);
            
            $fee1 = $headTableData->amount;
            // Calculate price using ReceiptService
            $fee2 = $this->receiptService->calculatePrice(
            $validatedData['application_id'], 
            $validatedData['document_count'] ?? null, 
            $validatedData['paper_count'] ?? null
            );            
            $fee3 = $validatedData['miscellaneous'];
            
            // Prepare data for view
            $name = $validatedData['name'];
            $fname = $validatedData['fname'];
            $r_number = $validatedData['r_number'];
            $schooling = $validatedData['schooling'];
            $session = $validatedData['session'];
            $year = $validatedData['yearInput'];
            $head_name = $headTableData->head_name;
            $head_code = $headTableData->head_code;
            $fee1 = $fee1;
            $fee2 = $fee2;
            $fee3 = $fee3;
            $feeInWords1 = $this->receiptService->convert_number_to_words($fee1);
            $feeInWords2 = $this->receiptService->convert_number_to_words($fee2);
            $feeInWords3 = $this->receiptService->convert_number_to_words($fee3);
            $receiptNumber = $this->receiptService->generateRandomReceiptNumber();


            return view('RR', compact('name','fname','r_number','schooling','session','year','head_name','head_code',
            'fee1','fee2','fee3','feeInWords1','feeInWords2','feeInWords3','receiptNumber'));        // } catch (\Exception $e) {
        //     return back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
        //     }
    }

    
    // ... rest of your methods remain the same ...
 
}



