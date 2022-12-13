<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report Clinical</title>

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
  <h6 align="center">Test Result: Clinical</h6>
  <table class="hk" width="100%">
    <thead class="gray">
        <tr>
            <th valign="center" rowspan="3">Date</th>
            <th valign="center" colspan="2">Whooley</th>
            <th valign="center" colspan="2">GAD7</th>
            <th valign="center" colspan="2">PHQ9</th>
            <th valign="center" colspan="6">DASS</th>
        </tr>
        <tr>
            <th valign="center" rowspan="2">Score</th>
            <th valign="center" rowspan="2">Result</th>
            <th valign="center" rowspan="2">Score</th>
            <th valign="center" rowspan="2">Result</th>
            <th valign="center" rowspan="2">Score</th>
            <th valign="center" rowspan="2">Result</th>
            <th valign="center" colspan="2">Depression</th>
            <th valign="center" colspan="2">Anxiety</th>
            <th valign="center" colspan="2">Stress</th>
        </tr>
        <tr>
            <th valign="center">Score</th>
            <th valign="center">Result</th>
            <th valign="center">Score</th>
            <th valign="center">Result</th>
            <th valign="center">Score</th>
            <th valign="center">Result</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($gg as $g):?>
            <td align="center"><?php echo $g->gad_session;?></td>
            <td align="center"><?php echo $g->whooley_score;?></td>
            <td align="center"><?php echo $g->whooley_result;?></td>
            <td align="center"><?php echo $g->gad_score;?></td>
            <td align="center"><?php echo $g->gad_result;?></td>
            <td align="center"><?php echo $g->phq_score;?></td>
            <td align="center"><?php echo $g->phq_result;?></td>
            <td align="center"><?php echo $g->depression_score;?></td>
            <td align="center"><?php echo $g->dass_depression;?></td>
            <td align="center"><?php echo $g->anxiety_score;?></td>
            <td align="center"><?php echo $g->dass_anxiety;?></td>
            <td align="center"><?php echo $g->stress_score;?></td>
            <td align="center"><?php echo $g->dass_stress;?></td>
            <?php endforeach;?>
        </tr>
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
