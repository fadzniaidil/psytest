<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report Whooley</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
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
  <h5>Report Session</h5>
  <hr>
  <br>
  <table width="100%">
    <tr>
         <td>
            <?php foreach($cc as $c):?>
            <strong>Counselor :</strong> <?php echo $c->staff_name;?><br><br>
            <?php endforeach?>
            <strong>Client Name :</strong>  <?php echo $pro['staff_name'];?><br>
            <strong>Client ID :</strong>  <?php echo $pro['staff_no'];?><br>
            <strong>Client Email :</strong>  <?php echo $pro['staff_email'];?><br>
            <strong>Client Phone :</strong>  <?php echo $pro['staff_phone'];?><br>
        </td>
    </tr>
  </table>

  <br/>
  <h6 align="center">Test Result: Whooley</h6>
  <table width="100%">
    <?php foreach($gg as $a): ?>
    <thead style="background-color: lightgray;">
      <tr>
        <th>No</th>
        <th>Question</th>
        <th>Answer</th>
        <th>Score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Feeling down, depressed or hopeless?</td>
        <td align="center">
            <?php if($a->whooley_q1 == 0){
                echo 'No';
            }else{
                echo 'Yes';
            }
             ?>

        </td>
        <td align="center"><?php echo $a->whooley_q1;?></td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>Having little interest or pleasure in doing thing?</td>
          <td align="center">
            <?php if($a->whooley_q2 == 0){
                echo 'No';
            }else{
                echo 'Yes';
            }
             ?>


        </td>
          <td align="center"><?php echo $a->whooley_q2;?></td>
      </tr>
    </tbody>
    <tfoot>
         <tr>
            <td colspan="2"></td>
            <td align="right">Total Score :</td>
            <td class="gray" align="center"><?php echo $a->whooley_score;?></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td align="right">Result :</td>
            <td class="gray" align="center"><?php echo $a->whooley_result;?></td>
        </tr>
    </tfoot>
    <?php endforeach;?>
  </table>
</div>
  <br>

  <footer>
      <hr>
      <h6>Pusat Kaunseling UPSI | PsyTest<span style="float:right">Report Generate : <?php echo date('Y-m-d h:i:s A'); ?></span></h6>
  </footer>

</body>
</html>