<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report PHQ9</title>

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
  <h6 align="center">Test Result: PHQ9</h6>
  <table width="100%">
    <?php foreach($gg as $g): ?>
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
        <td>Little interest or pleasure in doing things.</td>
        <td align="center">
            <?php if($g->phq_q1 == 0){
                echo 'Not at all';
            }elseif($g->phq_q1 == 1){
                echo 'Several days';
            }elseif($g->phq_q1 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
        <td align="center"><?php echo $g->phq_q1;?></td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>Feeling down, depressed or hopeless.</td>
          <td align="center">
            <?php if($g->phq_q2 == 0){
                echo 'Not at all';
            }elseif($g->phq_q2 == 1){
                echo 'Several days';
            }elseif($g->phq_q2 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q2;?></td>
      </tr>
      <tr>
          <th scope="row">3</th>
          <td>Trouble failing, or staying asleep, sleeping too much.</td>
          <td align="center">
            <?php if($g->phq_q3 == 0){
                echo 'Not at all';
            }elseif($g->phq_q3 == 1){
                echo 'Several days';
            }elseif($g->phq_q3 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q3;?></td>
      </tr>
      <tr>
          <th scope="row">4</th>
          <td>Feeling tired or having little energy.</td>
          <td align="center">
            <?php if($g->phq_q4 == 0){
                echo 'Not at all';
            }elseif($g->phq_q4 == 1){
                echo 'Several days';
            }elseif($g->phq_q4 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q4;?></td>
      </tr>
      <tr>
          <th scope="row">5</th>
          <td>Poor appetite or overeating.</td>
          <td align="center">
            <?php if($g->phq_q5 == 0){
                echo 'Not at all';
            }elseif($g->phq_q5 == 1){
                echo 'Several days';
            }elseif($g->phq_q5 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q5;?></td>
      </tr>
      <tr>
          <th scope="row">6</th>
          <td>Feeling bad about yourself or that you are a failure or have let yourself or your family down.</td>
          <td align="center">
            <?php if($g->phq_q6 == 0){
                echo 'Not at all';
            }elseif($g->phq_q6 == 1){
                echo 'Several days';
            }elseif($g->phq_q6 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q6;?></td>
      </tr>
      <tr>
          <th scope="row">7</th>
          <td>Trouble concentrating on things, such as reading the newspaper or watching television.</td>
          <td align="center">
            <?php if($g->phq_q1 == 0){
                echo 'Not at all';
            }elseif($g->phq_q1 == 1){
                echo 'Several days';
            }elseif($g->phq_q1 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
          <td align="center"><?php echo $g->phq_q1;?></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>Moving or speaking so slowly that other people could have noticed. Or the opposite, being so fidgety or restless that you have been moving around a lot more than usual.</td>
        <td align="center">
            <?php if($g->phq_q8 == 0){
                echo 'Not at all';
            }elseif($g->phq_q8 == 1){
                echo 'Several days';
            }elseif($g->phq_q8 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
        <td align="center"><?php echo $g->phq_q8;?></td>
    </tr>
    <tr>
        <th scope="row">9</th>
        <td>Thoughts that you would be better off dead or hurting yourself in some way.</td>
        <td align="center">
            <?php if($g->phq_q9 == 0){
                echo 'Not at all';
            }elseif($g->phq_q9 == 1){
                echo 'Several days';
            }elseif($g->phq_q9 == 2){
                echo 'More than half days';
            }else{
                echo 'Nearly every day';
            }
             ?>

        </td>
        <td align="center"><?php echo $g->phq_q9;?></td>
    </tr>
    </tbody>
    <tfoot>
         <tr>
            <td colspan="2"></td>
            <td align="right">Total Score :</td>
            <td class="gray" align="center"><?php echo $g->phq_score;?></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td align="right">Result :</td>
            <td class="gray" align="center"><?php echo $g->phq_result;?></td>
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