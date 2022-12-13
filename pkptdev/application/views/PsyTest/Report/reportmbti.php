<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report mbti</title>

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
            <strong>Client Name :</strong>  <?php echo $pro['student_name'];?><br>
            <strong>Client ID :</strong>  <?php echo $pro['student_no'];?><br>
            <strong>Client Email :</strong>  <?php echo $pro['student_email'];?><br>
            <strong>Client Phone :</strong>  <?php echo $pro['student_phone'];?><br>
        </td>
    </tr>

  </table>

  <br/>
  <h6 align="center">Test Result: MBTI</h6>
  <table width="100%">
    <?php foreach($gg as $a):?>
    <thead style="background-color: lightgray;">
      <tr>
        <th></th>
        <th colspan="2">Col 1</th>
        <th></th>
        <th colspan="2">Col 2</th>
        <th></th>
        <th colspan="2">Col 3</th>
        <th></th>
        <th colspan="2">Col 4</th>
        <th></th>
        <th colspan="2">Col 5</th>
        <th></th>
        <th colspan="2">Col 6</th>
        <th></th>
        <th colspan="2">Col 7</th>
      </tr>
      <tr>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
        <th></th>
        <th>A</th>
        <th>B</th>
      </tr>
    </thead>
    <tbody align="center">
      <?php $count=0; $e = 0; $i = 0; $s1 = 0; $n1 = 0; $t1 = 0; $f1 = 0; $j1 = 0; $p1 = 0;$s2 = 0; $n2 = 0; $t2 = 0; $f2 = 0; $j2 = 0; $p2 = 0;?>
      <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q1 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q2 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q3 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q4 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q5 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q6 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q7 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q8 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q9 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q10 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q11 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q12 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q13 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q14 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q15 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q16 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q17 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q18 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q19 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q20 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q21 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q22 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q23 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q24 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q25 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q26 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q27 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q28 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q29 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q30 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q31 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q32 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q33 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q34 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q35 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q36 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q37 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q38 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q39 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q40 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q41 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q42 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q43 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q44 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q45 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q46 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q47 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q48 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q49 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q50 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q51 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q52 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q53 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q54 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q55 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q56 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q57 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q58 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q59 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q60 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q61 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q62 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q63 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q64 < 0){
              $e++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $i++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q65 < 0){
              $s1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q66 < 0){
              $s2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $n2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q67 < 0){
              $t1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q68 < 0){
              $t2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $f2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q69 < 0){
              $j1++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p1++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
          <td class="gray"><?php echo ++$count;?></td>
          <?php 
            if($a->mbti_q70 < 0){
              $j2++;
              echo '<td>/</td>';
              echo '<td></td>';
            }else{
              $p2++;
              echo '<td></td>';
              echo '<td>/</td>';
            }
          ?>
        </tr>
        <tr>
          <td></td>
          <td><?php echo $e;?></td>
          <td><?php echo $i;?></td>
          <td></td>
          <td><?php echo $s1;?></td>
          <td><?php echo $n1;?></td>
          <td></td>
          <td><?php echo $s2;?></td>
          <td><?php echo $n2;?></td>
          <td></td>
          <td><?php echo $t1;?></td>
          <td><?php echo $f1;?></td>
          <td></td>
          <td><?php echo $t2;?></td>
          <td><?php echo $f2;?></td>
          <td></td>
          <td><?php echo $j1;?></td>
          <td><?php echo $p1;?></td>
          <td></td>
          <td><?php echo $j2;?></td>
          <td><?php echo $p2;?></td>
        </tr>
        <tr>
          <td colspan="4"></td>
          <td colspan="2" align="center">copy to -></td>
          <td></td>
          <td><?php echo $s1+$s2;?></td>
          <td><?php echo $n1+$n2;?></td>
          <td></td>
          <td colspan="2" align="center">copy to -></td>
          <td></td>
          <td><?php echo $t1+$t2;?></td>
          <td><?php echo $f1+$f2;?></td>
          <td></td>
          <td colspan="2" align="center">copy to -></td>
          <td></td>
          <td><?php echo $j1+$j2;?></td>
          <td><?php echo $p1+$p2;?></td>
        </tr>
    </tbody>
    <br>
    <tfoot align="center">
      <tr class="gray" >
        <td colspan="1"></td>
        <td><?php echo $e?></td>
        <td><?php echo $i?></td>
        <td colspan="4"></td>
        <td><?php echo $s1+$s2;?></td>
        <td><?php echo $n1+$n2;?></td>
        <td colspan="4"></td>
        <td><?php echo $t1+$t2;?></td>
        <td><?php echo $f1+$f2;?></td>
        <td colspan="4"></td>
        <td><?php echo $j1+$j2;?></td>
        <td><?php echo $p1+$p2;?></td>
      </tr>
      <tr class="gray">
        <td colspan="1"></td>
        <td>E</td>
        <td>I</td>
        <td colspan="4"></td>
        <td>S</td>
        <td>N</td>
        <td colspan="4"></td>
        <td>T</td>
        <td>F</td>
        <td colspan="4"></td>
        <td>J</td>
        <td>P</td>
      </tr>
    </tfoot>
  </table>
  <br>
  <h4>Result : <?php echo $a->mbti_result;?> </h4>
    <?php endforeach?>
</div>
  <br>

  <footer>
      <hr>
      <h6>Pusat Kaunseling UPSI | PsyTest<span style="float:right">Report Generate :  <?php echo date('Y-m-d h:i:s A'); ?></span></h6>
  </footer>

</body>
</html>