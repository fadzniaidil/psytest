<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Client Report</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
            word-wrap: break-word;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }

        .maj {
            margin-bottom: 25px;
        }

        footer {
            width: 100%;
            position: fixed;
            bottom: 25px;
        }
    </style>

</head>

<body>
    <div class="maj">
        <table width="100%">
            <tr>
                <td valign="center"><img src="<?php echo base_url() ?>assets/custom/img/logo1.png" alt="" width="80" /></td>
                <td align="right">
                    <h3>Pusat Kaunseling UPSI</h3>
                    <pre>
                    Pusat Kaunseling, Bitarasiswa,
                    Kampus Sultan Abdul Jalil Shah,
                    35900 Tanjung Malim,Perak.
                    +605-450 6000
                    ccd@upsi.edu.my
                </pre>
                </td>
            </tr>
        </table>
        <h5>Data Psychometric</h5>
        <hr>
        <h5 align="center">Data Psychometric <?php echo $this->input->post('what_test'); ?> from <?php echo $this->input->post('what_start') ?> to <?php echo $this->input->post('what_end'); ?> </h5>
        <table width="100%">
            <thead style="background-color: lightgray;">
                <tr>
                    <th>No</th>
                    <th>Date Answer</th>
                    <?php if ($this->input->post('client_class') == 'student') : ?>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Faculty</th>
                        <th>No Phone</th>
                    <?php else : ?>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Department</th>
                        <th>No Phone</th>
                    <?php endif; ?>
                    <?php if ($this->input->post('what_test') == 'GAD') : ?>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Q5</th>
                        <th>Q6</th>
                        <th>Q7</th>
                        <th>Result</th>
                    <?php elseif ($this->input->post('what_test') == 'PHQ') : ?>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Q5</th>
                        <th>Q6</th>
                        <th>Q7</th>
                        <th>Q8</th>
                        <th>Q9</th>
                        <th>Result</th>
                    <?php elseif ($this->input->post('what_test') == 'Whooley') : ?>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Result</th>
                    <?php elseif ($this->input->post('what_test') == 'DASS') : ?>
                        <th>Q1</th>
                        <th>Q2</th>
                        <th>Q3</th>
                        <th>Q4</th>
                        <th>Q5</th>
                        <th>Q6</th>
                        <th>Q7</th>
                        <th>Q8</th>
                        <th>Q9</th>
                        <th>Q10</th>
                        <th>Q11</th>
                        <th>Q12</th>
                        <th>Q13</th>
                        <th>Q14</th>
                        <th>Q15</th>
                        <th>Q16</th>
                        <th>Q17</th>
                        <th>Q18</th>
                        <th>Q19</th>
                        <th>Q20</th>
                        <th>Q21</th>
                        <th>Stress Result</th>
                        <th>Anxiety Result</th>
                        <th>Depression Result</th>
                    <?php elseif ($this->input->post('what_test') == 'BAI') : ?>
                        <th>Result</th>
                    <?php elseif ($this->input->post('what_test') == 'BDI') : ?>
                        <th>Result</th>
                    <?php else : ?>
                        <th>Result</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; ?>
                <?php if ($this->input->post('client_class') == 'student') : ?>
                    <?php if ($this->input->post('what_test') == 'GAD') : ?>
                        <?php foreach ($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt) : ?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->gad_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->gad_q1; ?></td>
                                <td align="center"><?php echo $dt->gad_q2; ?></td>
                                <td align="center"><?php echo $dt->gad_q3; ?></td>
                                <td align="center"><?php echo $dt->gad_q4; ?></td>
                                <td align="center"><?php echo $dt->gad_q5; ?></td>
                                <td align="center"><?php echo $dt->gad_q6; ?></td>
                                <td align="center"><?php echo $dt->gad_q7; ?></td>
                                <td align="center"><?php echo $dt->gad_result; ?> (<?php echo $dt->gad_score; ?>)</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($this->input->post('what_test') == 'PHQ') : ?>
                        <?php foreach ($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt) : ?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->phq_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->phq_q1; ?></td>
                                <td align="center"><?php echo $dt->phq_q2; ?></td>
                                <td align="center"><?php echo $dt->phq_q3; ?></td>
                                <td align="center"><?php echo $dt->phq_q4; ?></td>
                                <td align="center"><?php echo $dt->phq_q5; ?></td>
                                <td align="center"><?php echo $dt->phq_q6; ?></td>
                                <td align="center"><?php echo $dt->phq_q7; ?></td>
                                <td align="center"><?php echo $dt->phq_q8; ?></td>
                                <td align="center"><?php echo $dt->phq_q9; ?></td>
                                <td align="center"><?php echo $dt->phq_result; ?> (<?php echo $dt->phq_score; ?>)</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($this->input->post('what_test') == 'Whooley') : ?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->whooley_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->whooley_q1; ?></td>
                                <td align="center"><?php echo $dt->whooley_q2; ?></td>
                                <td align="center"><?php echo $dt->whooley_result; ?> (<?php echo $dt->whooley_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'DASS'):?>
                         <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->dass_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->dass_q1; ?></td>
                                <td align="center"><?php echo $dt->dass_q2; ?></td>
                                <td align="center"><?php echo $dt->dass_q3; ?></td>
                                <td align="center"><?php echo $dt->dass_q4; ?></td>
                                <td align="center"><?php echo $dt->dass_q5; ?></td>
                                <td align="center"><?php echo $dt->dass_q6; ?></td>
                                <td align="center"><?php echo $dt->dass_q7; ?></td>
                                <td align="center"><?php echo $dt->dass_q8; ?></td>
                                <td align="center"><?php echo $dt->dass_q9; ?></td>
                                <td align="center"><?php echo $dt->dass_q10; ?></td>
                                <td align="center"><?php echo $dt->dass_q11; ?></td>
                                <td align="center"><?php echo $dt->dass_q12; ?></td>
                                <td align="center"><?php echo $dt->dass_q13; ?></td>
                                <td align="center"><?php echo $dt->dass_q14; ?></td>
                                <td align="center"><?php echo $dt->dass_q15; ?></td>
                                <td align="center"><?php echo $dt->dass_q16; ?></td>
                                <td align="center"><?php echo $dt->dass_q17; ?></td>
                                <td align="center"><?php echo $dt->dass_q18; ?></td>
                                <td align="center"><?php echo $dt->dass_q19; ?></td>
                                <td align="center"><?php echo $dt->dass_q20; ?></td>
                                <td align="center"><?php echo $dt->dass_q21; ?></td>
                                <td align="center"><?php echo $dt->dass_stress; ?> (<?php echo $dt->stress_score; ?>)</td>
                                <td align="center"><?php echo $dt->dass_anxiety; ?> (<?php echo $dt->anxiety_score; ?>)</td>
                                <td align="center"><?php echo $dt->dass_depression; ?> (<?php echo $dt->depression_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'BDI'):?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->bdi_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->bdi_result; ?> (<?php echo $dt->bdi_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'BAI'):?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->bai_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->bai_result; ?> (<?php echo $dt->bai_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php else : ?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_faculty')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->mbti_date; ?></td>
                                <td align="center"><?php echo $dt->student_no; ?></td>
                                <td align="center"><?php echo $dt->student_name; ?></td>
                                <td align="center"><?php echo $dt->student_faculty; ?></td>
                                <td align="center"><?php echo $dt->student_phone; ?></td>
                                <td align="center"><?php echo $dt->mbti_result; ?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if ($this->input->post('what_test') == 'GAD') : ?>
                        <?php foreach ($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt) : ?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->gad_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->gad_q1; ?></td>
                                <td align="center"><?php echo $dt->gad_q2; ?></td>
                                <td align="center"><?php echo $dt->gad_q3; ?></td>
                                <td align="center"><?php echo $dt->gad_q4; ?></td>
                                <td align="center"><?php echo $dt->gad_q5; ?></td>
                                <td align="center"><?php echo $dt->gad_q6; ?></td>
                                <td align="center"><?php echo $dt->gad_q7; ?></td>
                                <td align="center"><?php echo $dt->gad_result; ?> (<?php echo $dt->gad_score; ?>)</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($this->input->post('what_test') == 'PHQ') : ?>
                        <?php foreach ($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt) : ?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->phq_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->phq_q1; ?></td>
                                <td align="center"><?php echo $dt->phq_q2; ?></td>
                                <td align="center"><?php echo $dt->phq_q3; ?></td>
                                <td align="center"><?php echo $dt->phq_q4; ?></td>
                                <td align="center"><?php echo $dt->phq_q5; ?></td>
                                <td align="center"><?php echo $dt->phq_q6; ?></td>
                                <td align="center"><?php echo $dt->phq_q7; ?></td>
                                <td align="center"><?php echo $dt->phq_q8; ?></td>
                                <td align="center"><?php echo $dt->phq_q9; ?></td>
                                <td align="center"><?php echo $dt->phq_result; ?> (<?php echo $dt->phq_score; ?>)</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php elseif ($this->input->post('what_test') == 'Whooley') : ?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->whooley_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->whooley_q1; ?></td>
                                <td align="center"><?php echo $dt->whooley_q2; ?></td>
                                <td align="center"><?php echo $dt->whooley_result; ?> (<?php echo $dt->whooley_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'DASS'):?>
                         <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->dass_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->dass_q1; ?></td>
                                <td align="center"><?php echo $dt->dass_q2; ?></td>
                                <td align="center"><?php echo $dt->dass_q3; ?></td>
                                <td align="center"><?php echo $dt->dass_q4; ?></td>
                                <td align="center"><?php echo $dt->dass_q5; ?></td>
                                <td align="center"><?php echo $dt->dass_q6; ?></td>
                                <td align="center"><?php echo $dt->dass_q7; ?></td>
                                <td align="center"><?php echo $dt->dass_q8; ?></td>
                                <td align="center"><?php echo $dt->dass_q9; ?></td>
                                <td align="center"><?php echo $dt->dass_q10; ?></td>
                                <td align="center"><?php echo $dt->dass_q11; ?></td>
                                <td align="center"><?php echo $dt->dass_q12; ?></td>
                                <td align="center"><?php echo $dt->dass_q13; ?></td>
                                <td align="center"><?php echo $dt->dass_q14; ?></td>
                                <td align="center"><?php echo $dt->dass_q15; ?></td>
                                <td align="center"><?php echo $dt->dass_q16; ?></td>
                                <td align="center"><?php echo $dt->dass_q17; ?></td>
                                <td align="center"><?php echo $dt->dass_q18; ?></td>
                                <td align="center"><?php echo $dt->dass_q19; ?></td>
                                <td align="center"><?php echo $dt->dass_q20; ?></td>
                                <td align="center"><?php echo $dt->dass_q21; ?></td>
                                <td align="center"><?php echo $dt->dass_stress; ?> (<?php echo $dt->stress_score; ?>)</td>
                                <td align="center"><?php echo $dt->dass_anxiety; ?> (<?php echo $dt->anxiety_score; ?>)</td>
                                <td align="center"><?php echo $dt->dass_depression; ?> (<?php echo $dt->depression_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'BDI'):?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->bdi_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->bdi_result; ?> (<?php echo $dt->bdi_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php elseif($this->input->post('what_test') == 'BAI'):?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->bai_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->bai_result; ?> (<?php echo $dt->bai_score; ?>)</td>
                            </tr>
                        <?php endforeach;?>
                    <?php else : ?>
                        <?php foreach($this->converter_model->data_psycho1($this->input->post('client_class'), $this->input->post('what_test'),$this->input->post('what_start'), $this->input->post('what_end') , $this->input->post('what_department')) as $dt):?>
                            <tr>
                                <td align="center"><?php echo $count++; ?></td>
                                <td align="center"><?php echo $dt->mbti_date; ?></td>
                                <td align="center"><?php echo $dt->staff_no; ?></td>
                                <td align="center"><?php echo $dt->staff_name; ?></td>
                                <td align="center"><?php echo $dt->staff_department; ?></td>
                                <td align="center"><?php echo $dt->staff_phone; ?></td>
                                <td align="center"><?php echo $dt->mbti_result; ?></td>
                            </tr>
                        <?php endforeach;?>
                    <?php endif; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <br>

    <footer>
        <hr>
        <h6>Pusat Kaunseling UPSI | PsyTest<span style="float:right">Report Generate : <?php echo date('Y-m-d h:i:s A'); ?></span></h6>
    </footer>

</body>

</html>