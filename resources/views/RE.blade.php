<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('CSS/REstyle.css') }}">
    <title>Receipte/Application</title>

  </head>
  <body>
        <div class="container mt-2  p-1 ">
            <!-- <h1 class="text-start mt-4 p-1"><mark>Ready-made & One-Click  Print-Ready <br>Mannual Payment Receipte/Chalaan For Banks <br>& Aplications For Processing to the Concerned Office of BISEB</mark></h1> -->
            <div class="row" id="frm-c" >
                <div class="container mt-5">
                <h5>BISEB Receipte (Mannual) with Application Generator</h5><br>
                                <!-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif -->
                <form class="" id="applicationForm" action="{{ url('/receipt-review') }}" method="POST">
                    @csrf
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Students Details:</label>
                    <div class="col" >
                        <div class="row ">
                            <div class="input-group ">
                                <input type="text" name="name" class="form-control" placeholder="           Enter the Student Name " >
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <input type="text" name="fname" class="form-control" placeholder="           Enter the Student Father name" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <input type="text" name="r_number" class="form-control" placeholder="           Enter the Student Roll Number" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <select class="form-control" id="class" name="schooling">
                                    <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select the Class</option>
                                    <option value="SSC">SSC</option>
                                    <option value="HSSC">HSSC</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group">
                                <select class="form-control" id="session" name="session" >
                                    <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select the Session</option>
                                    <option value="A-I">A-I (Annual)</option>
                                    <option value="A-II">A-II (Suply)</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group form-group">
                                <select class="form-control" id="year" name="yearInput">
                                    <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select the Year</option>
                                    @foreach ($years as $year)
                                    <option value="{{ $year->year }}">{{ $year->year }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                        <div class="input-group form-group">
                            <!-- <label for="applicationSelect" class="form-label">Select Application Type</label> -->
                            <select class="form-control @error('application_id') is-invalid @enderror" 
                                    id="applicationSelect" 
                                    name="application_id" 
                                    required
                                    aria-describedby="applicationSelectHelp">
                                <option value="" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Receipte and Application type</option>
                                <optgroup label="Migration">
                                    <option value="1">Migration</option>
                                    <option value="21">Migration Cancellation</option>
                                </optgroup>
                                <optgroup label="Verification">
                                    <option value="2">Verification</option>
                                    <option value="3">IBCC Verification</option>
                                </optgroup>
                                <optgroup label="Original Documents">
                                    <option value="4">Duplicate DMC</option>
                                    <option value="5">Revised DMC</option>
                                    <option value="6">Duplicate Certificate</option>
                                    <option value="7">Revised Certificate</option>
                                </optgroup>
                                <optgroup label="Corrections">
                                    <option value="13">Correction by Degree</option>
                                    <option value="14">Unnatural Gap Correction</option>
                                    <option value="15">Spelling/Vowel Correction</option>
                                    <option value="16">Correction by AWR</option>
                                </optgroup>
                                <optgroup label="Examination">
                                    <option value="9">Centre Change</option>
                                    <option value="11">Result/Gazette</option>
                                    <option value="12">Creation of Center</option>
                                </optgroup>
                                <optgroup label="Results">
                                    <option value="20">Jury Appeal</option>
                                    <option value="8">UFM Appeal</option>
                                    <option value="10">Re-totalling</option>
                                    <option value="19">Grace Marks</option>
                                    <option value="18">Cancellation of Paper</option>
                                </optgroup>
                                <optgroup label="Others">
                                    <option value="17">Miscellaneous Fee</option>
                                </optgroup>


                            </select>
                            @error('application_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small id="applicationSelectHelp" class="form-text text-muted">
                                <!-- Choose Receipt / application you want to Print -->
                            </small>
                            </div>

                        <!-- Conditional input for Verification types -->
                        <div class="form-group" id="verificationGroup" style="margin-left: 20px;display: none;">
                            <label for="documentCount" class="form-label">Document means one Original DMC / Certificate with one Copy</label>
                            <select class="form-control @error('document_count') is-invalid @enderror" 
                                    id="documentCount" 
                                    name="document_count">
                                @for ($i = 1; $i <= 4; $i++)
                                    <option value="{{ $i }}">{{ $i }} {{ Str::plural('Document', $i) }}</option>
                                @endfor
                            </select>
                            @error('document_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Conditional input for Papers count -->
                        <div class="form-group" id="papersGroup" style="margin-left: 20px;display: none;">
                            <label for="paperCount" class="form-label">Select the Number of Papers want to apply for</label>
                            <select class="form-control @error('paper_count') is-invalid @enderror" 
                                    id="paperCount" 
                                    name="paper_count">
                                @for ($i = 1; $i <= 18; $i++)
                                    <option value="{{ $i }}">{{ $i }} {{ Str::plural('Paper', $i) }}</option>
                                @endfor
                            </select>
                            @error('paper_count')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Conditional input for miscellaneous types -->
                        <div class="form-group" id="miscellaneousGroup" style="margin-left: 20px;display: none;">
                            <label for="miscellaneous" class="form-label">Amount in Digits</label>
                            <div class="form-controlinput-group @error('miscellaneous') is-invalid @enderror">
                                <input type="number" id="miscellaneous" name="miscellaneous">
                            </div> 
                            @error('miscellaneous')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-group" >
                            <input type="submit" class="btn btn-success btn-block" value="Print   OR   Download" >
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- Change the jQuery source to full version instead of slim -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <!-- Move the JavaScript here, after jQuery is loaded -->
    <script>
    $(document).ready(function() {
        $('#applicationSelect').change(function() {
            const selectedValue = $(this).val();
            
            // Hide all conditional groups first
            $('#verificationGroup, #papersGroup, #miscellaneousGroup').hide();
            
            // Show verification group for Verification and IBCC Verification
            if (selectedValue === '2' || selectedValue === '3') {
                $('#verificationGroup').show();
            }
            
            // Show papers group for Re-totalling and Grace Marks
            if (selectedValue === '10' || selectedValue === '19') {
                $('#papersGroup').show();
            }

            // Show papers group for Other/ miscellaneous fee
            if (selectedValue === '17' ) {
                $('#miscellaneousGroup').show();
            }
        });
        // Trigger change event on page load to handle pre-selected values
        $('#applicationSelect').trigger('change');
        });
    </script>
    <script>
    $(document).ready(function() {
        $('#applicationForm').on('submit', function() {
            // If verification group is hidden, reset its value
            if ($('#verificationGroup').is(':hidden')) {
                $('#documentCount').val('');
            }
            
            // If papers group is hidden, reset its value
            if ($('#papersGroup').is(':hidden')) {
                $('#paperCount').val('');
            }

            // If miscellaneous group is hidden, reset its value
            if ($('#miscellaneousGroup').is(':hidden')) {
                $('#miscellaneous').val('');
            }
            
            return true; // Allow form submission to continue
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#applicationForm').on('submit', function(e) {
            var name = $('input[name="name"]').val();
            var fname = $('input[name="fname"]').val();
            var rNumber = $('input[name="r_number"]').val();
            
            if (!name || !fname || !rNumber) {
                e.preventDefault();
                alert('Please fill in all required fields');
                return false;
            }
        });
    });
  </body>
</html>










