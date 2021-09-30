<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report BAI</title>

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
  <h6 align="center">Test Result: BAI</h6>
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
        <td>I found it hard to wind down.</td>
        <td align="center">
            <?php if($a->bai_q1 == 0){
                echo 'Not at all';
            }elseif($a->bai_q1 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q1 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q1;?></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>I was aware of dryness of my mouth.</td>
        <td align="center">
            <?php if($a->bai_q2 == 0){
                echo 'Not at all';
            }elseif($a->bai_q2 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q2 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q2;?></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>I couldn't seem to experience any positive feeling at all.</td>
        <td align="center">
            <?php if($a->bai_q3 == 0){
                echo 'Not at all';
            }elseif($a->bai_q3 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q3 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q3;?></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>I experience breathing difficulty (e.g excessively rapid breathing, breathlessness in the absence of physical exertion).</td>
        <td align="center">
            <?php if($a->bai_q4 == 0){
                echo 'Not at all';
            }elseif($a->bai_q4 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q4 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q4;?></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>I found it difficult work up the initiative to do things.</td>
        <td align="center">
            <?php if($a->bai_q5 == 0){
                echo 'Not at all';
            }elseif($a->bai_q5 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q5 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q5;?></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>I tended to over-react to situations.</td>
        <td align="center">
            <?php if($a->bai_q6 == 0){
                echo 'Not at all';
            }elseif($a->bai_q6 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q6 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q6;?></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>I experienced trembling (e.g. in the hands).</td>
        <td align="center">
            <?php if($a->bai_q7 == 0){
                echo 'Not at all';
            }elseif($a->bai_q7 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q7 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q7;?></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>I felt that I was using a lot of nervous energy.</td>
        <td align="center">
            <?php if($a->bai_q1 == 0){
                echo 'Not at all';
            }elseif($a->bai_q1 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q1 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q1;?></td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td>I was worried about situations in which I might panic and make a fool of myself.</td>
        <td align="center">
            <?php if($a->bai_q9 == 0){
                echo 'Not at all';
            }elseif($a->bai_q9 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q9 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q9;?></td>
      </tr>
      <tr>
        <th scope="row">1<?php echo $a->bai_q1;?></th>
        <td>I felt that I had nothing to look forward to.</td>
        <td align="center">
            <?php if($a->bai_q10 == 0){
                echo 'Not at all';
            }elseif($a->bai_q10 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q10 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q10;?></td>
      </tr>
      <tr>
        <th scope="row">11</th>
        <td>I found myself getting agitated.</td>
        <td align="center">
            <?php if($a->bai_q11 == 0){
                echo 'Not at all';
            }elseif($a->bai_q11 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q11 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q11;?></td>
      </tr>
      <tr>
        <th scope="row">12</th>
        <td>I found it difficult to relax.</td>
        <td align="center">
            <?php if($a->bai_q12 == 0){
                echo 'Not at all';
            }elseif($a->bai_q12 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q12 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q12;?></td>
      </tr>
      <tr>
        <th scope="row">13</th>
        <td>I felt down-hearted and blue.</td>
        <td align="center">
            <?php if($a->bai_q13 == 0){
                echo 'Not at all';
            }elseif($a->bai_q13 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q13 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q13;?></td>
      </tr>
      <tr>
        <th scope="row">14</th>
        <td>I was intolerent of anything that kept me from getting on with what I was doing.</td>
        <td align="center">
            <?php if($a->bai_q14 == 0){
                echo 'Not at all';
            }elseif($a->bai_q14 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q14 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q14;?></td>
      </tr>
      <tr>
        <th scope="row">15</th>
        <td>I felt I was close to panic.</td>
        <td align="center">
            <?php if($a->bai_q15 == 0){
                echo 'Not at all';
            }elseif($a->bai_q15 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q15 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q15;?></td>
      </tr>
      <tr>
        <th scope="row">16</th>
        <td>I was unable to become enthusiastic about anything.</td>
        <td align="center">
            <?php if($a->bai_q16 == 0){
                echo 'Not at all';
            }elseif($a->bai_q16 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q16 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q16;?></td>
      </tr>
      <tr>
        <th scope="row">17</th>
        <td>I felt I wasn't worth much as a person.</td>
        <td align="center">
            <?php if($a->bai_q17 == 0){
                echo 'Not at all';
            }elseif($a->bai_q17 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q17 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q17;?></td>
      </tr>
      <tr>
        <th scope="row">18</th>
        <td>I felt that I was rather touchy.</td>
        <td align="center">
            <?php if($a->bai_q18 == 0){
                echo 'Not at all';
            }elseif($a->bai_q18 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q18 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q18;?></td>
      </tr>
      <tr>
        <th scope="row">19</th>
        <td>I was aware of the action of my heart in the absence of physical exertion (e.g. sense of heart rate increase, heart missing a beat).</td>
        <td align="center">
            <?php if($a->bai_q19 == 0){
                echo 'Not at all';
            }elseif($a->bai_q19 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q19 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q19;?></td>
      </tr>
      <tr>
        <th scope="row">2<?php echo $a->bai_q1;?></th>
        <td>I felt scared without any good reason.</td>
        <td align="center">
            <?php if($a->bai_q20 == 0){
                echo 'Not at all';
            }elseif($a->bai_q20 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q20 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q20;?></td>
      </tr>
      <tr>
        <th scope="row">21</th>
        <td>I felt that life was meaningless.</td>
        <td align="center">
            <?php if($a->bai_q21 == 0){
                echo 'Not at all';
            }elseif($a->bai_q21 == 1){
                echo "Mildly, but it didn't bother me much";
            }elseif($a->bai_q21 == 2){
                echo "Moderately - it wasn't pleasant at times";
            }else{
                echo "Severely - it bothered me a lot";
            }
             ?>

        </td>
        <td align="center"><?php echo $a->bai_q21;?></td>
      </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"></td>
            <td align="right"> Score :</td>
            <td class="gray" align="center"><?php echo $a->bai_score;?></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td align="right"> Result :</td>
            <td class="gray" align="center"><?php echo $a->bai_result;?></td>
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