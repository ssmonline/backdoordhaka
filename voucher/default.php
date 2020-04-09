																																																												
<style>
	.qrcode{
		height:50px;
		width:50px;
	}
</style> 

<table class="voucher" style=" width: 170px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: left; font-size: 12px; font-weight:bold; border-bottom: 1px black solid;"><img src="<?= $logo; ?>" alt="logo" style="height:20px;border:0;">  <?= $hotspotname; ?>  <span id="num"><?= " [$num]"; ?></span></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 160px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td font-size: 12px;>Voucher Code</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:13px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
<!-- Check QR  -->
<?php if ($qr == "yes") { ?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} else { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 12px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
}
} ?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td>
	<?= $qrcode ?>
      </td>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 1px solid black;font-weight:bold; font-size:12px"><?= $validity; ?>   Active Unlimited</td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note  -->
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?= $dnsname; ?></td>
<!-- /  -->
    </tr>
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>
	        	        	        	        	        	        	        	        	        	        