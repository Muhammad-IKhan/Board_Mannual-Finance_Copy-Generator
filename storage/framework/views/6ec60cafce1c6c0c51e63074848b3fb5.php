<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Print Document</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.80">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(asset('CSS/RRstyle.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('CSS/Print-Page-Styles.CSS')); ?>">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex">
                    <?php for($i = 0; $i < 4; $i++): ?>
                    <div class="col-sm-3 one4th <?php if(!is_null($i) && ($i === 1 || $i === 3)): ?> border-left-dotted <?php endif; ?>">
                    <!-- Add watermark div -->
                    <div class="watermark" style="background-image: url('<?php echo e(asset('images/biseb.png')); ?>');">
                    </div>
                    <!-- NBP and BOK with logos and account numbers -->
                        <div class="d-flex justify-content-center align-items-center">
                            <!-- NBP Logo and Account -->
                            <div class="mr-4 ">
                                <img src="<?php echo e(asset('images/nbp-logo.png')); ?>" alt="NBP Logo" style="max-height: 36px;">
                                <span>&nbsp;&nbsp;A/C #4321889055</span>
                            </div>

                            <!-- BOK Logo and Account -->
                            <div class="ml-4">
                                <img src="<?php echo e(asset('images/bok.gif')); ?>" alt="BOK Logo" style="max-height: 33px;">
                                <span>&nbsp;&nbsp;A/C #0075-03560004</span>
                            </div>
                        </div>

                        <div class="text-center font-weight-bold">
                            Board of Intermediate & Secondary Education, Bannu
                        </div>

                        <!-- Finance Copy Heading -->
                        <div class="font-weight-bold text-center" style="font-size: 25px;">
                            Finance Copy
                        </div>

                        <!-- Bank's Copy Subheading -->
                        <div class="text-center" style="font-size: 15px;">
                            <?php
                            $copies = ["Bank's Copy (01)", "Board's Copy (02)", "Section's Copy (03)", "Student's Copy (04)"];
                            ?>
                            <?php echo e($copies[$i]); ?>

                        </div>

                        <!-- Fee Deposit Slip -->
                        <div class="text-center">
                            Fee Deposit Slip
                        </div>

                        <!-- Date and Serial Number -->
                        <div class="pt-2">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dated:_________________   S.No:&nbsp;&nbsp;<u><b><?php echo e($receiptNumber); ?></b></u>
                        </div>

                        <!-- Name -->
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Name:</span>&nbsp;&nbsp;&nbsp;<u><i><b><?php echo e($name); ?></b></i></u>
                        </div>

                        <!-- Father's Name -->
                        <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>F/ Name:</span>&nbsp;&nbsp;&nbsp;<b><u><i><?php echo e($fname); ?></b></i></u>
                        </div>

                        <!-- Roll Number / Schooling / Session / Year -->
                        <div class="border-bottom">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><em><?php echo e($r_number); ?></em></strong>&nbsp;/&nbsp;<strong><em><?php echo e($schooling); ?></em></strong></span>&nbsp;/&nbsp;<span><strong><em><?php echo e($session); ?></em></strong>&nbsp;/&nbsp;<strong><em><?php echo e($year); ?></em></strong></span>
                        </div>
                       
                        <!-- Render table only for first three copies -->
                        <?php if($i < 3): ?>
                          <div class="tb tabspace">
                              <table class="table table-bordered table-sm tabspace">
                                  <thead>
                                    <tr>
                                      <td class="no-vertical-padding" >S.No</td>
                                      <td class="no-vertical-padding" >Description</td>
                                      <td class="no-vertical-padding" >Amount</td>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th  colspan="3">REGISTRATION<span>&nbsp;&nbsp;&nbsp;<u><i></i></u></span></th>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >1</td>
                                      <td class="no-vertical-padding" >Registration/Enrolment/Affiliation/Renewal Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >2</td>
                                      <td class="no-vertical-padding" >Migration Certificate (Normal/Duplicate/Cancellation)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >3</td>
                                      <td class="no-vertical-padding" >Attempt Certificate Fee (Normal/Duplicate)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >4</td>
                                      <td class="no-vertical-padding" >Inspection Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >5</td>
                                      <td class="no-vertical-padding" >Correction of Name/DOB Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>

                                      <th  colspan="3">SECONDARY / HIGHER SCHOOL CERTIFICATE</th>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >1</td>
                                      <td class="no-vertical-padding" >Examination/Re-appear Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >2</td>
                                      <td class="no-vertical-padding" >Center Creation Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >3</td>
                                      <td class="no-vertical-padding" >Center Change Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >4</td>
                                      <td class="no-vertical-padding" >Duplicate Roll No Slip Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >5</td>
                                      <td class="no-vertical-padding" >Gazette Copy Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <th  colspan="3">CERTIFICATE</th>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >1</td>
                                      <td class="no-vertical-padding" >Provisional Certificate Fee (Normal/Duplicate/Revised)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >2</td>
                                      <td class="no-vertical-padding" >Original Certificate Fee (Normal/Duplicate/Revised)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <th  colspan="3">SECRECY</th>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >1</td>
                                      <td class="no-vertical-padding" >Detailed Marks Certificate Fee (Duplicate/Revised)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >2</td>
                                      <td class="no-vertical-padding" >Cancellation Fee (Paper/Full Exam)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >3</td>
                                      <td class="no-vertical-padding" >Grace Marks Fee:</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >4</td>
                                      <td class="no-vertical-padding" >Re-totalling Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >5</td>
                                      <td class="no-vertical-padding" >Verification Fee (DMC/Certificate)</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >6</td>
                                      <td class="no-vertical-padding" >Appeal/UFM Fee</td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <th  colspan="3">OTHER FEE</th>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >1</td>
                                      <td class="no-vertical-padding" > </td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    <tr>
                                      <td class="no-vertical-padding" >2</td>
                                      <td class="no-vertical-padding" ></td>
                                      <td class="no-vertical-padding" ></td>
                                    </tr>
                                    
                                      <?php
                                          $finalFee = $fee3 ?? max($fee1, $fee2);
                                          $finalFeeInWords = $fee3 ? $feeInWords3 : ($fee1> $fee2 ? $feeInWords1 : $feeInWords2);
                                      ?>
                                    <tr>
                                      <th rowspan="2" colspan="3">Total amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em><?php echo e($head_name); ?>(<?php echo e($head_code); ?>)
                                        &nbsp;&nbsp;Rs. <?php echo e($finalFee); ?> /-</em></strong>
                                        &nbsp;&nbsp;<br>Amount (in words):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>
                                        <?php echo e($finalFeeInWords); ?>&nbsp;Only&nbsp;</em></strong>&nbsp;&nbsp;&nbsp;
                                      </th>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr>
                                    </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div >
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Depositer Sign</b></i></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Bank Officer's Sign</b></i></u></div>
                            <div class="mt-4 mb-0 pb-">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Verified by (BISEB Concerned Clerk):</b></i></u></div>
                          </div>
                        <?php endif; ?>
                        <?php if($i == 3): ?>
                        <div class="no-table-content w-100 ">
                          <!-- Add any specific content for the fourth iteration here, or leave it blank -->
                          <div class="total-amount-section border-top border-bottom mt-4 pt-1 pb-3">
                            <div>&nbsp;&nbsp;&nbsp;<strong>Total amount</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em><b>
                              <?php echo e($head_name); ?>(<?php echo e($head_code); ?>)&nbsp;&nbsp;Rs. <?php echo e($finalFee); ?> /-
</b></em></strong>
                              &nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;<strong>Amount (in words):</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <strong><em><b><?php echo e($finalFeeInWords); ?>&nbsp;Only&nbsp;</b></em></strong>&nbsp;&nbsp;&nbsp;</div>
                          </div> 
                          <div class="mt-4">
                            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Depositer Sign</b></i></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Bank Officer's Sign</b></i></u></div>
                            <div class="mt-4 mb-0 pb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><i><b>Verified by (BISEB Concerned Clerk):</b></i></u></div>
                          </div>                       
                        </div>
                        <?php endif; ?>  
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <!-- <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
        <?php endif; ?> -->
    </body>
</html>





<?php /**PATH C:\xampp\htdocs\Board_Mannual-Finance_Copy-Generator_Zipped\resources\views\RR.blade.php ENDPATH**/ ?>