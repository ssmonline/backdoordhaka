<?php
/*
 *  Copyright (C) 2019-2020 SSM Communication Ltd.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_start();
// hide all error
error_reporting(0);
if (!isset($_SESSION["ssmonline"])) {
  header("Location:../admin.php?id=login");
} else {
}
?>
<style>
.iFWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.iFWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
  height: 100%;
  border :none;
}
</style>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3><i class="fa fa-info-circle"></i> About</h3>
      </div>
      <div class="card-body">
        <h3>SSM-ONLINE V<?= $_SESSION['v']; ?></h3>
<p>
SSM-ONLINE Offline Version can't auto updated. If you need update version please contact SSM Communication Ltd. This application is dedicated to hotspot entrepreneurs. Hopefully more success.
</p>
<p>
  <ul>
    <li>
      Author : SSM Communication Ltd
    </li>
    <li>
      Licence : <a href="https://github.com/laksa19/ssmonlinev2/blob/master/LICENSE">GPLv2</a>
    </li>
    <li>
      API Class : <a href="https://github.com/BenMenking/routeros-api">routeros-api</a>
    </li>
    <li>
      Website : <a href="https://ssmbd.net">SSMBD.NET</a>
    </li>
	<li>
     Demo Application : <a href="https://demo.ssmbd.net">DEMO.SSMBD.NET</a>
    </li>
    <li>
      Facebook : <a href="https://fb.com/backdoordhaka">fb.com/backdoordhaka</a>
    </li>
  </ul>
</p>
<p>
 Thank you for all who have supported the development.
</p>
<p><i class="fa fa-youtube"; style="color:red;";></i> Software Guide & Step by Step Setup  <b><a href="https://youtu.be/4X55WHoNBXA" target="_blank" style="color:blue;";> Video Tutorial</a></b></p>
<div>
    <p><h2> &#187; Copyright Notice &#171;</h2></p>
	<p>আপনি কখনই কপিরাইট আইন ভঙ্গ করবেন না । এই সফটওয়্যার কোনো এডিট বা পরিবর্তন করতে চাইলে অবশ্যই সফটওয়্যার কোম্পানিকে অবহিত করতে হবে।   নয়ত কোন সমস্যা হলে কর্তৃপক্ষ দায়ী থাকবে না। কখনো ইনার লাইন টেক্সট (SSMONLINE) পরিবর্তন করতে পারবেন না।  সফটওয়্যার ক্রয়ের পূর্বে বিক্রয়ের <b><a href="https://www.ssmbd.net/terms-and-conditions/" target="_blank" style="color:red;"> টার্মস এন্ড কন্ডিশন </a></b> দেখে নিবেন ।  </p>
	<p>You will never break copyright laws. If you want to make any edit or change of this software, you must notify the software company. Otherwise, the authorities will not be responsible for any problems. Never change in Hotspot System Inner line text (SSMONLINE). Before buying the software, you should check the <b><a href="https://www.ssmbd.net/terms-and-conditions/" target="_blank" style="color:red;">terms and conditions</a></b> of the sale. </p>
	
	<i><b>Copyright &copy; <i> 2019 <a href="https://www.ssmbd.net/privacypolicy/" target="_blank" style="color:blue;"> SSM Communication Ltd</a>, Kaderabad Housing, Mohammadpur, Dhaka, Bangladesh. 24/7 Support: Call +88019-18-388-377 (Whatsapp)</b></i></i>
</div>
</div>
</div>
</div>

</div>
