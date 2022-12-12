<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Report Template</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table, th, td {
      border: 1px solid black;
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
  <h5>Report Session <span style="float:right;">Date</span></h5>
  <hr>
  <br>
  <table width="100%">
    <tr>
        <td>
            <strong>Counselor :</strong> Nama Counselor<br><br>
            <strong>Client Name :</strong> Nama Client<br>
            <strong>Client ID :</strong> ID Client<br>
            <strong>Client Address :</strong> Address Client<br>
            <strong>Client Email :</strong> Email Client<br>
            <strong>Client Phone :</strong> Email Phone<br>
        </td>
    </tr>

  </table>

  <br/>
  <h6 align="center">Test Result: GAD7</h6>
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>No</th>
        <th>Question</th>
        <th>Answer</th>
        <th><?php echo $gg;?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Feeling nervous, anxious on edge.</td>
        <td align="center">Tidak pernah sama sekali</td>
        <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">2</th>
          <td>Not being able to stop or control worrying.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">3</th>
          <td>Worrying too much about different things.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">4</th>
          <td>Having trouble relaxing.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">5</th>
          <td>Feeling so restless that it is hard to sit still.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">6</th>
          <td>Being easily annoyed or irritable.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      <tr>
          <th scope="row">7</th>
          <td>Feeling afraid as if something awful might happen.</td>
          <td align="center">Tidak pernah sama sekali</td>
          <td align="center">0</td>
      </tr>
      
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"></td>
            <td align="right">Total Score :</td>
            <td class="gray" align="center">0</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td align="right">Result :</td>
            <td class="gray" align="center">None</td>
        </tr>
    </tfoot>
  </table>
</div>
  <br>

  <footer>
      <hr>
      <h6>Pusat Kaunseling UPSI | PsyTest<span style="float:right">Report Generate : date</span></h6>
  </footer>

</body>
</html>