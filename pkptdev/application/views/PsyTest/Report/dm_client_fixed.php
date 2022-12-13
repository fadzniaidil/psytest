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
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .maj{
        margin-bottom: 25px;
    }
    footer{
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
        <td valign="center"><img src="<?php echo base_url()?>assets/custom/img/logo1.png" alt="" width="80"/></td>
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
  <h5>Data Client</h5>
  <hr>
  <h5 align="center">Total Client(<?php echo $this->input->post('client_class');?>) in <?php echo date("F", mktime(0, 0, 0, $this->input->post('what_month'), 10))?> in <?php echo date('Y')?></h5>
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>No</th>
        <th>Appointment Date</th>
        <th>Appointment Time</th>
        <?php if($this->input->post('client_class') == 'student') : ?>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>IC Card</th>
            <th>No Phone</th>
            <th>Program</th>
            <th>Faculty</th>
            <th>Semester</th>
        <?php else: ?>
            <th>Staff ID</th>
            <th>Staff Name</th>
            <th>IC Card</th>
            <th>No Phone</th>
            <th>Department</th>
        <?php endif;?>
      </tr>
    </thead>
    <tbody>
        <?php $count = 1;?>
        <?php if($this->input->post('client_class') == 'student') : ?>
            <?php foreach($this->converter_model->data_client_student($this->input->post('what_month'),date('Y')) as $r):?>
                <tr>
                    <td align="center"><?php echo $count++;?></td>
                    <td align="center"><?php echo $r->appt_date; ?></td>
                    <td align="center"><?php echo $r->appt_time; ?></td>
                    <td align="center"><?php echo $r->student_no; ?></td>
                    <td align="center"><?php echo $r->student_name; ?></td>
                    <td align="center"><?php echo $r->student_icpp; ?></td>
                    <td align="center"><?php echo $r->student_phone; ?></td>
                    <td align="center"><?php echo $r->student_program; ?></td>
                    <td align="center"><?php echo $r->student_faculty; ?></td>
                    <td align="center"><?php echo $r->student_semester; ?></td>
                </tr>
            <?php endforeach;?>
        <?php else:?>
            <?php foreach($this->converter_model->data_client_staff($this->input->post('what_month'),date('Y')) as $r): ?>
                <tr>
                    <td align="center"><?php echo $count++;?></td>
                    <td align="center"><?php echo $r->appt_date; ?></td>
                    <td align="center"><?php echo $r->appt_time; ?></td>
                    <td align="center"><?php echo $r->staff_no; ?></td>
                    <td align="center"><?php echo $r->staff_name; ?></td>
                    <td align="center"><?php echo $r->staff_icpp; ?></td>
                    <td align="center"><?php echo $r->staff_phone; ?></td>
                    <td align="center"><?php echo $r->staff_department; ?></td>
                </tr>
            <?php endforeach;?>
        <?php endif;?>
    </tbody>
  </table>
</div>
  <br>

  <footer>
      <hr>
      <h6>Pusat Kaunseling UPSI | PsyTest<span style="float:right">Report Generate : <?php echo date('Y-m-d h:i:s A');?></span></h6>
  </footer>

</body>
</html>